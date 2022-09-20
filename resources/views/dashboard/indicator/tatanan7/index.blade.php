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
                <div class="stepper stepper-links d-flex flex-column" id="kt_stepper_tatanan1">
                    <!--begin::Nav-->
                    <div class="stepper-nav mb-5">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian I-II</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian III</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian IV</h3>
                        </div>
                        <!--end::Step 3-->
                    </div>
                    <!--end::Nav-->
                    <div class="separator mx-1 my-2"></div>
                    <!--begin::Form-->
                    <form class="mx-auto mw-1000px w-100 pt-10 pb-5" novalidate="novalidate"
                        id="kt_stepper_tatanan1_form">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">I. Komitmen Daerah Terhadap Muatan Materi Kesehatan Dan Keselamatan Kerja
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            1.  Adanya regulasi/kebijakan di Kawasan Perkantoran, Perindustrian (IKM) dan UMKM 		
                                            <div class="fluid-container pt-4">
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
                                            2. Kegiatan  penyelenggaraan kesehatan dan keselamatan kerja di Kawasan Perkantoran, Perindustrian (IKM) dan UMKM masuk dalam dokumen perencanaan pembangunan daerah
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. Masuk dalam RPJMD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="a,100">
                                                    <label class="form-check-label">c. Masuk dalam RKPD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak masuk satu pun
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
                                <!--begin::Heading-->
                                <div class="separator separator-dashed my-4"></div>
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">II. Perkantoran
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            3. Persentase kantor yang telah menerapkan K3		
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% Kantor telah menerapkan  K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50% Kantor telah menerapkan K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                            4. Angka kecelakaan kerja di perkantoran setahun terakhir
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tetap
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="b,0">
                                                    <label class="form-check-label">c. Meningkat
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
                                            5. Persentase kantor yang memfasilitasi kegiatan aktivitas fisik/olahraga
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                            6. Persentase kantor yang telah memfasilitas pemeriksaan kesehatan pada pegawainya
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                            7. Persentase kantor yang menerapkan Kawasan Tanpa Rokok (KTR)
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            8. Persentase kantor yang memiliki ruang laktasi
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">III. Perindustrian Ikm (Industri Kecil Dan Menengah)
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            9. Jumlah Industri kecil dan menengah yang menyelenggarakan program Kesehatan Keselamatan Kerja/K3
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                            10. Pembinaan dan pengawasan dilokasi Industri
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. Ada, tapi tidak dilakukan secara rutin 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="b,0">
                                                    <label class="form-check-label">c. Tidak ada
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            11. Pemanfaatan kembali material dan sumber daya yang digunakan melalui konsep 4R oleh Industri kecil dan menengah
                                            <div class="fluid-container pt-4">
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
                                            12. Persentase perusahaan menyampaikan laporan Rencana Pengelolaan Lingkungan (RKL)/ Rencana Pemantauan Lingkungan (RPL) / Upaya Pengelolaan Lingkungan (UKL)/ Upaya Pemantauan Lingkungan (UPL)  secara berkala 6 bulan sekali
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 60 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="a,100">
                                                    <label class="form-check-label">c. 40 - 59.99%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="b,0">
                                                    <label class="form-check-label">d. < 40%
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
                                            13. Kasus pencemaran lingkungan dan pengaduan masyarakat setahun terakhir
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tetap
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="b,0">
                                                    <label class="form-check-label">c. Meningkat 
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            14. Pos Upaya Kesehatan Kerja (UKK) aktif
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 60 - 80%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,0">
                                                    <label class="form-check-label">c. 40 - 59%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,0">
                                                    <label class="form-check-label">d. < 40%
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
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Usaha Mikro, Kecil Dan Menengah (UMKM)
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            15. Persentase UMKM yang memiliki perijinan (NIB/TDP/SKU)
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80%  
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            16. Persentase UMKM sektor makanan, minuman, industri pengolahan yang memiliki Sertifikat Laik Higiene Sanitasi (SLHS), PIRT, POM		
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80%  
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                            17. Persentase kecamatan yang melakukan penataan sentra pangan jajanan
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-75% total kecamatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="b,0">
                                                    <label class="form-check-label">c. kurang dari 50% total kecamatan
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            18. Jumlah UMKM sentra pangan jajanan dan kantin yang memiliki Label pembinaan/pengawasan higiene sanitasi pangan
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-75 %
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p18"
                                                        value="b,0">
                                                    <label class="form-check-label">c. kurang dari 50% total kecamatan
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
                                            19. Persentase UMKM yang sudah menerapkan dan menuhi syarat standar kesehatan lingkungan kerja
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80%  
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50%  
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada 
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            20. Persentase UMKM yang telah  menerima pembinaan dan pengawasan
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada pembinaan dan pengawasan 
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            21. Persentase UMKM yang memiliki pelayanan kesehatan/ Pos UKK
                                            <div class="fluid-container pt-4">
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
                                                        value="b,0">
                                                    <label class="form-check-label">b. 50-80% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="b,0">
                                                    <label class="form-check-label">c. < 50%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="b,0">
                                                    <label class="form-check-label">d. Tidak ada UMKM yang memiliki pelayanan kesehatan/Pos UKK
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
            var element = document.querySelector("#kt_stepper_tatanan1");

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
