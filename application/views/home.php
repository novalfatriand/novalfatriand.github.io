<section class="sec1 sec1home" id="sec1">
    <div class="container">
                        <?php if ($user->status == 0) : ?>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="alert alert-success alert-dismissible">
                                        <h4><i class="fa fa-info"></i> Kamu belum melakukan voting!</h4>
                                        Klik menu Voting atau scroll menuju halaman paling bawah.
                                        <br><br>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="alert alert-warning alert-dismissible">
                                        <h4><i class="fa fa-warning"></i> Kamu sudah melakukan voting!</h4>
                                        Vote hanya bisa dilakukan satu kali.
                                        <br><br>
                                </div>
                            </div>
                        <?php endif; ?>
    </div>
<section class="sec3" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4 mt-5 h2-sec1 text-center tulisanvote">VOTE</h2>
            </div>
        </div>
    <div class="row">
        <?php foreach ($kandidat as $knd) : ?> 
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="<?php echo base_url('assets/img/' . $knd->foto); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center text-primary font-weight-bold"><?php echo $knd->nama_kandidat ?></h5>
                    <p class="card-text text-center text-secondary"><?php echo $knd->nama_calon ?></p>
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo site_url('home/visimisi/' . $knd->id); ?>" class="btn btn-primary btn-sm">Lihat Visi & Misi</a>

                        <?php if ($user->status == 0) : ?>
                            <a href="#" class="btn btn-success btn-sm" data-nama_kandidat="<?php echo $knd->nama_kandidat ?>"
                            data-id_user="<?php echo $this->session->userdata('id'); ?>">Pilih <?php echo $knd->nama_kandidat ?></a>
                        <?php else : ?>
                            <button class="btn btn-success btn-sm" disabled>Pilih <?php echo $knd->nama_kandidat ?></button>
                        <?php endif; ?>

                    </div>    
                </div>
                </div>
            </div>
        <?php endforeach; ?>
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script>
const ctx = document.getElementById('chartHasilSuara').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
        datasets: [{
            label: '# Hasil Suara',
            data: [
                <?php echo $kandidat1 ?>,
                <?php echo $kandidat2 ?>,
                <?php echo $kandidat3 ?>,
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
          yAxes: [{
            ticks: {
                beginAtZero: true
            }
          }]
        }
    }
});
</script>
<script type="text/javascript">
    var countDate = new Date('Oct 1, 2022 00:00:00').getTime();

    function newYear(){
        var now = new Date().getTime();
            gap = countDate - now;

            var second = 1000;
            var minute = second * 60;
            var hour = minute * 60;
            var day = hour * 24;

            var d = Math.floor(gap / (day));
            var h = Math.floor((gap % (day)) / (hour));
            var m = Math.floor((gap % (hour)) / (minute));
            var s = Math.floor((gap % (minute)) / (second));

            document.getElementById('day').innerText = d;
            document.getElementById('hour').innerText = h;
            document.getElementById('minute').innerText = m;
            document.getElementById('second').innerText = s;
    }

    setInterval(function(){
        newYear();
    },1000)
</script>