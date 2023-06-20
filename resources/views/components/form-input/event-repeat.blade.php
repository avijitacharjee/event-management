<div class="form-group pt_30">
    {{-- <div class="">
        <input type="checkbox" name="repeat" id="">
        <span>Repeat event</span>
    </div> --}}
    <label for="" class="form-label">Repeat event</label>
    <select class="selectpicker" name="" id="repeat_select">
        <option value="">Don't repeat</option>
        <option value="daily">Daily</option>
        <option value="weekly">Weekly</option>
        <option value="monthly">Monthly</option>
        <option value="yearly">Yearly</option>
    </select>
</div>
<div class="col-md-6">
    <label class="form-label mt-3 fs-6">Till Date</label>
    <div class="loc-group position-relative disabled" id="till_date_picker">
        <input class="form-control h_50 datepicker-here" data-language="en" type="text" placeholder="MM/DD/YYYY"
            name="date" />
        <span class="absolute-icon disabled"><i class="fa-solid fa-calendar-days"></i></span>
    </div>
</div>
<script>
    let selectPicker = document.getElementById("repeat_select");
    let datePicker = document.getElementById("till_date_picker");
    selectPicker.onchange = function() {
        if (selectPicker.value != "") {
            datePicker.classList.remove("disabled");
        } else {
            datePicker.classList.add("disabled");
        }
    }
</script>
