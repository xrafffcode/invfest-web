<x-layouts.admin title="Tim Peserta">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">Tim Peserta</a></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tim Peserta">
                <x-admin.datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Lomba</th>
                            <th>Tingkat</th>
                            <th>Nama Tim</th>
                            <th>Asal Instansi</th>
                            <th>Nama Ketua</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $team->competition->name }}</td>
                                <td>{{ $team->level }}</td>
                                <td>{{ $team->team_name }}</td>
                                <td>{{ $team->institution }}</td>
                                <td>{{ $team->leader_name }}</td>
                                <td>
                                    @if ($team->payment != null && $team->payment->proof != null)
                                        <img src="{{ asset($team->payment->proof) }}" alt="Bukti Pembayaran"
                                            class="img-table-lightbox" width="100">
                                    @else
                                        <span>Belum Bayar</span>
                                    @endif

                                </td>
                                <td>
                                    @if ($team->status == 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($team->status == 'accepted')
                                        <span class="badge bg-success">Diterima</span>
                                    @else
                                        <span class="badge bg-danger">Ditolak</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.team.show', $team->id) }}"
                                        class="btn btn-primary btn-sm">Detail</a>
                                    <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-admin.datatable>
            </x-admin.card>
        </div>
    </div>

    @push('plugin-scripts')
    @endpush
</x-layouts.admin>
