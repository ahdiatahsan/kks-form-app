<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 6</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 6</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Transportasi Dan Tertib Lalu Lintas Jalan</span>
                </li>
            </x-slot>

            <x-slot name="backbutton">
                <!--begin::Button-->
                <a href="{{ route('tatanan-menu') }}" class="btn btn-sm btn-light-primary fw-bolder">
                    <span class="svg-icon svg-icon-muted svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z"
                                fill="black" />
                            <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z"
                                fill="black" />
                        </svg></span> Menu
                </a>
                <!--end::Button-->
            </x-slot>
        </x-dashboard.toolbar.main>
    </x-slot>
    {{-- End::Toolbar component --}}

    {{-- Start::Post component --}}
    <x-slot name="post">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Form-->
                <div class="mx-auto mw-1000px w-100 pt-5 pb-5">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                        <!--begin::Heading-->
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">I. Komitmen Pemerintah Daerah
                                Terhadap Akses Lalu Lintas Dan Transportasi
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.1 Regulasi Daerah</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        1. Adanya regulasi/kebijakan terkait penyediaan layanan transportasi publik
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p1"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p1"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p1_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p1_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        2. Adanya regulasi/kebijakan terkait kawasan tertib lalu lintas
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p2_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p2_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        3. Adanya regulasi/kebijakan terkait sistem manajemen keselamatan lalu lintas
                                        dan
                                        angkutan jalan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p3_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p3_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        4. Adanya regulasi/kebijakan terkait analisis dampak lalu lintas
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p4_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p4_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.2 Perencanaan Daerah</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        5. Penyediaan layanan transportasi publik dan kawasan tertib lalu lintas masuk
                                        ke
                                        dalam dokumen perencanaan pembangunan daerah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="a,100">
                                                <label class="form-check-label">a. Masuk dalam RPJMD dan RKPD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="b,50">
                                                <label class="form-check-label">b. Masuk dalam RPJMD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="c,25">
                                                <label class="form-check-label">c. Masuk dalam RKPD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak masuk satu pun
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p5_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p5_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">II. Pelayanan Angkutan Umum
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.1 Persyaratan Kendaraan Umum Yang
                                Bersih Dan Higienis Serta Bebas Rokok</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        6. Persentase implementasi protokol kesehatan dalam angkutan umum
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="c,25">
                                                <label class="form-check-label">c. 25 - 50 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 25% </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p6_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p6_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.2 Persyaratan Kendaraan Laik
                                Jalan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        7. Persentase kendaraan umum yang laik jalan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80% dari jumlah kendaraan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80% dari jumlah kendaraan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% dari jumlah kendaraan </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p7_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p7_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        8. Persentase kendaraan umum yang memiliki BLUe (Bukti Lulus Uji Elektronik)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80% dari jumlah kendaraan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80% dari jumlah kendaraan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% dari jumlah kendaraan </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak menerapkan BLUe
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p8_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p8_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        9. Adanya bengkel pemantau emisi gas buang
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dari pemerintah, swasta dan
                                                    terakreditasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada dari pemerintah/swasta dan
                                                    terakreditasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="c,25">
                                                <label class="form-check-label">c. Ada dari pemerintah/swasta namun
                                                    tidak
                                                    terakreditasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p9_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p9_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.3 Jaminan Keselamatan Angkutan
                                Barang Dan Orang</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        10. Persentase penurunan tingkat fatalitas akibat kecelakaan setahun terakhir
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 62%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="b,50">
                                                <label class="form-check-label">b. 60-61%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="c,0">
                                                <label class="form-check-label">c. < 60% </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p10_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p10_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        11. Santunan akibat kecelakaan sebagai dampak kecelakaan lalu lintas setahun
                                        terakhir
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="a,100">
                                                <label class="form-check-label">a. Seluruh korban mendapatkan santunan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="b,50">
                                                <label class="form-check-label">b. Sebagian korban mendapatkan santunan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada korban yang mendapatkan
                                                    santunan
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p11_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p11_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        12. Persentase jam kerja pengemudi : maksimal 12 jam dan 4 jam istirahat
                                        angkutan
                                        umum
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80 %, perusahaan yang melaksanakan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 79 %, perusahaan yang
                                                    melaksanakan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="c,25">
                                                <label class="form-check-label">c. 25 - 50 % perusahaan yang
                                                    melaksanakan</label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 25% perusahaan yang
                                                        melaksanakan</label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p12_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p12_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        13. Persentase perusahaan angkutan yang telah membuat dan melaporkan Sistem
                                        manajemen keselamatan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80 % memenuhi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80 % belum memenuhi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 50 % tidak memenuhi</label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p13_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p13_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        14. Pelaksanaan pengecekan terhadap kondisi kesehatan pengemudi cek narkoba, cek
                                        kesehatan dan sebagainya
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="a,100">
                                                <label class="form-check-label">a. ada , yang melaksanakan pemerintah
                                                    daerah dan perusahaan angkutan</label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="b,50">
                                                <label class="form-check-label">b. ada, yang melaksanakan perusahaan
                                                    angkutan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="c,25">
                                                <label class="form-check-label">c. ada, yang melaksanakan pemerintah
                                                    daerah
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="d,0">
                                                <label class="form-check-label">d. tidak ada sama sekali
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p14_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p14_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">III. Pelayanan Terminal Dan
                                Fasilitas Pendukung</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Pelayanan Terminal</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        15. Terdapat pos, fasilitas dan petugas pemeriksa kelaikan umum, fasilitas
                                        perbaikan
                                        ringan kendaraan umum pada Terminal
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="a,100">
                                                <label class="form-check-label">a. Tersedia, lengkap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tersedia, Sebagian
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak tersedia</label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p15_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p15_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        16. Keberadaan fasilitas istirahat awak kendaraan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, berfungsi dan bersih
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, berfungsi tapi tidak bersih
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="c,25">
                                                <label class="form-check-label">c. Ada, tidak berfungsi dan tidak
                                                    bersih
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p16_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p16_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        17. Melakukan pemantauan kualitas udara ambien
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="a,100">
                                                <label class="form-check-label">a. Minimal 6 bulan sekali
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="b,50">
                                                <label class="form-check-label">b. 1 tahun sekali
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="c,25">
                                                <label class="form-check-label">c. Lebih jarang atau tidak tentu
                                                    waktunya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak melakukan
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p17_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p17_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        18. Tindak lanjut pengendalian kualitas udara ambien (luar ruang/lingkungan
                                        luar)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="a,100">
                                                <label class="form-check-label">a. Melakukan pemantauan kualitas
                                                    udara,
                                                    penghijauan di areal terminal
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="b,50">
                                                <label class="form-check-label">b. Melakukan pemantauan kualitas udara
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="c,25">
                                                <label class="form-check-label">c. Melakukan penghijauan di areal
                                                    terminal
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="d,0">
                                                <label class="form-check-label">d. tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p18_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p18_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        19. Tersedia ruang tunggu, fasilitas ibadah, rumah makan, fasilitas dan petugas
                                        kebersihan, lampu penerangan ruangan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="a,100">
                                                <label class="form-check-label">a. ada, lengkap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="b,50">
                                                <label class="form-check-label">b. ada, sebagian
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="c,0">
                                                <label class="form-check-label">c. tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p19_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p19_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        20. Tersedia fasilitas bagi penumpang penyandang disabilitas dan ibu hamil atau
                                        menyusui
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="a,100">
                                                <label class="form-check-label">a. ada, lengkap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="b,50">
                                                <label class="form-check-label">b. ada, sebagian
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="c,0">
                                                <label class="form-check-label">c. tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p20_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p20_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Terminal Laik Sehat</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        21. Sarana cuci tangan pakai sabun pada Terminal
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="a,100">
                                                <label class="form-check-label">a. ada, cukup
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="b,50">
                                                <label class="form-check-label">b. ada, kurang
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="c,0">
                                                <label class="form-check-label">c. tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p21_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p21_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        22. Persentase sentra pangan jajanan/kantin dalam terminal yang telah memenuhi
                                        standar kesehatan higiene (tempat cuci tangan,tempat mencuci piring,tempat
                                        sampah,
                                        dll.)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80 % sudah memenuhi standar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80 % belum memenuhi standar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="c,25">
                                                <label class="form-check-label">c. 20 - 50 % belum memenuhi standar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 20% belum memenuhi standar
                                                        </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p22_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p22_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        23. Tersedianya toilet yang bersih
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="a,100">
                                                <label class="form-check-label">a. ada, toilet pria,wanita dan
                                                    penyandang
                                                    disabilitas
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="b,50">
                                                <label class="form-check-label">b. ada, toilet pria dan wanita
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="c,25">
                                                <label class="form-check-label">c. ada toilet namun dipakai bersama
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="d,0">
                                                <label class="form-check-label">d. ada toilet namun tidak berfungsi
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p23_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p23_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        24. Tersedianya Ruang Terbuka Hijau
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p24"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p24"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p24_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p24_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        25. Tersedia pelayanan kesehatan (pos/ruangan, fasilitas, dan petugas kesehatan)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, tersedia lengkap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, tidak lengkap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada sama sekali
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p25_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p25_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        26. Adanya penerapan Kawasan Tanpa Rokok
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p26_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p26_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.3 Keamanan Terminal</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        27. Kasus kriminalitas di teminal
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="a,100">
                                                <label class="form-check-label">a. Berkurang dari tahun lalu
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tetap/sama dari tahun lalu
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="c,0">
                                                <label class="form-check-label">c. Meningkat dari tahun lalu
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p27_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p27_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        28. Fasilitas pencegah tindak kriminal
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="a,100">
                                                <label class="form-check-label">a. tersedia petugas keamanan
                                                    berseragam,
                                                    pos keamanan, dan kamera pengawas
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="b,50">
                                                <label class="form-check-label">b. tersedia, petugas keamanan dan pos
                                                    keamanan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="c,0">
                                                <label class="form-check-label">c. tidak tersedia sama sekali
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p28_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p28_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.4 Halte</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        29. Persentase halte yang berfungsi dari jumlah eksisting secara layak pakai,
                                        terawat dan bersih
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="a,100">
                                                <label class="form-check-label">a. 80-100%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="b,75">
                                                <label class="form-check-label">b. 60-79%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="c,50">
                                                <label class="form-check-label">c. 40-59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 40% </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p29_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p29_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.5 Layanan Pertolongan Kecelakaan
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        30. Keberadaan sistem layanan pertolongan kecelakaan yang cepat dan terintegrasi
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan mudah dihubungi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada tapi tidak mudah dihubungi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak memiliki
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p30_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p30_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        31. Tersedianya data/informasi daerah rawan kecelakaan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="a,100">
                                                <label class="form-check-label">a. ada data/informasi dan dilakukan
                                                    updating
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="b,50">
                                                <label class="form-check-label">b. ada data/informasi dan tidak
                                                    dilakukan
                                                    updating
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada data/informasi
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p31_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p31_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        32. Edukasi penanganan tanggap kecelakaan pada masyarakat di daerah rawan
                                        kecelakaan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="a,100">
                                                <label class="form-check-label">a. ada dan terdokumentasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p32_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p32_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Penataan</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.1 Tingkat Kepadatan
                                Kendaraan/Kemacetan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        33. Jumlah titik kemacetan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="a,100">
                                                <label class="form-check-label">a. Menurun dari tahun lalu
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tetap/sama dengan tahun lalu
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="c,0">
                                                <label class="form-check-label">c. Meningkat dari tahun lalu
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p33_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p33_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">V. Tertib Lalu Lintas Dan
                                Keselamatan</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Pengaturan Fasilitas Pendukung
                                Jalan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        34. Keberadaan fasilitas jalur pejalan kaki dan penyandang disabilitas
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan berfungsi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada namun tidak berfungsi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p34_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p34_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        35. Jumlah titik fasilitas jalur sepeda
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="a,100">
                                                <label class="form-check-label">a. Meningkat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tetap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="c,0">
                                                <label class="form-check-label">c. Menurun
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p35_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p35_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        36. Fasilitas penyeberangan orang (jembatan penyeberangan, zebra cross)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, berfungsi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, Tidak berfungsi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p36_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p36_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.2 Upaya Penurunan Kecelakaan Dan
                                Tertib Lalu Lintas</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        37. Adanya kegiatan sosialisasi keselamatan berlalu lintas dan keselamatan jalan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada namun tidak rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p37_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p37_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        38. Jumlah penindakan pelanggaran lalu lintas
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="a,100">
                                                <label class="form-check-label">a. Meningkat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tetap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="c,0">
                                                <label class="form-check-label">c. Menurun
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p38_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p38_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        39. Adanya zona selamat sekolah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p39"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p39"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p39_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p39_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        40. Adanya ruang henti sepeda motor pada simpang bersinyal (lampu merah)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p40_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p40_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        41. Pengawasan dan penindakan terhadap emisi gas buang kendaraan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p41"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan terdokumentasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p41"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p41_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p41_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Kemasyarakatan</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        42. Adanya forum lalu lintas dan angkutan jalan (LLAJ)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, aktif dan memiliki Dasar
                                                    penetapan/SK
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, aktif namun tidak memiliki
                                                    Dasar
                                                    penetapan/SK
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="c,25">
                                                <label class="form-check-label">c. Ada, tidak aktif
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p42_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p42_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSix.update', $tatananSix->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        43. Persentase sekolah menengah yang memiliki patroli keamanan sekolah (PKS)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="c,0">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p43_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p43_2">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-row-reverse pb-15">
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary me-3">
                                            <span class="indicator-label">Simpan
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                        <path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </x-slot>
    {{-- End::Post component --}}

</x-dashboard.layout>
