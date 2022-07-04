<section class="sec1" id="sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="display-3 font-weight-bold mt-5 h2-sec1">Selamat datang <br> di Pilketos 2022</h2>
                <p class="p-sec1">Yuk gunakan hak suara kamu untuk menentukan <br> Ketua dan Wakil 
                    Ketua OSIS periode 2022/2023</p>
                <div class="btn-sec1">
                <a href="" class="btn btn-primary sitombol" data-toggle="modal" data-target="#modalLogin">Login</a>
                <a href="#sec2" class="btn btn-outline-primary ml-1 sitombol">Register</a>
                <p class="p-register text-secondary">Belum memiliki akun? Daftar pada menu Register.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/img/bgfix.png'); ?>" class="img-fluid logosmande">
            </div>
        </div>
    </div>
</section>

<br id="sec2"><br>

<section class="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/img/bgregister1.png'); ?>" class="img-fluid img-sec2 logoregister">
            </div>
            <div class="col-md-6">
                <br>
                <h1 class="text-primary h2-sec2">Belum mempunyai akun ?</h1>
                <p class="text-secondary">Silahkan masukan data diri kamu pada form dibawah ini. 
                    Jika sudah, pilih menu Login.
                </p>

                <form action="<?php echo site_url('auth/registrasi'); ?>" method="post">
                    <div class="form-group">
                    <label for="nama" class="text-secondary">Nama *</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo set_value('nama') ?>">
                    <?php echo form_error('nama', '<span class="text-danger small pl-3">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                    <label for="email" class="text-secondary">Email *</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email') ?>">
                    <?php echo form_error('email', '<span class="text-danger small pl-3">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                    <label for="password" class="text-secondary">Password *</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <?php echo form_error('password', '<span class="text-danger small pl-3">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                    <label for="id_kelas" class="text-secondary">Kelas *</label>
                    <select name="id_kelas" id="id_kelas" class="form-control">
                        <?php foreach ($kelas as $kls) : ?>
                            <option value="<?php echo $kls->id ?>"><?php echo $kls->nama ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary sitombol">Register</button>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Silahkan Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="<?php echo site_url('auth/login'); ?>" method="post">
                    <div class="form-group">
                    <label class="text-secondary" for="email1">Email *</label>
                    <input type="email" name="email1" id="email1" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="text-secondary" for="password1">Password *</label>
                    <input type="password" name="password1" id="password1" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary sitombol">Login</button>
                </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>