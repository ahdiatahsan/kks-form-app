<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 1</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 1</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Kehidupan Masyarakat Sehat Mandiri</span>
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">I. Gerakan Masyarakat
                                Hidup Sehat (GERMAS)</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        1. Memiliki Kebijakan Germas
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p1"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada (Peraturan Daerah,
                                                    Perbub/Perwal, SK, SE)
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        2. GERMAS tercantum di dalam dokumen perencanaan pembangunan daerah dan
                                        perencanaan perangkat daerah
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        3. Jumlah penggerakan klaster GERMAS
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="a,100">
                                                <label class="form-check-label">a. Adanya penggerakan 5 klaster
                                                    GERMAS
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="b,50">
                                                <label class="form-check-label">b. Adanya penggerakan 3 - 4 klaster
                                                    GERMAS
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="c,25">
                                                <label class="form-check-label">c. Adanya penggerakan 1 - 2 klaster
                                                    GERMAS
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p3"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada penggerakan klaster
                                                    GERMAS
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">II. Program Indonesia
                                Sehat Dengan Pendekatan Keluarga (PIS-PK)</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        4. Pencapaian Indeks Keluarga Sehat (IKS) di Kabupaten/Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="a,100">
                                                <label class="form-check-label">a. IKS antara 0.8 - 1.0
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="b,50">
                                                <label class="form-check-label">b. IKS antara 0.5 - 0.7
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="c,25">
                                                <label class="form-check-label">c. IKS antara 0.3 - 0.4
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p4"
                                                    value="d,0">
                                                <label class="form-check-label">d. IKS kurang dari 0.3
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">III. Kesehatan Keluarga
                                Dan Reproduksi</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Kunjungan Antenatal
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        5. Persentase ibu hamil mendapatkan pelayanan antenatal minimal 6 kali (K6)
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
                                                <label class="form-check-label">b. 50 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="c,25">
                                                <label class="form-check-label">c. 25 - 49.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p5"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 25% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Kunjungan Neonatal</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        6. Persentase Kunjungan Neonatal Lengkap
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 86%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 86%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p6"
                                                    value="c,25">
                                                <label class="form-check-label">c. 25 - 49.99%
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        7. Persentase balita dipantau pertumbuhan dan perkembangan
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
                                                <label class="form-check-label">b. 70 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="c,25">
                                                <label class="form-check-label">c. 50 - 69.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p7"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 50% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.3 Pelayanan Kesehatan
                                Remaja Di Puskesma</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        8. Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan remaja
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 60%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 59.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="c,25">
                                                <label class="form-check-label">c. 40 - 49.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p8"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 40% </label>
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.4 Pelayanan Kesehatan
                                Santun Lansia</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        9. Persentase puskesmas yang menyelenggarakan pelayanan kesehatan SANTUN
                                        LANSIA
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 40%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="b,50">
                                                <label class="form-check-label">b. 30 - 40%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="c,25">
                                                <label class="form-check-label">c. 20 - 29.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p9"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 20% </label>
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Kesehatan Kerja</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.1 Pos Upaya Kesehatan
                                Kerja (UKK)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        10. Pos Upaya Kesehatan Kerja (UKK) aktif
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="b,50">
                                                <label class="form-check-label">b. 60 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="c,25">
                                                <label class="form-check-label">c. 40 - 59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p10"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 40% </label>
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">V. Gizi Masyarakat</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Prevalensi Kurang
                                Energi Kronis (KEK) Pada Ibu Hamil</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        11. Persentase ibu hamil KEK
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="a,100">
                                                <label class="form-check-label">a. < 10% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="b,50">
                                                <label class="form-check-label">b. 10 - 20%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p11"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 20%
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.2 Surveilans Gizi</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        12. Prevalensi Stunting
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="a,100">
                                                <label class="form-check-label">a. < 15% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="b,50">
                                                <label class="form-check-label">b. 15 - 25%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p12"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 25%
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        13. Persentase bayi usia 0-6 bulan mendapatkan ASI ekslusif
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 60%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="b,50">
                                                <label class="form-check-label">b. 40 - 59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p13"
                                                    value="c,0">
                                                <label class="form-check-label">c. < 40% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        14. Persentase balita yang mengikuti program suplementasi kapsul vitamin A
                                        untuk anak 6-59 bulan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 90%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="b,50">
                                                <label class="form-check-label">b. 71- 90%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="c,25">
                                                <label class="form-check-label">c. 50 - 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p14"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 50% </label>
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        15. Prevalensi Obesitas pada Balita
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="a,100">
                                                <label class="form-check-label">a. < 8% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="b,50">
                                                <label class="form-check-label">b. 8 - 10%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p15"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 10%
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        16. Prevalensi Obesitas pada Anak Usia Sekolah (SD-SMA)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="a,100">
                                                <label class="form-check-label">a. < 8% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="b,50">
                                                <label class="form-check-label">b. 8 - 10%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p16"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 10%
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Kesehatan Lingkungan
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.1 Pelayanan Kesehatan
                                Lingkungan Oleh Puskesmas</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        17. Persentase Puskesmas yang melaksanakan pelayanan kesehatan lingkungan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="b,50">
                                                <label class="form-check-label">b. 60 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="c,25">
                                                <label class="form-check-label">c. 40 - 59.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p17"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 40% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        18. Persentase Puskesmas yang menindaklanjuti hasil konseling pelayanan
                                        kesehatan lingkungan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="b,50">
                                                <label class="form-check-label">b. 60 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="c,25">
                                                <label class="form-check-label">c. 40 - 59.99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p18"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 40% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        19. Capaian target Inspeksi Kesehatan Lingkungan (IKL) TPP yang laik Higiene
                                        Sanitasi Pangan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 90%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="b,50">
                                                <label class="form-check-label">b. 70 - 90%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="c,25">
                                                <label class="form-check-label">c. 50 - 69 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p19"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 50% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        20. Capaian target Sertifikasi Laik Higiene Sanitasi TPP
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="b,50">
                                                <label class="form-check-label">b. 51 - 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="c,25">
                                                <label class="form-check-label">c. 20 - 50 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p20"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 20% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        21. Kejadian Keracunan Pangan dalam 2 tahun terakhir
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="a,100">
                                                <label class="form-check-label">a. Tidak ada Kejadian
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p21"
                                                    value="b,0">
                                                <label class="form-check-label">b. Ada Kejadian
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        22. Penataan Sentra Pangan Jajanan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 3 sentra
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="b,50">
                                                <label class="form-check-label">b. 2 - 3 sentra
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="c,25">
                                                <label class="form-check-label">c. 1 sentra
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p22"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.2 Implementasi
                                Desa/Kelurahan Sehat Iklim</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        23. Desa / kelurahan sehat iklim
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="a,100">
                                                <label class="form-check-label">a. Memiliki
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p23"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak memiliki
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VII. Pengendalian
                                Penyakit Menular Langsung</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        24. Persentase pemberian oralit dan zinc 100% pada balita penderita diare
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p24"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p24"
                                                    value="b,0">
                                                <label class="form-check-label">b. < 80% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        25. Persentase fasilitas pelayanan kesehatan mampu test dan pengobatan HIV
                                        dan Penyakit Infeksi Menular Seksual (PIMS)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50 - 70%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p25"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        26. Persentase angka keberhasilan pengobatan TBC
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 90%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="b,50">
                                                <label class="form-check-label">b. 85 - 89%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="c,25">
                                                <label class="form-check-label">c. 50 - 84%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p26"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 50% </label>
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VIII. Pengendalian
                                Penyakit Tidak Menular</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        27. Persentase penderita Diabetes Melitus (DM) yang mendapatkan pelayanan
                                        kesehatan sesuai standar
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p27"
                                                    value="c,0">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        28. Persentase penderita Hipertensi yang mendapatkan pelayanan kesehatan
                                        sesuai standar
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p28"
                                                    value="c,0">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        29. Penerapan Kawasan Tanpa Rokok/KTR
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="a,100">
                                                <label class="form-check-label">a. Penerapan KTR di 7 lokus/lokasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="b,75">
                                                <label class="form-check-label">b. Penerapan KTR di 5 - 6
                                                    lokus/lokasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="c,50">
                                                <label class="form-check-label">c. Penerapan KTR di 3 - 4
                                                    lokus/lokasi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="d,25">
                                                <label class="form-check-label">d. Penerapan KTR pada < 2 lokus/lokasi
                                                        </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p29"
                                                    value="e,0">
                                                <label class="form-check-label">e. Tidak ada penerapan KTR
                                                </label>
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        30. Keberadaan pelarangan iklan rokok
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="a,100">
                                                <label class="form-check-label">a. Adanya regulasi dan penegakan
                                                    larangan iklan rokok di wilayah kabupaten / kota
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="b,50">
                                                <label class="form-check-label">b. Adanya regulasi tapi belum ada
                                                    penegakan larangan iklan rokok di wilayah kabupaten/kota
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p30"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada regulasi larangan
                                                    iklan rokok
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">IX. Pencegahan Dan
                                Pengendalian Penyakit Tular Vektor Dan Zoonosis</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">9.1 Pengendalian Vektor
                                Dan Binatang Pembawa Penyakit</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        31. Angka Bebas Jentik (ABJ)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 95%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p31"
                                                    value="b,0">
                                                <label class="form-check-label">b. < 95% </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        32. Indeks habitat anopheles
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="a,100">
                                                <label class="form-check-label">a. < 1% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="b,50">
                                                <label class="form-check-label">b. 1% - 5%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p32"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 5%
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">9.2 Endemis Malaria
                                Kabupaten/Kota</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        33. Pencapaian indikator Annual Parasite Incidence (API) atau incidence
                                        malaria pada suatu daerah tertentu
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="a,100">
                                                <label class="form-check-label">a. API < 1% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="b,50">
                                                <label class="form-check-label">b. API 1-5%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p33"
                                                    value="c,0">
                                                <label class="form-check-label">c. API >5%
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        34. Telah menerima sertifikat eliminasi malaria
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="a,100">
                                                <label class="form-check-label">a. Sudah menerima
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p34"
                                                    value="b,0">
                                                <label class="form-check-label">b. Belum menerima
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">9.3 Angka Kesakitan DBD
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        35. Angka kesakitan Dengue
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="a,100">
                                                <label class="form-check-label">a. Kurang dari 49 per 100.000
                                                    penduduk
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p35"
                                                    value="b,0">
                                                <label class="form-check-label">b. Lebih dari 49 per 100.00
                                                    penduduk
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">9.4 Pemberantasan Sarang
                                Nyamuk (PSN)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        36. Kegiatan pemberantasan sarang nyamuk (PSN) melalui Gerakan Satu Rumah
                                        Satu Jumantik
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, dilakukan secara rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, tidak dilakukan rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p36"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada kegiatan PSN
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">9.5 Indikator Rabies</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        37. Pencapaian indikator Gigitan Hewan Penular Rabies (GHPR) ditangani dari
                                        jumlah kasus yang dilaporkan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="a,100">
                                                <label class="form-check-label">a. 100%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p37"
                                                    value="c,0">
                                                <label class="form-check-label">c. Kurang dari 50%
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        38. Angka kematian penderita leptospirosis
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="a,100">
                                                <label class="form-check-label">a. Kurang dari 7%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p38"
                                                    value="b,0">
                                                <label class="form-check-label">b. Lebih dari 7%
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        39. Angka Eliminasi Filariasis/kaki gajah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p39"
                                                    value="a,100">
                                                <label class="form-check-label">a. Tercapai
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p39"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak Tercapai
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        40. Indikator Kecacingan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="a,100">
                                                <label class="form-check-label">a. < 1% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="b,50">
                                                <label class="form-check-label">b. 1-10%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p40"
                                                    value="c,0">
                                                <label class="form-check-label">c. > 10%
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">X. Pencegahan Dan
                                Pengendalian Kesehatan Jiwa Dan Napza</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.1 Pelayanan Kesehatan
                                Jiwa Dan Napza Di Puskesmas</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        41. Kebijakan Pemerintah Daerah dalam pencegahan dan penanggulangan
                                        penyalahgunaan Napza
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p41"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada Regulasi/Kebijakan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p41"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada kebijakan
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        42. Kegiatan edukasi bahaya penyalahgunaan Napza oleh Pemerintah Daerah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="a,100">
                                                <label class="form-check-label">a. Dilaksanakan secara terencana
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="b,50">
                                                <label class="form-check-label">b. Dilaksanakan tanpa rencana
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p42"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak dilaksanakan.
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        43. Persentase Puskesmas yang melaksanakan deteksi dini penyalahgunaan Napza
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 75%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="b,75">
                                                <label class="form-check-label">b. 50-75%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="c,50">
                                                <label class="form-check-label">c. 25-50%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p43"
                                                    value="d,25">
                                                <label class="form-check-label">d. < 25% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.2 Rehabilitasi Medis
                                Penyalahguna Napza</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        44. Persentase Institusi Penerima Wajib Lapor (IPWL) yang aktif melaksanakan
                                        rehabilitasi medis Napza
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p44"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 50 %
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p44"
                                                    value="b,50">
                                                <label class="form-check-label">b. < 50% </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p44"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.3 Upaya Tim Pelaksana
                                Kesehatan Jiwa Masyarakat (TPKJM)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        45. Pelaksanaan kesehatan jiwa masyarakat melalui TPKJM
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p45"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada SK TPKJM dan sudah
                                                    diimplementasikan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p45"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada SK TPKJM tapi belum
                                                    diimplementasikan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p45"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada SK TPKJM
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">10.4 Persentase Desa Siaga
                                Sehat Jiwa (DSSJ)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        46. Persentase desa siaga sehat jiwa (DSSJ)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p46"
                                                    value="a,100">
                                                <label class="form-check-label">a. 100%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p46"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 -99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p46"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">XI. Pelayanan Pengobatan
                                Dan Perawatan</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">11.1 Pelayanan Kesehatan
                                Tradisional Di Puskesmas</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        47. Persentase Puskesmas yang membina kelompok asuhan mandiri kesehatan
                                        tradisional
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p47"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 25%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p47"
                                                    value="b,50">
                                                <label class="form-check-label">b. 10 - 24%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p47"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 10% </label>
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        48. Persentase Puskesmas yang menyelenggarakan pelayanan kesehatan
                                        tradisional (Akupressure/ Akupuntur/ Pijat Baduta)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p48"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 25%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p48"
                                                    value="b,50">
                                                <label class="form-check-label">b. 10 - 24%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p48"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 10% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">11.2 Ruamg Terbuka Hijau
                                Di Rumah Sakit</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        49. Persentase rumah sakit yang memiliki ruang terbuka hijau sebagai taman
                                        obat dan healing garden
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p49"
                                                    value="a,100">
                                                <label class="form-check-label">a. 100%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p49"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 99%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p49"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">XII. Upaya Kesehatan
                                Bersumber Daya Masyarakat (UKBM)</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">12.1 Posyandu</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        50. Persentase posyandu aktif di Kabupaten/Kota
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p50"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p50"
                                                    value="b,0">
                                                <label class="form-check-label">b. < 80% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">12.2 Posbindu</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        51. Persentase deteksi dini di Posbindu setiap bulan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p51"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p51"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50 - 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p51"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">12.3 Posyandu Lansia</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        52. Persentase Posyandu Lansia aktif
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p52"
                                                    value="a,100">
                                                <label class="form-check-label">a. > 60%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p52"
                                                    value="b,50">
                                                <label class="form-check-label">b. 50-60%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p52"
                                                    value="c,25">
                                                <label class="form-check-label">c. < 50% </label>
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">XIII. Fasyankes (Rumah
                                Sakit Dan Puskesmas)</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">13.1 Pengelolaan Limbah
                                Medis Oleh Fasyankes</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        53. Rumah Sakit dan Puskesmas telah mengelola limbah medis sesuai standar
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya, ≥ 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="b,75">
                                                <label class="form-check-label">b. Ya, 60% - 79%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="c,50">
                                                <label class="form-check-label">c. Ya, 40% - 59%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p53"
                                                    value="d,25">
                                                <label class="form-check-label">d. Ya, < 40% </label>
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">13.2 Persyaratan Kesling
                                Fasyankes</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        54. Rumah sakit dan Puskesmas telah memenuhi persyaratan kesling sesuai
                                        standar IKL Rumah Sakit Puskesmas dan intervensi perbaikan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ya, ≥ 80%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="b,75">
                                                <label class="form-check-label">b. Ya, 50% - 79%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="c,50">
                                                <label class="form-check-label">c. Ya, 20% - 49%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p54"
                                                    value="d,25">
                                                <label class="form-check-label">d. Ya, tapi hanya < 20% </label>
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
                            <h5 class="fw-bold d-flex align-items-center text-dark">13.3 Komitmen Pemerintah
                                Daerah Dalam Pengelolaan Limbah Bahan Berbahaya Beracun (B3)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        55. Regulasi/Kebijakan pengelolaan limbah B3
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p55"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p55"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        56. Tersedianya depo / tempat pengumpulan limbah B3 yang memenuhi syarat
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p56"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada, berfungsi, mencukupi
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p56"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada, berfungsi, tidak mencukupi
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        57. Melakukan pengolahan limbah B3 di Fasyankes secara mandiri atau
                                        kerjasama dengan pihak ke-3 berizin
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p57"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p57"
                                                    value="b,0">
                                                <label class="form-check-label">b. Tidak ada
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
                        <!--begin::Heading-->
                        <div class="separator separator-dashed my-4"></div>
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">XIV. Ketahanan Pangan
                                Dan Gizi</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">14.1 Ketersediaan Pangan
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        58. Rasio ketersediaan pangan terhadap kebutuhan komoditas pangan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p58"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 125%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p58"
                                                    value="b,50">
                                                <label class="form-check-label">b. 100-125%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p58"
                                                    value="c,0">
                                                <label class="form-check-label">c. ≤ 100%
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        59. Tingkat ketersediaan energi
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p59"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 2400 kkal/kapita/hari
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p59"
                                                    value="b,50">
                                                <label class="form-check-label">b. 2100-2400 kkal/kapita/hari
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p59"
                                                    value="c,0">
                                                <label class="form-check-label">c. < 2100 kkal/kapita/hari </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        60. Penurunan jumlah penduduk rentan rawan pangan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p60"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 1.5%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p60"
                                                    value="b,50">
                                                <label class="form-check-label">b. 0 - 1.5%
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p60"
                                                    value="c,0">
                                                <label class="form-check-label">c. 0%
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">14.2 Lembaga Distribusi
                                Dan Harga Pangan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        61. Keberadaan cadangan pangan pemerintah daerah (CPPD)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="a,100">
                                                <label class="form-check-label">a. Memiliki stok CPPD dan regulasi
                                                    perda
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="b,80">
                                                <label class="form-check-label">b. Memiliki stok CPPD dan regulasi
                                                    non perda
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="c,60">
                                                <label class="form-check-label">c. Memiliki stok CPPD
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="d,40">
                                                <label class="form-check-label">d. Memiliki regulasi perda
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="e,20">
                                                <label class="form-check-label">e. Memiliki regulasi non perda
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p61"
                                                    value="f,0">
                                                <label class="form-check-label">f. Tidak memiliki stok dan
                                                    regulasi
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        62. Stabilisasi harga di tingkat konsumen
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p62"
                                                    value="a,100">
                                                <label class="form-check-label">a. harga eceran lebih kecil HET
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p62"
                                                    value="b,50">
                                                <label class="form-check-label">b. harga eceran sama dengan HET
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p62"
                                                    value="c,0">
                                                <label class="form-check-label">c. harga eceran lebih besar dari
                                                    HET
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">14.3 Penganekaragaman
                                Konsumsi Pangan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        63. Skor Pola Pangan Harapan (PPH) berdasarkan Angka Kecukupan Energi (AKE)
                                        2100 Kkal/kap/hari
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p63"
                                                    value="a,100">
                                                <label class="form-check-label">a. ≥ 90.0
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p63"
                                                    value="b,50">
                                                <label class="form-check-label">b. 85.0 - 90.0
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p63"
                                                    value="c,25">
                                                <label class="form-check-label">c. 80.0 - 85.0
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p63"
                                                    value="d,0">
                                                <label class="form-check-label">d. < 80.0 </label>
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        64. Program Food Loss dan Food Waste
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p64"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada program food loss dan food
                                                    waste
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p64"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada program food loss
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p64"
                                                    value="c,50">
                                                <label class="form-check-label">c. Ada program food waste
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p64"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada program
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        65. Penanganan diversifikasi pangan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p65"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada regulasi dan berjalan aktif
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p65"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada regulasi tapi tidak
                                                    berjalan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p65"
                                                    value="c,50">
                                                <label class="form-check-label">c. Tidak ada regulasi tapi
                                                    berjalan aktif
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p65"
                                                    value="d,0">
                                                <label class="form-check-label">d. Tidak ada regulasi dan kegiatan
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
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">14.4 Keamanan Pangan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        66. Adanya pengawasan keamanan pangan
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p66"
                                                    value="a,100">
                                                <label class="form-check-label">a. Lebih dari 1 kali per bulan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p66"
                                                    value="b,50">
                                                <label class="form-check-label">b. 1 kali per bulan
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p66"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak rutin dilakukan
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
                        <!--begin::Input group-->
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        67. Keberadaan penyuluhan pengendalian hama terpadu, penggunaan pestisida
                                        dan pertanian organik oleh pemerintah
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p67"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dilakukan secara rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p67"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada tapi tidak dilakukan rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p67"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada penyuluhan
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
                        <form action="{{ route('tatananOne.update', $tatananOne->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="fv-row">
                                <!--begin::Row-->
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        68. Jaminan keamanan pangan yang beredar (pre-market)
                                        <div class="fluid-container pt-4 pb-2">
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p68"
                                                    value="a,100">
                                                <label class="form-check-label">a. Ada dilakukan secara rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p68"
                                                    value="b,50">
                                                <label class="form-check-label">b. Ada tapi tidak dilakukan rutin
                                                </label>
                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                <input class="form-check-input" type="radio" name="p68"
                                                    value="c,0">
                                                <label class="form-check-label">c. Tidak ada
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
