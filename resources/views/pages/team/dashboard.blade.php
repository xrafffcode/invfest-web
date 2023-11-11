<x-layouts.dashboard-team title="Dashboard Tim {{ Auth::user()->teams->first()->team_name }}">
    @if (Auth::user()->teams->first()->status == 'pending')
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle"></i>
            Tim anda sedang dalam proses verifikasi oleh admin. Silahkan menunggu. <a
                href="{{ 'https://api.whatsapp.com/send/?phone=' . getWebConfiguration()->phone . '&text=' . urlencode('Halo, saya ingin menanyakan status verifikasi tim saya.') }}"
                target="_blank" class="alert-link">Hubungi
                Admin</a>
        </div>
    @else
        <h5>Data Tim</h5>
        <x-input.text label="Nama Tim" value="{{ Auth::user()->teams->first()->team_name }}" readonly />
        <x-input.text label="Asal Instansi" value="{{ Auth::user()->teams->first()->institution }}" readonly />
        <x-input.text label="Tingkat" value="{{ Auth::user()->teams->first()->level }}" readonly />
        <x-input.text label="Kompetisi" value="{{ Auth::user()->teams->first()->competition->name }}" readonly />
        <x-input.text label="Tanggal Daftar" value="{{ Auth::user()->teams->first()->created_at->format('d F Y') }}"
            readonly />
        <div class="mb-3 d-flex flex-column">
            <label class="form-label">Bukti Pembayaran</label>
            <img src="{{ asset(Auth::user()->teams->first()->payment->proof) }}" alt="Bukti Pembayaran"
                class="img-fluid rounded" style="max-height: 300px; max-width: 300px;">
        </div>
        @foreach (Auth::user()->teams->first()->members as $member)
            <h6>Member {{ $loop->iteration }}</h6>
            <x-input.text label="Nama" value="{{ $member->name }}" readonly />
        @endforeach
    @endif


</x-layouts.dashboard-team>
