<footer class="main-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <p>Mahendra Institions &copy; <?php echo date('Y'); ?></p>
            </div>
            <div class="col-sm-6 text-right">
                <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrap
                        4</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- JavaScript files-->
<script src="<?php echo base_url();?>assets/vendor/popper.js/umd/popper.min.js"> </script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url();?>assets/js/charts-home.js"></script>

<!-- Main File-->
<script src="<?php echo base_url();?>assets/js/front.js"></script>

<script>
$(document).ready(function() {
    $('#country').change(function() {
        var country_id = $('#country').val();
        if (country_id != '' || country_id != undefined) {
            $.ajax({
                url: "<?php echo base_url();?>dynamic_dependent/fetch_state",
                method: "POST",
                data: { country_id: country_id },
                success: function(data) {
                    //console.log(data);
                    $('#state').html(data);
                    $('#city').html('<option value="">Select City</option>');
                }
            });
        } else {
            $('#state').html('<option value="">Select State</option>');
            $('#city').html('<option value="">Select City</option>');
        }
    });

    $('#state').change(function() {
        var state_id = $('#state').val();
        if (state_id != '' || state_id != undefined) {
            $.ajax({
                url: "<?php echo base_url(); ?>dynamic_dependent/fetch_city",
                method: "POST",
                data: {state_id: state_id},
                success: function(data) {
                    //console.log(data);
                    $('#city').html(data);
                }
            });
        } else {
            $('#city').html('<option value="">Select City</option>');
        }
    });

});


        // $('#datepicker').datepicker({
        //     uiLibrary: 'bootstrap4'
        // });

</script>
</body>

</html>