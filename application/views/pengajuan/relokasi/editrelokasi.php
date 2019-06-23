

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $edrelokasi['id_relokasi']; ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

      
       
       <div class="form-group col-md-5">
            <label >IP Address</label>
            <input type="text" class="form-control form-control-user" id="ip_address" name="ip_address" placeholder="IP Address" value="<?= $edrelokasi['ip_address']; ?>" >
      <small class="form-text text-danger"><?= form_error('ip_address');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Provider</label>
            <input type="text" class="form-control form-control-user" id="provider" name="provider" placeholder="Provider" value="<?= $edrelokasi['provider']; ?>" >
      <small class="form-text text-danger"><?= form_error('dismantle');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Nama Unit Kerja</label>
            <input type="text" class="form-control form-control-user" id="nama_uker" name="nama_uker" placeholder="Nama Uker" value="<?= $edrelokasi['nama_uker']; ?>" >
      <small class="form-text text-danger"><?= form_error('nama_uker');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Alamat Lama</label>
            <input type="text" class="form-control form-control-user" id="alamat_lama" name="alamat_lama" placeholder="Alamat Lama" value="<?= $edrelokasi['alamat_lama']; ?>" >
      <small class="form-text text-danger"><?= form_error('alamat_lama');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Alamat Baru</label>
            <input type="text" class="form-control form-control-user" id="alamat_baru" name="alamat_baru" placeholder="Alamat Baru" value="<?= $edrelokasi['alamat_baru']; ?>" >
      <small class="form-text text-danger"><?= form_error('alamat_baru');?></small>
        </div>

         <div class="form-group col-md-5">
            <label >Tanggal</label>
            <input type="text" class="form-control form-control-user" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?= $edrelokasi['tanggal']; ?>" >
      <small class="form-text text-danger"><?= form_error('tanggal');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Gambar</label>
            <input type="text" class="form-control form-control-user" id="gambar" name="gambar" placeholder="Gambar" value="<?= $edrelokasi['gambar']; ?>" >
      <small class="form-text text-danger"><?= form_error('gambar');?></small>
        </div>

        <br><br>
            <button type="submit" name="ubah" class="btn btn-primary">Edit Data</button>
            <button type="reset" class="btn btn-danger">
                <i class="fas fa-sync-alt"></i> Reset
            </button>
        </div>
    </form>
</div>

<!-- /.container-fluid -->

<!-- End of Main Content --> 
