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
                    <span class="text-muted">Form Ubah Data</span>
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
        <form class="form" action="{{ route('institutionalVillage.update', $institutionalVillage->id) }}" method="POST" autocomplete="off"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <!--begin::card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark fs-5 my-1">Pokja Desa Kelurahan</span>
                        <span class="text-muted mt-1 fw-bold fs-7">Form Ubah Data</span>
                    </h3>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <div class="mb-6">
                        <label class="form-label fs-7 required">Judul</label>
                        <div class="input-group input-group-sm">
                            <input class="form-control" type="text" name="title"
                                value="{{ old('title', $institutionalVillage->title ?? '') }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            <span class="fs-7">Berkas</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Ukuran maksimal berkas (pdf) adalah 5MB."></i>
                        </label>
                        <div class="input-group input-group-sm pb-3">
                            <input class="form-control" type="file" name="attachment_pdf">
                        </div>
                        @if ($institutionalVillage->attachment_pdf != null)
                            <div class="input-group input-group-sm pb-2">
                                <a href="{{ asset('storage/institutionalVillage/' . $institutionalVillage->attachment_pdf) }}"
                                    target="_blank">Lihat Berkas</a>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            <span class="fs-7">Dokumentasi</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Ukuran maksimal dokumentasi (jpg, jpeg, png, webp) adalah 2MB."></i>
                        </label>
                        <div class="input-group input-group-sm pb-3">
                            <input class="form-control" type="file" name="attachment_img">
                        </div>
                        @if ($institutionalVillage->attachment_img != null)
                            <div class="input-group input-group-sm pb-2">
                                <a href="{{ asset('storage/institutionalVillage/' . $institutionalVillage->attachment_img) }}"
                                    target="_blank">Lihat Dokumentasi</a>
                            </div>
                        @endif
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6">
                    <button type="submit" class="btn btn-sm btn-success">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                    fill="black"></path>
                                <path
                                    d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                    fill="black"></path>
                                <path
                                    d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                    fill="black"></path>
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
</x-dashboard.layout>
