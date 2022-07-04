<section class="content">
<div class="box">
            <div class="box-header">
                <?php echo $this->session->flashdata('message'); ?>
                <a href="<?php echo site_url('admin/kelas/tambah'); ?>"class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Kelas</a> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Kelas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                     foreach ($rows as $row) : 
                     ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->nama ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/kelas/edit/' . $row->id); ?>" class="btn btn-info">
                                <i class="fa fa-pencil-square-o"></i> Edit</a>
                                <a href="<?php echo site_url('admin/kelas/hapus/' . $row->id); ?>" class="btn btn-danger"
                                onclick="return confirm('Data akan dihapus, apakah anda yakin?')">
                                <i class="fa fa-trash-o"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</div>
</section>