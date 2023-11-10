<x-layouts.auth title="Daftar">
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper"
                                style="background-image: url({{ asset('admin/assets/images/internship-rendi-photo-backend.png') }})">
                            </div>
                        </div>
                        <div class="col-md-8 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#"
                                    class="noble-ui-logo d-block mb-2">{{ getWebConfiguration()->title }}</a>
                                <h5 class="text-muted fw-normal mb-4">Silahkan isi form berikut untuk mendaftar</h5>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <x-input.email name="email" value="" />
                                    <x-input.password name="password" value="" label="Password" />


                                    <x-button.primary class="w-100 mb-3" type="submit">
                                        Masuk
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
