<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Tatanan 8</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Tatanan 8</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Perlindungan Sosial</span>
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
                <!--begin::Form-->
                <form class="mx-auto mw-1000px w-100 pt-5 pb-5"
                    action="{{ route('tatananEight.update', $tatananEight->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <!--begin::Wrapper-->
                    <div class="w-100">
                        <!--begin::Heading-->
                        <div class="pb-5">
                            <!--begin::Title-->
                            <h4 class="fw-bolder d-flex align-items-center text-dark">I. Penanganan Masalah
                                Kesejahteraan Sosial
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
                                    1. Adanya Tim Penanganan Masalah Kesejahteraan Sosial (Tim Koordinasi Penanggulangan
                                    Kemiskinan Daerah/TKPKD/Tim Bansos Pangan dll.)
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p1"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan Aktif
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p1"
                                                value="b,0">
                                            <label class="form-check-label">b. Tidak ada tim
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p1_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p1_2">
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
                                    2. Melakukan update data ke dalam Sistem Informasi Kesejahteraan Sosial Next
                                    Generation (SIKSNG) secara rutin
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p2"
                                                value="a,100">
                                            <label class="form-check-label">a. Update data setiap bulan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p2"
                                                value="b,50">
                                            <label class="form-check-label">b. Update data setiap 3 bulan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p2"
                                                value="c,25">
                                            <label class="form-check-label">c. Update data setiap 6 bulan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p2"
                                                value="d,0">
                                            <label class="form-check-label">d. Tidak update data
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p2_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p2_2">
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
                                    3. Adanya peraturan mengenai Penanganan Masalah Kesejahteraan Sosial suaikan dengan
                                    daerahnya
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p3"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p3"
                                                value="b,0">
                                            <label class="form-check-label">b. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p3_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p3_2">
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
                                    4. Adanya layanan pengaduan terkait masalah-masalah sosial (masalah bantuan sosial
                                    dll.)
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p4"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p4"
                                                value="b,0">
                                            <label class="form-check-label">b. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p4_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p4_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.2 Penanganan Masalah
                                Kesejahteraan Sosial</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    5. Adanya Penanganan Masalah Kesejahteraan Sosial dalam Rencana Pembangunan jangka
                                    Menengah Daerah/RPJMD
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p5"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dalam perencanaan daerah dan sudah
                                                terealisasi
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p5"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada dalam perencanaan daerah tapi belum
                                                terealisasi
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p5"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada dalam perencanaan daerah
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p5_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p5_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.3 Upaya Pemenuhan Kebutuhan Pokok
                                Pemerlu Pelayanan Kesejahteraan Sosial (PPKS)</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    6. Adanya kegiatan penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) yang
                                    aktif dalam setahun terakhir
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p6"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan disertai dengan laporan kegiatan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p6"
                                                value="b,0">
                                            <label class="form-check-label">c. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p6_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p6_2">
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
                                    7. Pemerlu pelayanan kesejahteraan sosial (PPKS) yang diberikan jaminan sosial
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p7"
                                                value="a,100">
                                            <label class="form-check-label">a. Seluruhnya diberikan jaminan sosial
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p7"
                                                value="b,50">
                                            <label class="form-check-label">b. Sebagian diberikan jaminan sosial
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p7"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada diberikan jaminan sosial
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p7_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p7_2">
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
                                    8. Adanya kegiatan pelatihan khusus bagi pemerlu pelayanan kesejahteraan sosial
                                    (PPKS)
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p8"
                                                value="a,100">
                                            <label class="form-check-label">a. Seluruh yang mendapatkan pelatihan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p8"
                                                value="b,50">
                                            <label class="form-check-label">b. Sebagian yang mendapatkan pelatihan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p8"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p8_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p8_2">
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
                                    9. Keberadaan penggiat penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) baik
                                    secara individu/kelompok
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p9"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p9"
                                                value="b,0">
                                            <label class="form-check-label">b. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p9_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p9_2">
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
                                    10. Adanya kerjasama dengan stakeholder masyarakat (seperti pihak swasta, akademisi,
                                    instansi pemerintah terkait, lembaga keagamaan, individu/donatur dll) dalam kegiatan
                                    penanganan pemerlu pelayanan kesejahteraan sosial (PPKS) di daerah setahun terakhir
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p10"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan melibatkan lebih dari 3 kelompok
                                                masyarakat serta ada MOU
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p10"
                                                value="b,75">
                                            <label class="form-check-label">b. Ada dan melibatkan lebih dari 3 kelompok
                                                masyarakat tetapi tidak ada MOU
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p10"
                                                value="c,50">
                                            <label class="form-check-label">c. Ada dan melibatkan kurang dari 3
                                                kelompok masyarakat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p10"
                                                value="d,0">
                                            <label class="form-check-label">d. Tidak ada kerjasama
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p10_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p10_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">1.4 Angka Kemiskinan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    11. Capaian target penurunan angka kemiskinan (4%-6%)
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p11"
                                                value="a,100">
                                            <label class="form-check-label">a. Mencapai target dengan penurunan angka
                                                kemiskinan > 6 %
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p11"
                                                value="b,50">
                                            <label class="form-check-label">b. Mencapai target dengan penurunan angka
                                                kemiskinan 4%-6%
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p11"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak mencapai target dengan penurunan
                                                angka kemiskinan < 4% </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p11_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p11_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">II. Pengarusutamaan Komunitas
                                Adat Terpencil Dan Daerah Perbatasan
                            </h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.1 Upaya Pemerintah Dan Swasta
                                Untuk Komunitas Adat Terpencil Dan Daerah Perbatasan</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    12. Adanya upaya pemerintah daerah dan swasta dalam peningkatan kemampuan ekonomi
                                    untuk komunitas adat terpencil dan daerah perbatasan (misal pendidikan dan
                                    pelatihan, bantuan stimulan dll.)
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p12"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada upaya yang dilakukan secara lengkap
                                                dan dilakunan secara rutin
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p12"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada upaya yang dilakukan secara lengkap
                                                tapi belum dilakukan secara rutin
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p12"
                                                value="c,25">
                                            <label class="form-check-label">c. Ada upaya yang dilakukan meski belum
                                                dilakukan secara lengkap dan rutin
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p12"
                                                value="d,0">
                                            <label class="form-check-label">d. Tidak ada upaya peningkatan kemampuan
                                                ekonomi</label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p12_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p12_2">
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
                                    13. Adanya program pemberdayaan/pendidikan khusus bagi wanita dan anak-anak
                                    komunitas adat terpencil dan daerah perbatasan
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p13"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan terdokumentasi dengan baik
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p13"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada tapi tidak terdokumentasi dengan
                                                baik
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p13"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada</label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p13_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p13_2">
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
                                    14. Adanya program pemenuhan kebutuhan kesehatan bagi komunitas adat terpencil dan
                                    daerah perbatasan
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p14"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan terdokumentasi dengan
                                                baik</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p14"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada tapi tidak terdokumentasi dengan
                                                baik
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p14"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p14_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p14_2">
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
                                    15. Adanya pemenuhan hak sipil bagi komunitas adat terpencil dan daerah perbatasan,
                                    misal hak sipil pendaftaran pernikahan
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p15"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan kegiatannya meningkat dari tahun
                                                sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p15"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada dan kegiatannya sama dari tahun
                                                sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p15"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada kegiatan penanganan
                                                PMKS</label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p15_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p15_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">2.2 Penggiat Komunitas Adat
                                Terpencil</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    16. Adanya penggiat komunitas adat terpencil baik secara individu/kelompok/lembaga
                                    sosial/yayasan
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p16"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada penggiat komunitas dan kegiatannya
                                                aktif dan rutin
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p16"
                                                value="b,5">
                                            <label class="form-check-label">b. Ada penggiat komunitas tapi kegiatannya
                                                tidak aktif dan tidak rutin
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p16"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada penggiat komunitas
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p16_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p16_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">III. Penanganan Kekerasan Anak,
                                Perempuan Dan Lansia</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.1 Komitmen Pemerintah Daerah</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    17. Adanya regulasi daerah tentang penanganan kekerasan anak, perempuan dan lansia
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p17"
                                                value="a,100">
                                            <label class="form-check-label">a. Dituangkan dalam Peraturan Daerah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p17"
                                                value="b,50">
                                            <label class="form-check-label">b. Dituangkan dalam Peraturan Kepala Daerah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p17"
                                                value="c,25">
                                            <label class="form-check-label">c. Dituangkan dalam Instruksi/Keputusan
                                                Kepala Daerah/Surat Edaran
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p17"
                                                value="d,0">
                                            <label class="form-check-label">d. Tidak ada regulasi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p17_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p17_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.2 Penanganan Kekerasan Anak,
                                Perempuan Dan Lansia Dalam RPJMD</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    18. Adanya penyelenggaraan penanganan kekerasan anak, perempuan dan lansia dalam
                                    Rencana Pembangunan Jangka Menengah Daerah/RPJMD
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p18"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dalam RPJMD dan terealisasi
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p18"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada dalam RPJMD tapi belum terealisasi
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p18"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada dalam RPJMD
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p18_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p18_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.3 Upaya Pemerintah, Swasta Dan
                                Masyarakat Untuk Pencegahan Dan Penanganan Kekerasan Terhadap Anak Perempuan Dan Lansia
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    19. Adanya upaya penanganan dan pencegahan angka kekerasan terhadap anak
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p19"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada upaya dan capaian angka kekerasan
                                                terhadap anak menurun dibanding tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p19"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada upaya dan capaian angka kekerasan
                                                terhadap anak stabil sama dibanding tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p19"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada upaya penanganan dan
                                                pencegahan untuk menekan angka kekerasan terhadap anak
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p19_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p19_2">
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
                                    20. Upaya pencegahan untuk menurunkan angka perkawinan pada usia anak
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p20"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada upaya dan capaian angka perkawinan
                                                anak menurun
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p20"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada upaya dan capaian angka perkawinan
                                                anak sama dengan tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p20"
                                                value="c,0">
                                            <label class="form-check-label">d. Tidak ada upaya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p20_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p20_2">
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
                                    21. Adanya upaya pencegahan praktek sunat pada anak perempuan
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p21"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada upaya dan capaian angka sunat pada
                                                perempuan menurun dibanding tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p21"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada upaya dan capaian angka sunat pada
                                                perempuan stabil sama dibanding tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p21"
                                                value="c,25">
                                            <label class="form-check-label">c. Ada upaya dan capaian angka sunat pada
                                                perempuan meningkat dibanding tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p21"
                                                value="d,0">
                                            <label class="form-check-label">d. Tidak ada upaya penanganan dan
                                                pencegahan untuk menekan angka sunat pada perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p21_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p21_2">
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
                                    22. Adanya upaya pendidikan penyuluhan, komunikasi dan informasi tentang penanganan
                                    kekerasan terhadap perempuan
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p22"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada upaya dan capaian angka kekerasan
                                                pada perempuan menurun dibanding tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p22"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada upaya dan capaian angka kekerasan
                                                pada perempuan stabil sama dibanding tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p22"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada upaya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p22_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p22_2">
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
                                    23. Adanya UPTD PA/P2TP2A (Pusat Pelayanan Terpadu Pemberdayaan Perempuan dan Anak)
                                    dalam penanganan kekerasan pada anak, perempuan dan lansia
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p23"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan seluruh korban yang tertangani
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p23"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada dan sebagian korban yang tertangani
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p23"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada lembaga
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p23_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p23_2">
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
                                    24. Adanya penanganan kasus hukum kekerasan terhadap anak, perempuan dan lansia
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p24"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada, semua kasus diproses secara hukum
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p24"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada, sebagian kasus diproses secara
                                                hukum
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p24"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada yang diproses
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p24_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p24_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.4 PEnggiat Penanganan Kekerasan
                                Pada Anak, Perempuan Dan Lansia</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    25. Keberadaan penggiat penanganan kekerasan terhadap anak, perempuan dan lansia
                                    baik secara individu/kelompok
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p25"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan terdaftar
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p25"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada tetapi tidak terdaftar
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p25"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p25_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p25_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">3.5 Kasus Kekerasan Anak, Perempuan
                                Dan Lansia</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    26. Jumlah kasus kekerasan terhadap anak, perempuan dan lansia yang dilaporkan
                                    setahun terakhir
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p26"
                                                value="a,100">
                                            <label class="form-check-label">a. Jumlahnya menurun dibandingkan tahun
                                                sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p26"
                                                value="b,50">
                                            <label class="form-check-label">b. Jumlahnya stabil dibandingkan tahun
                                                sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p26"
                                                value="c,0">
                                            <label class="form-check-label">c. Jumlahnya meningkat dibandingkan tahun
                                                sebelumnya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p26_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p26_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">IV. Kesetaraan Gender</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">4.1 Kesetaraan Gender</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    27. Adanya perencanaan dan penganggaran responsif gender
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p27"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan terdokumentasi dengan baik
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p27"
                                                value="b,0">
                                            <label class="form-check-label">b. Tidak ada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p27_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p27_2">
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
                            <h4 class="fw-bolder d-flex align-items-center text-dark">V. Sosial Budaya Masyarakat</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">5.1 Kegiatan Sosial Budaya Dalam
                                RPJMD</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    28. Memiliki program Rute Aman Selamat ke Sekolah (RASS) yang rutin di
                                    sosialisasikan setahun terakhir
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p28"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan rutin disosialisasikan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p28"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada tapi tidak rutin disosialisasikan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p28"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada program RASS
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p28_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p28_2">
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
                                    29. Adanya sarana prasarana dalam mendukung program Rute Aman Selamat ke Sekolah
                                    (RASS) seperti halte penumpang angkutan umum, Zone Selamat Sekolah (ZOSS) dan
                                    fasilitas untuk pesepeda dan pejalan kaki
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p29"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada, dan memiliki semua sarana prasarana
                                                RASS
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p29"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada, dan memiliki sebagian sarana
                                                prasarana RASS
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p29"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada sarana prasarana RASS
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p29_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p29_2">
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
                            <div class="separator separator-dashed my-4"></div>
                            <h4 class="fw-bolder d-flex align-items-center text-dark">VI. Pencegahan Dan
                                Penanggulangan Radikalisme</h4>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.1 Upaya Pencegahan Radikalisme
                            </h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    30. Adanya upaya dan peran serta keluarga, masyarakat, media massa dan pemerintah
                                    daerah dalam upaya mencegah radikalisme dan tindak pidana terorisme setahun terakhir
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p30"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada upaya dan perannya meningkat
                                                dibandingkan tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p30"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada upaya dan perannya sama saja
                                                dibandingkan tahun sebelumnya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p30"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada upaya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p30_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p30_2">
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
                                    31. Kegiatan pemberdayaan komunitas mantan narapidana teroris/orang terpapar
                                    radikalisme
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p31"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada pemberdayaan dan kegiatannya rutin
                                                dilakukan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p31"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada pemberdayaan tapi kegiatannya tidak
                                                rutin dilakukan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p31"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada kegiatan pemberdayaan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p31_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p31_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.2 Regulasi Penanggulangan
                                Radikalisme</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    32. Keberadaan regulasi dalam pencegahan dan penanggulangan radikalisme dan aksi
                                    terorisme
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p32"
                                                value="a,100">
                                            <label class="form-check-label">a. Tercantum dalam Peraturan Daerah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p32"
                                                value="b,50">
                                            <label class="form-check-label">b. Tercantum dalam Peraturan Kepala Daerah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p32"
                                                value="c,25">
                                            <label class="form-check-label">c. Tercantum dalam Instruksi/Keputusan
                                                Kepala Daerah/Surat Edaran
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p32"
                                                value="d,0">
                                            <label class="form-check-label">d. Tidak ada regulasi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p32_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p32_2">
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
                                    33. Kerjasama pemerintah daerah dengan stakeholder terkait dalam pencegahan dan
                                    penanggulangan radikalisme
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p33"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada kerjasama dan kegiatannya rutin
                                                dilakukan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p33"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada kerjasama tapi kegiatannya tidak
                                                rutin dilakukan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p33"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada kerjasama dalam pencegahan
                                                dan penanggulangan radikalisme
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p33_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p33_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        <div class="pb-3">
                            <!--begin::Title-->
                            <h5 class="fw-bold d-flex align-items-center text-dark">6.3 Upaya Penanggulangan
                                Radikalisme</h5>
                            <!--end::Title-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Row-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    34. Kegiatan edukasi seperti sosialisasi, penyebaran materi komunikasi, informasi
                                    dan edukasi tentang bahaya Terorisme
                                    <div class="fluid-container pt-4">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p34"
                                                value="a,100">
                                            <label class="form-check-label">a. Ada dan dilakukan secara rutin
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p34"
                                                value="b,50">
                                            <label class="form-check-label">b. Ada tapi tidak dilakukan secara rutin
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid form-check-sm pb-4">
                                            <input class="form-check-input" type="radio" name="p34"
                                                value="c,0">
                                            <label class="form-check-label">c. Tidak ada kegiatan penyebaran
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm pb-4">
                                        <input class="form-control" type="file" name="p34_1">
                                    </div>
                                    <div class="input-group input-group-sm pb-15">
                                        <input class="form-control" type="file" name="p34_2">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--begin::Actions-->
                    <div class="d-flex flex-row-reverse">
                        <!--begin::Wrapper-->
                        <div>
                            <button type="submit" class="btn btn-sm btn-primary me-3">
                                <span class="indicator-label">Simpan
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                fill="black" />
                                            <path
                                                d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </button>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </x-slot>
    {{-- End::Post component --}}

</x-dashboard.layout>
