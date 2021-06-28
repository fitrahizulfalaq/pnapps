<!-- Main content -->
<section class="content">
  <div class="container-fluid">
  <?php $this->view('message') ?>     
    <div class="row">      
      <!-- Menu-->
      <div class="col-lg-2 col-4">      	
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('profil')?>">
            <img src="<?= base_url("")?>/assets/dist/img/profil.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('profil')?>" class="small-box-footer">
            Profil
          </a>
        </div>
      </div>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('page/petunjuk')?>">
            <img src="<?= base_url("")?>/assets/dist/img/petunjuk.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('page/petunjuk')?>" class="small-box-footer">
            Petunjuk
          </a>
        </div>
      </div>
      <?php if ($this->session->tipe_user == "1") { ?>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('page/kursusMenu')?>">
            <img src="<?= base_url("")?>/assets/dist/img/kursusMenu.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('page/kursusMenu')?>" class="small-box-footer">
            Kursus Dasar
          </a>
        </div>
      </div>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('page/evaluasiMenu')?>">
            <img src="<?= base_url("")?>/assets/dist/img/evaluasi.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('page/evaluasiMenu')?>" class="small-box-footer">
            Evaluasi
          </a>
        </div>
      </div>
      <?php } ?>
      <?php if ($this->session->tipe_user < 2) { } else { ?>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('video')?>">
            <img src="<?= base_url("")?>/assets/dist/img/video.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('video')?>" class="small-box-footer">
            Video
          </a>
        </div>
      </div>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('modul')?>">
            <img src="<?= base_url("")?>/assets/dist/img/modul.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('modul')?>" class="small-box-footer">
            Materi
          </a>
        </div>
      </div>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('embed')?>">
            <img src="<?= base_url("")?>/assets/dist/img/konten.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('embed')?>" class="small-box-footer">
            Konten
          </a>
        </div>
      </div>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('user')?>">
            <img src="<?= base_url("")?>/assets/dist/img/pengguna.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('user')?>" class="small-box-footer">
            Pengguna
          </a>
        </div>
      </div>
      <?php } ?>
      <!-- Menu-->
      <div class="col-lg-2 col-4">        
        <!-- small card -->
        <div class="small-box bg-white">
          <div class="inner text-center">
            <a href="<?= base_url('page/tentang')?>">
            <img src="<?= base_url("")?>/assets/dist/img/tentang.png" alt="" width="100%">
            </a>
          </div>          
          <a href="<?= base_url('page/tentang')?>" class="small-box-footer">
            Tentang
          </a>
        </div>
      </div>      
    </div>
    <!-- /.row -->
  </div>
</section>
<!-- /.content