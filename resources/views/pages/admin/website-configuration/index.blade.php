<x-layouts.admin title="Konfigurasi Web">
    <div class="d-flex align-items-center justify-content-between">
        <nav class="page-breadcrumb mb-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manajemen Website</a></li>
                <li class="breadcrumb-item active" aria-current="page">Konfigruasi</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <x-admin.card title="Data Konfigurasi">
                <form action="{{ route('admin.website-configuration.update', $webConfiguration->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h5 class="mb-3">Konfigurasi Umum</h5>
                            <x-input.text name="title" label="Title Website" value="{{ $webConfiguration->title }}" />
                            <x-input.text name="heading" label="Heading Website"
                                value="{{ $webConfiguration->heading }}" />
                            <x-input.textarea name="description" label="Deskripsi Website"
                                value="{{ $webConfiguration->description }}" />
                            <img src="{{ asset($webConfiguration->nav_logo) }}" alt="{{ $webConfiguration->title }}"
                                class="img-fluid mb-3">
                            <x-input.file name="nav_logo" label="Logo Navigasi"
                                value="{{ $webConfiguration->nav_logo }}" />
                            <img src="{{ asset($webConfiguration->footer_logo) }}" alt="{{ $webConfiguration->title }}"
                                class="img-fluid mb-3">
                            <x-input.file name="footer_logo" label="Logo Footer"
                                value="{{ $webConfiguration->footer_logo }}" />
                            <x-input.text name="footer_description" label="Deskripsi Footer"
                                value="{{ $webConfiguration->footer_description }}" />
                            <x-input.text name="footer_copyrigth" label="Copyrigth Footer"
                                value="{{ $webConfiguration->footer_copyrigth }}" />
                            <h5 class="mb-3">Konfigurasi Kontak</h5>
                            <x-input.text name="phone" label="Nomor Telepon"
                                value="{{ $webConfiguration->phone }}" />
                            <x-input.text name="email" label="Email" value="{{ $webConfiguration->email }}" />
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <h5 class="mb-3">Konfigurasi Event</h5>
                            <x-input.date name="deadline" label="Deadline Event"
                                value="{{ $webConfiguration->deadline }}" value="{{ $webConfiguration->deadline }}" />
                            <img src="{{ asset($webConfiguration->twibbon) }}" alt="{{ $webConfiguration->title }}"
                                class="img-fluid mb-3" width="200">
                            <x-input.file name="twibbon" label="Twibbon Event"
                                value="{{ $webConfiguration->twibbon }}" />
                            <x-input.text name="twibbon_link" label="Link Twibbon"
                                value="{{ $webConfiguration->twibbon_link }}" />
                            <img src="{{ asset($webConfiguration->mascot) }}" alt="{{ $webConfiguration->title }}"
                                class="img-fluid mb-3" width="200">
                            <x-input.file name="mascot" label="Mascot Event"
                                value="{{ $webConfiguration->mascot }}" />
                            <h5 class="mb-3">Konfigurasi Tema</h5>
                            <x-input.text name="primary_color" label="Warna Utama"
                                value="{{ $webConfiguration->primary_color }}" />
                            <x-input.text name="secondary_color" label="Warna Sekunder"
                                value="{{ $webConfiguration->secondary_color }}" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </x-admin.card>
        </div>
    </div>
</x-layouts.admin>
