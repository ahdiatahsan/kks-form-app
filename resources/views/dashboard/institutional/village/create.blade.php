<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Pokja Desa Kelurahan</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Pokja Desa Kelurahan</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Form Tambah Data</span>
                </li>
            </x-slot>

            <x-slot name="backbutton">
                <!--begin::Button-->
                <a href="{{ route('institutionalVillage.index') }}" class="btn btn-sm btn-light-success fw-bolder">
                    <span class="svg-icon svg-icon-muted svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z"
                                fill="black" />
                            <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z"
                                fill="black" />
                        </svg></span> Beranda
                </a>
                <!--end::Button-->
            </x-slot>
        </x-dashboard.toolbar.main>
    </x-slot>
    {{-- End::Toolbar component --}}

    {{-- Start::Post component --}}
    <x-slot name="post">
        <!--begin::form-->
        <form class="form" action="{{ route('institutionalVillage.store') }}" method="POST" autocomplete="off"
            enctype="multipart/form-data">
            @csrf
            <!--begin::card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark fs-5 my-1">Pokja Desa Kelurahan</span>
                        <span class="text-muted mt-1 fw-bold fs-7">Form Tambah Data</span>
                    </h3>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <div class="mb-6">
                        <label class="form-label fs-7 required">Tahun Periode</label>
                        <select class="form-select form-select-sm form-select-solid" name="period" id="select2Period"
                            data-placeholder="Tahun Periode" data-allow-clear="true" required>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label class="form-label fs-7 required">Judul</label>
                        <div class="input-group input-group-sm">
                            <input class="form-control" type="text" name="title" value="{{ old('title') }}"
                                required>
                        </div>
                    </div>
                    <div class="mb-8">
                        <label class="form-label">
                            <span class="fs-7 required">Berkas</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Ukuran maksimal berkas (pdf) adalah 5MB."></i>
                        </label>
                        <div class="input-group input-group-sm">
                            <input class="form-control" type="file" name="attachment_pdf" accept=".pdf" required>
                        </div>
                    </div>
                    <div class="mb-8">
                        <label class="form-label">
                            <span class="fs-7">Dokumentasi</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Ukuran maksimal dokumentasi (jpg, jpeg, png, webp) adalah 2MB."></i>
                        </label>
                        <div class="input-group input-group-sm">
                            <input class="form-control" type="file" name="attachment_img" accept=".jpg, .jpeg, .png, .webp">
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                    fill="black" />
                                <path
                                    d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                    fill="black" />
                            </svg>
                        </span>Simpan</button>
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::card-->
        </form>
        <!--end::form-->
    </x-slot>
    {{-- End::Post component --}}

    {{-- Start::Javascript --}}
    <x-slot name="javascript">
        {{-- Start::Select2 --}}
        <script>
            $('#select2Period').select2({
                language: {
                    noResults: function() {
                        return "Data Tidak ditemukan";
                    },
                    searching: function() {
                        return "...";
                    }
                },
                ajax: {
                    url: '{{ route('village.select2-period') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: $.trim(params.term)
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.period,
                                    id: item.id
                                }
                            })
                        }
                    },
                    cache: true
                }
            });
        </script>
        {{-- End::Select2 --}}
    </x-slot>
    {{-- End::Javascript --}}
</x-dashboard.layout>
