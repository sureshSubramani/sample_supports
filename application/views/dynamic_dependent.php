<!-- Counts Section -->
<section class="dashboard-counts section-padding">
    <div class="container-fluid">
        <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-12 col-md-12 col-12">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="fa fa-icon"></i></div>
                    <div class="name"><strong class="text-uppercase">Dependent Select</strong><span>Dynamic Dependent By
                            Select Box using Ajax</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class='row'>
          <div class='col-lg-4 offset-4'>
        <div class="form-group">
            <select name="country_id" id="country" class="form-control input-lg">
                <option value="">Select Country</option>
                <?php
                  foreach($country as $row){
                  echo '<option value="'.$row->id.'">'.$row->name.'</option>';
                  }
                 ?>
            </select>
        </div>
        <br />
        <div class="form-group">
            <select name="state_id" id="state" class="form-control input-lg">
                <option value="">Select State</option>                
            </select>
        </div>
        <br />
        <div class="form-group">
            <select name="city_id" id="city" class="form-control input-lg">
                <option value="">Select City</option>
            </select>
        </div>
    </div>
  </div>
</section>


