@extends('organization.layout')
@section('css')
    <link href="{{ asset('asset/barren/vendor/ckeditor5/sample/css/sample.css') }}" rel="stylesheet">
@endsection
@section('content')
    <x-modals.add-blog-modal />
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-main-title">
                            <h3>
                                <i class="fa-solid fa-calendar-days me-3"></i>Blogs
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ocard-right">
                            <button class="pe-4 ps-4 co-main-btn min-width" data-bs-toggle="modal"
                                data-bs-target="#addBlogModal">
                                <i class="fa-solid fa-plus"></i>Add Blog
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="dashboard-wrap-content p-4">
                                <h5 class="mb-4">My blogs ({{ count($blogs) }})</h5>
                                <div class="d-md-flex flex-wrap align-items-center">
                                    {{-- <div class="dashboard-date-wrap">
                                        <div class="form-group">
                                            <div class="relative-input position-relative">
                                                <input class="form-control h_40" type="text"
                                                    placeholder="Search by event name, status" value="" />
                                                <i class="uil uil-search"></i>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="rs ms-auto mt_r4">
                                        <div class="nav custom2-tabs btn-group" role="tablist">
                                            <button class="tab-link active" data-bs-toggle="tab" data-bs-target="#all-tab"
                                                type="button" role="tab" aria-controls="all-tab" aria-selected="true">
                                                All Blogs (<span class="total_event_counter">{{ $blogs->count() }}</span>)
                                            </button>
                                            {{-- <button class="tab-link" data-bs-toggle="tab" data-bs-target="#online-tab"
                                                type="button" role="tab" aria-controls="online-tab"
                                                aria-selected="false">
                                                Published (<span class="total_event_counter">0</span>)
                                            </button>
                                            <button class="tab-link" data-bs-toggle="tab" data-bs-target="#venue-tab"
                                                type="button" role="tab" aria-controls="venue-tab"
                                                aria-selected="false">
                                                Unpublished (<span class="total_event_counter">0</span>)
                                            </button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-list">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                    @foreach ($blogs as $blog)
                                        <div class="main-card mt-4">
                                            <div class="contact-list">
                                                <div
                                                    class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                    <div class="d-md-flex align-items-center event-top-info">
                                                        <div class="card-event-img">
                                                            <img src="{{ url($blog->image) }}"
                                                                alt="" />
                                                        </div>
                                                        <div class="card-event-dt">
                                                            <h5>
                                                                {{ $blog->title }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button data-bs-toggle="modal"
                                                                data-bs-target="#updateBlogModal{{ $blog->id }}"
                                                                href="{{ url('#') }}" class="dropdown-item"><i
                                                                    class="fa-solid fa-gear me-3"></i>Manage</button>
                                                            <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                    class="fa-solid fa-eye me-3"></i>Preview
                                                                Event</a>
                                                            <a href="{{ url('organization/blogs/duplicate/'.$blog->id) }}" class="dropdown-item"><i
                                                                    class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                            <a href="{{ url('organization/blog/delete/' . $blog->id) }}"
                                                                class="dropdown-item delete-event"><i
                                                                    class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                    <div class="icon-box">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                        </span>
                                                        <p>Status</p>
                                                        <h6 class="coupon-status">
                                                            {{ $blog->published_at ? 'Published' : 'Waiting for approval' }}
                                                        </h6>
                                                    </div>
                                                    <div class="icon-box">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                        </span>
                                                        <p>Posted on</p>
                                                        <h6 class="coupon-status">
                                                            {{ $blog->created_at->format('j M, Y g:i A') }}
                                                        </h6>
                                                    </div>
                                                    <div class="icon-box">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-ticket"></i>
                                                        </span>
                                                        <p>Views</p>
                                                        <h6 class="coupon-status">
                                                            {{ $blog->view_count }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <x-modals.update-blog-modal :blog="$blog" />
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="online-tab" role="tabpanel">
                                    {{-- <div class="main-card d-none mt-4">
                                    <div
                                        class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                        <div class="event-list-icon">
                                            <img src="{{ asset('/asset/barren/images/calendar.png') }}"
                                                alt="" />
                                        </div>
                                        <p class="font-16 mt-4 text-light3">
                                            No Event found
                                        </p>
                                    </div>
                                </div>
                                <div class="main-card mt-4">
                                    <div class="contact-list">
                                        <div
                                            class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                            <div class="d-md-flex align-items-center event-top-info">
                                                <div class="card-event-img">
                                                    <img src="{{ asset('/asset/barren/images/event-imgs/img-2.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="card-event-dt">
                                                    <h5>
                                                        Earrings
                                                        Workshop with
                                                        Bronwyn David
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-gear me-3"></i>Manage</a>
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-eye me-3"></i>Preview
                                                        Event</a>
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                    <a href="{{ url('#') }}"
                                                        class="dropdown-item delete-event"><i
                                                            class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                                <p>Status</p>
                                                <h6 class="coupon-status">
                                                    Publish
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                </span>
                                                <p>Starts on</p>
                                                <h6 class="coupon-status">
                                                    30 Jun, 2022 10:00
                                                    AM
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-ticket"></i>
                                                </span>
                                                <p>Ticket</p>
                                                <h6 class="coupon-status">
                                                    250
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-tag"></i>
                                                </span>
                                                <p>Tickets sold</p>
                                                <h6 class="coupon-status">
                                                    20
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mt-4">
                                    <div class="contact-list">
                                        <div
                                            class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                            <div class="d-md-flex align-items-center event-top-info">
                                                <div class="card-event-img">
                                                    <img src="{{ asset('/asset/barren/images/event-imgs/img-2.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="card-event-dt">
                                                    <h5>
                                                        Earrings
                                                        Workshop with
                                                        Bronwyn David
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-gear me-3"></i>Manage</a>
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-eye me-3"></i>Preview
                                                        Event</a>
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                    <a href="{{ url('#') }}"
                                                        class="dropdown-item delete-event"><i
                                                            class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                                <p>Status</p>
                                                <h6 class="coupon-status">
                                                    Publish
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                </span>
                                                <p>Starts on</p>
                                                <h6 class="coupon-status">
                                                    30 Jun, 2022 10:00
                                                    AM
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-ticket"></i>
                                                </span>
                                                <p>Ticket</p>
                                                <h6 class="coupon-status">
                                                    250
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-tag"></i>
                                                </span>
                                                <p>Tickets sold</p>
                                                <h6 class="coupon-status">
                                                    20
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                                <div class="tab-pane fade" id="venue-tab" role="tabpanel">
                                    {{-- <div class="main-card mt-4">
                                    <div class="contact-list">
                                        <div
                                            class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                            <div class="d-md-flex align-items-center event-top-info">
                                                <div class="card-event-img">
                                                    <img src="{{ asset('/asset/barren/images/event-imgs/img-7.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="card-event-dt">
                                                    <h5>
                                                        Tutorial on
                                                        Canvas Painting
                                                        for Beginners
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-gear me-3"></i>Manage</a>
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-eye me-3"></i>Preview
                                                        Event</a>
                                                    <a href="{{ url('#') }}" class="dropdown-item"><i
                                                            class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                    <a href="{{ url('#') }}"
                                                        class="dropdown-item delete-event"><i
                                                            class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </span>
                                                <p>Status</p>
                                                <h6 class="coupon-status">
                                                    Publish
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                </span>
                                                <p>Starts on</p>
                                                <h6 class="coupon-status">
                                                    30 Jun, 2022 10:00
                                                    AM
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-ticket"></i>
                                                </span>
                                                <p>Ticket</p>
                                                <h6 class="coupon-status">
                                                    250
                                                </h6>
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon">
                                                    <i class="fa-solid fa-tag"></i>
                                                </span>
                                                <p>Tickets sold</p>
                                                <h6 class="coupon-status">
                                                    20
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('asset/barren/vendor/ckeditor5/ckeditor.js') }}"></script>
    @foreach ($blogs as $blog)
        <script>
            ClassicEditor.create(document.querySelector("#ld_editor{{$blog->id}}"), {}).then((editor) => {
                    window.editor = editor;
                })
                .catch((err) => {
                    console.error(err.stack);
                });;
        </script>
    @endforeach
    <script>
        ClassicEditor.create(document.querySelector("#ld_editor"), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                        'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                        '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                // Changing the language of the interface requires loading the language file using the <script> tag.
                // language: 'es',
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                placeholder: '',
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22],
                    supportAllValues: true
                },
                // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }]
                },
                // Be careful with enabling previews
                // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                htmlEmbed: {
                    showPreviews: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                mention: {
                    feeds: [{
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                            '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                            '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                            '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }]
                },
                // The "super-build" contains more premium features that require additional configuration, disable them below.
                // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                removePlugins: [
                    // These two are commercial, but you can try them out without registering to a trial.
                    // 'ExportPdf',
                    // 'ExportWord',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // Storing images as Base64 is usually a very bad idea.
                    // Replace it on production website with other solutions:
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                    // from a local file system (file://) - load this site via HTTP server if you enable MathType
                    'MathType'
                ]
            })
            .then((editor) => {
                window.editor = editor;
            })
            .catch((err) => {
                console.error(err.stack);
            });
    </script>
@endsection
