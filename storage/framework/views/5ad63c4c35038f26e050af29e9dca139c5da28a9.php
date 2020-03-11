<?php $__env->startSection('title'); ?>
peminjaman page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3><?php echo $title; ?></h3>
        <div class="col-md-12">
                <form class="form-horizontal">
                  <div class="box-header">
                    <div class="col-sm-10">
                      <div class="form-group">
                        <select class="form-control select2" id="idBuku" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                          <option value="1">Alabama</option>
                          <option value="2">Alaska</option>
                          <option value="3">California (disabled)</option>
                          <option value="4">Delaware</option>
                          <option value="5">Tennessee</option>
                          <option value="6">Texas</option>
                          <option value="7">Washington</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="pull-left btn btn-primary" id="tambahBuku">Add <i class="fa fa-plus"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                    <table class="table table-bordered" id="tableBuku">
                        <thead>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                        </thead>
                        <tbody class="tbTbaleBuku">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
            <!-- </div> -->
              <!-- /.box -->
         
          <!-- /.box -->
        </div>
<script type="text/javascript">
$(document).ready(function(){
    $('#tambahBuku').click(function(){
        // var data=$('#idBuku').map(function(){
        //     return $(this).val();

        // });
        $('.dataBuku').remove();
        var data=$('#idBuku').val();

        for (var i = 0; i < data.length; i++) {
            $('#tableBuku').find('.tbTbaleBuku').append('<tr class="dataBuku">'+
                                                            '<td>'+data[i]+'<td>'+
                                                            '<td> judul KE '+data[i]+'<td>'+
                                                            '<td> Pengarang KE '+data[i]+'<td>'+
                                                        '<tr>');
            // console.log(data[i]);
        }
    });
});            
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>