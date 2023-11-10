<div class="card">
    <div class="card-body">
        <h2 class="text-center">Apa itu {{ getWebConfiguration()->title }}?</h2>
        <div class="d-flex justify-content-between align-items-center">
            <div class="information">
                {!! getWebConfiguration()->description !!}
            </div>
            <img src="{{ asset(getWebConfiguration()->mascot) }}" alt="mascot" class="mascot-image">
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <img src="{{ asset(getWebConfiguration()->twibbon) }}" alt="twibbon" class="twibbon-image">
            <div class="information">
                <h5>Hello Developer Muda, Mari kita berpartisipasi dengan menggunakan Twibon dari kami dengan cara unduh
                    Twibon dibawah ini dan posting di media sosial beserta caption yang sudah disediakan. Jangan lupa
                    tag kami!</h5>
                <a href="{{ asset(getWebConfiguration()->twibbon_link) }}" class="btn btn-primary btn-block">
                    Unduh Twibbon
                </a>
                <a href="" class="btn btn-primary btn-block">
                    Video Tutorial
                </a>
            </div>
        </div>
    </div>
</div>
