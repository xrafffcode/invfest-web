<x-layouts.auth title="Pembayaran">
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-6 col-xl-5 mx-auto">
                <div class="card">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-12 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">Daftar Member Tim
                                    {{ Auth::user()->teams->first()->team_name }}
                                </a>
                                <h5 class="text-muted fw-normal mb-4">
                                    Isi data dengan benar, tidak bisa diubah kembali
                                </h5>
                                <form action="{{ route('team-members.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <x-input.text label="Anggota 1" name="member_1" placeholder="Nama Lengkap"
                                        value="{{ old('member_1') }}" />
                                    <x-input.file label="Kartu Pelajar/KTM Anggota 1" name="ktm_1" />
                                    <x-input.text label="Anggota 2" name="member_2" placeholder="Nama Lengkap"
                                        value="{{ old('member_2') }}" />
                                    <x-input.file label="Kartu Pelajar/KTM Anggota 2" name="ktm_2" />
                                    <x-button.primary class="w-100 mb-3" type="submit">
                                        Lanjutkan ke Pembayaran
                                    </x-button.primary>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.auth>
