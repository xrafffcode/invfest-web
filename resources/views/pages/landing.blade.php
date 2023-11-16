<x-layouts.frontend title="{{ getWebConfiguration()->title }}" description="{{ getWebConfiguration()->description }}">
    <div class="container mt-5">
        <x-frontend.card.hero />
    </div>
    <div class="container py-5" id="competition">
        <h2 class="text-center text-primary">Kompetisi</h2>
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
</x-layouts.frontend>
