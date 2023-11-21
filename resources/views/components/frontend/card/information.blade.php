<div class="card border-0 card-information" id="detail">
    <div class="card-body p-0 bg-secondary rounded-4">
        <h2 class="text-center px-3 py-5 text-white mb-0 text-uppercase fw-bold ">
            {{ sprintf('Apa itu %s?', getWebConfiguration()->title) }}
        </h2>
        <div class="d-flex description justify-content-between align-items-center bg-primary text-white p-4  gap-5">
            <div class="information align-self-start p-4">
                <p class="info-desc">{!! getWebConfiguration()->description !!}</p>
                <br>
                <a href="{{ route('register') }}" class="btn btn-secondary btn-secondary mt-3  px-5">
                    Daftar
                </a>
                <button type="button" class="btn border border-1 border-white text-white mt-3  px-5"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-video"></i>
                    Tutorial Pendaftaran
                </button>
            </div>
            <img src="{{ asset(getWebConfiguration()->mascot) }}" alt="mascot" class="mascot-image">
        </div>
        <div class="d-flex twibbon justify-content-between align-items-center bg-primary text-white p-4 gap-5"
            style="border-radius: 0 0 1rem 1rem;">
            <img src="{{ asset(getWebConfiguration()->twibbon) }}" alt="twibbon" class="twibbon-image">
            <div class="information p-4">
                <h3 class="text-uppercase fw-bold">{{ sprintf('Twibbon %s', getWebConfiguration()->title) }}</h3>
                <p class="info-desc mb-5">Hello Developer Muda, Mari kita berpartisipasi dengan menggunakan Twibon dari
                    kami dengan cara <b>unduh
                        Twibon dibawah</b> ini dan posting di media sosial beserta caption yang sudah disediakan. Jangan
                    lupa
                    <b>tag kami!</b>
                </p>
                <div class="d-flex gap-4">
                    <a href="{{ asset(getWebConfiguration()->twibbon_link) }}"
                        class="btn btn-sm btn-rounded border border-1 border-primary text-white">
                        Unduh Twibbon
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close float-end mb-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <iframe width="100%" height="500px"
                    src="https://www.youtube.com/embed/o1Va6qr3HHc?si=C2Xqh5U55O_5vTEa" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
