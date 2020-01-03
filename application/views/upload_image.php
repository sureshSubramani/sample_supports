<!-- Counts Section -->
<section class="dashboard-counts section-padding">
    <div class="container-fluid">
        <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-12 col-md-12 col-12">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="fa fa-icon"></i></div>
                    <div class="name"><strong class="text-uppercase">Upload Image</strong><span>Dynamic Upload Image Using Ajax</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class='row'>
        <div class='col-lg-10 offset-4'>

            <div class="form-group col-lg-3">                
                <div><img src='' class='img-fluid' alt='user' /></div>
                <label>Upload Image:</label>             
                
                <!-- <?php echo form_open_multipart('upload_image/do_upload');?> -->
                <form enctype="multipart/form-data" id="submit">
                    <input type="file" name="imgFile" class='btn btn-md btn-info form-control' id='imgFile' size="20" class='form-control' placeholder='' style='padding: 4px;' />
                    <span class='error'><?php if (isset($error)){ echo $error; }; echo $this->session->flashdata("error"); ?></span>
                    <span class='success'><?php if (isset($error)){ echo $error; }; echo $this->session->flashdata("success"); ?></span>
                    <br /><br />
                    <input type="submit" class='btn btn-sm btn-primary' value="upload" />                
                </div>

            </form>
        </div>
        <hr/>
    </div>  

</section>

<script type="text/javascript">

    $(function(){

        $('#submit').submit(function(e){
            e.preventDefault(); 
                $.ajax({
                    url:'<?php echo base_url();?>upload_image/do_upload',
                    type:"post",
                    data: new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){                        
                        console.log(data);

                        //$("#imgFile").value('');
                        
                        window.location.reload();                        
                }
                });
        });  
        
    });

</script>