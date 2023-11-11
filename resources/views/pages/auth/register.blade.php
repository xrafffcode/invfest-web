<x-layouts.auth title="Daftar">
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-12 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#"
                                    class="noble-ui-logo d-block mb-2">{{ getWebConfiguration()->title }}</a>
                                <h5 class="text-muted fw-normal mb-4">Silahkan isi form berikut untuk mendaftar</h5>
                                <form action="{{ route('register.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <x-input.select name="competition_id" label="Kompetisi">
                                        <option value="">Pilih Kompetisi</option>
                                        @foreach ($competitions as $competition)
                                            <option value="{{ $competition->id }}">
                                                {{ $competition->name }}
                                            </option>
                                        @endforeach
                                    </x-input.select>
                                    <x-input.select name="level" label="Tingkat" id="level">
                                        <option value="">Pilih Tingkat</option>
                                        <option value="sma/smk">SMA/SMK</option>
                                        <option value="kuliah">Mahasiswa</option>
                                    </x-input.select>
                                    <x-input.text name="team_name" label="Nama Tim" />
                                    <x-input.text name="institution" label="Asal Institusi" />
                                    <x-input.text name="leader_name" label="Nama Ketua" />
                                    <x-input.text name="leader_phone" label="Nomor Telepon Ketua" />
                                    <x-input.file name="leader_card" label="Kartu Identitas Ketua" />
                                    <x-input.text name="companion_name" label="Nama Pendamping" id="companion_name" />
                                    <x-input.file name="companion_card" label="Kartu Identitas Pendamping"
                                        id="companion_card" />
                                    <x-input.text name="email" label="Email" type="email" />
                                    <x-input.text name="password" label="Password" type="password" />
                                    <x-button.primary class="w-100 mb-3" type="submit">
                                        Daftar Tim
                                    </x-button.primary>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('custom-scripts')
        <script>
            $('#companion_name').parent().hide();
            $('#companion_card').parent().hide();

            $('#level').change(function() {
                if ($(this).val() == 'sma/smk') {
                    $('#companion_name').parent().show();
                    $('#companion_card').parent().show();
                } else {
                    $('#companion_name').parent().hide();
                    $('#companion_card').parent().hide();
                }
            });
        </script>
    @endpush
</x-layouts.auth>