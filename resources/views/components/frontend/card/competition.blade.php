<div class="card card-competition">
    <div class="position-relative">
        <img src="{{ asset($competition->poster) }}" class="card-img-top p-3" alt="{{ $competition->name }}">
        <div class="position-absolute top-0 end-0 p-3">
            <span class="badge bg-secondary badge-competition">
                @if ($competition->level == 'sma/smk')
                    SMA
                @elseif ($competition->level == 'mahasiswa')
                    Mahasiswa
                @endif
            </span>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $competition->name }}</h5>
    </div>
    <div class="card-footer">
        <a href="" class="btn btn-secondary btn-block">
            Lihat Detail
        </a>
    </div>
</div>
