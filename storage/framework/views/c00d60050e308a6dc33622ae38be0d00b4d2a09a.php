<?php $__env->startSection('title'); ?>
Pasien Add
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h3><?php echo $title; ?></h3>
    
        	<form method="POST" action="store">
        		<?php echo csrf_field(); ?>
                <div class="form-group">
                    <label> Nama Pasien</label>
        		  <input type="text" name="nama_pasien">
        		</div>
                <div class="form-group">
                    <label> Alamat</label>
                    <input type="text" name="alamat">
        		</div>
                <div class="form-group">
                    <label> Telepon</label>
                    <input type="text" name="no_telepon">
        		</div>
                <div class="form-group">
                    <label> RT/RW</label>
                    <input type="text" name="rt_rw">
                </div>
                <div class="form-group">
                    <label> Kelurahan</label>
                    <select name="kelurahan">
                        <?php $__currentLoopData = $kelurahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($c->id); ?>"><?php echo e($c->nama_kelurahan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label> Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group">
                    <label> Jenis Kelamin</label>
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