<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Catatan Tatanan 4</x-slot>

    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }} ">
    </x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Catatan Tatanan 4</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Beranda</span>
                </li>
            </x-slot>

            <x-slot name="backbutton">
                <!--begin::Button-->
                <a href="{{ route('note-menu') }}" class="btn btn-sm btn-light-primary fw-bolder">
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
                <button type="button" class="btn btn-sm btn-primary" name="filter" id="filter">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="black" />
                        </svg>
                    </span>Filter</button>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card1-->
        <!--end::Filter-->

        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark fs-5 my-1">Catatan Tatanan 4</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Beranda</span>
                </h3>
                <div class="card-toolbar">
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <table id="datatable"
                    class="table table-sm table-row-bordered gy-8 gs-6 border rounded no-footer nowrap dataTable">
                    <thead>
                        <tr class="border-gray-200 fw-bold bg-lighten fs-7">
                            <th class="mw-50px">No.</th>
                            <th class="min-w-150px">Pertanyaan</th>
                            <th class="min-w-70px">Jawaban</th>
                            <th class="min-w-70px">Nilai</th>
                            <th class="min-w-100px">OPD</th>
                            <th>Berkas</th>
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
                fill_datatable();

                function fill_datatable(filter_period = '') {
                    var dataTable1 = $('#datatable').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: {
                            "url": "{{ route('noteFour.datatable') }}",
                            "data": {
                                filter_period: filter_period
                            }
                        },
                        columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        }, {
                            data: 'question',
                            name: 'question'
                        }, {
                            data: 'answer',
                            name: 'answer'
                        }, {
                            data: 'score',
                            name: 'score'
                        }, {
                            data: 'user.name',
                            name: 'user.name',
                            defaultContent: ''
                        }, {
                            data: 'attachment',
                            name: 'attachment'
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
                            targets: [5, 6]
                        }],
                        pagingType: "full_numbers",
                        "language": {
                            "search": "Cari:",
                            "emptyTable": "Tidak ada data yang tersedia pada tabel ini",
                            "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                            "infoEmpty": "Tidak menampilkan data apapun",
                            "infoFiltered": "(difilter dari total _MAX_ data)",
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
                }
                
                //filter-button
                $('#filter').click(function() {
                    var filter_period = $('#filter_period').val();
                    if (filter_period != '') {
                        $('#datatable').DataTable().destroy();
                        fill_datatable(filter_period);
                    } else {
                        alert('Pilih filter tahun periode yang datanya ingin ditampilkan.');
                    }
                })
            });
        </script>
        {{-- Start::Datatable --}}
    </x-slot>
    {{-- End::Javascript --}}

</x-dashboard.layout>
