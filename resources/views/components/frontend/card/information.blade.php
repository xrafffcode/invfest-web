<div class="card border-0 card-information" id="detail">
    <div class="card-body p-0">
        <h2 class="text-center bg-secondary p-3 text-white mb-0">Apa itu {{ getWebConfiguration()->title }}?</h2>
        <div class="d-flex description justify-content-between align-items-center bg-primary text-white p-4  gap-5">
            <div class="information">
                {!! getWebConfiguration()->description !!}
                <br>
                <a href="{{ route('register') }}" class="btn btn-secondary btn-secondary mt-3">
                    Daftar Sekarang
                </a>
            </div>
            <img src="{{ asset(getWebConfiguration()->mascot) }}" alt="mascot" class="mascot-image">
        </div>
        <div class="d-flex twibbon justify-content-between align-items-center bg-primary text-white p-4 gap-5">
            <img src="{{ asset(getWebConfiguration()->twibbon) }}" alt="twibbon" class="twibbon-image">
            <div class="information">
                <h5>Hello Developer Muda, Mari kita berpartisipasi dengan menggunakan Twibon dari kami dengan cara unduh
                    Twibon dibawah ini dan posting di media sosial beserta caption yang sudah disediakan. Jangan lupa
                    tag kami!</h5>
                <a href="{{ asset(getWebConfiguration()->twibbon_link) }}" class="btn btn-secondary mt-3">
                    Unduh Twibbon
                </a>
            </div>
        </div>
    </div>
</div>
