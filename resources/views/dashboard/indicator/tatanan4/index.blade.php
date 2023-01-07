<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 4</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 4</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Satuan Pendidikan</span>
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
                            Auth::user()->id == '12' ||
                            Auth::user()->id == '13' ||
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

                        @if (Auth::user()->id == '13' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">I. Kebijakan / Komitmen Daerah
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">1.1 Regulasi</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            1. Keberadaan regulasi daerah tentang pelaksanaan program UKS/M
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="a,100"
                                                        {{ $tatananFour->p1 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, diatur melalui Perda/Perkada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="b,75"
                                                        {{ $tatananFour->p1 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, diatur melalui Perkada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="c,50"
                                                        {{ $tatananFour->p1 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada, diatur melalui SE/SK
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="d,0" {{ $tatananFour->p1 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada
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
                                                @if ($tatananFour->p1 != null)
                                                    Nilai : {{ substr($tatananFour->p1, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p1 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p1) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p1 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p1) }}"
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
                                <h5 class="fw-bold d-flex align-items-center text-dark">1.2 Perencanaan Daerah</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            2. Keberadaan program UKS/M dalam perencanaan daerah (RPJMD, RKPD, Renstra
                                            PD dan Renja PD)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="a,100"
                                                        {{ $tatananFour->p2 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada, tercantum di dokumen RPJMD,
                                                        RKPD,
                                                        Renstra PD dan Renja PD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="b,50"
                                                        {{ $tatananFour->p2 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada, tercantum di dokumen RPJMD
                                                        dan
                                                        RKPD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="c,25"
                                                        {{ $tatananFour->p2 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada tercantum di dokumen Renstra
                                                        PD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="d,0"
                                                        {{ $tatananFour->p2 == 'd,0' ? 'checked' : '' }}>
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
                                            <span>Dokumentasi (Gambar)</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Ukuran maksimal dokumentasi gambar adalah 2MB."></i></label>
                                            <div class="input-group input-group-sm pb-4 pt-2">
                                                <input class="form-control" type="file" name="p2_2" accept=".jpg, .jpeg, .png, .webp">
                                            </div>
                                            <div class="input-group input-group-sm pb-2 pt-2">
                                                @if ($tatananFour->p2 != null)
                                                    Nilai : {{ substr($tatananFour->p2, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p2 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p2) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p2 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p2) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">II. Tim Pembina UKS/M
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">2.1 Tim Pembina</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            3. Keberadaan Tim Pembina UKS/M
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="a,100"
                                                        {{ $tatananFour->p3 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada dibuktikan dengan SK,
                                                        Anggaran,
                                                        Rencana Kerja terelisasi >80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="b,75"
                                                        {{ $tatananFour->p3 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada dibuktikan dengan SK,
                                                        Anggaran,
                                                        Rencana Kerja terealisasi 71%-80%
                                                        dan RKPD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="c,50"
                                                        {{ $tatananFour->p3 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada dibuktikan dengan SK,
                                                        Anggaran,
                                                        Rencana Kerja terealisasi 50%-70%
                                                        PD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="d,25"
                                                        {{ $tatananFour->p3 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Ada dibuktikan dengan SK,
                                                        Anggaran,
                                                        Rencana Kerja terealisasi < 50% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="e,0"
                                                        {{ $tatananFour->p3 == 'e,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">e. Tidak ada Tim Pembina
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
                                                @if ($tatananFour->p3 != null)
                                                    Nilai : {{ substr($tatananFour->p3, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p3 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p3) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p3 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p3) }}"
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
                                <h5 class="fw-bold d-flex align-items-center text-dark">2.2 Rapat Koordinasi</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            4. Keberadaan rapat koordinasi (rakor) Tim Pembina UKS/M yang dilakukan
                                            secara rutin
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="a,100"
                                                        {{ $tatananFour->p4 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Ada dan dilakukan > 4 kali dalam
                                                        setahun
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="b,50"
                                                        {{ $tatananFour->p4 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Ada dan dilakukan 2 - 3 kali
                                                        dalam
                                                        setahun
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="c,25"
                                                        {{ $tatananFour->p4 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Ada dan dilakukan 1 kali dalam
                                                        setahun
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="d,0"
                                                        {{ $tatananFour->p4 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada rapat koordinasi
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
                                                @if ($tatananFour->p4 != null)
                                                    Nilai : {{ substr($tatananFour->p4, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p4 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p4) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p4 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p4) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">III. Tim Pelaksana
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Tim Pelaksana</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            5. Presentase Sekolah/Madrasah yang memiliki tim pelaksana UKS/M dibuktikan
                                            dengan SK
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="a,100"
                                                        {{ $tatananFour->p5 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,75"
                                                        {{ $tatananFour->p5 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="c,50"
                                                        {{ $tatananFour->p5 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25% - 50%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="d,0"
                                                        {{ $tatananFour->p5 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 25% </label>
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
                                                @if ($tatananFour->p5 != null)
                                                    Nilai : {{ substr($tatananFour->p5, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p5 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p5) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p5 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p5) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Sekolah UKS/M</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Sekolah UKS/M</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            6. Persentase sekolah yang menerapkan stratifikasi standar UKS/M
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="a,100"
                                                        {{ $tatananFour->p6 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,75"
                                                        {{ $tatananFour->p6 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="c,50"
                                                        {{ $tatananFour->p6 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25% - 50%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="d,0"
                                                        {{ $tatananFour->p6 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. < 25% </label>
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
                                                @if ($tatananFour->p6 != null)
                                                    Nilai : {{ substr($tatananFour->p6, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p6 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p6) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p6 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p6) }}"
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
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            7. Persentase Sekolah/Madrasah yang memenuhi syarat sesuai IKL
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="a,100"
                                                        {{ $tatananFour->p7 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,50"
                                                        {{ $tatananFour->p7 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="c,0"
                                                        {{ $tatananFour->p7 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
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
                                                @if ($tatananFour->p7 != null)
                                                    Nilai : {{ substr($tatananFour->p7, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p7 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p7) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p7 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p7) }}"
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
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            8. Persentase sekolah/madrasah yang melakukan pengawasan internal
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="a,100"
                                                        {{ $tatananFour->p8 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. > 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,50"
                                                        {{ $tatananFour->p8 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 51% - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="c,0"
                                                        {{ $tatananFour->p8 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. < 50% </label>
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
                                                @if ($tatananFour->p8 != null)
                                                    Nilai : {{ substr($tatananFour->p8, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p8 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p8) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p8 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p8) }}"
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
                        @if (Auth::user()->id == '12' || Auth::user()->id == '17' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">V. Satuan Pendidikan Ramah
                                    Anak
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Satuan Pendidikan Ramah
                                    Anak
                                </h5>
                                <!--end::Title-->
                            </div>
                        @endif
                        @if (Auth::user()->id == '17' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            9. Persentase sekolah yang menerapkan Satuan Pendidikan Ramah Anak
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="a,100"
                                                        {{ $tatananFour->p9 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Lebih dari 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,75"
                                                        {{ $tatananFour->p9 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50% - 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="c,50"
                                                        {{ $tatananFour->p9 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25% - < 50% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="d,25"
                                                        {{ $tatananFour->p9 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Kurang dari 25%
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
                                                @if ($tatananFour->p9 != null)
                                                    Nilai : {{ substr($tatananFour->p9, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p9 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p9) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p9 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p9) }}"
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
                        @if (Auth::user()->id == '12' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            10. Tersedianya sekolah yang menerapkan pendidikan inklusif
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="a,100"
                                                        {{ $tatananFour->p10 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Seluruh anak penyandang
                                                        disabilitas
                                                        terlayani
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="b,50"
                                                        {{ $tatananFour->p10 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. Sebagian anak penyandang
                                                        disabilitas
                                                        terlayani
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="c,0"
                                                        {{ $tatananFour->p10 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada
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
                                                @if ($tatananFour->p10 != null)
                                                    Nilai : {{ substr($tatananFour->p10, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p10 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p10) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p10 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p10) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Sekolah Adiwiyata</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">6.1 Sekolah Adiwiyata</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            11. Presentase sekolah yang menerapkan Adiwiyata
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="a,100"
                                                        {{ $tatananFour->p11 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Lebih dari 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="b,75"
                                                        {{ $tatananFour->p11 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50% - 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="c,50"
                                                        {{ $tatananFour->p11 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25% - < 50% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="d,25"
                                                        {{ $tatananFour->p11 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Kurang dari 25%
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
                                                @if ($tatananFour->p11 != null)
                                                    Nilai : {{ substr($tatananFour->p11, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p11 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p11) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p11 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p11) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VII. Pondok Pesantren Sehat
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">7.1 Pondok Pesantren Sehat</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            12. Presentase Pondok Pesantren menerapkan Pondok Pesantren Sehat
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="a,100"
                                                        {{ $tatananFour->p12 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Lebih dari 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="b,75"
                                                        {{ $tatananFour->p12 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50% - 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="c,50"
                                                        {{ $tatananFour->p12 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25% - < 50% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="d,25"
                                                        {{ $tatananFour->p12 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Kurang dari 25%
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
                                                @if ($tatananFour->p12 != null)
                                                    Nilai : {{ substr($tatananFour->p12, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p12 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p12) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p12 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p12) }}"
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
                                <h4 class="fw-bolder d-flex align-items-center text-dark">VIII. Pendidikan Anak Usia
                                    Dini/PAUD</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">8.1 Pendidikan Usia Dini/Paud
                                    Yang
                                    Menyelenggarakan Promosi Kesehatan Dan Penjaringan Kesehatan</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            13. Presentase sekolah pendidikan usia dini/PAUD yang menyelenggarakan
                                            promosi kesehatan dan penjaringan kesehatan
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="a,100"
                                                        {{ $tatananFour->p13 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. Lebih dari 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="b,75"
                                                        {{ $tatananFour->p13 == 'b,75' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 50% - 70%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="c,50"
                                                        {{ $tatananFour->p13 == 'c,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 25% - < 50% </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="d,25"
                                                        {{ $tatananFour->p13 == 'd,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Kurang dari 25%
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
                                                @if ($tatananFour->p13 != null)
                                                    Nilai : {{ substr($tatananFour->p13, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p13 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p13) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p13 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p13) }}"
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
                        @if (Auth::user()->id == '12' || Auth::user()->hasAnyRole('administrator'))
                            <!--begin::Heading-->
                            <div class="separator separator-dashed my-4"></div>
                            <div class="pb-5">
                                <!--begin::Title-->
                                <h4 class="fw-bolder d-flex align-items-center text-dark">IX. Inovasi Daerah</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="pb-3">
                                <!--begin::Title-->
                                <h5 class="fw-bold d-flex align-items-center text-dark">9.1 Sekolah Sebagai Pusat
                                    Pembelajaran Sekolah Sehat (Aktif/Pasif)</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            14. Jumlah sekolah yang menerapkan model pembelajaran sekolah sehat, contoh:
                                            sekolah menjadi pusat pembelajaran sekolah sehat, dll.
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="a,100"
                                                        {{ $tatananFour->p14 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. 5% atau lebih jumlah
                                                        sekolah</label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,50"
                                                        {{ $tatananFour->p14 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 3% - 4% jumlah sekolah
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="c,25"
                                                        {{ $tatananFour->p14 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 1% - 2% jumlah sekolah
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="d,0"
                                                        {{ $tatananFour->p14 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada
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
                                                @if ($tatananFour->p14 != null)
                                                    Nilai : {{ substr($tatananFour->p14, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p14 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p14) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p14 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p14) }}"
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
                                <h5 class="fw-bold d-flex align-items-center text-dark">9.2 Sistem Informasi
                                    Terintegrasi
                                </h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            15. Keberadaan sekolah yang mengembangkan sistem informasi terintegrasi
                                            (contoh: data peserta didik, data kesehatan, data kondisi kesehatan
                                            lingkungan sekolah, dll.)
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="a,100"
                                                        {{ $tatananFour->p15 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. 3 atau lebih data terintegrasi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,50"
                                                        {{ $tatananFour->p15 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 2 data terintegrasi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="c,0"
                                                        {{ $tatananFour->p15 == 'c,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. Tidak ada </label>
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
                                                @if ($tatananFour->p15 != null)
                                                    Nilai : {{ substr($tatananFour->p15, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p15 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p15) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p15 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p15) }}"
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
                                <h5 class="fw-bold d-flex align-items-center text-dark">9.3 Kemitraan</h5>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <form action="{{ route('tatananFour.update', $tatananFour->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            16. Adanya kegiatan kemitraan sekolah dengan pihak luar untuk mencapai
                                            sekolah sehat
                                            <div class="fluid-container pt-4 pb-2">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="a,100"
                                                        {{ $tatananFour->p16 == 'a,100' ? 'checked' : '' }}>
                                                    <label class="form-check-label">a. 5% atau lebih jumlah sekolah
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,50"
                                                        {{ $tatananFour->p16 == 'b,50' ? 'checked' : '' }}>
                                                    <label class="form-check-label">b. 3% - 4% jumlah sekolah
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="c,25"
                                                        {{ $tatananFour->p16 == 'c,25' ? 'checked' : '' }}>
                                                    <label class="form-check-label">c. 1% - 2% jumlah sekolah
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="d,0"
                                                        {{ $tatananFour->p16 == 'd,0' ? 'checked' : '' }}>
                                                    <label class="form-check-label">d. Tidak ada
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
                                                @if ($tatananFour->p16 != null)
                                                    Nilai : {{ substr($tatananFour->p16, 2, 4) }}
                                                    &nbsp; - &nbsp;
                                                @endif
                                                @if ($attachFour->p16 != null)
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFour->p16) }}"
                                                        target="_blank">Lihat Lampiran (pdf)</a>
                                                @endif
                                                @if ($attachFourNd->p16 != null)
                                                    &nbsp; - &nbsp;
                                                    <a href="{{ asset('storage/attachmentFour/' . $attachFourNd->p16) }}"
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
                </div>
                <!--end::Form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </x-slot>
    {{-- End::Post component --}}

</x-dashboard.layout>
