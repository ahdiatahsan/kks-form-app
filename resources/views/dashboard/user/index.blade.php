<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Pengguna</x-slot>

    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }} ">
    </x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Pengguna</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Beranda</span>
                </li>
            </x-slot>

            <x-slot name="backbutton">
            </x-slot>
        </x-dashboard.toolbar.main>
    </x-slot>
    {{-- End::Toolbar component --}}

    {{-- Start::Post component --}}
    <x-slot name="post">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark fs-5 my-1">Pengguna</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Beranda</span>
                </h3>
                <div class="card-toolbar">
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <table id="datatable"
                    class="table table-sm table-row-bordered gy-5 gs-4 border rounded no-footer nowrap dataTable">
                    <thead>
                        <tr class="border-gray-200 fw-bold bg-lighten fs-7">
                            <th class="mw-50px">No.</th>
                            <th class="min-w-150px">Nama</th>
                            <th class="min-w-150px">Email</th>
                            <th class="min-w-150px">Nomor Telepon</th>
                            <th class="min-w-150px">Kontak Person</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </x-slot>
    {{-- End::Post component --}}

    {{-- Start::Javascript --}}
    <x-slot name="javascript">
        {{-- Start::Datatable --}}
        <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('user.datatable') }}",
                    columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    }, {
                        data: 'name',
                        name: 'name'
                    }, {
                        data: 'email',
                        name: 'email'
                    }, {
                        data: 'phone',
                        name: 'phone'
                    }, {
                        data: 'contact_person',
                        name: 'contact_person'
                    }, {
                        data: 'action',
                        name: 'action'
                    }],
                    columnDefs: [{
                        className: 'text-center',
                        orderable: false,
                        targets: [0]
                    }, {
                        className: 'text-center mw-150px',
                        orderable: false,
                        targets: [5]
                    }],
                    pagingType: "full_numbers",
                    "language": {
                        "search": "Cari:",
                        "emptyTable": "Tidak ada data yang tersedia pada tabel ini",
                        "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        "infoEmpty": "Tidak menampilkan data apapun",
                        "infoFiltered":   "(difilter dari total _MAX_ data)",
                        "loadingRecords": "Memuat...",
                        "processing": "Memproses...",
                        "zeroRecords": "Tidak ada data yang cocok ditemukan",
                    },
                    dom: "<'row'" +
                        "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                        "<'col-sm-6 d-flex align-items-center justify-content-end z-0'f>" +
                        ">" +

                        "<'table-responsive'tr>" +

                        "<'row'" +
                        "<'col-sm-6 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                        "<'col-sm-6 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                        ">"
                });
            });
        </script>
        {{-- Start::Datatable --}}
    </x-slot>
    {{-- End::Javascript --}}

</x-dashboard.layout>
