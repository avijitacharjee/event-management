@extends('public.layout')
@section('content')
    <div class="modal fade" id="supportTicketModal" tabindex="-1" aria-labelledby="supportTicketModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supportTicketModalLabel">
                        Submit a ticket
                    </h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="model-content main-form">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group mt-4">
                                    <label class="form-label">Contact Name*</label>
                                    <input class="form-control h_40" type="text" placeholder="" value="" />
                                </div>
                                <div class="form-group mt-4">
                                    <label class="form-label">Email*</label>
                                    <input class="form-control h_40" type="text" placeholder="" value="" />
                                </div>
                                <div class="form-group mt-4">
                                    <label class="form-label">Subject*</label>
                                    <input class="form-control h_40" type="text" placeholder="" value="" />
                                </div>
                                <div class="form-group mt-4">
                                    <label class="form-label">Description*</label>
                                    <div class="text-editor">
                                        <div id="tk_editor"></div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <label class="form-label">Priority*</label>
                                    <select class="selectpicker" title="None">
                                        <option value="High">High</option>
                                        <option value="Medium">
                                            Medium
                                        </option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                    <label class="form-label">Classifications*</label>
                                    <select class="selectpicker" title="None">
                                        <option value="Question">
                                            Question
                                        </option>
                                        <option value="Problem">
                                            Problem
                                        </option>
                                        <option value="Feature">
                                            Feature
                                        </option>
                                        <option value="Others">
                                            Others
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                    <label class="form-label">Attechments*</label>
                                    <div class="upload-file-dt">
                                        <div class="upload-btn">
                                            <input class="uploadBtn-input" type="file" accept="image/*, application/pdf"
                                                id="upload" multiple="" />
                                            <label for="upload" title="Image">Upload Files</label>
                                        </div>
                                        <span class="uploadBtn-file-name">Attach a file</span>
                                        <small>(Up to 20 MB )</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="main-btn min-width btn-hover h_40">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="hero-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="hero-banner-content text-center">
                            <h2>How can we help?</h2>
                            <p class="ps-0">
                                Search our knowledge base or submit a
                                ticket.
                            </p>
                            <div class="">
                                <input class="form-control h_50 w-100" type="text" placeholder="Search articles" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="main-card">
                            <a href="{{ url('help_section_detail_view.html') }}"
                                class="help-item d-flex align-center border_bottom">
                                <div class="help-item-icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="help-item-content">
                                    <h4>I am an Organiser</h4>
                                    <span>76 Articles</span>
                                </div>
                            </a>
                            <a href="{{ url('help_section_detail_view.html') }}"
                                class="help-item d-flex align-center border_bottom">
                                <div class="help-item-icon">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>
                                <div class="help-item-content">
                                    <h4>I am an Attendee</h4>
                                    <span>15 Articles</span>
                                </div>
                            </a>
                            <a href="{{ url('help_section_detail_view.html') }}"
                                class="help-item d-flex align-center border_bottom">
                                <div class="help-item-icon">
                                    <i class="fa-solid fa-microphone"></i>
                                </div>
                                <div class="help-item-content">
                                    <h4>I am a Speaker</h4>
                                    <span>5 Articles</span>
                                </div>
                            </a>
                            <a href="{{ url('help_section_detail_view.html') }}"
                                class="help-item d-flex align-center border_bottom">
                                <div class="help-item-icon">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <div class="help-item-content">
                                    <h4>Promoting an Event</h4>
                                    <span>12 Articles</span>
                                </div>
                            </a>
                            <a href="{{ url('help_section_detail_view.html') }}"
                                class="help-item d-flex align-center border_bottom">
                                <div class="help-item-icon">
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                                <div class="help-item-content">
                                    <h4>Troubleshooting</h4>
                                    <span>9 Articles</span>
                                </div>
                            </a>
                            <a href="{{ url('help_section_detail_view.html') }}"
                                class="help-item d-flex align-center border_bottom">
                                <div class="help-item-icon">
                                    <i class="fa-solid fa-file-lines"></i>
                                </div>
                                <div class="help-item-content">
                                    <h4>I use old Evento</h4>
                                    <span>40 Articles</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="help-center-title mt-5 mt-lg-0">
                            <h4 class="border_bottom">Popular Articles</h4>
                            <div class="main-card">
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">Creating an
                                    event</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">How do I
                                    access the backend of my
                                    website (admin section)?</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">Where is my
                                    event's name being used?</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">How to build
                                    my own survey?</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">Deleting &
                                    refunding tickets</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">How to import
                                    or add attendees at the
                                    backend</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">How to setup
                                    a Stripe account</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">Can my events
                                    page reflect my company's
                                    branding?</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">Do my
                                    customers have to make an account
                                    with Evento?</a>
                                <a href="{{ url('help_article_detail_view.html') }}" class="help-item-link">How do I know
                                    who has arrived at my
                                    event?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
