<!-- Counts Section -->
<section class="dashboard-counts section-padding">
    <div class="container-fluid">
        <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-12 col-md-12 col-12">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="fa fa-icon"></i></div>
                    <div class="name"><strong class="text-uppercase">Date Range Picker</strong><span>Dynamic Date Range Picker
                            Multiple Styles</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class='row'>
        <div class='col-lg-10 offset-4'>
            <div class="form-group col-lg-2">
                <label>Date Range From 2019 To 2025:</label>
                <input type='text' class='form-control' id='datepicker' placeholder='YYYY-MM-DD' />
            </div>
        </div>
        <hr/>
    </div>

    <div class='row'>
        <div class='col-lg-10 offset-4'>
            <span class='btn btn-sm btn-default'><a href='https://gijgo.com/datepicker/configuration' target='blank'
                    title='Read More..'>More Example for Datepicker</a></span>
        </div>
        <hr/>
    </div>

    </div>

</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript">

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    $(function(){

        $("#datepicker").datepicker({
            dateFormat:'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: '2019:2025', //yearRange: '2019:' + new Date().getFullYear().toString()            
        });

        $("#datepicker").val(today);
    });

</script>