<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 9</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 9</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Pencegahan Dan Penanganan Bencana</span>
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

        <!--begin::Filter-->
        <form class="form" action="{{ route('tatananNine.filter') }}" method="GET" autocomplete="off">
            <!--begin::Card1-->
            <div class="card mb-10">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Form-->
                <div class="mb-4">
                    <label class="form-label fs-7 required">Tahun Periode</label>
                    <div class="input-group">
                        <select class="form-select form-select-sm form-select-solid" name="filter_period"
                            id="filter_period" data-placeholder="Tahun Periode" required>
                            <option value="" selected hidden>Pilih Tahun Periode</option>
                            @foreach ($settings as $setting)
                                <option value="{{ $setting->id }}">
                                    {{ $setting->period }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--end::Form-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-4">
                <button type="submit" class="btn btn-sm btn-primary">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"/>
                        </svg>
                    </span>Filter</button>
            </div>
            <!--end::Card footer-->
            </div>
            <!--end::Card1-->
        </form>
        <!--end::Filter-->
        
        <!--begin::Card2-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <h5 class="fw-bold d-flex align-items-center text-dark">Data Tahun Periode {{$period->period}}</h5>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Form-->
                <div class="mx-auto mw-1000px w-100 pt-5 pb-5">
                    <!--begin::Wrapper-->
                    <div class="w-100">

                        @if (Auth::user()->id == '3' || Auth::user()->id == '10' || Auth::user()->hasAnyRole('administrator'))
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

                        @if (Auth::user()->id == '10' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">I. Penanggulangan Bencana
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">1.1 Komitmen Pemerintah Daerah
                                </h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            1. Adanya regulasi penanggulangan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="a,100"
                                                        {{ $tatananNine->p1 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada regulasi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="b,0" {{ $tatananNine->p1 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada regulasi
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p1_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p1_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p1 != null)
                                                    Nilai : {{ substr($tatananNine->p1, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p1 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p1) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p1 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p1) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            2. Upaya pencegahan dan penanggulangan bencana masuk ke dalam dokumen
                                            perencanaan daerah (seperti RPJMD, Renstra dan RKPD)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="a,100"
                                                        {{ $tatananNine->p2 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Upaya pencegahan masuk dalam
                                                        semua
                                                        dokumen perencanaan daerah (RPJMD, Renstra dan RKPD)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="b,50"
                                                        {{ $tatananNine->p2 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Upaya pencegahan masuk dalam
                                                        dokumen
                                                        perencanaan daerah tapi hanya dalam RPJMD, Renstra saja
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="c,75"
                                                        {{ $tatananNine->p2 == 'c,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Upaya pencegahan masuk dalam
                                                        dokumen
                                                        perencanaan daerah tapi hanya dalam RPJMD saja
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="d,0"
                                                        {{ $tatananNine->p2 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Upaya pencegahan tidak masuk
                                                        dalam
                                                        dokumen perencanaan daerah
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p2_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p2_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p2 != null)
                                                    Nilai : {{ substr($tatananNine->p2, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p2 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p2) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p2 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p2) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            3. Adanya Badan/Unit Kerja yang menangani Penanggulangan Bencana Daerah
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="a,100"
                                                        {{ $tatananNine->p3 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="b,0"
                                                        {{ $tatananNine->p3 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p3_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p3_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p3 != null)
                                                    Nilai : {{ substr($tatananNine->p3, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p3 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p3) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p3 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p3) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            4. Adanya Tim/Unit Reaksi Cepat (TRC) dalam penanggulangan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="a,100"
                                                        {{ $tatananNine->p4 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Semua kluster ada TRC
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="b,50"
                                                        {{ $tatananNine->p4 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak semua cluster memiliki TRC
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="c,0"
                                                        {{ $tatananNine->p4 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada TRC
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p4_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p4_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p4 != null)
                                                    Nilai : {{ substr($tatananNine->p4, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p4 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p4) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p4 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p4) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            5. Adanya rencana penanggulangan bencana dan rencana penanggulangan
                                            kedaruratan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="a,100"
                                                        {{ $tatananNine->p5 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,0"
                                                        {{ $tatananNine->p5 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p5_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p5_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p5 != null)
                                                    Nilai : {{ substr($tatananNine->p5, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p5 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p5) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p5 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p5) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            6. Memiliki rencana kontingensi bencana daerah menurut hazard
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="a,100"
                                                        {{ $tatananNine->p6 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, dan dilakukan review
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,50"
                                                        {{ $tatananNine->p6 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, belum dilakukan review
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="c,0"
                                                        {{ $tatananNine->p6 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p6_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p6_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p6 != null)
                                                    Nilai : {{ substr($tatananNine->p6, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p6 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p6) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p6 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p6) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            7. Melakukan kegiatan simulasi tanggap penanggulangan bencana minimal 1 kali
                                            dalam setahun.
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="a,100"
                                                        {{ $tatananNine->p7 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,0"
                                                        {{ $tatananNine->p7 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p7_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p7_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p7 != null)
                                                    Nilai : {{ substr($tatananNine->p7, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p7 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p7) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p7 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p7) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">II. Upaya Penanggulangan
                                    Bencana
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            8. Keberadaan persediaan logistik dan peralatan yang mencukupi di
                                            masing-masing klaster daerah rawan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="a,100"
                                                        {{ $tatananNine->p8 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada dan jumlahnya cukup
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,50"
                                                        {{ $tatananNine->p8 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada dan jumlahnya tidak cukup
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="c,0"
                                                        {{ $tatananNine->p8 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada persediaan logistik
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p8_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p8_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p8 != null)
                                                    Nilai : {{ substr($tatananNine->p8, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p8 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p8) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p8 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p8) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            9. Upaya program penguatan dan pemulihan sosial untuk korban bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="a,100"
                                                        {{ $tatananNine->p9 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada dan terealisasi secara rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,0"
                                                        {{ $tatananNine->p9 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada tapi tidak terealisasi
                                                        secara
                                                        rutin
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p9_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p9_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p9 != null)
                                                    Nilai : {{ substr($tatananNine->p9, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p9 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p9) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p9 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p9) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            10. Persentase desa/kelurahan tangguh bencana (Destana) yang sudah
                                            menerapkan Standar Nasional Indonesia/SNI sebagai acuan bersama dalam
                                            melakukan upaya pengelolaan resiko bencana di daerah rawan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="a,100"
                                                        {{ $tatananNine->p10 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Minimal 51% kategori
                                                        desa/kelurahan
                                                        pratama dari seluruh desa rawan bencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="b,50"
                                                        {{ $tatananNine->p10 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 30-50% kategori desa/kelurahan
                                                        pratama
                                                        dari seluruh desa rawan bencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="c,25"
                                                        {{ $tatananNine->p10 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Kurang dari 30% kategori
                                                        desa/kelurahan
                                                        pratama dari seluruh desa rawan bencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="d,0"
                                                        {{ $tatananNine->p10 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada desa/kelurahan tangguh
                                                        bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p10_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p10_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p10 != null)
                                                    Nilai : {{ substr($tatananNine->p10, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p10 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p10) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p10 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p10) }}"
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
                        @if (Auth::user()->id == '3' || Auth::user()->id == '10' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">III. Peringatan Dini
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        @endif
                        @if (Auth::user()->id == '10' || Auth::user()->hasAnyRole('administrator'))
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Komunikasi Dan Informasi
                                    Bencana Alam</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            11. Adanya sistem peringatan dini terintegrasi sesuai ancaman bencana
                                            wilayahnya (EWS longsor, EWS banjir, EWS tsunami)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="a,100"
                                                        {{ $tatananNine->p11 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada sistem peringatan dini
                                                        terintegrasi
                                                        dan berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="b,50"
                                                        {{ $tatananNine->p11 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada sistem peringatan dini
                                                        terintegrasi
                                                        tapi tidak berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="c,0"
                                                        {{ $tatananNine->p11 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada sistem peringatan dini
                                                        terintegrasi
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p11_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p11_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p11 != null)
                                                    Nilai : {{ substr($tatananNine->p11, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p11 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p11) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p11 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p11) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            12. Adanya rambu dan papan informasi peringatan dini bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="a,100"
                                                        {{ $tatananNine->p12 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada rambu peringatan dini
                                                        bencana,
                                                        jumlahnya memadai yang dipasang di lokasi strategis
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="b,50"
                                                        {{ $tatananNine->p12 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada rambu peringatan dini
                                                        bencana,
                                                        tapi
                                                        jumlahnya terbatas
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="c,0"
                                                        {{ $tatananNine->p12 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada rambu peringatan dini
                                                        bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p12_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p12_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p12 != null)
                                                    Nilai : {{ substr($tatananNine->p12, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p12 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p12) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p12 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p12) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            13. Pelaksanaan diseminasi informasi peringatan dini kepada stakeholder
                                            terkait dan masyarakat
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="a,100"
                                                        {{ $tatananNine->p13 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada kegiatan diseminasi
                                                        informasi
                                                        peringatan dini bencana secara berkala
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="b,50"
                                                        {{ $tatananNine->p13 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada kegiatan diseminasi
                                                        informasi
                                                        peringatan dini bencana tapi belum dilakukan secara berkala
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="c,0"
                                                        {{ $tatananNine->p13 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada kegiatan diseminasi
                                                        informasi
                                                        peringatan dini bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p13_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p13_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p13 != null)
                                                    Nilai : {{ substr($tatananNine->p13, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p13 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p13) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p13 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p13) }}"
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
                                <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Peta Rawan Bencana Alam
                                </h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            14. Keberadaan peta rawan bencana daerah
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="a,100"
                                                        {{ $tatananNine->p14 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada peta rawan bencana yang
                                                        terdokumentasikan dengan baik dan tersosialisasikan secara rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,50"
                                                        {{ $tatananNine->p14 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada peta rawan bencana tapi
                                                        belum
                                                        terdokumentasikan dengan baik dan belum tersosialisasikan secara
                                                        rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="c,0"
                                                        {{ $tatananNine->p14 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada peta rawan bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p14_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p14_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p14 != null)
                                                    Nilai : {{ substr($tatananNine->p14, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p14 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p14) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p14 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p14) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            15. Perencanaan wilayah/tata ruang yang telah mengacu pada peta rawan
                                            bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="a,100"
                                                        {{ $tatananNine->p15 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada perencanaan wilayah/tata
                                                        ruang
                                                        telah
                                                        mengikuti peta rawan bencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,0"
                                                        {{ $tatananNine->p15 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada perencanaan
                                                        wilayah/tata
                                                        ruang
                                                        telah mengikuti peta rawan bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p15_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p15_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p15 != null)
                                                    Nilai : {{ substr($tatananNine->p15, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p15 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p15) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p15 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p15) }}"
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
                                <h5 class="fw-bold d-flex align-items-center text-dark">3.3 Implementasi Sistem
                                    Kewaspadaan
                                    Dini Dan Respon (SKDR) Bencana Non Alam</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            16. Tersedianya SKDR sebagai sistem pemantauan perkembangan trend suatu
                                            penyakit menular yang potensial KLB/wabah dari waktu ke waktu
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="a,100"
                                                        {{ $tatananNine->p16 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada SKDR dan sistem
                                                        pemantauannya
                                                        berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,50"
                                                        {{ $tatananNine->p16 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada SKDR dan sistem
                                                        pemantauannya
                                                        tidak
                                                        berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="c,0"
                                                        {{ $tatananNine->p16 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada SKDR
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p16_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p16_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p16 != null)
                                                    Nilai : {{ substr($tatananNine->p16, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p16 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p16) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p16 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p16) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            17. Capaian Respon Alert (sinyal) SKDR
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="a,100"
                                                        {{ $tatananNine->p17 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Capaian persentase Respon Alert
                                                        >=
                                                        90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="b,50"
                                                        {{ $tatananNine->p17 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Capaian persentase Respon Alert
                                                        <= 90% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="c,0"
                                                        {{ $tatananNine->p17 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p17_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p17_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p17 != null)
                                                    Nilai : {{ substr($tatananNine->p17, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p17 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p17) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p17 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p17) }}"
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
                        @if (Auth::user()->id == '10' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Peningkatan Kapasitas
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">4.1 Satuan Pendidikan Aman
                                    Bencana
                                </h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            18. Persentase penyelenggaraan program Satuan Pendidikan Aman Bencana (SPAB)
                                            di sekolah pada daerah rawan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="a,100"
                                                        {{ $tatananNine->p18 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Minimal 51% Satuan Pendidikan
                                                        Aman
                                                        Bencana (SPAB)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="b,50"
                                                        {{ $tatananNine->p18 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 30-50% Satuan Pendidikan Aman
                                                        Bencana
                                                        (SPAB)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="c,25"
                                                        {{ $tatananNine->p18 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Kurang dari 30% Satuan
                                                        Pendidikan
                                                        Aman
                                                        Bencana (SPAB)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="d,0"
                                                        {{ $tatananNine->p18 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p18_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p18_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p18 != null)
                                                    Nilai : {{ substr($tatananNine->p18, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p18 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p18) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p18 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p18) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            19. Adanya fasilitas sarana prasarana pendidikan yang aman dari resiko
                                            bencana di setiap satuan pendidikan
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="a,100"
                                                        {{ $tatananNine->p19 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="b,0"
                                                        {{ $tatananNine->p19 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p19_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p19_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p19 != null)
                                                    Nilai : {{ substr($tatananNine->p19, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p19 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p19) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p19 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p19) }}"
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
                                <h5 class="fw-bold d-flex align-items-center text-dark">4.2 Pemberdayaan Masyarakat
                                    Tentang
                                    Penanggulangan Bencana (Masyarakat Tanggap Bencana)</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            20. Memiliki Forum Pengurangan Risiko Bencana (FPRB) sebagai upaya
                                            pemberdayaan masyarakat dalam penanggulangan bencana di Kawasan Rawan
                                            Bencana (KRB)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="a,100"
                                                        {{ $tatananNine->p20 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, kegiatannya aktif dan
                                                        rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="b,50"
                                                        {{ $tatananNine->p20 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, tapi kegiatannya tidak
                                                        aktif
                                                        dan
                                                        rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="c,0"
                                                        {{ $tatananNine->p20 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p20_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p20_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p20 != null)
                                                    Nilai : {{ substr($tatananNine->p20, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p20 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p20) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p20 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p20) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">V. Mitigasi & Kesiapsiagaan
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Kerjasama Daerah Yang
                                    Berbatasan Dalam Penanggulangan Bencana</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            21. Melakukan kerjasama dengan pemerintah daerah lain yang berbatasan dengan
                                            kawasan Rawan Bencana (KRB) dalam upaya penanggulangan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="a,100"
                                                        {{ $tatananNine->p21 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada kerjasama
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="b,0"
                                                        {{ $tatananNine->p21 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada kerjasama
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p21_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p21_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p21 != null)
                                                    Nilai : {{ substr($tatananNine->p21, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p21 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p21) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p21 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p21) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            22. Adanya kerjasama desa/kelurahan rawan bencana dengan desa/kelurahan
                                            sekitarnya dalam rangka penanggulangan bencana
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p22"
                                                        value="a,100"
                                                        {{ $tatananNine->p22 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada kerjasama
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p22"
                                                        value="b,0"
                                                        {{ $tatananNine->p22 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak ada kerjasama
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p22_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p22_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p22 != null)
                                                    Nilai : {{ substr($tatananNine->p22, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p22 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p22) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p22 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p22) }}"
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
                            <form action="{{ route('tatananNine.update', $tatananNine->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            23. Jumlah kerjasama dalam upaya penanggulangan bencana dengan pihak lain
                                            (Melampirkan dokumen kerjasama/MOU)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p23"
                                                        value="a,100"
                                                        {{ $tatananNine->p23 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Minimal 5 pihak
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p23"
                                                        value="b,50"
                                                        {{ $tatananNine->p23 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Kurang dari 5 pihak
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p23"
                                                        value="c,0"
                                                        {{ $tatananNine->p23 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada kerjasama dengan
                                                        pihak
                                                        lain
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="required">Lampiran (PDF)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal lampiran pdf adalah 3MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p23_1" accept=".pdf">
                                            </div>
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p23_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananNine->p23 != null)
                                                    Nilai : {{ substr($tatananNine->p23, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachNine->p23 != null)
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNine->p23) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachNineNd->p23 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentNine/' . $attachNineNd->p23) }}"
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
