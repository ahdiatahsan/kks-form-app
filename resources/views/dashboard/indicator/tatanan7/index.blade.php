<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 7</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 7</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Perkantoran Dan Perindustrian</span>
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">I. Komitmen Daerah Terhadap Muatan
                                Materi Kesehatan Dan Keselamatan Kerja
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
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        1. Adanya regulasi/kebijakan di Kawasan Perkantoran, Perindustrian (IKM) dan
                                        UMKM
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.2 Perencanaan Dalam RPJMD</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        2. Kegiatan penyelenggaraan kesehatan dan keselamatan kerja di Kawasan
                                        Perkantoran,
                                        Perindustrian (IKM) dan UMKM masuk dalam dokumen perencanaan pembangunan daerah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="a,100">
                                                <label class="form-check-label">a. Masuk dalam RPJMD dan RKPD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="b,50">
                                                <label class="form-check-label">b. Masuk dalam RPJMD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="c,25">
                                                <label class="form-check-label">c. Masuk dalam RKPD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak masuk satu pun
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">II. Perkantoran
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.1 Keselamatan Dan Kesehatan Kerja
                                (K3)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        3. Persentase kantor yang telah menerapkan K3
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="a,100">
                                                <label class="form-check-label">a. >80% Kantor telah menerapkan K3
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80% Kantor telah menerapkan K3
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% Kantor telah menerapkan K3
                                                        </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
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
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        4. Angka kecelakaan kerja di perkantoran setahun terakhir
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="a,100">
                                                <label class="form-check-label">a. Menurun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tetap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="c,0">
                                                <label class="form-check-label">c. Meningkat
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        5. Persentase kantor yang memfasilitasi kegiatan aktivitas fisik/olahraga
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        6. Persentase kantor yang telah memfasilitas pemeriksaan kesehatan pada
                                        pegawainya
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        7. Persentase kantor yang menerapkan Kawasan Tanpa Rokok (KTR)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
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
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        8. Persentase kantor yang memiliki ruang laktasi
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">III. Perindustrian Ikm (Industri
                                Kecil Dan Menengah)
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Industri Kecil Dan Menengah
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        9. Jumlah Industri kecil dan menengah yang menyelenggarakan program Kesehatan
                                        Keselamatan Kerja/K3
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Kualitas Kesehatan Lingkungan
                                Industri</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        10. Pembinaan dan pengawasan dilokasi Industri
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dilakukan secara rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, tapi tidak dilakukan secara
                                                    rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.3 Industri Hijau</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        11. Pemanfaatan kembali material dan sumber daya yang digunakan melalui konsep
                                        4R
                                        oleh Industri kecil dan menengah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dilakukan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak dilakukan
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.4 Dokumen Pengelolaan Lingkungan
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        12. Persentase perusahaan menyampaikan laporan Rencana Pengelolaan Lingkungan
                                        (RKL)/
                                        Rencana Pemantauan Lingkungan (RPL) / Upaya Pengelolaan Lingkungan (UKL)/ Upaya
                                        Pemantauan Lingkungan (UPL) secara berkala 6 bulan sekali
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="b,50">
                                                <label class="form-check-label">b. 60 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="c,25">
                                                <label class="form-check-label">c. 40 - 59.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 40% </label>
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
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        13. Kasus pencemaran lingkungan dan pengaduan masyarakat setahun terakhir
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="a,100">
                                                <label class="form-check-label">a. Menurun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tetap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="c,0">
                                                <label class="form-check-label">c. Meningkat
                                                </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.5 Pelayanan Kesehatan Dan Pos
                                Usaha Kesehatan Kerja (UKK) Pada IKM</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        14. Pos Upaya Kesehatan Kerja (UKK) aktif
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="b,50">
                                                <label class="form-check-label">b. 60 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="c,25">
                                                <label class="form-check-label">c. 40 - 59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 40% </label>
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Usaha Mikro, Kecil Dan
                                Menengah (UMKM)
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Izin Dan Pengembangan Usaha
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        15. Persentase UMKM yang memiliki perijinan (NIB/TDP/SKU)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
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
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        16. Persentase UMKM sektor makanan, minuman, industri pengolahan yang memiliki
                                        Sertifikat Laik Higiene Sanitasi (SLHS), PIRT, POM
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.2 UMKM Sehat</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        17. Persentase kecamatan yang melakukan penataan sentra pangan jajanan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="a,100">
                                                <label class="form-check-label">a. lebih dari 75% total kecamatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-75% total kecamatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="c,25">
                                                <label class="form-check-label">c. kurang dari 50% total kecamatan
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
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        18. Jumlah UMKM sentra pangan jajanan dan kantin yang memiliki Label
                                        pembinaan/pengawasan higiene sanitasi pangan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="a,100">
                                                <label class="form-check-label">a. lebih dari 75%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-75 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="c,25">
                                                <label class="form-check-label">c. kurang dari 50% total kecamatan
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.3 Kualitas Kesehatan Lingkungan
                                UMKM</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        19. Persentase UMKM yang sudah menerapkan dan menuhi syarat standar kesehatan
                                        lingkungan kerja
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
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
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        20. Persentase UMKM yang telah menerima pembinaan dan pengawasan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada pembinaan dan pengawasan
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.4 Pelayanan Kesehatan Dan Pos
                                Usaha Kesehatan Kerja (Pos UKK)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananSeven.update', $tatananSeven->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        21. Persentase UMKM yang memiliki pelayanan kesehatan/ Pos UKK
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50-80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="c,50">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada UMKM yang memiliki
                                                    pelayanan
                                                    kesehatan/Pos UKK
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
