<section class="content">
<div class="box">
            <div class="box-header">
                <h3 class="box-title"><b><?php echo $title ?></b></h3>
            </div>
            <!-- /.box-header -->
        <div class="box-body">
            <form action="<?php echo site_url('admin/kelas/update'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row->id ?>">
                <table id="table" width="50%">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="nama">Nama Kelas *</label>
                                <input type="text" name="nama" id="nama" class="form-control" required 
                                value="<?php echo $row->nama ?>">
                            </div>
                        </td>
                    </tr>
                </table>
                <a href="<?php echo site_url('admin/kelas'); ?>"class="btn btn-info">
                <i class="fa fa-arrow-left"></i> Kembali</a> 
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
            </form>
        </div>
</div>
</section>
