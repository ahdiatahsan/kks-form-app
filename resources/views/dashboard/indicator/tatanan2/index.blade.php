<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 2</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 2</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Permukiman Dan Rumah Ibadat</span>
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">I. Udara Bersih</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.1 Kebijakan Pengelolaan Kualitas
                                Udara Kabupaten/Kota</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        1. Adanya regulasi pelaksanaan program pengendalian pencemaran kualitas
                                        udara
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p1"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, diatur melalui Perda
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p1"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, diatur melalui Perkada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p1"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        2. Adanya program pengendalian pencemaran kualitas udara di dalam dokumen
                                        perencanaan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, tercantum di dokumen RPJMD,
                                                    RKPD, Renstra PD dan Renja PD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, tercantum di dokumen RPJMD
                                                    dan RKPD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="c,25">
                                                <label class="form-check-label">c. Ada tercantum di dokumen Renstra
                                                    PD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p2"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak tercantum di semua dokumen
                                                    perencanaan pembangunan daerah dan perencanaan perangkat daerah
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.2 Car Free Day (CFD)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        3. Adanya regulasi/kebijakan terkait pelaksanaan car free day
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        4. Pelaksanaan car free day
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="a,100">
                                                <label class="form-check-label">a. Pelaksanaan rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tidak rutin dilaksanakan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada CFD
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.3 Penggunaan Energi Ramah
                                Lingkungan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        5. Adanya upaya pemerintah daerah dalam mengkampanyekan penggunaan bahan
                                        bakar ramah lingkungan (BBM rendah sulfur termasuk Bahan Bakar Gas/BBG,
                                        kendaraan berbahan listrik/solar sel, biodiesel, dll.) untuk transportasi
                                        publik dan / atau mobil pribadi dan/ atau industri
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="a,100">
                                                <label class="form-check-label">a. minimal 2 kali dalam setahun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="b,50">
                                                <label class="form-check-label">b. 1 kali dalam setahun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak pernah dilakukan
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        6. Jumlah rumah tangga yang menggunakan salah satu atau beberapa energi
                                        alternatif yang ramah lingkungan: solar sel, LPG dan pemanfaatan gas metan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="b,75">
                                                <label class="form-check-label">b. 60% - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="c,50">
                                                <label class="form-check-label">c. 30% - 59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 30% </label>
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.4 Penanaman Pohon Di Wilayah Yang
                                Potensi Mengalami Pencemaran Udara</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        7. Kampanye wajib tanam pohon bagi masyarakat yang dilakukan secara
                                        terencana dan bersinergi, baik melalui Surat edaran, Surat Keputusan,
                                        bilboard, leaflet, brosur, media cetak, atau elektronik
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan terdokumentasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada dan tidak terdokumentasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        8. Persentase desa/kelurahan yang melaksanakan kegiatan wajib tanam pohon
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="b,75">
                                                <label class="form-check-label">b. 60 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="c,50">
                                                <label class="form-check-label">c. 30 - 59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 30% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.5 Monitoring Kualitas Udara</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        9. Melakukan pemantauan kualitas udara untuk menghitung Indeks Standar
                                        Pencemaran Udara/ISPU
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="b,0">
                                                <label class="form-check-label">c. Tidak ada
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        10. Nilai hasil pengukuran ISPU
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="a,100">
                                                <label class="form-check-label">a. 0 - 50 (Sehat)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="b,50">
                                                <label class="form-check-label">b. 51 - 100 (Sedang)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 101 (Tidak Sehat)
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        11. Nilai indeks kualitas udara
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="a,100">
                                                <label class="form-check-label">a. 91 - 100 (Sangat Baik)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="b,50">
                                                <label class="form-check-label">b. 71 - 90 (Baik)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="c,25">
                                                <label class="form-check-label">c. 50 - 70 (Sedang)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 50 (Kurang) </label>
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        12. Melakukan monitoring uji kualitas udara indoor secara berkala
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="a,100">
                                                <label class="form-check-label">a. Dilakukan dua kali atau lebih
                                                    dalam satu tahun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="b,50">
                                                <label class="form-check-label">b. Dilakukan sekali setahun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak dilakukan
                                                </label>
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        13. Melakukan edukasi dan diseminasi informasi kualitas udara ke masyarakat
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="a,100">
                                                <label class="form-check-label">a. Dua kali atau lebih dalam satu
                                                    tahun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="b,50">
                                                <label class="form-check-label">b. Sekali setahun
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak melaksanakan
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.6 Upaya Pemerintah Daerah Sesuai
                                Lokal Spesifik</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        14. Upaya-upaya pemda secara spesifik dalam pengendalian pencemaran udara
                                        (baik bidang transportasi, industri, kehutanan, atau pertambangan)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">II. Air Sungai Bersih
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.1 Keberadaan Dewan Sumber Daya
                                Air (SDA)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        15. Kebijakan dalam pengelolaan sungai
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="a,100">
                                                <label class="form-check-label">a. Berdasarkan/dituangkan dalam
                                                    Perda
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="b,75">
                                                <label class="form-check-label">b. Berdasarkan/dituangkan dalam
                                                    Perbup
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="c,50">
                                                <label class="form-check-label">c. Berdasarkan/dituangkan dalam SK
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="d,25">
                                                <label class="form-check-label">d. Berdasarkan/dituangkan dalam SE
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="e,0">
                                                <label class="form-check-label">e. Tidak ada
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        16. Adanya Dewan SDA di tingkat Kabupaten/Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak Ada
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.2 Rencana Kerja Dan Aksi Dari
                                Dewan SDA</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        17. Adanya rencana kerja dan aksi pengelola sungai bersih di tingkat
                                        Kabupaten/Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="b,0">
                                                <label class="form-check-label">d. Tidak Ada
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.3 Keterlibatan Masyarakat Dalam
                                Pengelolaan Sungai</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        18. Adanya komunitas peduli sungai
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        19. Keterlibatan masyarakat dalam pengelolaan sungai
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="a,100">
                                                <label class="form-check-label">a. Terlibat dalam empat atau lebih
                                                    kegiatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="b,75">
                                                <label class="form-check-label">b. Terlibat dalam tiga kegiatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="c,50">
                                                <label class="form-check-label">c. Terlibat dalam dua kegiatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="d,25">
                                                <label class="form-check-label">d. Terlibat dalam satu kegiatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="e,0">
                                                <label class="form-check-label">e. Masyarakat tidak terlibat dalam
                                                    pengelolaan sungai
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.4 Kondisi Kebersihan Sungai</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        20. Kondisi kebersihan sungai
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="a,100">
                                                <label class="form-check-label">a. Bersih dari sampah/tinja dari
                                                    hulu ke hilir
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="b,50">
                                                <label class="form-check-label">b. Bersih hanya di sebagian sungai
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="c,0">
                                                <label class="form-check-label">c. Ada sampah/tinja
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        21. Kondisi daerah sempadan sungai
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="a,100">
                                                <label class="form-check-label">a. Bebas dari bangunan liar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada beberapa bangunan liar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="c,0">
                                                <label class="form-check-label">c. Penuh dengan bangunan liar
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        22. Melakukan pemantauan sungai
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="a,100">
                                                <label class="form-check-label">a. Dilakukan sesuai SE Dirjen SDA
                                                    No 5/2016
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="b,50">
                                                <label class="form-check-label">b. Dilakukan sebagian sesuai SE
                                                    Dirjen SDA No 5/2016
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak dilakukan
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        23. Nilai Indeks Kualitas Air
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="a,100">
                                                <label class="form-check-label">a. Baik 0 ≤ IP ≤ 1.0
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="b,75">
                                                <label class="form-check-label">b. Tercemar ringan 1.0 < IP ≤ 5.0
                                                        </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="c,50">
                                                <label class="form-check-label">c. Tercemar Sedang 5.0 < IP ≤ 10.0
                                                        </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tercemar berat IP > 10.0
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">III. Penyediaan Air Minum
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Upaya Pemenuhan Akses Air
                                Minum
                                Oleh Pemerintah Daerah Dan Masyarakat</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        24. Upaya Pemerintah Daerah dalam pemenuhan Akses air minum (seperti
                                        pengembangan SPAM jaringan perpipaan dan pengembangan SPAM Bukan jaringan
                                        perpipaan)
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        25. Memiliki Penyelenggara SPAM (BUMD/UPTD/BUMDES/POKMAS/BUKS)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="a,100">
                                                <label class="form-check-label">a. Memiliki lebih dari satu
                                                    penyelenggara
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="b,50">
                                                <label class="form-check-label">b. Memiliki satu penyelenggara
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak memiliki
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        26. Akses terhadap air minum yang layak melalui SPAM jaringan perpipaan dan
                                        non perpipaan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50% - 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Dokumen Rencana Induk Sistem
                                Penyediaan Air Minum (RISPAM)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        27.Memiliki dokumen RISPAM
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya dan sudah dilegalkan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya dan belum dilegalkan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Pengawasan Eksternal Kualitas
                                Air Minum</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        28. Persentase sarana air minum yang diinspeksi kualitas air minumnya
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 60%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="b,50">
                                                <label class="form-check-label">b. 30% - 60%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 30% </label>
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        29. Persentase sarana air minum yang memenuhi syarat kesehatan setelah
                                        dilakukan inspeksi kualitas airnya
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 25%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="b,50">
                                                <label class="form-check-label">b. 10 - 25%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 10% </label>
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.4 Pengawan Internal Kualitas Air
                                Minum </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        30. Kegiatan pengawasan internal kualitas air minum secara berkala
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya dilakukan, dan ada dokumen
                                                    laporannya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya dilakukan, tapi tidak ada
                                                    dokumen laporannya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada pengawasan internal
                                                    secara berkala
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.5 Rencana Pengamanan Air Minum
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        31. Memiliki dan menerapkan rencana pengamanan kualitas air minum secara
                                        berkala (semua penyelenggara penyedia air minum)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="a,100">
                                                <label class="form-check-label">a. memiliki dan penerapannya
                                                    dilakukan secara berkala
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="b,75">
                                                <label class="form-check-label">b. memiliki tapi penerapannya
                                                    belum berkala
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="c,50">
                                                <label class="form-check-label">c. memiliki tapi tidak menerapkan
                                                    rencana pengamanan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak memiliki
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Pengelolaan Air
                                Limbah Domestik</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.1 Komitmen</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        32. Keberadaan regulasi/kebijakan terkait Air Limbah Domestik (Perda
                                        Pengelolaan ALD, Perda Retribusi, dan/atau Perkada terkait Pengelolaan ALD)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada ≥ 2 peraturan terkait Air
                                                    Limbah Domestik
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="b,50">
                                                <label class="form-check-label">b. Hanya terdapat 1 peraturan
                                                    terkait Air Limbah Domestik
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak memiliki peraturan
                                                    terkait Air Limbah Domestik
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        33. Keberadaan Dokumen Perencanaan Sistem Pengelolaan Air Limbah Domestik
                                        (Strategi Sanitasi Perkotaan dan/atau Rencana Induk Sistem Pengelolaan ALD)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada 2 Dokumen Perencanaan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="b,50">
                                                <label class="form-check-label">b. Hanya ada 1 Dokumen Perencanaan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada Dokumen Perencanaan
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        34. Adanya Pemisahan Peran Operator dan Regulator dalam Kelembagaan
                                        Pengelola Air Limbah Domestik (ALD)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada (Pengelola ALD adalah
                                                    UPTD/BLUD/BUMD)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tidak ada (Pengelola ALD adalah
                                                    Dinas)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak terdapat tusi pengelolaan
                                                    air limbah domestik pada OPD
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        35. Persentase alokasi anggaran pengelolaan air limbah domestik dalam APBD
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 2 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="b,75">
                                                <label class="form-check-label">b. 1 % < x ≤ 2 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="c,50">
                                                <label class="form-check-label">c. 0,5 % < x ≤ 1 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="d,25">
                                                <label class="form-check-label">d. ≤ 0,5 %
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        36. Program/Kegiatan Pemda yang mendorong perubahan perilaku masyarakat
                                        (sosialisasi/kampanye)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan target tercapai
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada dan target tidak tercapai
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.2. Capaian Target Sanitasi</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        37. Capaian Akses Layak Air Limbah Domestik
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 90%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="b,75">
                                                <label class="form-check-label">b. 75 % < x ≤ 90 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="c,50">
                                                <label class="form-check-label">c. 60 % < x ≤ 75 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="d,25">
                                                <label class="form-check-label">d. 30 % < x ≤ 60 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="e,0">
                                                <label class="form-check-label">e. ≤ 30 %
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        38. Persentase pencapaian target tahunan pemenuhan Standar Pelayanan Minimal
                                        (SPM)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 90%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="b,75">
                                                <label class="form-check-label">b. 75 % < x ≤ 90 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="c,50">
                                                <label class="form-check-label">c. 60 % < x ≤ 75 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="d,25">
                                                <label class="form-check-label">d. 30 % < x ≤ 60 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="e,0">
                                                <label class="form-check-label">e. ≤ 30 %
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.3 Teknis Operasional : Sistem
                                Pengelolaan Air Limbah Domestik Setempat (SPALD-S)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        39. Terdapat layanan penyedotan lumpur tinja (baik oleh OPD atau Badan
                                        Usaha)
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        40. Keberadaan dan keberfungsian Instalasi Pengolahan Lumpur Tinja (IPLT)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan berfungsi (memenuhi
                                                    semua baku mutu lingkungan sesuai Permen LHK No. 68 Tahun 2016)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada tapi tidak berfungsi
                                                    optimal (memenuhi sebagian baku mutu lingkungan sesuai Permen
                                                    LHK No. 68 Tahun 2016)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        41. Truk tinja beroperasi dan masuk ke Instalasi Pengolahan Lumpur Tinja
                                        (IPLT)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p41"
                                                    value="a,100">
                                                <label class="form-check-label">a. Beroperasi, seluruhnya dikirim
                                                    ke IPLT
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p41"
                                                    value="b,50">
                                                <label class="form-check-label">b. Beroperasi, tapi hanya sebagian
                                                    yang dikirim ke IPLT
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p41"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada satupun truk yang
                                                    mengirim ke IPLT
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.4 Teknis Operasional : Sistem
                                Pengelolaan Air Limbah Domestik Terpusat (SPALD-T)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        42. Persentase keberfungsian (memenuhi semua baku mutu lingkungan sesuai
                                        Permen LHK No. 68 Tahun 2016) dari jumlah total Instalasi Pengolahan Air
                                        Limbah Domestik (IPALD) skala permukiman (50-20.000 jiwa) terbangun
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 70% berfungsi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="b,75">
                                                <label class="form-check-label">b. 30% ≤ x ≤ 70% berfungsi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="c,50">
                                                <label class="form-check-label">c. < 30% berfungsi </label>
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">V. Drainase</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Perencanaan Pembangunan
                                Drainase</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        43. Perencanaan drainase memperhatikan konsep Eco-Drain yang sesuai dengan
                                        karateristik wilayah (mengunakan sumur resapan, Biopori, Kolam Retensi dll)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya konsep Eco-Drain digunakan
                                                    menyeluruh di semua wilayah Kabupaten Kota
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya konsep Eco-Drain digunakan
                                                    sebagian besar wilayah Kabupaten Kota
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="c,25">
                                                <label class="form-check-label">c. Ya konsep Eco-Drain digunakan
                                                    sebagian kecil wilayah Kabupaten Kota
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak mengunakan konsep
                                                    Eco-Drain sama sekali/hanya sangat sedikit yang digunakan
                                                </label>
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        44. Kabupaten/Kota memiliki master plan drainase kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p44"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p44"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p44_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p44_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.2 Persentase Penanganan Genangan
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        45. Persentase penanganan genangan kabupaten/kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p45"
                                                    value="a,100">
                                                <label class="form-check-label">a. 100%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p45"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50% ≤ x < 100% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p45"
                                                    value="c,50">
                                                <label class="form-check-label">c. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p45"
                                                    value="d,0">
                                                <label class="form-check-label">d. 0%
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p45_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p45_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.3 Upaya Pemda Dalam Mendorong
                                Peran Serta Masyarakat (PSM) Dalam Operasional Serta Pemeliharaan Sistem Drainase</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        46. Upaya Pemda dalam mendorong Peran Serta Masyarakat (PSM), mitra dalam
                                        hal Operasional serta pemeliharaan sistem drainase (Kampanye menjaga
                                        kebersihan drainase, kegiatan bersih2 lingkungan di drainase serta
                                        pemeliharaan sistem drainase)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p46"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan berhasil melibatkan
                                                    masyarakat atau mitra
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p46"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada namun tidak berhasil
                                                    melibatkan masyarakat atau mitra
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p46"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada upaya
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p46_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p46_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.4 Kondisi Saluran Drainase</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        47. Kondisi Saluran drainase
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p47"
                                                    value="a,100">
                                                <label class="form-check-label">a. Berfungsi seluruhnya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p47"
                                                    value="b,50">
                                                <label class="form-check-label">b. Berfungsi sebagian
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p47"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak berfungsi
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p47_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p47_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Pengelolaan Sampah
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.1 Komitmen</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        48. Keberadaan peraturan terkait persampahan (Perda Pengelolaan Sampah,
                                        Perda Retribusi, dan/atau Perkada terkait Pengelolaan Sampah)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p48"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada 2 peraturan terkait
                                                    persampahan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p48"
                                                    value="b,50">
                                                <label class="form-check-label">b. Hanya ada 1 peraturan terkait
                                                    persampahan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p48"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada peraturan terkait
                                                    persampahan
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p48_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p48_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        49. Keberadaan Dokumen Perencanaan Sistem Pengelolaan Sampah (Strategi
                                        Sanitasi Perkotaan dan/atau Rencana Induk Sistem Pengelolaan Sampah)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p49"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada 2 Dokumen Perencanaan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p49"
                                                    value="b,50">
                                                <label class="form-check-label">b. Hanya ada 1 Dokumen Perencanaan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p49"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada Dokumen Perencanaan
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p49_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p49_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        50. Adanya pemisahan peran operator dan regulator dalam kelembagaan
                                        pengelola sampah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p50"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada (Pengelola Sampah adalah
                                                    UPTD/BLUD/BUMD)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p50"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tidak ada (Pengelola Sampah
                                                    adalah Dinas)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p50"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak terdapat tusi pengelolaan
                                                    persampahan pada OPD
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p50_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p50_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        51. Presentasi alokasi anggaran pengelolaan sampah dalam APBD
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p51"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 2 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p51"
                                                    value="b,75">
                                                <label class="form-check-label">b. 1 % < x ≤ 2 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p51"
                                                    value="c,50">
                                                <label class="form-check-label">c. 0,5 % < x ≤ 1 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p51"
                                                    value="d,25">
                                                <label class="form-check-label">d. ≤ 0,5 %
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p51_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p51_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        52. Program pemerintah dalam pengolahan sampah dengan prinsip 3R (misal
                                        komposting, bank sampah, biogas, daur ulang skala kawasan TPS 3R)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p52"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p52"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p52_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p52_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.2 Capaian Target Pengelolaan
                                Sampah</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        53. Persentase pengurangan sampah Kabupaten Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 30%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="b,75">
                                                <label class="form-check-label">b. 20 % < x ≤ 30 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="c,50">
                                                <label class="form-check-label">c. 10 % < x ≤ 20 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="d,25">
                                                <label class="form-check-label">d. 5 % < x ≤ 10 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="e,0">
                                                <label class="form-check-label">e. ≤ 5 %
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p53_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p53_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        54. Persentase penanganan sampah Kabupaten Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="b,75">
                                                <label class="form-check-label">b. 60 % < x ≤ 70 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="c,50">
                                                <label class="form-check-label">c. 40 % < x ≤ 60 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="d,25">
                                                <label class="form-check-label">d. 20 % < x ≤ 40 % </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="e,0">
                                                <label class="form-check-label">e. ≤ 20 %
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p54_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p54_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.3 Pemilahan Sampah Di Rumah
                                Tangga</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        55. Pelaksanaan pemilahan sampah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p55"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 50% wilayah melakukan
                                                    kegiatan pemilahan sampah
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p55"
                                                    value="b,50">
                                                <label class="form-check-label">b. < 50% wilayah melakukan kegiatan
                                                        pemilahan sampah </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p55"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada pemilahan sampah
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p55_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p55_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        56. Program Pemda dalam mendorong Peran Serta Masyarakat (PSM) dalam
                                        pemilahan sampah (misal program pengurangan kantong plastik, lomba
                                        kebersihan, sosialisasi terkait pengelolaan)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p56"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada di ≥ 50% wilayah Kab/Kota
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p56"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada di < 50% wilayah Kab/Kota
                                                        </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p56"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p56_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p56_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.4 Penanganan Sampah Di Tingkat
                                Desa/Keluharan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        57. Adanya program pengelolaan sampah tingkat desa yang meliputi pemrosesan
                                        awal di tingkat rumah tangga sebelum diangkut ke TPS, adanya upaya
                                        pengolahan sampah organik menjadi kompos, memfungsikan TPS menjadi tempat
                                        daur ulang sampah rumah tangga, dan pengangkutan sampah dari TPS ke TPA
                                        secara rutin
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p57"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 50% desa/kelurahan melakukan
                                                    seluruh program pengelolaan sampah
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p57"
                                                    value="b,50">
                                                <label class="form-check-label">b. < 50% desa/kelurahan melakukan
                                                        seluruh program pengelolaan sampah </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p57"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada desa/kelurahan yang
                                                    melakukan seluruh program pengelolaan sampah
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p57_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p57_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        58. Sampah ditampung di TPS tidak lebih dari 24 jam
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p58"
                                                    value="a,100">
                                                <label class="form-check-label">a. Seluruh TPS menampung sampah
                                                    tidak lebih dari 24 jam
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p58"
                                                    value="b,50">
                                                <label class="form-check-label">b. Sebagian TPS menampung sampah
                                                    tidak lebih dari 24 jam
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p58"
                                                    value="c,0">
                                                <label class="form-check-label">c. Seluruh TPS menampung sampah
                                                    lebih dari 24 jam
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p58_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p58_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.5 Penanganan Sampah Skala
                                Kab/Kota</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        59. Persentase infrastruktur pengolahan sampah berbasis masyarakat (TPS 3R
                                        dan/atau bank sampah) terbangun yang beroperasi
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p59"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 70% beroperasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p59"
                                                    value="b,75">
                                                <label class="form-check-label">b. 30% < x ≤ 70% beroperasi </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p59"
                                                    value="c,50">
                                                <label class="form-check-label">c. ≤ 30% beroperasi
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p59_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p59_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        60. Kondisi sarana pengangkutan sampah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p60"
                                                    value="a,100">
                                                <label class="form-check-label">a. Seluruh armada dalam kondisi
                                                    layak pakai
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p60"
                                                    value="b,50">
                                                <label class="form-check-label">b. ≥ 50% armada dalam kondisi
                                                    layak pakai
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p60"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% armada dalam kondisi layak
                                                        pakai </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p60"
                                                    value="d,0">
                                                <label class="form-check-label">d.Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p60_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p60_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        61. Keberadaan tempat pemrosesan akhir sampah (TPA)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak Ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p61_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p61_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        62. Upaya penutupan sampah di TPA dengan tanah secara berkala
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p62"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan dilakukan setiap hari
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p62"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, dilakukan setiap 2-7 hari
                                                    sekali
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p62"
                                                    value="c,25">
                                                <label class="form-check-label">c. Ada, dilakukan > 1 minggu
                                                    sekali
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p62"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak dilakukan penutupan
                                                    sampah
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p62_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p62_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        63. Keberadaan pengelolaan gas metana di TPA
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p63"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, dikelola dan dimanfaatkan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p63"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, dikelola tapi belum
                                                    dimanfaatkan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p63"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada pengelolaan
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p63_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p63_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        64. Keberadaaan dan keberfungsian Instalasi Pengolahan Lindi (IPL) di TPA
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p64"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan berfungsi (memenuhi
                                                    semua baku mutu lingkungan sesuai Permen LHK No. 59 Tahun 2016)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p64"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada tapi tidak berfungsi
                                                    optimal (memenuhi sebagian baku mutu lingkungan sesuai Permen
                                                    LHK No. 59 Tahun 2016)
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p64"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p64_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p64_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.6 Kondisi Lingkungan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        65. Kondisi lingkungan di Kabupaten Kota secara umum
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p65"
                                                    value="a,100">
                                                <label class="form-check-label">a. Kondisi kebersihan Kabupaten
                                                    Kota secara umum bersih
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p65"
                                                    value="b,50">
                                                <label class="form-check-label">b. Kondisi kebersihan Kabupaten
                                                    Kota sebagian kotor sebagian bersih
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p65"
                                                    value="c,0">
                                                <label class="form-check-label">c. Kondisi kebersihan Kabupaten
                                                    Kota secara umum kurang bersih
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p65_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p65_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VII. Perumahan Dan
                                Permukiman</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.1 Kebijakan Tata Ruang
                                Perumahan/Permukiman</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        66. Memiliki kebijakan tata ruang perumahan/pemukiman
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p66"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p66"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p66_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p66_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.2 Fasilitas Umum</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        67. Keberadaan fasilitas umum seperti sarana bermain anak yang cukup
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p67"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, dimanfaatkan dan
                                                    terpelihara
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p67"
                                                    value="b,75">
                                                <label class="form-check-label">b. Ada dan dimanfaatkan tapi tidak
                                                    terpelihara
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p67"
                                                    value="c,50">
                                                <label class="form-check-label">c. Ada tapi tidak dimanfaatkan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p67"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p67_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p67_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        68. Keberadaan sarana olah raga yang cukup
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p68"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, dimanfaatkan dan
                                                    terpelihara
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p68"
                                                    value="b,75">
                                                <label class="form-check-label">b. Ada, dimanfaatkan tapi tidak
                                                    terpelihara
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p68"
                                                    value="c,50">
                                                <label class="form-check-label">c. Ada tapi tidak dimanfaatkan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p68"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p68_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p68_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.3 Kawasan Kumuh</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        69. Persentase daerah kumuh Kabupaten Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p69"
                                                    value="a,100">
                                                <label class="form-check-label">a. < 10% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p69"
                                                    value="b,50">
                                                <label class="form-check-label">b. 10-20 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p69"
                                                    value="c,25">
                                                <label class="form-check-label">c. 20-30%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p69"
                                                    value="d,0">
                                                <label class="form-check-label">d. > 30%
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p69_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p69_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.4 Pemanfaatan Lahan Pekarangan
                                Rumah</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        70. Memiliki program optimalisasi Pemanfaatan Lahan Pekarangan Melalui
                                        Kawasan Rumah Pangan Lestari (KRPL)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p70"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p70"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p70_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p70_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.5 Ketersediaan Aksesibilitas Dan
                                Fasilitas Penanganan Proteksi Kebakaran</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        71. Kepemilikan fasilitas penanganan proteksi kebakaran (mobil damkar, pos
                                        pemadam kebakaran, hidran pilar, hidran box)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p71"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya, memiliki semua fasilitas
                                                    diatas
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p71"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya, memiliki sebagian fasilitas
                                                    diatas
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p71"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak memiliki fasilitas yang
                                                    disebutkan diatas
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p71_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p71_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.6 Gerakan PSN Dan Kebersihan
                                Lingkungan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        72. Pelaksanaan PSN dan Jumat Bersih
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p72"
                                                    value="a,100">
                                                <label class="form-check-label">a. Berjalan baik
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p72"
                                                    value="b,50">
                                                <label class="form-check-label">b. Berjalan kurang baik
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p72"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak dikerjakan
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p72_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p72_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.7 Rumah Sehat</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        73. Jumlah rumah sehat di Kabupaten/Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p73"
                                                    value="a,100">
                                                <label class="form-check-label">a. Meningkat dari tahun lalu
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p73"
                                                    value="b,50">
                                                <label class="form-check-label">b. Tetap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p73"
                                                    value="c,0">
                                                <label class="form-check-label">c. Menurun dari tahun lalu
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p73_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p73_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.8 Edukasi Daerah Yang Berpotensi
                                Radiasi Secara Alami</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        74. Memiliki program edukasi di wilayah pemukiman yang berpotensi radiasi
                                        secara alami (berdasarkan peta BATAN)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p74"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p74"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p74_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p74_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.9 Komitmen Pemerintah Daerah
                                Terhadap Daerah Yang Memiliki Penambang Emas Skala Kecil (PESK)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        75. Memiliki program pengawasan dan edukasi penggunaan merkuri bagi
                                        penambang emas skala kecil di wilayah Kabupaten Kota (Peta di BPPT & KLHK)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p75"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p75"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p75_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p75_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.10 Program Rumah Sehat/Bedah
                                Rumah</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        76. Memiliki program perbaikan rumah sehat/bedah rumah di wilayah pemukiman
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p76"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p76"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p76_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p76_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">7.11 Kondisi Perumahan/Permukiman
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        77. Kondisi lingkungan perumahan umum di lingkungan permukiman bersih,
                                        tertata rapi dan bebas banjir
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p77"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya, bersih dan tertata rapi dan
                                                    bebas banjir
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p77"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya, bersih dan tertata rapi dan
                                                    tapi banjir
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p77"
                                                    value="c,25">
                                                <label class="form-check-label">c. Kurang bersih dan tertata, tapi
                                                    bebas banjir
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p77"
                                                    value="d,0">
                                                <label class="form-check-label">d. Kurang bersih dan tertata, dan
                                                    banjir
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p77_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p77_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VIII. Pertamanan Dan
                                Hutan Kota</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">8.1 Ruang Terbuka Hijau (RTH)
                                Perkotaan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        78. Persentase kawasan RTH di wilayah kabupaten kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p78"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 30% luas perkotaan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p78"
                                                    value="b,50">
                                                <label class="form-check-label">b. < 30% luas perkotaan </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p78"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada kawasan RTH
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p78_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p78_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        79. Persentase kawasan hutan kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p79"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 10% dari luas perkotaan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p79"
                                                    value="b,50">
                                                <label class="form-check-label">b. < 10% dari luas perkotaan </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p79"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada kawasan hutan kota
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p79_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p79_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        80. Persentase kawasan pertamanan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p80"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 20% dari luas perkotaan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p80"
                                                    value="b,50">
                                                <label class="form-check-label">b. < 20% dari luas perkotaan </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p80"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada kawasan pertamanan
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p80_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p80_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">8.2 Informasi, Petunjuk, Himbauan
                                Dan Sarana Sanitasi Di Taman</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        81. Tersedia informasi, petunjuk, himbauan dan sarana sanitasi di kawasan
                                        pertamanan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p81"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya, tersedia lengkap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p81"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya, tersedia sebagian
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p81"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak Tersedia
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p81_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p81_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">8.3 Fasilitas Dan Sarana Kawasan
                                Pertamanan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        82. Keberadaan fasilitas dan sarana di kawasan pertamanan yang ramah anak,
                                        ramah lansia dan ramah difable
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p82"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya, tersedia lengkap
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p82"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya, tersedia sebagian
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p82"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak tersedia
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p82_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p82_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">8.4 Aktivasi Taman</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        83. Keberadaan program kegiatan masyarakat yang memanfaatkan fasilitas dan
                                        sarana di kawasan pertamanan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p83"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p83"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak Ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p83_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p83_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">8.5 Kondisi Kawasan Pertamanan
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        84. Kebersihan kawasan pertamanan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p84"
                                                    value="a,100">
                                                <label class="form-check-label">a. Secara umum bersih dari sampah
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p84"
                                                    value="b,0">
                                                <label class="form-check-label">b. Secara umum kurang bersih
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p84_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p84_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        85. Kondisi Fasilitas dan sarana di kawasan pertamanan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p85"
                                                    value="a,100">
                                                <label class="form-check-label">a. Secara umum terpelihara dengan
                                                    baik
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p85"
                                                    value="b,0">
                                                <label class="form-check-label">b. Secara umum kurang terpelihara
                                                    dengan baik
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p85_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p85_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">8.6 Rumah Desa Sehat</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        86. Adanya program terkait Rumah Desa Sehat
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p86"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p86"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak Ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p86_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p86_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">8.7 Kelompok Kerja Masyarakat Air
                                Dan Sanitasi</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        87. Keberadaan kelompok kerja masyarakat air dan sanitasi yang aktif
                                        (Pokmair, BPS, BPSPAM)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p87"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dan aktif
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p87"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada tapi tidak aktif
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p87"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p87_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p87_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">IX. Rumah Ibadat</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">9.1 Rumah Ibadat Terdaftar</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        88. Persentase rumah ibadat 6 Agama di kabupaten kota yang terdaftar di
                                        Kantor Kementerian Agama Kab/Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p88"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 75% rumah ibadat terdaftar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p88"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50-75% rumah ibadat terdaftar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p88"
                                                    value="c,50">
                                                <label class="form-check-label">c. 25-49% rumah ibadat terdaftar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p88"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 25% rumah ibadat terdaftar
                                                        </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p88_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p88_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">9.2 Dukungan Pemerintah dan
                                Pemerintah Daerah Bagi Rumah Ibadat</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        89. Jumlah rumah ibadat yang memperoleh dukungan pembinaan dari Pemerintah
                                        Daerah dan atau Kantor Kementerian Agama Kab/Kota kepada pengurus
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p89"
                                                    value="a,100">
                                                <label class="form-check-label">a. 50% atau lebih jumlah rumah
                                                    ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p89"
                                                    value="b,50">
                                                <label class="form-check-label">b. 30%-40% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p89"
                                                    value="c,25">
                                                <label class="form-check-label">c. 10%-20% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p89"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p89_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p89_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        90. Adanya dukungan dari Pemerintah Daerah dan atau Kantor Kementerian Agama
                                        Kab/Kota dalam bentuk pendanaan sarana dan prasarana rumah ibadat
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p90"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya, seluruh rumah ibadat yang
                                                    terdaftar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p90"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ya, sebagian rumah ibadat yang
                                                    terdaftar
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p90"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p90_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p90_2">
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
                        <div class="pb-5">
                            <!--begin::Title-->
                            <div class="separator separator-dashed my-4"></div>
                            <h4 class="fw-bolder d-flex align-items-center text-dark">X. Kondisi Rumah Ibadat
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.1 Syarat Kesehatan Rumah Ibadat
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        91. Persentase Rumah Ibadat yang dilakukan Inspeksi Kesehatan Lingkungan
                                        paling sedikit satu kali dalam setahun
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p91"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p91"
                                                    value="b,75">
                                                <label class="form-check-label">b. 60 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p91"
                                                    value="c,50">
                                                <label class="form-check-label">c. 25 - 59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p91"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 25% </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p91_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p91_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        92. Persentase rumah ibadat yang memenuhi syarat kesehatan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p92"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80% rumah ibadat yang
                                                    memenuhi syarat kesehatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p92"
                                                    value="b,75">
                                                <label class="form-check-label">b. 60-80% rumah ibadat yang
                                                    memenuhi syarat kesehatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p92"
                                                    value="c,50">
                                                <label class="form-check-label">c. 25-59% rumah ibadat yang
                                                    memenuhi syarat kesehatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p92"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 25% rumah ibadat yang memenuhi
                                                        syarat kesehatan </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p92_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p92_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.2 Rumah Ibadat Ramah Lingkungan
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        93. Persentase rumah ibadat yang ramah lingkungan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p93"
                                                    value="a,100">
                                                <label class="form-check-label">a. 50% atau lebih jumlah rumah
                                                    ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p93"
                                                    value="b,50">
                                                <label class="form-check-label">b. 30%-40% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p93"
                                                    value="c,25">
                                                <label class="form-check-label">c. 10%-20% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p93"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p93_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p93_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.3 Rumah Ibadat Inklusif (Ramah
                                Anak, Lansia, Disabilitas)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        94. Persentase rumah ibadat inklusif
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p94"
                                                    value="a,100">
                                                <label class="form-check-label">a. 50% atau lebih jumlah rumah
                                                    ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p94"
                                                    value="b,50">
                                                <label class="form-check-label">b. 30% - 40% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p94"
                                                    value="c,25">
                                                <label class="form-check-label">c. 10% - 20% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p94"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p94_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p94_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.4 Larangan Merokok</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        95. Persentase rumah ibadat yang menerapkan Kawasan Tanpa Rokok (KTR)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p95"
                                                    value="a,100">
                                                <label class="form-check-label">a. 100% menerapkan KTR
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p95"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50 - 99% menerapkan KTR
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p95"
                                                    value="c,50">
                                                <label class="form-check-label">c. 25 - 49% menerapkan KTR
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p95"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 25% menerapkan KTR </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p95_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p95_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.5 Komunikasi Informasi Edukasi
                                Perilaku Hidup Bersih Sehat (KIE PHBS)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        96. Jumlah rumah ibadat yang melakukan KIE PHBS
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p96"
                                                    value="a,100">
                                                <label class="form-check-label">a. 50% atau lebih jumlah rumah
                                                    ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p96"
                                                    value="b,50">
                                                <label class="form-check-label">b. 30% - 49% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p96"
                                                    value="b,25">
                                                <label class="form-check-label">c. 10% - 29% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p96"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p96_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p96_2">
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.6 Aktivasi Rumah Ibadat</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        97. Jumlah rumah ibadat yang memiliki sarana pelayanan kesehatan/
                                        pertolongan pertama dalam kedaruratan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p97"
                                                    value="a,100">
                                                <label class="form-check-label">a. 20% atau lebih jumlah rumah
                                                    ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p97"
                                                    value="b,50">
                                                <label class="form-check-label">b. 10 - 19% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p97"
                                                    value="c,25">
                                                <label class="form-check-label">c. 1 - 9% jumlah rumah ibadat
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p97"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
                                                </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p97_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p97_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        98. Rumah ibadat memiliki kegiatan penanganan sosial kemasyarakatan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p98"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 75% memiliki penanganan
                                                    sosial
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p98"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50 - 75% memiliki penanganan
                                                    sosial
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p98"
                                                    value="c,50">
                                                <label class="form-check-label">c. 25 - 49% memiliki penanganan
                                                    sosial
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p98"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 25% memiliki penanganan sosial
                                                        </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p98_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p98_2">
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
                        <form action="{{ route('tatananTwo.update', $tatananTwo->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        99. Persentase rumah ibadat memiliki kegiatan edukasi terkait wawasan
                                        kebangsaan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p99"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 75% memiliki kegiatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p99"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50 - 75% memiliki kegiatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p99"
                                                    value="c,50">
                                                <label class="form-check-label">c. 25 - 49% memiliki kegiatan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p99"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 25% memiliki kegiatan </label>
                                            </div>
                                        </div>
                                        <span class="required">Lampiran (PDF)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p99_1">
                                        </div>
                                        <span class="required">Dokumentasi (Gambar)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                        <div class="input-group input-group-sm pb-4 pt-2">
                                            <input class="form-control" type="file" name="p99_2">
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
