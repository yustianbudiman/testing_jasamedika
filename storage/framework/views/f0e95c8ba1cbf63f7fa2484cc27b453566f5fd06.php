<?php $__env->startSection('title'); ?>
keurahan update
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h3><?php echo $title; ?></h3>
    
        	<form method="POST" action="../update">
        		<?php echo csrf_field(); ?>

                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                  <input type="text" name="nama_pasien" value="<?php echo $data->nama_pasien; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="alamat" value="<?php echo $data->alamat; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="no_telepon" value="<?php echo $data->no_telepon; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="rt_rw" value="<?php echo $data->rt_rw; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="kelurahan" value="<?php echo $data->kelurahan; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="tgl_lahir" placeholder="yyyy-mm-dd" value="<?php echo $data->tgl_lahir; ?>">
                </div>
                <div class="form-group">
                    <select name="jenis_kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
        		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>