<x-layouts.frontend title="{{ $competition->name }}" description="{{ $competition->description }}">
    <div class="container mt-5 d-flex justify-space-between gap-5">
        <img src="{{ asset($competition->poster) }}" class="img-fluid" alt="{{ $competition->name }}" style="width: 70%">
        <div class="information">
            <h1 class="text-primary">{{ $competition->name }}</h1>
            <p class="text-muted m-0">Biaya Pendaftaran: {{ $competition->registration_fee_rupiah }}</p>
            <p class="text-muted m-0">Level: {{ $competition->level }}</p>
            <div class="d-flex justify-content-between align-items-center gap-3">
                <a href="{{ route('register') }}" class="btn btn-primary mt-3">
                    Daftar Kompetisi
                </a>
                <a href="{{ asset($competition->guidebook) }}" class="btn btn-secondary mt-3">
                    Guidebook
                </a>
            </div>
            <hr>
            {!! $competition->description !!}
        </div>
    </div>
</x-layouts.frontend>
