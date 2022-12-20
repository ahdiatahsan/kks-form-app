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

                        @if (Auth::user()->id == '2' ||
                            Auth::user()->id == '3' ||
                            Auth::user()->id == '14' ||
                            Auth::user()->id == '17' ||
                            Auth::user()->hasAnyRole('administrator'))
                            <!--begin::noQuestion-->
                            <!--end::noQuestion-->
                        @else
                            <!--begin::noQuestion-->
                            <div class="text-center">
                                <!--begin::Title-->
                                <h4 class="text-dark">Anda tidak memiliki pertanyaan pada tatanan ini.</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::noQuestion-->
                        @endif

                        @if (Auth::user()->id == '3' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p1 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada (Peraturan Daerah,
                                                        Perbub/Perwal, SK, SE)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="b,0" {{ $tatananOne->p1 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p1_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p1_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p1 != null)
                                                    Nilai : {{ substr($tatananOne->p1, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p1 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p1) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p1 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p1) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p2 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, tercantum di dokumen RPJMD,
                                                        RKPD, Renstra PD dan Renja PD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="b,50" {{ $tatananOne->p2 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, tercantum di dokumen RPJMD
                                                        dan RKPD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="c,25"
                                                        {{ $tatananOne->p2 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada tercantum di dokumen Renstra
                                                        PD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="d,0"
                                                        {{ $tatananOne->p2 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak tercantum di semua dokumen
                                                        perencanaan pembangunan daerah dan perencanaan perangkat daerah
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p2_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p2_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p2 != null)
                                                    Nilai : {{ substr($tatananOne->p2, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p2 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p2) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p2 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p2) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p3 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Adanya penggerakan 5 klaster
                                                        GERMAS
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="b,50"
                                                        {{ $tatananOne->p3 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Adanya penggerakan 3 - 4 klaster
                                                        GERMAS
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="c,25"
                                                        {{ $tatananOne->p3 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Adanya penggerakan 1 - 2 klaster
                                                        GERMAS
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="d,0"
                                                        {{ $tatananOne->p3 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada penggerakan klaster
                                                        GERMAS
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p3_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p3_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p3 != null)
                                                    Nilai : {{ substr($tatananOne->p3, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p3 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p3) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p3 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p3) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p4 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. IKS antara 0.8 - 1.0
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="b,50"
                                                        {{ $tatananOne->p4 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. IKS antara 0.5 - 0.7
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="c,25"
                                                        {{ $tatananOne->p4 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. IKS antara 0.3 - 0.4
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="d,0"
                                                        {{ $tatananOne->p4 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. IKS kurang dari 0.3
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p4_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p4_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p4 != null)
                                                    Nilai : {{ substr($tatananOne->p4, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p4 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p4) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p4 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p4) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p5 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,50"
                                                        {{ $tatananOne->p5 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="c,25"
                                                        {{ $tatananOne->p5 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25 - 49.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="d,0"
                                                        {{ $tatananOne->p5 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 25% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p5_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p5_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p5 != null)
                                                    Nilai : {{ substr($tatananOne->p5, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p5 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p5) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p5 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p5) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p6 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 86%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,50"
                                                        {{ $tatananOne->p6 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 86%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="c,25"
                                                        {{ $tatananOne->p6 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25 - 49.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="d,0"
                                                        {{ $tatananOne->p6 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 25% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p6_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p6_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p6 != null)
                                                    Nilai : {{ substr($tatananOne->p6, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p6 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p6) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p6 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p6) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p7 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,50"
                                                        {{ $tatananOne->p7 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 70 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="c,25"
                                                        {{ $tatananOne->p7 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 50 - 69.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="d,0"
                                                        {{ $tatananOne->p7 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p7_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p7_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p7 != null)
                                                    Nilai : {{ substr($tatananOne->p7, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p7 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p7) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p7 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p7) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p8 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 60%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,50"
                                                        {{ $tatananOne->p8 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 59.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="c,25"
                                                        {{ $tatananOne->p8 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 40 - 49.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="d,0"
                                                        {{ $tatananOne->p8 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 40% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p8_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p8_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p8 != null)
                                                    Nilai : {{ substr($tatananOne->p8, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p8 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p8) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p8 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p8) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p9 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 40%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,50"
                                                        {{ $tatananOne->p9 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 30 - 40%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="c,25"
                                                        {{ $tatananOne->p9 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 20 - 29.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="d,0"
                                                        {{ $tatananOne->p9 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 20% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p9_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p9_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p9 != null)
                                                    Nilai : {{ substr($tatananOne->p9, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p9 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p9) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p9 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p9) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p10 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="b,50"
                                                        {{ $tatananOne->p10 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 60 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="c,25"
                                                        {{ $tatananOne->p10 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 40 - 59%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="d,0"
                                                        {{ $tatananOne->p10 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 40% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p10_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p10_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p10 != null)
                                                    Nilai : {{ substr($tatananOne->p10, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p10 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p10) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p10 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p10) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p11 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. < 10% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="b,50"
                                                        {{ $tatananOne->p11 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 10 - 20%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="c,0"
                                                        {{ $tatananOne->p11 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. > 20%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p11_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p11_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p11 != null)
                                                    Nilai : {{ substr($tatananOne->p11, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p11 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p11) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p11 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p11) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p12 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. < 15% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="b,50"
                                                        {{ $tatananOne->p12 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 15 - 25%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="c,0"
                                                        {{ $tatananOne->p12 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. > 25%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p12_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p12_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p12 != null)
                                                    Nilai : {{ substr($tatananOne->p12, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p12 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p12) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p12 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p12) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p13 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 60%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="b,50"
                                                        {{ $tatananOne->p13 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 40 - 59%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="c,0"
                                                        {{ $tatananOne->p13 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 40% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p13_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p13_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p13 != null)
                                                    Nilai : {{ substr($tatananOne->p13, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p13 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p13) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p13 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p13) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p14 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,50"
                                                        {{ $tatananOne->p14 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 71- 90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="c,25"
                                                        {{ $tatananOne->p14 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 50 - 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="d,0"
                                                        {{ $tatananOne->p14 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p14_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p14_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p14 != null)
                                                    Nilai : {{ substr($tatananOne->p14, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p14 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p14) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p14 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p14) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p15 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. < 8% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,50"
                                                        {{ $tatananOne->p15 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 8 - 10%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="c,0"
                                                        {{ $tatananOne->p15 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. > 10%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p15_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p15_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p15 != null)
                                                    Nilai : {{ substr($tatananOne->p15, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p15 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p15) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p15 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p15) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p16 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. < 8% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,50"
                                                        {{ $tatananOne->p16 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 8 - 10%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="c,0"
                                                        {{ $tatananOne->p16 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. > 10%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p16_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p16_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p16 != null)
                                                    Nilai : {{ substr($tatananOne->p16, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p16 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p16) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p16 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p16) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->id == '14' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Kesehatan Lingkungan
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p17 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="b,50"
                                                        {{ $tatananOne->p17 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 60 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="c,25"
                                                        {{ $tatananOne->p17 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 40 - 59.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="d,0"
                                                        {{ $tatananOne->p17 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 40% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p17_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p17_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p17 != null)
                                                    Nilai : {{ substr($tatananOne->p17, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p17 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p17) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p17 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p17) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p18 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="b,50"
                                                        {{ $tatananOne->p18 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 60 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="c,25"
                                                        {{ $tatananOne->p18 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 40 - 59.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="d,0"
                                                        {{ $tatananOne->p18 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 40% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p18_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p18_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p18 != null)
                                                    Nilai : {{ substr($tatananOne->p18, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p18 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p18) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p18 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p18) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->id == '14' || Auth::user()->hasAnyRole('administrator'))
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">6.2 Laik Higiene Sanitasi
                                    Tempat Pengelolaan Pangan (TPP)</h5>
                                <!--end::Title-->
                            </div>
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p19 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="b,50"
                                                        {{ $tatananOne->p19 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 70 - 90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="c,25"
                                                        {{ $tatananOne->p19 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 50 - 69 %
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="d,0"
                                                        {{ $tatananOne->p19 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p19_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p19_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p19 != null)
                                                    Nilai : {{ substr($tatananOne->p19, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p19 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p19) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p19 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p19) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p20 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="b,50"
                                                        {{ $tatananOne->p20 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51 - 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="c,25"
                                                        {{ $tatananOne->p20 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 20 - 50 %
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="d,0"
                                                        {{ $tatananOne->p20 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 20% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p20_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p20_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p20 != null)
                                                    Nilai : {{ substr($tatananOne->p20, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p20 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p20) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p20 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p20) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p21 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Tidak ada Kejadian
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="b,0"
                                                        {{ $tatananOne->p21 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada Kejadian
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p21_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p21_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p21 != null)
                                                    Nilai : {{ substr($tatananOne->p21, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p21 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p21) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p21 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p21) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '14' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p22 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 3 sentra
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p22"
                                                        value="b,50"
                                                        {{ $tatananOne->p22 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 2 - 3 sentra
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p22"
                                                        value="c,25"
                                                        {{ $tatananOne->p22 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 1 sentra
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p22"
                                                        value="d,0"
                                                        {{ $tatananOne->p22 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p22_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p22_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p22 != null)
                                                    Nilai : {{ substr($tatananOne->p22, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p22 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p22) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p22 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p22) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->hasAnyRole('administrator'))
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">6.3 Implementasi
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
                                                        value="a,100"
                                                        {{ $tatananOne->p23 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Memiliki
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p23"
                                                        value="b,0"
                                                        {{ $tatananOne->p23 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak memiliki
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p23_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p23_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p23 != null)
                                                    Nilai : {{ substr($tatananOne->p23, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p23 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p23) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p23 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p23) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p24 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p24"
                                                        value="b,0"
                                                        {{ $tatananOne->p24 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. < 80% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p24_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p24_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p24 != null)
                                                    Nilai : {{ substr($tatananOne->p24, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p24 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p24) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p24 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p24) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p25 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p25"
                                                        value="b,75"
                                                        {{ $tatananOne->p25 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p25"
                                                        value="c,25"
                                                        {{ $tatananOne->p25 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p25_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p25_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p25 != null)
                                                    Nilai : {{ substr($tatananOne->p25, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p25 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p25) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p25 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p25) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p26 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p26"
                                                        value="b,50"
                                                        {{ $tatananOne->p26 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 85 - 89%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p26"
                                                        value="c,25"
                                                        {{ $tatananOne->p26 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 50 - 84%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p26"
                                                        value="d,0"
                                                        {{ $tatananOne->p26 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p26_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p26_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p26 != null)
                                                    Nilai : {{ substr($tatananOne->p26, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p26 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p26) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p26 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p26) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->id == '17' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VIII. Pengendalian
                                    Penyakit Tidak Menular</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p27 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p27"
                                                        value="b,50"
                                                        {{ $tatananOne->p27 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p27"
                                                        value="c,0"
                                                        {{ $tatananOne->p27 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p27_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p27_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p27 != null)
                                                    Nilai : {{ substr($tatananOne->p27, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p27 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p27) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p27 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p27) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p28 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p28"
                                                        value="b,50"
                                                        {{ $tatananOne->p28 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p28"
                                                        value="c,0"
                                                        {{ $tatananOne->p28 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p28_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p28_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p28 != null)
                                                    Nilai : {{ substr($tatananOne->p28, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p28 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p28) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p28 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p28) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p29 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Penerapan KTR di 7 lokus/lokasi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p29"
                                                        value="b,75"
                                                        {{ $tatananOne->p29 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Penerapan KTR di 5 - 6
                                                        lokus/lokasi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p29"
                                                        value="c,50"
                                                        {{ $tatananOne->p29 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Penerapan KTR di 3 - 4
                                                        lokus/lokasi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p29"
                                                        value="d,25"
                                                        {{ $tatananOne->p29 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Penerapan KTR pada < 2
                                                            lokus/lokasi </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p29"
                                                        value="e,0"
                                                        {{ $tatananOne->p29 == 'e,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">e. Tidak ada penerapan KTR
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p29_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p29_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p29 != null)
                                                    Nilai : {{ substr($tatananOne->p29, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p29 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p29) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p29 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p29) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '17' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p30 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Adanya regulasi dan penegakan
                                                        larangan iklan rokok di wilayah kabupaten / kota
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p30"
                                                        value="b,50"
                                                        {{ $tatananOne->p30 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Adanya regulasi tapi belum ada
                                                        penegakan larangan iklan rokok di wilayah kabupaten/kota
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p30"
                                                        value="c,0"
                                                        {{ $tatananOne->p30 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada regulasi larangan
                                                        iklan rokok
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p30_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p30_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p30 != null)
                                                    Nilai : {{ substr($tatananOne->p30, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p30 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p30) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p30 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p30) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p31 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. ≥ 95%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p31"
                                                        value="b,0"
                                                        {{ $tatananOne->p31 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. < 95% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p31_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p31_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p31 != null)
                                                    Nilai : {{ substr($tatananOne->p31, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p31 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p31) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p31 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p31) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p32 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. < 1% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p32"
                                                        value="b,50"
                                                        {{ $tatananOne->p32 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 1% - 5%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p32"
                                                        value="c,0"
                                                        {{ $tatananOne->p32 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. > 5%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p32_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p32_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p32 != null)
                                                    Nilai : {{ substr($tatananOne->p32, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p32 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p32) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p32 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p32) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p33 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. API < 1% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p33"
                                                        value="b,50"
                                                        {{ $tatananOne->p33 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. API 1-5%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p33"
                                                        value="c,0"
                                                        {{ $tatananOne->p33 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. API >5%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p33_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p33_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p33 != null)
                                                    Nilai : {{ substr($tatananOne->p33, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p33 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p33) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p33 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p33) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p34 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Sudah menerima
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p34"
                                                        value="b,0"
                                                        {{ $tatananOne->p34 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Belum menerima
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p34_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p34_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p34 != null)
                                                    Nilai : {{ substr($tatananOne->p34, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p34 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p34) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p34 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p34) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p35 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Kurang dari 49 per 100.000
                                                        penduduk
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p35"
                                                        value="b,0"
                                                        {{ $tatananOne->p35 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Lebih dari 49 per 100.00
                                                        penduduk
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p35_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p35_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p35 != null)
                                                    Nilai : {{ substr($tatananOne->p35, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p35 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p35) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p35 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p35) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p36 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, dilakukan secara rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p36"
                                                        value="b,50"
                                                        {{ $tatananOne->p36 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, tidak dilakukan rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p36"
                                                        value="c,0"
                                                        {{ $tatananOne->p36 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada kegiatan PSN
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p36_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p36_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p36 != null)
                                                    Nilai : {{ substr($tatananOne->p36, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p36 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p36) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p36 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p36) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p37 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. 100%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p37"
                                                        value="b,50"
                                                        {{ $tatananOne->p37 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50-99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p37"
                                                        value="c,0"
                                                        {{ $tatananOne->p37 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Kurang dari 50%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p37_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p37_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p37 != null)
                                                    Nilai : {{ substr($tatananOne->p37, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p37 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p37) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p37 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p37) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p38 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Kurang dari 7%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p38"
                                                        value="b,0"
                                                        {{ $tatananOne->p38 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Lebih dari 7%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p38_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p38_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p38 != null)
                                                    Nilai : {{ substr($tatananOne->p38, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p38 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p38) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p38 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p38) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p39 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Tercapai
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p39"
                                                        value="b,0"
                                                        {{ $tatananOne->p39 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak Tercapai
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p39_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p39_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p39 != null)
                                                    Nilai : {{ substr($tatananOne->p39, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p39 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p39) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p39 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p39) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p40 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. < 1% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p40"
                                                        value="b,50"
                                                        {{ $tatananOne->p40 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 1-10%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p40"
                                                        value="c,0"
                                                        {{ $tatananOne->p40 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. > 10%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p40_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p40_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p40 != null)
                                                    Nilai : {{ substr($tatananOne->p40, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p40 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p40) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p40 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p40) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p41 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada Regulasi/Kebijakan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p41"
                                                        value="b,0"
                                                        {{ $tatananOne->p41 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada kebijakan
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p41_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p41_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p41 != null)
                                                    Nilai : {{ substr($tatananOne->p41, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p41 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p41) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p41 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p41) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p42 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Dilaksanakan secara terencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p42"
                                                        value="b,50"
                                                        {{ $tatananOne->p42 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Dilaksanakan tanpa rencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p42"
                                                        value="c,0"
                                                        {{ $tatananOne->p42 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak dilaksanakan.
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p42_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p42_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p42 != null)
                                                    Nilai : {{ substr($tatananOne->p42, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p42 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p42) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p42 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p42) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p43 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 75%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p43"
                                                        value="b,75"
                                                        {{ $tatananOne->p43 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50-75%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p43"
                                                        value="c,50"
                                                        {{ $tatananOne->p43 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25-50%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p43"
                                                        value="d,25"
                                                        {{ $tatananOne->p43 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 25% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p43_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p43_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p43 != null)
                                                    Nilai : {{ substr($tatananOne->p43, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p43 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p43) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p43 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p43) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p44 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 50 %
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p44"
                                                        value="b,50"
                                                        {{ $tatananOne->p44 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. < 50% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p44"
                                                        value="c,0"
                                                        {{ $tatananOne->p44 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p44_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p44_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p44 != null)
                                                    Nilai : {{ substr($tatananOne->p44, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p44 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p44) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p44 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p44) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p45 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada SK TPKJM dan sudah
                                                        diimplementasikan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p45"
                                                        value="b,50"
                                                        {{ $tatananOne->p45 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada SK TPKJM tapi belum
                                                        diimplementasikan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p45"
                                                        value="c,0"
                                                        {{ $tatananOne->p45 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada SK TPKJM
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p45_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p45_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p45 != null)
                                                    Nilai : {{ substr($tatananOne->p45, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p45 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p45) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p45 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p45) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p46 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. 100%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p46"
                                                        value="b,50"
                                                        {{ $tatananOne->p46 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 -99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p46"
                                                        value="c,25"
                                                        {{ $tatananOne->p46 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p46_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p46_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p46 != null)
                                                    Nilai : {{ substr($tatananOne->p46, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p46 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p46) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p46 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p46) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p47 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 25%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p47"
                                                        value="b,50"
                                                        {{ $tatananOne->p47 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 10 - 24%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p47"
                                                        value="c,25"
                                                        {{ $tatananOne->p47 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 10% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p47_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p47_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p47 != null)
                                                    Nilai : {{ substr($tatananOne->p47, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p47 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p47) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p47 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p47) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p48 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 25%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p48"
                                                        value="b,50"
                                                        {{ $tatananOne->p48 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 10 - 24%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p48"
                                                        value="c,25"
                                                        {{ $tatananOne->p48 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 10% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p48_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p48_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p48 != null)
                                                    Nilai : {{ substr($tatananOne->p48, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p48 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p48) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p48 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p48) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p49 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. 100%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p49"
                                                        value="b,50"
                                                        {{ $tatananOne->p49 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p49"
                                                        value="c,25"
                                                        {{ $tatananOne->p49 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p49_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p49_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p49 != null)
                                                    Nilai : {{ substr($tatananOne->p49, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p49 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p49) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p49 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p49) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p50 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. ≥ 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p50"
                                                        value="b,0"
                                                        {{ $tatananOne->p50 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. < 80% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p50_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p50_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p50 != null)
                                                    Nilai : {{ substr($tatananOne->p50, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p50 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p50) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p50 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p50) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p51 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p51"
                                                        value="b,50"
                                                        {{ $tatananOne->p51 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p51"
                                                        value="c,25"
                                                        {{ $tatananOne->p51 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p51_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p51_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p51 != null)
                                                    Nilai : {{ substr($tatananOne->p51, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p51 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p51) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p51 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p51) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p52 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 60%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p52"
                                                        value="b,50"
                                                        {{ $tatananOne->p52 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50-60%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p52"
                                                        value="c,25"
                                                        {{ $tatananOne->p52 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p52_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p52_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p52 != null)
                                                    Nilai : {{ substr($tatananOne->p52, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p52 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p52) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p52 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p52) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p53 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ya, ≥ 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p53"
                                                        value="b,75"
                                                        {{ $tatananOne->p53 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ya, 60% - 79%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p53"
                                                        value="c,50"
                                                        {{ $tatananOne->p53 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ya, 40% - 59%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p53"
                                                        value="d,25"
                                                        {{ $tatananOne->p53 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Ya, < 40% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p53_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p53_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p53 != null)
                                                    Nilai : {{ substr($tatananOne->p53, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p53 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p53) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p53 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p53) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p54 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ya, ≥ 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p54"
                                                        value="b,75"
                                                        {{ $tatananOne->p54 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ya, 50% - 79%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p54"
                                                        value="c,50"
                                                        {{ $tatananOne->p54 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ya, 20% - 49%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p54"
                                                        value="d,25"
                                                        {{ $tatananOne->p54 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Ya, tapi hanya < 20% </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p54_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p54_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p54 != null)
                                                    Nilai : {{ substr($tatananOne->p54, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p54 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p54) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p54 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p54) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p55 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p55"
                                                        value="b,0"
                                                        {{ $tatananOne->p55 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p55_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p55_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p55 != null)
                                                    Nilai : {{ substr($tatananOne->p55, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p55 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p55) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p55 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p55) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p56 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, berfungsi, mencukupi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p56"
                                                        value="b,50"
                                                        {{ $tatananOne->p56 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, berfungsi, tidak mencukupi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p56"
                                                        value="c,0"
                                                        {{ $tatananOne->p56 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p56_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p56_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p56 != null)
                                                    Nilai : {{ substr($tatananOne->p56, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p56 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p56) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p56 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p56) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p57 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p57"
                                                        value="b,0"
                                                        {{ $tatananOne->p57 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p57_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p57_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p57 != null)
                                                    Nilai : {{ substr($tatananOne->p57, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p57 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p57) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p57 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p57) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
                        @if (Auth::user()->id == '2' || Auth::user()->hasAnyRole('administrator'))
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
                                                        value="a,100"
                                                        {{ $tatananOne->p58 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. ≥ 125%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p58"
                                                        value="b,50"
                                                        {{ $tatananOne->p58 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 100-125%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p58"
                                                        value="c,0"
                                                        {{ $tatananOne->p58 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. ≤ 100%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p58_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p58_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p58 != null)
                                                    Nilai : {{ substr($tatananOne->p58, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p58 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p58) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p58 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p58) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p59 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. ≥ 2400 kkal/kapita/hari
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p59"
                                                        value="b,50"
                                                        {{ $tatananOne->p59 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 2100-2400 kkal/kapita/hari
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p59"
                                                        value="c,0"
                                                        {{ $tatananOne->p59 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 2100 kkal/kapita/hari
                                                            </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p59_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p59_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p59 != null)
                                                    Nilai : {{ substr($tatananOne->p59, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p59 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p59) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p59 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p59) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p60 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. ≥ 1.5%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p60"
                                                        value="b,50"
                                                        {{ $tatananOne->p60 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 0 - 1.5%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p60"
                                                        value="c,0"
                                                        {{ $tatananOne->p60 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 0%
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p60_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p60_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p60 != null)
                                                    Nilai : {{ substr($tatananOne->p60, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p60 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p60) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p60 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p60) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p61 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Memiliki stok CPPD dan regulasi
                                                        perda
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p61"
                                                        value="b,80"
                                                        {{ $tatananOne->p61 == 'b,80' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Memiliki stok CPPD dan regulasi
                                                        non perda
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p61"
                                                        value="c,60"
                                                        {{ $tatananOne->p61 == 'c,60' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Memiliki stok CPPD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p61"
                                                        value="d,40"
                                                        {{ $tatananOne->p61 == 'd,40' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Memiliki regulasi perda
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p61"
                                                        value="e,20"
                                                        {{ $tatananOne->p61 == 'e,20' ? 'checked' : '' }}>
                                                    <label class="form-check-label">e. Memiliki regulasi non perda
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p61"
                                                        value="f,0"
                                                        {{ $tatananOne->p61 == 'f,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">f. Tidak memiliki stok dan
                                                        regulasi
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p61_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p61_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p61 != null)
                                                    Nilai : {{ substr($tatananOne->p61, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p61 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p61) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p61 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p61) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p62 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. harga eceran lebih kecil HET
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p62"
                                                        value="b,50"
                                                        {{ $tatananOne->p62 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. harga eceran sama dengan HET
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p62"
                                                        value="c,0"
                                                        {{ $tatananOne->p62 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. harga eceran lebih besar dari
                                                        HET
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p62_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p62_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p62 != null)
                                                    Nilai : {{ substr($tatananOne->p62, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p62 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p62) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p62 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p62) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p63 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. ≥ 90.0
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p63"
                                                        value="b,50"
                                                        {{ $tatananOne->p63 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 85.0 - 90.0
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p63"
                                                        value="c,25"
                                                        {{ $tatananOne->p63 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 80.0 - 85.0
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p63"
                                                        value="d,0"
                                                        {{ $tatananOne->p63 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 80.0 </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p63_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p63_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p63 != null)
                                                    Nilai : {{ substr($tatananOne->p63, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p63 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p63) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p63 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p63) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p64 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada program food loss dan food
                                                        waste
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p64"
                                                        value="b,50"
                                                        {{ $tatananOne->p64 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada program food loss
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p64"
                                                        value="c,50"
                                                        {{ $tatananOne->p64 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada program food waste
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p64"
                                                        value="d,0"
                                                        {{ $tatananOne->p64 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada program
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p64_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p64_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p64 != null)
                                                    Nilai : {{ substr($tatananOne->p64, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p64 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p64) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p64 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p64) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p65 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada regulasi dan berjalan aktif
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p65"
                                                        value="b,50"
                                                        {{ $tatananOne->p65 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada regulasi tapi tidak
                                                        berjalan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p65"
                                                        value="c,50"
                                                        {{ $tatananOne->p65 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada regulasi tapi
                                                        berjalan aktif
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p65"
                                                        value="d,0"
                                                        {{ $tatananOne->p65 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada regulasi dan kegiatan
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p65_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p65_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p65 != null)
                                                    Nilai : {{ substr($tatananOne->p65, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p65 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p65) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p65 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p65) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p66 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Lebih dari 1 kali per bulan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p66"
                                                        value="b,50"
                                                        {{ $tatananOne->p66 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 1 kali per bulan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p66"
                                                        value="c,0"
                                                        {{ $tatananOne->p66 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak rutin dilakukan
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p66_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p66_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p66 != null)
                                                    Nilai : {{ substr($tatananOne->p66, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p66 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p66) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p66 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p66) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p67 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada dilakukan secara rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p67"
                                                        value="b,50"
                                                        {{ $tatananOne->p67 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada tapi tidak dilakukan rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p67"
                                                        value="c,0"
                                                        {{ $tatananOne->p67 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada penyuluhan
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p67_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p67_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p67 != null)
                                                    Nilai : {{ substr($tatananOne->p67, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p67 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p67) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p67 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p67) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                                                        value="a,100"
                                                        {{ $tatananOne->p68 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada dilakukan secara rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p68"
                                                        value="b,50"
                                                        {{ $tatananOne->p68 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada tapi tidak dilakukan rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p68"
                                                        value="c,0"
                                                        {{ $tatananOne->p68 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p68_1" accept=".pdf">
                                            </div>
                                            <span class="required">Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p68_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananOne->p68 != null)
                                                    Nilai : {{ substr($tatananOne->p68, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachOne->p68 != null)
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOne->p68) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachOneNd->p68 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentOne/' . $attachOneNd->p68) }}"
                                                        target="_blank">Lihat Dokumentasi (img)</a>
                                                @endif
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
                        @endif
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
