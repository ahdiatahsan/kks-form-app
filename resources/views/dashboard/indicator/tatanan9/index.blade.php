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
                        </svg></span> Kembali
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
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_stepper_tatanan9">
                    <!--begin::Nav-->
                    <div class="stepper-nav mb-5">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian I</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian II-III</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian IV-V</h3>
                        </div>
                        <!--end::Step 3-->
                    </div>
                    <!--end::Nav-->
                    <div class="separator mx-1 my-2"></div>
                    <!--begin::Form-->
                    <form class="mx-auto mw-1000px w-100 pt-10 pb-5" novalidate="novalidate"
                        id="kt_stepper_tatanan9_form">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
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
                                    <h5 class="fw-bold d-flex align-items-center text-dark">1.1 Komitmen Pemerintah Daerah</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            1. Adanya regulasi penanggulangan bencana		
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada regulasi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada regulasi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p1"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            2. Upaya pencegahan dan penanggulangan bencana masuk ke dalam dokumen perencanaan daerah (seperti RPJMD, Renstra dan RKPD)		
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Upaya pencegahan masuk dalam semua dokumen perencanaan daerah (RPJMD, Renstra dan RKPD)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Upaya pencegahan masuk dalam dokumen perencanaan daerah tapi hanya dalam RPJMD, Renstra saja
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="c,75">
                                                    <label class="form-check-label">c. Upaya pencegahan masuk dalam dokumen perencanaan daerah tapi hanya dalam RPJMD saja
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="d,0">
                                                    <label class="form-check-label">d. Upaya pencegahan tidak masuk dalam dokumen perencanaan daerah
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p2"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            3. Adanya Badan/Unit Kerja yang menangani Penanggulangan Bencana Daerah
                                            <div class="fluid-container pt-4">
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
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p3"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            4. Adanya Tim/Unit Reaksi Cepat (TRC) dalam penanggulangan bencana 
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Semua kluster ada TRC 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Tidak semua cluster memiliki TRC
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada TRC
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p4"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            5. Adanya rencana penanggulangan bencana dan rencana penanggulangan kedaruratan bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p5"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            6. Memiliki rencana kontingensi bencana daerah menurut hazard
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada, dan dilakukan review 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada, belum dilakukan review
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p6"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            7. Melakukan kegiatan simulasi tanggap penanggulangan bencana minimal 1 kali dalam setahun.
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p7"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">II. Upaya Penanggulangan Bencana
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            8. Keberadaan persediaan logistik dan peralatan yang mencukupi di masing-masing klaster daerah rawan bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada dan jumlahnya cukup
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada dan jumlahnya tidak cukup 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,0">
                                                    <label class="form-check-label">c. Tidak ada persediaan logistik
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p8"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            9. Upaya program penguatan dan pemulihan sosial untuk korban bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada dan terealisasi secara rutin 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Ada tapi tidak terealisasi secara rutin 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p9"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            10. Persentase desa/kelurahan tangguh bencana (Destana) yang sudah menerapkan Standar Nasional Indonesia/SNI sebagai acuan bersama dalam melakukan upaya pengelolaan resiko bencana di daerah rawan bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Minimal 51% kategori desa/kelurahan pratama dari seluruh desa rawan bencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="b,50">
                                                    <label class="form-check-label">b. 30-50% kategori desa/kelurahan pratama dari seluruh desa rawan bencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="c,25">
                                                    <label class="form-check-label">c. Kurang dari 30% kategori desa/kelurahan pratama dari seluruh desa rawan bencana
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="d,0">
                                                    <label class="form-check-label">d. Tidak ada desa/kelurahan tangguh bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p10"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Heading-->
                                <div class="separator separator-dashed my-4"></div>
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">III. Peringatan Dini
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Komunikasi Dan Informasi Bencana Alam</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            11. Adanya sistem peringatan dini terintegrasi sesuai ancaman bencana wilayahnya (EWS longsor, EWS banjir, EWS tsunami)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada sistem peringatan dini terintegrasi dan berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada sistem peringatan dini terintegrasi tapi tidak berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada sistem peringatan dini terintegrasi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p11"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            12. Adanya rambu dan papan informasi peringatan dini bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada rambu peringatan dini bencana, jumlahnya memadai yang dipasang di lokasi strategis
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada rambu peringatan dini bencana, tapi jumlahnya terbatas 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada rambu peringatan dini bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p12"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            13. Pelaksanaan diseminasi informasi peringatan dini kepada stakeholder terkait dan masyarakat
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada kegiatan diseminasi informasi peringatan dini bencana secara berkala 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada kegiatan diseminasi informasi peringatan dini bencana tapi belum dilakukan secara berkala 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada kegiatan diseminasi informasi peringatan dini bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p13"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Peta Rawan Bencana Alam</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            14. Keberadaan peta rawan bencana daerah
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada peta rawan bencana yang terdokumentasikan dengan baik dan tersosialisasikan secara rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada peta rawan bencana tapi belum terdokumentasikan dengan baik dan belum tersosialisasikan secara rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada peta rawan bencana
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p14"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            15. Perencanaan wilayah/tata ruang yang telah mengacu pada peta rawan bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada perencanaan wilayah/tata ruang telah mengikuti peta rawan bencana  
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada perencanaan wilayah/tata ruang telah mengikuti peta rawan bencana 
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p15"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.3 Implementasi Sistem Kewaspadaan Dini Dan Respon (SKDR) Bencana Non Alam</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            16. Tersedianya SKDR sebagai sistem pemantauan perkembangan trend suatu penyakit menular yang potensial KLB/wabah dari waktu ke waktu
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada SKDR dan sistem pemantauannya berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada SKDR dan sistem pemantauannya tidak berfungsi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada SKDR
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p16"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            17. Capaian Respon Alert (sinyal) SKDR
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Capaian persentase Respon Alert  >= 90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Capaian persentase Respon Alert <= 90%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p17"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Peningkatan Kapasitas
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">4.1 Satuan Pendidikan Aman Bencana</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            18. Persentase penyelenggaraan program Satuan Pendidikan Aman Bencana (SPAB) di sekolah pada daerah rawan bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Minimal 51% Satuan Pendidikan Aman Bencana (SPAB)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="b,50">
                                                    <label class="form-check-label">b. 30-50% Satuan Pendidikan Aman Bencana (SPAB)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="c,25">
                                                    <label class="form-check-label">c. Kurang dari 30% Satuan Pendidikan Aman Bencana (SPAB)
                                                    </label>
                                                </div>
                                                
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="d,0">
                                                    <label class="form-check-label">d. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p18"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            19. Adanya fasilitas sarana prasarana pendidikan yang aman dari resiko bencana di setiap satuan pendidikan 	
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p19"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">4.2 Pemberdayaan Masyarakat Tentang Penanggulangan Bencana (Masyarakat Tanggap Bencana)</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            20. Memiliki Forum Pengurangan Risiko Bencana (FPRB) sebagai upaya pemberdayaan masyarakat dalam penanggulangan bencana di Kawasan Rawan Bencana (KRB)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada, kegiatannya aktif dan rutin 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada, tapi kegiatannya tidak aktif dan rutin
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p20"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
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
                                    <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Kerjasama Daerah Yang Berbatasan Dalam Penanggulangan Bencana</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            21. Melakukan kerjasama dengan pemerintah daerah lain yang berbatasan dengan kawasan Rawan Bencana (KRB) dalam upaya penanggulangan bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada kerjasama
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada kerjasama
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p21"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            22. Adanya kerjasama desa/kelurahan rawan bencana dengan desa/kelurahan sekitarnya dalam rangka penanggulangan bencana
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p22"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada kerjasama
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p22"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada kerjasama
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p22"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            23. Jumlah kerjasama dalam upaya penanggulangan bencana dengan pihak lain (Melampirkan dokumen kerjasama/MOU)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p23"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Minimal 5 pihak 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p23"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Kurang dari 5 pihak
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p23"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada kerjasama dengan pihak lain
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm pb-15">
                                                @csrf
                                                <input type="file" class="form-control" name="berkas"
                                                    accept="application/pdf" required>
                                                <input type="hidden" class="form-control" name="p23"
                                                    value="berkas">
                                                <button type="submit"
                                                    class="btn btn-secondary btn-outline-secondary">Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-15">
                            <!--begin::Wrapper-->
                            <div class="mr-2">
                                <button type="button" class="btn btn-sm btn-light-primary me-3"
                                    data-kt-stepper-action="previous">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="11" width="13"
                                                height="2" rx="1" fill="black" />
                                            <path
                                                d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Kembali
                                </button>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-sm btn-primary me-3"
                                    data-kt-stepper-action="submit">
                                    <span class="indicator-label">Simpan
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13"
                                                    width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="black" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="indicator-progress">Mohon Tunggu...
                                        <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-sm btn-primary"
                                    data-kt-stepper-action="next">Selanjutnya
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 ms-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
                                                fill="black" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </x-slot>
    {{-- End::Post component --}}

    {{-- Start::Javascript --}}
    <x-slot name="javascript">
        <script>
            // Stepper lement
            var element = document.querySelector("#kt_stepper_tatanan9");

            // Initialize Stepper
            var stepper = new KTStepper(element);

            // Handle navigation click
            stepper.on("kt.stepper.click", function(stepper) {
                stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
            });

            // Handle next step
            stepper.on("kt.stepper.next", function(stepper) {
                stepper.goNext(); // go next step
            });

            // Handle previous step
            stepper.on("kt.stepper.previous", function(stepper) {
                stepper.goPrevious(); // go previous step
            });
        </script>
    </x-slot>
    {{-- End::Javascript --}}

</x-dashboard.layout>
