<div class="card card-hero">
    <div class="card-body p-4 text-white">
        <h2 class="text-center">
            {{ getWebConfiguration()->title }}
        </h2>
        <div class="d-flex justify-content-between align-items-center">
            <div class="information">
                <h2>
                    {{ getWebConfiguration()->heading }}
                </h2>
                <div class="d-flex gap-3 mt-4">
                    <a href="#guidebook" class="btn btn-outline-light btn-rounded">
                        <i class="fas fa-book"></i>
                        Guidebook
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-rounded">
                        <i class="fas fa-user-plus"></i>
                        Daftar
                    </a>
                </div>
            </div>
            <img src="{{ asset(getWebConfiguration()->mascot) }}" alt="mascot" class="mascot-image">
        </div>
    </div>
</div>
