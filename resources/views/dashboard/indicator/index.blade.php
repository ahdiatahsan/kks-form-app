<x-dashboard.layout>
    {{-- Start::Head component --}}
    <x-slot name="title">Indikator Khusus</x-slot>
    {{-- End::Head component --}}

    {{-- Start::Toolbar component --}}
    <x-slot name="toolbar">
        <x-dashboard.toolbar.main>
            <x-slot name="title">Indikator Khusus</x-slot>

            <x-slot name="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="text-muted">Menu</span>
                </li>
            </x-slot>

            <x-slot name="backbutton">
            </x-slot>
        </x-dashboard.toolbar.main>
    </x-slot>
    {{-- End::Toolbar component --}}

    {{-- Start::Post component --}}
    <x-slot name="post">
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-4">
                <!--begin::Tatanan 1-->
                <a href="{{ route('tatananOne.index') }}" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M12.025 4.725C9.725 2.425 6.025 2.425 3.725 4.725C1.425 7.025 1.425 10.725 3.725 13.025L11.325 20.625C11.725 21.025 12.325 21.025 12.725 20.625L20.325 13.025C22.625 10.725 22.625 7.025 20.325 4.725C18.025 2.425 14.325 2.425 12.025 4.725Z" fill="black"/>
                                <path d="M14.025 17.125H13.925C13.525 17.025 13.125 16.725 13.025 16.325L11.925 11.125L11.025 14.325C10.925 14.725 10.625 15.025 10.225 15.025C9.825 15.125 9.425 14.925 9.225 14.625L7.725 12.325L6.525 12.925C6.425 13.025 6.225 13.025 6.125 13.025H3.125C2.525 13.025 2.125 12.625 2.125 12.025C2.125 11.425 2.525 11.025 3.125 11.025H5.925L7.725 10.125C8.225 9.925 8.725 10.025 9.025 10.425L9.825 11.625L11.225 6.72498C11.325 6.32498 11.725 6.02502 12.225 6.02502C12.725 6.02502 13.025 6.32495 13.125 6.82495L14.525 13.025L15.225 11.525C15.425 11.225 15.725 10.925 16.125 10.925H21.125C21.725 10.925 22.125 11.325 22.125 11.925C22.125 12.525 21.725 12.925 21.125 12.925H16.725L15.025 16.325C14.725 16.925 14.425 17.125 14.025 17.125Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 1</div>
                        <div class="fw-bold text-white">Kehidupan Masyarakat Sehat Mandiri</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 1-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tatanan 2-->
                <a href="{{ route('tatananTwo.index') }}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 2</div>
                        <div class="fw-bold text-white">Permukiman Dan Rumah Ibadat</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 2-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tatanan 3-->
                <a href="{{ route('tatananThree.index') }}" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="black"/>
                                <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="black"/>
                                <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="black"/>
                                <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="black"/>
                                <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="black"/>
                                <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="black"/>
                                <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="black"/>
                                <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 3</div>
                        <div class="fw-bold text-white">Pasar Rakyat</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 3-->
            </div>
        </div>
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-4">
                <!--begin::Tatanan 4-->
                <a href="{{ route('tatananFour.index') }}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 4</div>
                        <div class="fw-bold text-white">Satuan Pendidikan</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 4-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tatanan 5-->
                <a href="{{ route('tatananFive.index') }}" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black"/>
                                <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 5</div>
                        <div class="fw-bold text-white">Pariwisata</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 5-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tatanan 6-->
                <a href="{{ route('tatananSix.index') }}" class="card bg-primary hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="black"/>
                                <path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 6</div>
                        <div class="fw-bold text-white">Transportasi Dan Tertib Lalu Lintas Jalan</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 6-->
            </div>
        </div>
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-4">
                <!--begin::Tatanan 7-->
                <a href="{{ route('tatananSeven.index') }}" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="black"/>
                                <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="black"/>
                                <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 7</div>
                        <div class="fw-bold text-white">Perkantoran Dan Perindustrian</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 7-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tatanan 8-->
                <a href="{{ route('tatananEight.index') }}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                <path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="black"/>
                                <path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 8</div>
                        <div class="fw-bold text-white">Perlindungan Sosial</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 8-->
            </div>
            <div class="col-xl-4">
                <!--begin::Tatanan 9-->
                <a href="{{ route('tatananNine.index') }}" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M18 6V12C18 15.3 15.3 18 12 18C8.7 18 6 15.3 6 12V6H18ZM21 2H3C2.4 2 2 2.4 2 3V12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12V3C22 2.4 21.6 2 21 2Z" fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Tatanan 9</div>
                        <div class="fw-bold text-white">Pencegahan Dan Penanganan Bencana</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tatanan 9-->
            </div>
        </div>
    </x-slot>
    {{-- End::Post component --}}

    {{-- Start::Javascript --}}
    
    {{-- End::Javascript --}}

</x-dashboard.layout>