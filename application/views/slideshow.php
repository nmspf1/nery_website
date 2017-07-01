<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <i class="fa fa-picture-o"></i> Slideshow
      </h1>
    </section>
    
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <h4>Upload</h4>
                <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
                <form enctype="multipart/form-data" action="" method="post">
                    <div class="form-group">
                        <input type="file" class="form-control" name="userFiles[]" multiple/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Uploaded</h4>

                <ul class="gallery">
                    <?php if(!empty($files)): foreach($files as $file): ?>
                        <li class="item" style="list-style: none; float: left; margin: 10px;">
                            <img style="height: 150px;" src="<?php echo base_url('uploads/'.$file['file_name']); ?>" alt="" >
                            <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?>
                            <a href="/slideshow/remove/<?php echo $file['id']; ?>" style="color: red;">Remove</a></p>
                        </li>
                    <?php endforeach; else: ?>
                        <p>Image(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>