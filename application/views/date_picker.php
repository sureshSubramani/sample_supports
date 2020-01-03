<!-- Counts Section -->
<section class="dashboard-counts section-padding">
    <div class="container-fluid">
        <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-12 col-md-12 col-12">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="fa fa-icon"></i></div>
                    <div class="name"><strong class="text-uppercase">Date Picker</strong><span>Dynamic Date Picker
                            Multiple Styles</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class='row'>
            <div class='col-lg-10  offset-4'>
                <div class="form-group col-lg-3">
                    <label>Default Date:</label>
                    <input type='text' id="datepicker" class='form-control' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Set Current Date:</label>
                    <input type='text' class='form-control' id='datepicker1' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Set Disable Specific Dates:</label>
                    <input type='text' class='form-control' id='datepicker2' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Set Maximum Dates:</label>
                    <input type='text' class='form-control' id='datepicker3' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Set Maximum Dates:</label>
                    <input type='text' class='form-control' id='datepicker4' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Show Other Months Dates:</label>
                    <input type='text' class='form-control' id='datepicker5' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Hide Other Months Dates:</label>
                    <input type='text' class='form-control' id='datepicker6' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Show On Focus:</label>
                    <input type='text' class='form-control' id='datepicker7' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <div class="form-group col-lg-3">
                    <label>Disable Days Of Weeks:</label>
                    <input type='text' class='form-control' id='datepicker10' placeholder='YYYY-MM-DD' />
                </div>
            </div>
            <hr />
        </div>

        <div class='row'>
            <div class='col-lg-10 offset-4'>
                <span class='btn btn-sm btn-default'><a href='https://gijgo.com/datepicker/configuration' target='blank'
                        title='Read More..'>More Example for Datepicker</a></span>
            </div>
            <hr />
        </div>

    </div>

</section>

<script>
$(document).ready(function() {

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker1').datepicker({
        value: today,
        format: 'yyyy-mm-dd',
        yearRange: '2010:2011'
    });

    $('#datepicker2').datepicker({
        disableDates: function(date) {
            var disabled = [2, 10, 15, 20, 25];
            if (disabled.indexOf(date.getDate()) == -1) {
                return true;
            } else {
                return false;
            }
        }
    });

    $('#datepicker3').datepicker({
        uiLibrary: 'bootstrap4',
        maxDate: function() {
            var date = new Date();
            date.setDate(date.getDate() + 10);
            return new Date(date.getFullYear(), date.getMonth(), date.getDate());
        }
    });

    $('#datepicker4').datepicker({
        minDate: function() {
            var date = new Date();
            date.setDate(date.getMonth() + 1);
            return new Date(date.getFullYear(), date.getMonth(), date.getDate());
        }
    });

    $('#datepicker5').datepicker({
        uiLibrary: 'bootstrap4',
        showOtherMonths: true
    });

    $('#datepicker6').datepicker({
        showOtherMonths: false
    });

    $('#datepicker7').datepicker({
        uiLibrary: 'materialdesign',
        size: 'small',
        showOnFocus: true,
        showRightIcon: false
    });

    $('#datepicker8').datepicker({
        size: 'small',
        showOnFocus: true,
        showRightIcon: false,
        disableDaysOfWeek: [0, 6],
        header: true,
        modal: true,
        footer: true
    });

    $('#datepicker9').datetimepicker({
        uiLibrary: 'materialdesign',
        footer: true,
        modal: true
    });

    var d = new Date(90, 0, 1);

    $(function() {
        $("#datepicker10").datepicker({
            defaultDate: d, //set the default date to Jan 1st 1990
            changeMonth: true,
            changeYear: true,
            yearRange: '1930:2000', //set the range of years
            dateFormat: 'dd-mm-yy' //set the format of the date
        });
    });

});
</script>
