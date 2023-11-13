<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StorePaymentMethodRequest;
use App\Interfaces\PaymentMethodRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class PaymentMethodController extends Controller
{

    /**
     * @var PaymentMethodRepositoryInterface
     */
    private PaymentMethodRepositoryInterface $paymentMethodRepository;

    /**
     * PaymentMethodController constructor.
     */
    public function __construct(PaymentMethodRepositoryInterface $paymentMethodRepository)
    {
        $this->paymentMethodRepository = $paymentMethodRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentMethods = $this->paymentMethodRepository->getAllPaymentMethods();

        return view('pages.admin.payment-methods.index', compact('paymentMethods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.payment-methods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentMethodRequest $request)
    {
        $this->paymentMethodRepository->createPaymentMethod($request->all());

        Swal::toast('Metode pembayaran berhasil ditambahkan', 'success');

        return redirect()->route('admin.payment-method.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paymentMethod = $this->paymentMethodRepository->getPaymentMethodById($id);

        return view('pages.admin.payment-methods.edit', compact('paymentMethod'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->paymentMethodRepository->updatePaymentMethod($request->all(), $id);

        Swal::toast('Metode pembayaran berhasil diperbarui', 'success');

        return redirect()->route('admin.payment-method.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->paymentMethodRepository->deletePaymentMethod($id);

        Swal::toast('Metode pembayaran berhasil dihapus', 'success');

        return redirect()->route('admin.payment-method.index');
    }
}
