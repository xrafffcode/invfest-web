<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\StorePaymentRequest;
use App\Interfaces\CompetitionRepositoryInterface;
use App\Interfaces\PaymentMethodRepositoryInterface;
use App\Interfaces\PaymentRepositoryInterface;
use App\Interfaces\RegisterTeamRepositoryInterface;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class RegisterController extends Controller
{
    /**
     * The competition repository interface implementation.
     *
     * @var CompetitionRepositoryInterface
     * @var RegisterTeamRepositoryInterface
     * @var PaymentMethodRepositoryInterface
     * @var PaymentRepositoryInterface
     */
    private CompetitionRepositoryInterface $competitionRepository;
    private RegisterTeamRepositoryInterface $registerTeamRepository;
    private PaymentMethodRepositoryInterface $paymentMethodRepository;
    private PaymentRepositoryInterface $paymentRepository;

    /**
     * Create a new controller instance.
     *
     * @param CompetitionRepositoryInterface $competitionRepository
     * @param RegisterTeamRepositoryInterface $registerTeamRepository
     * @param PaymentMethodRepositoryInterface $paymentRepository
     * @param PaymentRepositoryInterface $paymentMethodRepository
     */
    public function __construct(CompetitionRepositoryInterface $competitionRepository, RegisterTeamRepositoryInterface $registerTeamRepository, PaymentMethodRepositoryInterface $paymentMethodRepository, PaymentRepositoryInterface $paymentRepository)
    {
        $this->competitionRepository = $competitionRepository;
        $this->registerTeamRepository = $registerTeamRepository;
        $this->paymentMethodRepository = $paymentMethodRepository;
        $this->paymentRepository = $paymentRepository;
    }

    /**
     * Show the register page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $competitions = $this->competitionRepository->getAllCompetitions();

        return view('pages.auth.register', compact('competitions'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $this->registerTeamRepository->registerTeam($request->all());

        return redirect()->route('team-members');
    }

    /**
     * Show the payment page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function payment()
    {
        $paymentMethods = $this->paymentMethodRepository->getAllPaymentMethods();

        if (Auth::user()->teams->first()->payment != null) {
            Swal::toast('Pembayaran sudah dilakukan, silahkan menunggu konfirmasi dari admin', 'success');

            return redirect()->route('team.dashboard');
        }

        return view('pages.auth.payment', compact('paymentMethods'));
    }

    /**
     * Handle an incoming payment request.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function paymentStore(StorePaymentRequest $request)
    {
        $this->paymentRepository->createPayment($request->all());

        Swal::toast('Pembayaran berhasil, silahkan menunggu konfirmasi dari admin', 'success');

        return redirect()->route('login');
    }

    public function teamMember()
    {
        return view('pages.auth.team-member');
    }

    public function teamMemberStore(Request $request)
    {
        $data = $request->all();

        $data['team_id'] = Auth::user()->teams->first()->id;

        for ($i = 1; $i < 3; $i++) {
            $propertyName = "member_{$i}";
            $propertyCard = "ktm_{$i}";

            $data[$propertyName] = $request->input($propertyName);
            $data[$propertyCard] = $request->file($propertyCard);

            TeamMember::create([
                'team_id' => $data['team_id'],
                'name' => $data[$propertyName],
                'card' => $data[$propertyCard],
            ]);
        }

        Swal::toast('Pendaftaran berhasil, silahkan melakukan pembayaran untuk menyelesaikan pendaftaran', 'success');


        return redirect()->route('payment-team');
    }
}
