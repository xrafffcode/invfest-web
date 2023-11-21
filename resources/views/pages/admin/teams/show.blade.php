<x-layouts.admin title="{{ $team->name }}">
    @push('plugin-styles')
        <link rel="stylesheet" href="{{ asset('admin/assets/plugins/lightbox/css/lightbox.css') }}">
    @endpush


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tim Peserta</a></li>
                <li class="breadcrumb-item active">{{ $team->team_name }}</li>
            </ol>
        </nav>
        <a href="{{ route('admin.team.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="{{ $team->team_name }}">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <tr>
                                <th>Nama Tim</th>
                                <td>{{ $team->team_name }}</td>
                            </tr>
                            <tr>
                                <th>Asal Instansi</th>
                                <td>{{ $team->institution }}</td>
                            </tr>
                            <tr>
                                <th>Nama Ketua</th>
                                <td>{{ $team->leader_name }}</td>
                            </tr>
                            <tr>
                                <th> Kartu Pelajar / Mahasiswa Ketua</th>
                                <td>
                                    <a href="{{ asset($team->leader_card) }}" data-lightbox="image-1"
                                        data-title="Kartu Identitas {{ $team->leader_name }}">
                                        Kartu Pelajar / Mahasiswa
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>Email Ketua</th>
                                <td>{{ $team->user->email }}</td>
                            </tr>
                            <tr>
                                <th>No. HP Ketua</th>
                                <td>{{ $team->leader_phone }}</td>
                            </tr>
                            <tr>
                                <th>Anggota</th>
                                <td>
                                    <ul>
                                        @foreach ($team->members as $member)
                                            <li>
                                                {{ $member->name ?? 'Tidak Ada' }} <a
                                                    href="{{ asset($member->card) }}" data-lightbox="image-1"
                                                    data-title="Kartu Identitas {{ $member->name }}">
                                                    Kartu Pelajar / Mahasiswa
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            @if ($team->level == 'sma/smk')
                                <tr>
                                    <th>Nama Pembimbing</th>
                                    <td>{{ $team->companion_name }}</td>
                                </tr>
                                <tr>
                                    <th>Kartu Identitas Pembmbing</th>
                                    <td>
                                        <a href="{{ asset($team->companion_card) }}" data-lightbox="image-1"
                                            data-title="Kartu Identitas {{ $team->companion_name }}">
                                            Kartu Identitas Pembimbing
                                        </a>
                                    </td>
                                </tr>
                            @endif
                            <tr>
                                <th>Metode Pembayaran</th>
                                <td>
                                    {{ $team->payment->paymentMethod->name ?? '' }} -
                                    {{ $team->payment->paymentMethod->number ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th>Bukti Pembayaran</th>
                                <td>
                                    <a href="{{ asset($team->payment->proof ?? '') }}" data-lightbox="image-1"
                                        data-title="Bukti Pembayaran {{ $team->name }}">
                                        <img src="{{ asset($team->payment->proof ?? '') }}" alt="Bukti Pembayaran"
                                            class="img-table-lightbox" width="100">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if ($team->status == 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($team->status == 'accepted')
                                        <span class="badge bg-success">Diterima</span>
                                    @else
                                        <span class="badge bg-danger">Ditolak</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <x-slot name="footer">
                    @if ($team->status == 'pending')
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('admin.team.update', $team->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="accepted">
                                <input type="hidden" name="email" value="{{ $team->user->email }}">
                                <input type="hidden" name="whatsapp_link"
                                    value="{{ $team->competition->whatsapp_group_link }}">
                                <button class="btn btn-success btn-sm"
                                    onclick="return confirm('Apakah anda yakin ingin menerima tim ini?')">Terima</button>
                            </form>
                            <form action="{{ route('admin.team.update', $team->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="rejected">
                                <input type="hidden" name="email" value="{{ $team->user->email }}">
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah anda yakin ingin menolak tim ini?')">Tolak</button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('admin.team.index') }}" class="btn btn-danger btn-sm">Kembali</a>
                    @endif
                </x-slot>
            </x-admin.card>
        </div>
    </div>

    @push('plugin-scripts')
        <script src="{{ asset('admin/assets/plugins/lightbox/js/lightbox-plus-jquery.min.js') }}"></script>

        <script>
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            })
        </script>
    @endpush
</x-layouts.admin>
