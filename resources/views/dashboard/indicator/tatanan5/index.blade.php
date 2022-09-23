<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 5</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 5</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Pariwisata</span>
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
                <div class="stepper stepper-links d-flex flex-column" id="kt_stepper_tatanan5">
                    <!--begin::Nav-->
                    <div class="stepper-nav mb-5">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian I-III</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian IV-VI</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <h3 class="stepper-title">Bagian VII</h3>
                        </div>
                        <!--end::Step 3-->
                    </div>
                    <!--end::Nav-->
                    <div class="separator mx-1 my-2"></div>
                    <!--begin::Form-->
                    <form class="mx-auto mw-1000px w-100 pt-10 pb-5" novalidate="novalidate"
                        id="kt_stepper_tatanan5_form">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">I. Komitmen Daerah Terkait Pariwisata
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">1.1 Regulasi Terkait Pariwisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            1. Keberadaan regulasi daerah tentang Pariwisata Sehat
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada (Perda, Perbup/Perwal, SK, SE)
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p1"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak
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
                                            2. RIPPARDA masuk dalam RPJMD/Renstra/RKPD
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ya, masuk dalam RPJMD, Renstra, RKPD, RKA
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ya, masuk dalam RPJMD, Renstra
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="c,25">
                                                    <label class="form-check-label">c. Ya, masuk dalam RPJMD
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p2"
                                                        value="d,0">
                                                    <label class="form-check-label">d. Tidak memiliki dokumen
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">1.2 Desa Wisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            3. Adanya desa wisata yang dikelola oleh Lembaga Pemasyarakatan Masyarakat Desa (LPMD)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ya dan jumlah meningkat dari tahun sebelumnya
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ya dan jumlah tetap
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p3"
                                                        value="c,25">
                                                    <label class="form-check-label">c. Ya, namun menurun dari tahun sebelumnya
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
                                <!--begin::Heading-->
                                <div class="separator separator-dashed my-4"></div>
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">II. Informasi Pariwisata & Kesehatan
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">2.1 Informasi Pariwisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            4. Tersedianya informasi pariwisata di tempat umum (hotel, bandara/pelabuhan, dll)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada, informasi tersedia di tempat umum secara cetak dan elektronik
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada, informasi tersedia di  tempat umum secara cetak atau elektronik
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p4"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada informasi
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
                                <!--begin::Heading-->
                                <div class="separator separator-dashed my-4"></div>
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">III. Sarana Pariwisata
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Sertifikat Laik Sehat Sarana Akomodasi Pariwisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            5. Persentase sarana akomodasi pariwisata yang laik sehat
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Seluruh sarana akomodasi laik sehat
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="b,50">
                                                    <label class="form-check-label">b. 60-99% sarana akomodasi laik sehat
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p5"
                                                        value="c,0">
                                                    <label class="form-check-label">c. kurang dari 60% sarana akomodasi laik sehat
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Sertifikat Laik Hygiene Restoran </h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            6. Persentase restoran yang laik hygiene
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Seluruh restoran laik hygiene
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="b,50">
                                                    <label class="form-check-label">b. 60-99% restoran laik hygiene
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p6"
                                                        value="c,0">
                                                    <label class="form-check-label">c. kurang dari 60% restoran laik hygiene
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.3 Pemenuhan Syarat Kesehatan Daya Tarik Wisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            7. Persentase DTW yang memenuhi syarat kesehatan
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Seluruh DTW memenuhi syarat kesehatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="b,50">
                                                    <label class="form-check-label">b. 60-99% DTW memenuhi syarat kesehatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p7"
                                                        value="c,0">
                                                    <label class="form-check-label">c. kurang dari 60% DTW memenuhi syarat kesehatan
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.4 Implementasi Kawasan Tanpa Rokok (KTR) Di Daya Tarik Wisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            8. Jumlah DTW yang mengimplementasi kawasan tanpa rokok (KTR)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Semua DTW mengimplementasikan KTR
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Sebagian DTW mengimplementasikan KTR
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p8"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.5 Sarana Transportasi Yang Layak</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            9. Memiliki sarana  transportasi yang layak
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ya, sarana  transportasi ke DTW dinilai layak
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ya,  sarana transportasi ke DTW dinilai belum layak
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p9"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada sarana transportasi
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">3.6 Ramah Difabel</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            10. Persentase DTW yang ramah difabel
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Lebih dari 75% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="b,50">
                                                    <label class="form-check-label">b. 50-75% 
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="c,25">
                                                    <label class="form-check-label">c. Kurang dari 50%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p10"
                                                        value="d,0">
                                                    <label class="form-check-label">d. Tidak ada
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
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Kunjungan Wisatawan
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">4.1 Asuransi Keselamatan</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            11. DTW menyediakan asuransi keselamatan bagi wisatawan
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Seluruh DTW menyediakan asuransi bagi wisatawan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Tidak semua DTW menyediakan asuransi
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p11"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">4.2 Kesehatan Dan Keselamatan Kerja</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            12. Persentase DTW yang menerapkan K3
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="a,100">
                                                    <label class="form-check-label">a. > 80% DTW menerapkan K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="b,75">
                                                    <label class="form-check-label">b. 51% - 80% DTW menerapkan K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="c,50">
                                                    <label class="form-check-label">c. 25% - 50% DTW menerapkan K3
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p12"
                                                        value="d,25">
                                                    <label class="form-check-label">d. < 25% DTW menerapkan K3
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">4.3 Kasus Kecelakaan Di Daya Tarik Wisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            13. Adanya kasus kecelakaan di daya tarik wisata
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p13"
                                                        value="b,0">
                                                    <label class="form-check-label">b. Tidak ada
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
                                <!--begin::Heading-->
                                <div class="separator separator-dashed my-4"></div>
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">V. Keamanan Di Daya Tarik Wisata
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Petugas Keamanan Di Daya Tarik Wisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            14. Adanya kerjasama dengan Petugas Keamanan (Polisi Pariwisata, Satpam/Masyarakat yang ditunjuk)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ya, pada semua daya tarik wisata
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ya, namun belum di semua daya tarik wisata
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p14"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada
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
                                <!--begin::Heading-->
                                <div class="separator separator-dashed my-4"></div>
                                <div class="pb-5">
                                    <!--begin::Title-->
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Pelayanan Kesehatan
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">6.1 Fasilitas Pelayanan Kesehatan Di Daya Tarik Wisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            15. Keberadaan DTW yang menyediakan fasilitas pelayanan kesehatan
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Seluruh DTW menyediakan fasilitas pelayanan kesehatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Tidak semua DTW menyediakan fasilitas pelayanan kesehatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p15"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada 
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
                                    <h5 class="fw-bold d-flex align-items-center text-dark">6.2 Pariwisata Hijau - Ramah Lingkungan</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            16. Keberadaan DTW yang melaksanakan program ramah lingkungan		
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Seluruh DTW melaksanakan program ramah lingkungan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Tidak semua DTW melaksanakan program ramah lingkungan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p16"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada 
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
                                    <h4 class="fw-bolder d-flex align-items-center text-dark">VII. Pemberdayaan Masyarakat
                                    </h4>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">7.1 Kelompok Sadar Wisata (POKDARWIS), BUMDES</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            17. Keberadaan rencana kerja dan implementasi program pengembangan Kelompok Sadar Wisata (Pokdarwis, Bumdes)
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada dan terealisasi seluruh kegiatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p17"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada dan terealisasi sebagian kegiatan
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            18. Keberadaan Pokdarwis, Bumdes
                                            <div class="fluid-container pt-4">
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
                                <div class="pb-3">
                                    <!--begin::Title-->
                                    <h5 class="fw-bold d-flex align-items-center text-dark">7.2 Pembinaan Kelompok Masyarakat Di Sekitar Daya Tarik Wisata</h5>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            19. Dinas pariwisata mengalokasikan program pemberdayaan masyrakat di destinasi wisata berupa gerakan Aksi Sapta Pesona dan Gerakan Sadar Wisata
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ada dan terealisasi seluruh kegiatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ada dan terealisasi sebagian kegiatan
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p19"
                                                        value="c,0">
                                                    <label class="form-check-label">c. Tidak ada
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
                                            20. Keberadaan pembinaan kesehatan terhadap kelompok masyarakat sekitar daya tarik wisata (kelompok tari, kelompok seni, pedagang aksesoris dll) setahun terakhir
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="a,100">
                                                    <label class="form-check-label">a. Ya, kegiatan dilakukan secara aktif dan berkala
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p20"
                                                        value="b,50">
                                                    <label class="form-check-label">b. Ya, kegiatan dilakukan secara aktif tapi tidak secara berkala
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
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            21. Persentase TPP Non SLHS yang dilakukan pembinaan/pengawasan dengan pemberian label
                                            <div class="fluid-container pt-4">
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="a,100">
                                                    <label class="form-check-label">a. ≥ 75%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="b,50">
                                                    <label class="form-check-label">b. 50-75%
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                                    <input class="form-check-input" type="radio" name="p21"
                                                        value="c,0">
                                                    <label class="form-check-label">c. < 50%
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
            var element = document.querySelector("#kt_stepper_tatanan5");

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
