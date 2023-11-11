<x-layouts.admin title="Tambah Prestasi">


    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Kompetisi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>

            </ol>
        </nav>
        <a href="{{ route('admin.competition.index') }}" class="btn btn-danger btn-sm ml-auto mb-3">Kembali</a>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Tambah Kompetisi">
                <form action="{{ route('admin.competition.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input.text label="Nama Kompetisi" name="name" />
                    <x-input.select label="Tingkat" name="level">
                        <option value="sma/smk">SMA/SMK</option>
                        <option value="mahasiswa">Mahasiswa</option>
                    </x-input.select>
                    <x-input.textarea label="Deskripsi" name="description" />
                    <x-input.file label="Poster" name="poster" />
                    <x-input.file label="Guide Book" name="guidebook" />

                    <x-button.primary class="float-end" type="submit">
                        Simpan
                    </x-button.primary>
                </form>
            </x-admin.card>
        </div>
    </div>


</x-layouts.admin>
