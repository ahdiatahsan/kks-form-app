<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 3</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 3</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Pasar Rakyat</span>
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

                        @if (Auth::user()->id == '3' ||
                            Auth::user()->id == '9' ||
                            Auth::user()->id == '15' ||
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

                        @if (Auth::user()->id == '15' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">I. Regulasi Pasar Sehat
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            1. Keberadaan regulasi daerah tentang pasar sehat
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="a,100"
                                                        {{ $tatananThree->p1 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada (Perda, Perbup/Perwal, SK,
                                                        SE)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="b,0"
                                                        {{ $tatananThree->p1 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p1 != null)
                                                    Nilai : {{ substr($tatananThree->p1, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p1 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p1) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p1 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p1) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            2. Keberadaan regulasi penanganan PKL
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="a,100"
                                                        {{ $tatananThree->p2 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada (Perda, Perbup/Perwal, SK,
                                                        SE)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="b,0"
                                                        {{ $tatananThree->p2 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p2 != null)
                                                    Nilai : {{ substr($tatananThree->p2, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p2 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p2) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p2 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p2) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            3. Keberadaan program yang mendukung terkait Pasar Sehat dalam dokumen
                                            perencanaan daerah (RPJMD, RKPD, Renstra PD dan Renja PD)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="a,100"
                                                        {{ $tatananThree->p3 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, tercantum di dokumen RPJMD,
                                                        RKPD, Renstra PD dan Renja PD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="b,50"
                                                        {{ $tatananThree->p3 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, tercantum di dokumen RPJMD
                                                        dan RKPD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="c,25"
                                                        {{ $tatananThree->p3 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada tercantum di dokumen Renstra
                                                        PD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="d,0"
                                                        {{ $tatananThree->p3 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak tercantum di semua dokumen
                                                        perencanaan pembangunan daerah dan perencanaan perangkat daerah
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p3 != null)
                                                    Nilai : {{ substr($tatananThree->p3, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p3 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p3) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p3 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p3) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">II. Pokja Pasar Sehat
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            4. Persentase pasar yang memiliki Pokja dan aktif (memiliki rencana kerja
                                            dan terealisasi)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="a,100"
                                                        {{ $tatananThree->p4 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="b,50"
                                                        {{ $tatananThree->p4 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="c,0"
                                                        {{ $tatananThree->p4 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p4 != null)
                                                    Nilai : {{ substr($tatananThree->p4, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p4 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p4) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p4 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p4) }}"
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
                        @if (Auth::user()->id == '3' || Auth::user()->id == '15' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">III. Inspeksi Kesehatan
                                    Lingkungan (IKL)</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        @endif
                        @if (Auth::user()->id == '3' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            5. Persentase pasar yang memenuhi syarat sesuai IKL
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="a,100"
                                                        {{ $tatananThree->p5 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,50"
                                                        {{ $tatananThree->p5 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="c,0"
                                                        {{ $tatananThree->p5 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p5 != null)
                                                    Nilai : {{ substr($tatananThree->p5, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p5 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p5) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p5 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p5) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            6. Persentase pasar yang melakukan pengawasan internal
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="a,100"
                                                        {{ $tatananThree->p6 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80% pasar telah melakukan
                                                        pengawasan internal
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,50"
                                                        {{ $tatananThree->p6 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80% pasar telah melakukan
                                                        pengawasan internal
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="c,0"
                                                        {{ $tatananThree->p6 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% pasar telah melakukan
                                                            pengawasan internal </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p6 != null)
                                                    Nilai : {{ substr($tatananThree->p6, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p6 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p6) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p6 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p6) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            7. Komunikasi, Informasi dan Edukasi (KIE) kepada masyarakat pasar
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="a,100"
                                                        {{ $tatananThree->p7 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,0"
                                                        {{ $tatananThree->p7 == 'b,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Tidak Ada
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p7 != null)
                                                    Nilai : {{ substr($tatananThree->p7, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p7 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p7) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p7 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p7) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            8. Persentase pasar yang memiliki fasilitas ruang laktasi
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="a,100"
                                                        {{ $tatananThree->p8 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,50"
                                                        {{ $tatananThree->p8 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="c,0"
                                                        {{ $tatananThree->p8 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p8 != null)
                                                    Nilai : {{ substr($tatananThree->p8, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p8 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p8) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p8 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p8) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            9. Persentase pasar yang memiliki fasilitas ruang Kesehatan
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="a,100"
                                                        {{ $tatananThree->p9 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,50"
                                                        {{ $tatananThree->p9 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="c,0"
                                                        {{ $tatananThree->p9 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p9 != null)
                                                    Nilai : {{ substr($tatananThree->p9, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p9 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p9) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p9 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p9) }}"
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
                        @if (Auth::user()->id == '15' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            10. Adanya pengaturan dan penataan pedagang kaki lima (PKL)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="a,100"
                                                        {{ $tatananThree->p10 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada pengaturan dan penataan PKL,
                                                        kondisinya rapi dan bersih
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="b,50"
                                                        {{ $tatananThree->p10 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada pengaturan dan penataan PKL,
                                                        kondisinya rapi tapi tidak bersih
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="c,25"
                                                        {{ $tatananThree->p10 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada pengaturan dan penataan PKL,
                                                        tapi kondisinya tidak rapi dan tidak bersih
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="d,0"
                                                        {{ $tatananThree->p10 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada pengaturan dan
                                                        penataan PKL
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p10 != null)
                                                    Nilai : {{ substr($tatananThree->p10, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p10 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p10) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p10 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p10) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Kesehatan Dan
                                    Keselamatan Kerja Di Pasar</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            11. Persentase pasar yang menerapkan K3
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="a,100"
                                                        {{ $tatananThree->p11 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80% pasar menerapkan K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="b,75"
                                                        {{ $tatananThree->p11 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80% pasar menerapkan K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="c,50"
                                                        {{ $tatananThree->p11 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25% - 50% pasar menerapkan K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="d,25"
                                                        {{ $tatananThree->p11 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 25% pasar menerapkan K3
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p11 != null)
                                                    Nilai : {{ substr($tatananThree->p11, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p11 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p11) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p11 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p11) }}"
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
                        @if (Auth::user()->id == '9' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">V. Suplai Daging Dari
                                    Rumah Potong Hewan (RPH) Atau Distributor Yang Memiliki Nomor Kontrol Veteriner
                                    (NKV)</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            12. Persentase pasar yang menjual daging berasal dari RPH/distributor yang
                                            memiliki NKV
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="a,100"
                                                        {{ $tatananThree->p12 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="b,50"
                                                        {{ $tatananThree->p12 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="c,0"
                                                        {{ $tatananThree->p12 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p12 != null)
                                                    Nilai : {{ substr($tatananThree->p12, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p12 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p12) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p12 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p12) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            13. Persentase pasar yang menjual daging unggas berasal dari RPA/RPU yang
                                            memiliki NKV
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="a,100"
                                                        {{ $tatananThree->p13 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="b,50"
                                                        {{ $tatananThree->p13 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="c,0"
                                                        {{ $tatananThree->p13 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p13 != null)
                                                    Nilai : {{ substr($tatananThree->p13, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p13 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p13) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p13 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p13) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            14. Persentase pasar yang menjual unggas hidup di dalam pasar
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="a,100"
                                                        {{ $tatananThree->p14 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. < 25% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,50"
                                                        {{ $tatananThree->p14 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 26% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="c,0"
                                                        {{ $tatananThree->p14 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. > 80%
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p14 != null)
                                                    Nilai : {{ substr($tatananThree->p14, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p14 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p14) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p14 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p14) }}"
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
                        @if (Auth::user()->id == '15' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <div class="separator separator-dashed my-4"></div>
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Fasilitas Pasar Bagi
                                    Disabilitas</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            15. Persentase pasar yang memiliki infrastruktur yang ramah untuk kaum
                                            difabel
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="a,100"
                                                        {{ $tatananThree->p15 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,50"
                                                        {{ $tatananThree->p15 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="c,0"
                                                        {{ $tatananThree->p15 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p15 != null)
                                                    Nilai : {{ substr($tatananThree->p15, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p15 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p15) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p15 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p15) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VII. Pasar Ramah Lingkungan
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            16. Persentase pasar yang menerapkan pengelolaan sampah dengan prinsip 3 R
                                            (reduce, reuse, dan recyle)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="a,100"
                                                        {{ $tatananThree->p16 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,50"
                                                        {{ $tatananThree->p16 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="c,0"
                                                        {{ $tatananThree->p16 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p16 != null)
                                                    Nilai : {{ substr($tatananThree->p16, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p16 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p16) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p16 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p16) }}"
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
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            17. Persentase pasar yang menerapkan pengelolaan air limbah
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="a,100"
                                                        {{ $tatananThree->p17 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="b,50"
                                                        {{ $tatananThree->p17 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="c,0"
                                                        {{ $tatananThree->p17 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p17 != null)
                                                    Nilai : {{ substr($tatananThree->p17, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p17 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p17) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p17 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p17) }}"
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
                                <div class="separator separator-dashed my-4"></div>
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VIII. Keterlibatan kemitraan
                                    Pasar</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <form action="{{ route('tatananThree.update', $tatananThree->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            18. Persentase pasar yang melakukan kegiatan kemitraan dengan berbagai pihak
                                            diluar
                                            manajemen pasar (instansi pemerintah lain, bank, media, perguruan tinggi dan
                                            perusahaan swasta lainnya) yang dilakukan secara rutin dalam rangka
                                            mewujudkan
                                            pasar
                                            sehat
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="a,100"
                                                        {{ $tatananThree->p18 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="b,50"
                                                        {{ $tatananThree->p18 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="c,0"
                                                        {{ $tatananThree->p18 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. <= 50% </label>
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
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananThree->p18 != null)
                                                    Nilai : {{ substr($tatananThree->p18, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachThree->p18 != null)
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThree->p18) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachThreeNd->p18 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentThree/' . $attachThreeNd->p18) }}"
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
