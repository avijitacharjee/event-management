<div class="step-tab-panel step-tab-location" id="tab_step3">
    <div class="tab-from-content">
        <div class="main-card">
            <div class="bp-title">
                <h4>
                    <i class="fa-solid fa-gear step_icon me-3"></i>Setting
                </h4>
            </div>
            <div class="p_30 bp-form main-form">
                <div class="form-group">
                    <div class="ticket-section">
                        <label class="form-label fs-16">Let's
                            configure a
                            few
                            additional
                            options for
                            your
                            event!</label>
                        <p class="mt-2 fs-14 d-block mb-3 pe_right">
                            Change the
                            following
                            settings
                            based on
                            your
                            preferences
                            to customise
                            your event
                            accordingly.
                        </p>
                        <div class="content-holder">
                            <div class="setting-item pb-0 pt_30">
                                <div class="d-flex align-items-start">
                                    <label class="btn-switch m-0 me-3">
                                        <input type="checkbox" class="" id="tags-btn" value=""
                                            checked />
                                        <span class="checkbox-slider"></span>
                                    </label>
                                    <div class="d-flex flex-column">
                                        <label class="color-black fw-bold mb-1">I don't accept partial payment</label>
                                        {{-- <p class="mt-2 fs-14 d-block mb-0">
                                            Use
                                            relevant
                                            words
                                            as
                                            your
                                            tags
                                            to
                                            improve
                                            the
                                            discoverability
                                            of
                                            your
                                            event.
                                            <a href="{{ url('#') }}" class="a-link">Learn
                                                more</a>
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="tags-holder"
                                    style="display: none;">
                                    <div class="ticket-instructions-content tags-container mt-4">
                                        <input class="form-control tags-input" type="number" name="partial_payment"
                                            placeholder="Enter amount" />
                                        <div class="tags-list"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item border_bottom pb_30 pt-4">
                                <div class="d-flex align-items-start">
                                    <label class="btn-switch m-0 me-3">
                                        <input type="checkbox" class="" id="booking-start-time-btn" value=""
                                            checked />
                                        <span class="checkbox-slider"></span>
                                    </label>
                                    <div class="d-flex flex-column">
                                        <label class="color-black fw-bold mb-1">I
                                            want
                                            the
                                            bookings
                                            to
                                            start
                                            immediately.</label>
                                        <p class="mt-2 fs-14 d-block mb-0">
                                            Disable
                                            this
                                            option
                                            if
                                            you
                                            want
                                            to
                                            start
                                            your
                                            booking
                                            from
                                            a
                                            specific
                                            date
                                            and
                                            time.
                                        </p>
                                    </div>
                                </div>
                                <div class="booking-start-time-holder"
                                    style="display: none;">
                                    <div class="form-group pt_30">
                                        <label class="form-label fs-16">Booking
                                            starts
                                            on</label>
                                        <p class="mt-2 fs-14 d-block mb-0">
                                            Specify
                                            the
                                            date
                                            and
                                            time
                                            when
                                            you
                                            want
                                            the
                                            booking
                                            to
                                            start.
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label mt-3 fs-6">Event
                                                    Date.*</label>
                                                <div class="loc-group position-relative">
                                                    <input class="form-control h_50 datepicker-here" data-language="en"
                                                        type="text" placeholder="MM/DD/YYYY"
                                                        name="booking_start_date" />
                                                    <span class="absolute-icon"><i
                                                            class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="clock-icon">
                                                    <label class="form-label mt-3 fs-6">Time</label>
                                                    {{-- <select class="selectpicker"
                                                        data-size="5"
                                                        name="booking_start_time"
                                                        data-live-search="true">
                                                        <option value="00:00">
                                                            12:00
                                                            AM
                                                        </option>
                                                        <option value="00:15">
                                                            12:15
                                                            AM
                                                        </option>
                                                        <option value="00:30">
                                                            12:30
                                                            AM
                                                        </option>
                                                        <option value="00:45">
                                                            12:45
                                                            AM
                                                        </option>
                                                        <option value="01:00">
                                                            01:00
                                                            AM
                                                        </option>
                                                        <option value="01:15">
                                                            01:15
                                                            AM
                                                        </option>
                                                        <option value="01:30">
                                                            01:30
                                                            AM
                                                        </option>
                                                        <option value="01:45">
                                                            01:45
                                                            AM
                                                        </option>
                                                        <option value="02:00">
                                                            02:00
                                                            AM
                                                        </option>
                                                        <option value="02:15">
                                                            02:15
                                                            AM
                                                        </option>
                                                        <option value="02:30">
                                                            02:30
                                                            AM
                                                        </option>
                                                        <option value="02:45">
                                                            02:45
                                                            AM
                                                        </option>
                                                        <option value="03:00">
                                                            03:00
                                                            AM
                                                        </option>
                                                        <option value="03:15">
                                                            03:15
                                                            AM
                                                        </option>
                                                        <option value="03:30">
                                                            03:30
                                                            AM
                                                        </option>
                                                        <option value="03:45">
                                                            03:45
                                                            AM
                                                        </option>
                                                        <option value="04:00">
                                                            04:00
                                                            AM
                                                        </option>
                                                        <option value="04:15">
                                                            04:15
                                                            AM
                                                        </option>
                                                        <option value="04:30">
                                                            04:30
                                                            AM
                                                        </option>
                                                        <option value="04:45">
                                                            04:45
                                                            AM
                                                        </option>
                                                        <option value="05:00">
                                                            05:00
                                                            AM
                                                        </option>
                                                        <option value="05:15">
                                                            05:15
                                                            AM
                                                        </option>
                                                        <option value="05:30">
                                                            05:30
                                                            AM
                                                        </option>
                                                        <option value="05:45">
                                                            05:45
                                                            AM
                                                        </option>
                                                        <option value="06:00">
                                                            06:00
                                                            AM
                                                        </option>
                                                        <option value="06:15">
                                                            06:15
                                                            AM
                                                        </option>
                                                        <option value="06:30">
                                                            06:30
                                                            AM
                                                        </option>
                                                        <option value="06:45">
                                                            06:45
                                                            AM
                                                        </option>
                                                        <option value="07:00">
                                                            07:00
                                                            AM
                                                        </option>
                                                        <option value="07:15">
                                                            07:15
                                                            AM
                                                        </option>
                                                        <option value="07:30">
                                                            07:30
                                                            AM
                                                        </option>
                                                        <option value="07:45">
                                                            07:45
                                                            AM
                                                        </option>
                                                        <option value="08:00">
                                                            08:00
                                                            AM
                                                        </option>
                                                        <option value="08:15">
                                                            08:15
                                                            AM
                                                        </option>
                                                        <option value="08:30">
                                                            08:30
                                                            AM
                                                        </option>
                                                        <option value="08:45">
                                                            08:45
                                                            AM
                                                        </option>
                                                        <option value="09:00">
                                                            09:00
                                                            AM
                                                        </option>
                                                        <option value="09:15">
                                                            09:15
                                                            AM
                                                        </option>
                                                        <option value="09:30">
                                                            09:30
                                                            AM
                                                        </option>
                                                        <option value="09:45">
                                                            09:45
                                                            AM
                                                        </option>
                                                        <option value="10:00"
                                                            selected="selected">
                                                            10:00
                                                            AM
                                                        </option>
                                                        <option value="10:15">
                                                            10:15
                                                            AM
                                                        </option>
                                                        <option value="10:30">
                                                            10:30
                                                            AM
                                                        </option>
                                                        <option value="10:45">
                                                            10:45
                                                            AM
                                                        </option>
                                                        <option value="11:00">
                                                            11:00
                                                            AM
                                                        </option>
                                                        <option value="11:15">
                                                            11:15
                                                            AM
                                                        </option>
                                                        <option value="11:30">
                                                            11:30
                                                            AM
                                                        </option>
                                                        <option value="11:45">
                                                            11:45
                                                            AM
                                                        </option>
                                                        <option value="12:00">
                                                            12:00
                                                            PM
                                                        </option>
                                                        <option value="12:15">
                                                            12:15
                                                            PM
                                                        </option>
                                                        <option value="12:30">
                                                            12:30
                                                            PM
                                                        </option>
                                                        <option value="12:45">
                                                            12:45
                                                            PM
                                                        </option>
                                                        <option value="13:00">
                                                            01:00
                                                            PM
                                                        </option>
                                                        <option value="13:15">
                                                            01:15
                                                            PM
                                                        </option>
                                                        <option value="13:30">
                                                            01:30
                                                            PM
                                                        </option>
                                                        <option value="13:45">
                                                            01:45
                                                            PM
                                                        </option>
                                                        <option value="14:00">
                                                            02:00
                                                            PM
                                                        </option>
                                                        <option value="14:15">
                                                            02:15
                                                            PM
                                                        </option>
                                                        <option value="14:30">
                                                            02:30
                                                            PM
                                                        </option>
                                                        <option value="14:45">
                                                            02:45
                                                            PM
                                                        </option>
                                                        <option value="15:00">
                                                            03:00
                                                            PM
                                                        </option>
                                                        <option value="15:15">
                                                            03:15
                                                            PM
                                                        </option>
                                                        <option value="15:30">
                                                            03:30
                                                            PM
                                                        </option>
                                                        <option value="15:45">
                                                            03:45
                                                            PM
                                                        </option>
                                                        <option value="16:00">
                                                            04:00
                                                            PM
                                                        </option>
                                                        <option value="16:15">
                                                            04:15
                                                            PM
                                                        </option>
                                                        <option value="16:30">
                                                            04:30
                                                            PM
                                                        </option>
                                                        <option value="16:45">
                                                            04:45
                                                            PM
                                                        </option>
                                                        <option value="17:00">
                                                            05:00
                                                            PM
                                                        </option>
                                                        <option value="17:15">
                                                            05:15
                                                            PM
                                                        </option>
                                                        <option value="17:30">
                                                            05:30
                                                            PM
                                                        </option>
                                                        <option value="17:45">
                                                            05:45
                                                            PM
                                                        </option>
                                                        <option value="18:00">
                                                            06:00
                                                            PM
                                                        </option>
                                                        <option value="18:15">
                                                            06:15
                                                            PM
                                                        </option>
                                                        <option value="18:30">
                                                            06:30
                                                            PM
                                                        </option>
                                                        <option value="18:45">
                                                            06:45
                                                            PM
                                                        </option>
                                                        <option value="19:00">
                                                            07:00
                                                            PM
                                                        </option>
                                                        <option value="19:15">
                                                            07:15
                                                            PM
                                                        </option>
                                                        <option value="19:30">
                                                            07:30
                                                            PM
                                                        </option>
                                                        <option value="19:45">
                                                            07:45
                                                            PM
                                                        </option>
                                                        <option value="20:00">
                                                            08:00
                                                            PM
                                                        </option>
                                                        <option value="20:15">
                                                            08:15
                                                            PM
                                                        </option>
                                                        <option value="20:30">
                                                            08:30
                                                            PM
                                                        </option>
                                                        <option value="20:45">
                                                            08:45
                                                            PM
                                                        </option>
                                                        <option value="21:00">
                                                            09:00
                                                            PM
                                                        </option>
                                                        <option value="21:15">
                                                            09:15
                                                            PM
                                                        </option>
                                                        <option value="21:30">
                                                            09:30
                                                            PM
                                                        </option>
                                                        <option value="21:45">
                                                            09:45
                                                            PM
                                                        </option>
                                                        <option value="22:00">
                                                            10:00
                                                            PM
                                                        </option>
                                                        <option value="22:15">
                                                            10:15
                                                            PM
                                                        </option>
                                                        <option value="22:30">
                                                            10:30
                                                            PM
                                                        </option>
                                                        <option value="22:45">
                                                            10:45
                                                            PM
                                                        </option>
                                                        <option value="23:00">
                                                            11:00
                                                            PM
                                                        </option>
                                                        <option value="23:15">
                                                            11:15
                                                            PM
                                                        </option>
                                                        <option value="23:30">
                                                            11:30
                                                            PM
                                                        </option>
                                                        <option value="23:45">
                                                            11:45
                                                            PM
                                                        </option>
                                                    </select> --}}
                                                    <x-utils.select-time />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="setting-item border_bottom pb_30 pt_30">
                                <div class="d-flex align-items-start">
                                    <label class="btn-switch m-0 me-3">
                                        <input type="checkbox" class="" id="booking-end-time-btn" value=""
                                            checked />
                                        <span class="checkbox-slider"></span>
                                    </label>
                                    <div class="d-flex flex-column">
                                        <label class="color-black fw-bold mb-1">I
                                            want
                                            the
                                            bookings
                                            to
                                            continue
                                            until
                                            my
                                            event
                                            ends.</label>
                                        <p class="mt-2 fs-14 d-block mb-0">
                                            Disable
                                            this
                                            option
                                            if
                                            you
                                            want
                                            to
                                            end
                                            your
                                            booking
                                            from
                                            a
                                            specific
                                            date
                                            and
                                            time.
                                        </p>
                                    </div>
                                </div>
                                <div class="booking-end-time-holder"
                                    style="display: none;">
                                    <div class="form-group pt_30">
                                        <label class="form-label fs-16">Booking
                                            ends
                                            on</label>
                                        <p class="mt-2 fs-14 d-block mb-0">
                                            Specify
                                            the
                                            date
                                            and
                                            time
                                            when
                                            you
                                            want
                                            the
                                            booking
                                            to
                                            start.
                                        </p>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label mt-3 fs-6">Event
                                                    Date.*</label>
                                                <div class="loc-group position-relative">
                                                    <input class="form-control h_50 datepicker-here" data-language="en"
                                                        type="text" placeholder="MM/DD/YYYY"
                                                        name="booking_end_date" />
                                                    <span class="absolute-icon"><i
                                                            class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="clock-icon">
                                                    <label class="form-label mt-3 fs-6">Time</label>
                                                    <select class="selectpicker" data-size="5" name="booking_end_time"
                                                        data-live-search="true">
                                                        <option value="00:00">
                                                            12:00
                                                            AM
                                                        </option>
                                                        <option value="00:15">
                                                            12:15
                                                            AM
                                                        </option>
                                                        <option value="00:30">
                                                            12:30
                                                            AM
                                                        </option>
                                                        <option value="00:45">
                                                            12:45
                                                            AM
                                                        </option>
                                                        <option value="01:00">
                                                            01:00
                                                            AM
                                                        </option>
                                                        <option value="01:15">
                                                            01:15
                                                            AM
                                                        </option>
                                                        <option value="01:30">
                                                            01:30
                                                            AM
                                                        </option>
                                                        <option value="01:45">
                                                            01:45
                                                            AM
                                                        </option>
                                                        <option value="02:00">
                                                            02:00
                                                            AM
                                                        </option>
                                                        <option value="02:15">
                                                            02:15
                                                            AM
                                                        </option>
                                                        <option value="02:30">
                                                            02:30
                                                            AM
                                                        </option>
                                                        <option value="02:45">
                                                            02:45
                                                            AM
                                                        </option>
                                                        <option value="03:00">
                                                            03:00
                                                            AM
                                                        </option>
                                                        <option value="03:15">
                                                            03:15
                                                            AM
                                                        </option>
                                                        <option value="03:30">
                                                            03:30
                                                            AM
                                                        </option>
                                                        <option value="03:45">
                                                            03:45
                                                            AM
                                                        </option>
                                                        <option value="04:00">
                                                            04:00
                                                            AM
                                                        </option>
                                                        <option value="04:15">
                                                            04:15
                                                            AM
                                                        </option>
                                                        <option value="04:30">
                                                            04:30
                                                            AM
                                                        </option>
                                                        <option value="04:45">
                                                            04:45
                                                            AM
                                                        </option>
                                                        <option value="05:00">
                                                            05:00
                                                            AM
                                                        </option>
                                                        <option value="05:15">
                                                            05:15
                                                            AM
                                                        </option>
                                                        <option value="05:30">
                                                            05:30
                                                            AM
                                                        </option>
                                                        <option value="05:45">
                                                            05:45
                                                            AM
                                                        </option>
                                                        <option value="06:00">
                                                            06:00
                                                            AM
                                                        </option>
                                                        <option value="06:15">
                                                            06:15
                                                            AM
                                                        </option>
                                                        <option value="06:30">
                                                            06:30
                                                            AM
                                                        </option>
                                                        <option value="06:45">
                                                            06:45
                                                            AM
                                                        </option>
                                                        <option value="07:00">
                                                            07:00
                                                            AM
                                                        </option>
                                                        <option value="07:15">
                                                            07:15
                                                            AM
                                                        </option>
                                                        <option value="07:30">
                                                            07:30
                                                            AM
                                                        </option>
                                                        <option value="07:45">
                                                            07:45
                                                            AM
                                                        </option>
                                                        <option value="08:00">
                                                            08:00
                                                            AM
                                                        </option>
                                                        <option value="08:15">
                                                            08:15
                                                            AM
                                                        </option>
                                                        <option value="08:30">
                                                            08:30
                                                            AM
                                                        </option>
                                                        <option value="08:45">
                                                            08:45
                                                            AM
                                                        </option>
                                                        <option value="09:00">
                                                            09:00
                                                            AM
                                                        </option>
                                                        <option value="09:15">
                                                            09:15
                                                            AM
                                                        </option>
                                                        <option value="09:30">
                                                            09:30
                                                            AM
                                                        </option>
                                                        <option value="09:45">
                                                            09:45
                                                            AM
                                                        </option>
                                                        <option value="10:00" selected="selected">
                                                            10:00
                                                            AM
                                                        </option>
                                                        <option value="10:15">
                                                            10:15
                                                            AM
                                                        </option>
                                                        <option value="10:30">
                                                            10:30
                                                            AM
                                                        </option>
                                                        <option value="10:45">
                                                            10:45
                                                            AM
                                                        </option>
                                                        <option value="11:00">
                                                            11:00
                                                            AM
                                                        </option>
                                                        <option value="11:15">
                                                            11:15
                                                            AM
                                                        </option>
                                                        <option value="11:30">
                                                            11:30
                                                            AM
                                                        </option>
                                                        <option value="11:45">
                                                            11:45
                                                            AM
                                                        </option>
                                                        <option value="12:00">
                                                            12:00
                                                            PM
                                                        </option>
                                                        <option value="12:15">
                                                            12:15
                                                            PM
                                                        </option>
                                                        <option value="12:30">
                                                            12:30
                                                            PM
                                                        </option>
                                                        <option value="12:45">
                                                            12:45
                                                            PM
                                                        </option>
                                                        <option value="13:00">
                                                            01:00
                                                            PM
                                                        </option>
                                                        <option value="13:15">
                                                            01:15
                                                            PM
                                                        </option>
                                                        <option value="13:30">
                                                            01:30
                                                            PM
                                                        </option>
                                                        <option value="13:45">
                                                            01:45
                                                            PM
                                                        </option>
                                                        <option value="14:00">
                                                            02:00
                                                            PM
                                                        </option>
                                                        <option value="14:15">
                                                            02:15
                                                            PM
                                                        </option>
                                                        <option value="14:30">
                                                            02:30
                                                            PM
                                                        </option>
                                                        <option value="14:45">
                                                            02:45
                                                            PM
                                                        </option>
                                                        <option value="15:00">
                                                            03:00
                                                            PM
                                                        </option>
                                                        <option value="15:15">
                                                            03:15
                                                            PM
                                                        </option>
                                                        <option value="15:30">
                                                            03:30
                                                            PM
                                                        </option>
                                                        <option value="15:45">
                                                            03:45
                                                            PM
                                                        </option>
                                                        <option value="16:00">
                                                            04:00
                                                            PM
                                                        </option>
                                                        <option value="16:15">
                                                            04:15
                                                            PM
                                                        </option>
                                                        <option value="16:30">
                                                            04:30
                                                            PM
                                                        </option>
                                                        <option value="16:45">
                                                            04:45
                                                            PM
                                                        </option>
                                                        <option value="17:00">
                                                            05:00
                                                            PM
                                                        </option>
                                                        <option value="17:15">
                                                            05:15
                                                            PM
                                                        </option>
                                                        <option value="17:30">
                                                            05:30
                                                            PM
                                                        </option>
                                                        <option value="17:45">
                                                            05:45
                                                            PM
                                                        </option>
                                                        <option value="18:00">
                                                            06:00
                                                            PM
                                                        </option>
                                                        <option value="18:15">
                                                            06:15
                                                            PM
                                                        </option>
                                                        <option value="18:30">
                                                            06:30
                                                            PM
                                                        </option>
                                                        <option value="18:45">
                                                            06:45
                                                            PM
                                                        </option>
                                                        <option value="19:00">
                                                            07:00
                                                            PM
                                                        </option>
                                                        <option value="19:15">
                                                            07:15
                                                            PM
                                                        </option>
                                                        <option value="19:30">
                                                            07:30
                                                            PM
                                                        </option>
                                                        <option value="19:45">
                                                            07:45
                                                            PM
                                                        </option>
                                                        <option value="20:00">
                                                            08:00
                                                            PM
                                                        </option>
                                                        <option value="20:15">
                                                            08:15
                                                            PM
                                                        </option>
                                                        <option value="20:30">
                                                            08:30
                                                            PM
                                                        </option>
                                                        <option value="20:45">
                                                            08:45
                                                            PM
                                                        </option>
                                                        <option value="21:00">
                                                            09:00
                                                            PM
                                                        </option>
                                                        <option value="21:15">
                                                            09:15
                                                            PM
                                                        </option>
                                                        <option value="21:30">
                                                            09:30
                                                            PM
                                                        </option>
                                                        <option value="21:45">
                                                            09:45
                                                            PM
                                                        </option>
                                                        <option value="22:00">
                                                            10:00
                                                            PM
                                                        </option>
                                                        <option value="22:15">
                                                            10:15
                                                            PM
                                                        </option>
                                                        <option value="22:30">
                                                            10:30
                                                            PM
                                                        </option>
                                                        <option value="22:45">
                                                            10:45
                                                            PM
                                                        </option>
                                                        <option value="23:00">
                                                            11:00
                                                            PM
                                                        </option>
                                                        <option value="23:15">
                                                            11:15
                                                            PM
                                                        </option>
                                                        <option value="23:30">
                                                            11:30
                                                            PM
                                                        </option>
                                                        <option value="23:45">
                                                            11:45
                                                            PM
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item border_bottom pb_30 pt_30">
                                <div class="d-flex align-items-start">
                                    <label class="btn-switch m-0 me-3">
                                        <input type="checkbox" class="" id="passing-service-charge-btn"
                                            value="" checked />
                                        <span class="checkbox-slider"></span>
                                    </label>
                                    <div class="d-flex flex-column">
                                        <label class="color-black fw-bold mb-1">I
                                            want
                                            my
                                            customers
                                            to
                                            pay
                                            the
                                            applicable
                                            service
                                            fees
                                            at
                                            the
                                            time
                                            when
                                            they
                                            make
                                            the
                                            bookings.</label>
                                        <p class="mt-2 fs-14 d-block mb-0 pe_right">
                                            Passing
                                            your
                                            service
                                            charge
                                            means
                                            your
                                            attendees
                                            will
                                            pay
                                            your
                                            service
                                            charge
                                            in
                                            addition
                                            to
                                            the
                                            ticket
                                            price.
                                            <a href="{{ url('#') }}" class="a-link">Learn
                                                more</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item border_bottom pb_30 pt_30">
                                <div class="d-flex align-items-start">
                                    <label class="btn-switch m-0 me-3">
                                        <input type="checkbox" class="" id="refund-policies-btn"
                                            value="" checked />
                                        <span class="checkbox-slider"></span>
                                    </label>
                                    <div class="d-flex flex-column">
                                        <label class="color-black fw-bold mb-1">I
                                            do
                                            not
                                            wish
                                            to
                                            offer
                                            my
                                            customers
                                            with
                                            option
                                            to
                                            cancel
                                            their
                                            orders
                                            and
                                            receive
                                            refund.</label>
                                        <p class="mt-2 fs-14 d-block mb-0">
                                            Disable
                                            this
                                            slider
                                            if
                                            you
                                            want
                                            to
                                            let
                                            your
                                            customers
                                            cancel
                                            their
                                            order
                                            and
                                            select
                                            a
                                            refund
                                            policy.
                                        </p>
                                    </div>
                                </div>
                                <div class="refund-policies-holder"
                                    style="display: none;">
                                    <div class="refund-policies-content border_top mt-4">
                                        <div class="row grid-padding-8">
                                            <div class="col-md-12 mb-6">
                                                <div class="refund-method">
                                                    <div class="form-group mb-0">
                                                        <label class="brn-checkbox-radio mb-0 mt-4">
                                                            <input type="radio" required=""
                                                                name="refund_policy_id" value="refund-id-1"
                                                                class="form-check-input br-checkbox refund-policy1"
                                                                checked />
                                                            <span class="fs-14 fw-bold ms-xl-2">I
                                                                wish
                                                                to
                                                                offer
                                                                my
                                                                customers
                                                                with
                                                                option
                                                                to
                                                                cancel
                                                                their
                                                                orders.
                                                                However,
                                                                I
                                                                will
                                                                handle
                                                                refund
                                                                manually.</span>
                                                            <span class="ms-xl-4 d-block sub-label mt-2 mb-4">Select
                                                                this
                                                                option
                                                                if
                                                                you
                                                                want
                                                                to
                                                                refund
                                                                your
                                                                customer
                                                                manually.</span>
                                                        </label>
                                                        <div class="refund-input-content" data-method="refund-id-1">
                                                            <div class="input-content mb-3">
                                                                <label
                                                                    class="color-black mb-2 fs-14 fw-bold">Cancellation
                                                                    must
                                                                    be
                                                                    made<span class="red">*</span></label>
                                                                <div
                                                                    class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                    <div class="col-md-4 pl-0">
                                                                        <div
                                                                            class="input-group mr-3 mx-width-135 input-number">
                                                                            <input type="number" min="0"
                                                                                max="30" class="form-control"
                                                                                placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-sign ms-md-3 mt-3 mb-3">
                                                                        days
                                                                        before
                                                                        the
                                                                        event
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="refund-method">
                                                    <label class="brn-checkbox-radio mb-0 mt-4">
                                                        <input type="radio" name="refund_policy_id"
                                                            value="refund-id-2"
                                                            class="form-check-input br-checkbox refund-polic-2" />
                                                        <span class="fs-14 fw-bold ms-xl-2">I
                                                            wish
                                                            to
                                                            offer
                                                            my
                                                            customers
                                                            with
                                                            option
                                                            to
                                                            cancel
                                                            their
                                                            orders
                                                            and
                                                            receive
                                                            refund
                                                            automatically.</span>
                                                        <span class="ms-xl-4 d-block sub-label mt-2 mb-4">Select
                                                            this
                                                            option
                                                            if
                                                            you
                                                            want
                                                            to
                                                            refund
                                                            your
                                                            customer
                                                            automatically.</span>
                                                    </label>
                                                    <div class="refund-input-content" data-method="refund-id-2">
                                                        <div class="input-content mb-3">
                                                            <label class="color-black mb-2 fs-14 fw-bold">Cancellation
                                                                must
                                                                be
                                                                made
                                                                <span class="red">*</span></label>
                                                            <div
                                                                class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                <div class="col-md-4">
                                                                    <div class="input-group input-number">
                                                                        <input type="number" min="0"
                                                                            max="30" class="form-control"
                                                                            placeholder="" />
                                                                    </div>
                                                                </div>
                                                                <div class="input-sign ms-md-3 mt-3 mb-3">
                                                                    days
                                                                    before
                                                                    the
                                                                    event
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-content mb-3">
                                                            <label class="color-black mb-2 fs-14 fw-bold">Refund
                                                                amount
                                                                <span class="red">*</span></label>
                                                            <div
                                                                class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="input-group loc-group position-relative">
                                                                        <input type="text" value=""
                                                                            class="form-control" placeholder="" />
                                                                        <span class="percentage-icon"><i
                                                                                class="fa-solid fa-percent"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="input-sign ms-md-3 mt-3 mb-3">
                                                                    days
                                                                    before
                                                                    the
                                                                    event
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item border_bottom pb_30 pt_30">
                                <div class="d-flex align-items-start">
                                    <label class="btn-switch m-0 me-3">
                                        <input type="checkbox" class="" id="ticket-instructions-btn"
                                            value="" checked />
                                        <span class="checkbox-slider"></span>
                                    </label>
                                    <div class="d-flex flex-column">
                                        <label class="color-black fw-bold mb-1">I
                                            do
                                            not
                                            require
                                            adding
                                            any
                                            special
                                            instructions
                                            on
                                            the
                                            tickets.</label>
                                        <p class="mt-2 fs-14 d-block mb-0">
                                            Use
                                            this
                                            space
                                            to
                                            provide
                                            any
                                            last
                                            minute
                                            checklists
                                            your
                                            attendees
                                            must
                                            know
                                            in
                                            order
                                            to
                                            attend
                                            your
                                            event.
                                            Anything
                                            you
                                            provide
                                            here
                                            will
                                            be
                                            printed
                                            on
                                            your
                                            ticket.
                                        </p>
                                    </div>
                                </div>
                                <div class="ticket-instructions-holder"
                                style="display: none;">
                                    <div class="ticket-instructions-content mt-4">
                                        <textarea class="form-textarea" name="ticket_instructions" placeholder="About"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item pb-0 pt_30">
                                <div class="d-flex align-items-start">
                                    <label class="btn-switch m-0 me-3">
                                        <input type="checkbox" class="" id="tags-btn" value=""
                                            checked />
                                        <span class="checkbox-slider"></span>
                                    </label>
                                    <div class="d-flex flex-column">
                                        <label class="color-black fw-bold mb-1">I
                                            do
                                            not
                                            want
                                            to
                                            add
                                            tags
                                            in
                                            my
                                            event</label>
                                        <p class="mt-2 fs-14 d-block mb-0">
                                            Use
                                            relevant
                                            words
                                            as
                                            your
                                            tags
                                            to
                                            improve
                                            the
                                            discoverability
                                            of
                                            your
                                            event.
                                            <a href="{{ url('#') }}" class="a-link">Learn
                                                more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="tags-holder"
                                    style="display: none;">
                                    <div class="ticket-instructions-content tags-container mt-4">
                                        <input class="form-control tags-input" type="text" name="tags"
                                            placeholder="Type your tags and press enter" />
                                        <div class="tags-list"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
