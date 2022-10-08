<div class="d-flex justify-content-center">
    @if ($noteTwo->attachment_pdf != null)
        <div class="ms-4 ms-sm-2">
            <a href="{{ asset('storage/attachmentTwo/' . $noteTwo->attachment_pdf) }}" target="_blank"
                class="btn btn-sm btn-icon btn-light-danger btn-active-light-dark" data-bs-toggle="tooltip" title="PDF">
                <span class="svg-icon svg-icon-muted svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                            d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                            fill="black" />
                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                    </svg></span>
            </a>
        </div>
    @else
        <div class="ms-4 ms-sm-2">
            - &nbsp;
        </div>
    @endif
    @if ($noteTwo->attachment_img != null)
        <div class="ms-2">
            <a href="{{ asset('storage/attachmentTwo/' . $noteTwo->attachment_img) }}" target="_blank"
                class="btn btn-sm btn-icon btn-light-primary btn-active-light-dark" data-bs-toggle="tooltip"
                title="Dokumentasi">
                <span class="svg-icon svg-icon-muted svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                            d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                            fill="black" />
                        <path
                            d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                            fill="black" />
                    </svg></span>
            </a>
        </div>
    @else
        <div class="ms-4 ms-sm-2">
            -
        </div>
    @endif
</div>
