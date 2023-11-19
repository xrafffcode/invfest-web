<x-layouts.frontend title="{{ getWebConfiguration()->title }}" description="{{ getWebConfiguration()->description }}">
    <div class="container mt-5">
        <x-frontend.card.hero />
    </div>
    <div class="container py-5" id="competition">
        <h2 class="text-center mb-5" style="color: var(--secondary)">kompetisi</h2>
        <div class="row justify-content-center">
            @foreach ($competitions as $competition)
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <x-frontend.card.competition :competition="$competition" />
                </div>
            @endforeach
        </div>
    </div>
    <div class="container py-5">
        <x-frontend.card.information />
    </div>
    <div id="timeline" class="container py-5">
        <x-frontend.timeline :timelines="$timelines" />
    </div>
    <div id="media-partner" class="container-fluid py-5">
        <h2 class="text-center mb-5 text-white text-uppercase fw-bold">Media Partner</h2>
        <x-frontend.card.media-partner :partners="$partners" />
    </div>
</x-layouts.frontend>
