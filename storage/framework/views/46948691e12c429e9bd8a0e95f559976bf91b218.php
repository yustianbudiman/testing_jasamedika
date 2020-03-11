<?php $__env->startSection('title'); ?>
anggota page
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h3><?php echo $title; ?></h3>
    
        	<form method="POST" action="../update/<?php echo $data->id_anggota; ?>">
        		<?php echo csrf_field(); ?>

                <div class="form-group">
                  <input type="text" value="<?php echo $data->nama_anggota; ?>" name="nama_anggota">
                </div>
                <div class="form-group">
                    <input type="text" value="<?php echo $data->alamat; ?>" name="alamat">
                </div>
                <div class="form-group">
                    <input type="text" value="<?php echo $data->no_telpon; ?>" name="no_telpon">
                </div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
        		
        <?php echo $data->nama_anggota; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>