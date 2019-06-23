

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $edpasangbaru['id_pasangbaru']; ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

      
       
       <div class="form-group col-md-5">
            <label >Nama Unit Kerja</label>
            <input type="text" class="form-control form-control-user" id="nama_uker" name="nama_uker" placeholder="IP Address" value="<?= $edpasangbaru['nama_uker']; ?>" >
      <small class="form-text text-danger"><?= form_error('nama_uker');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Nama Lokasi</label>
            <input type="text" class="form-control form-control-user" id="nama_lokasi" name="nama_lokasi" placeholder="Nama Lokasi" value="<?= $edpasangbaru['nama_lokasi']; ?>" >
      <small class="form-text text-danger"><?= form_error('nama_lokasi');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Alamat Lokasi</label>
            <input type="text" class="form-control form-control-user" id="alamat_lokasi" name="alamat_lokasi" placeholder="Alamat Lokasi" value="<?= $edpasangbaru['alamat_lokasi']; ?>" >
      <small class="form-text text-danger"><?= form_error('alamat_lokasi');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Tipe Jarkom</label>
            <input type="text" class="form-control form-control-user" id="tipe_jarkom" name="tipe_jarkom" placeholder="Tipe Jarkom" value="<?= $edpasangbaru['tipe_jarkom']; ?>" >
      <small class="form-text text-danger"><?= form_error('tipe_jarkom');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Provider</label>
            <input type="text" class="form-control form-control-user" id="provider" name="provider" placeholder="Provider" value="<?= $edpasangbaru['provider']; ?>" >
      <small class="form-text text-danger"><?= form_error('provider');?></small>
        </div>

         <div class="form-group col-md-5">
            <label >Nama PIC</label>
            <input type="text" class="form-control form-control-user" id="nama_pic" name="nama_pic" placeholder="Nama PIC" value="<?= $edpasangbaru['nama_pic']; ?>" >
      <small class="form-text text-danger"><?= form_error('nama_pic');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Nomor Telepon</label>
            <input type="text" class="form-control form-control-user" id="no_tlp" name="no_tlp" placeholder="Nomor Telepon" value="<?= $edpasangbaru['no_tlp']; ?>" >
      <small class="form-text text-danger"><?= form_error('no_tlp');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Tanggal</label>
            <input type="text" class="form-control form-control-user" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?= $edpasangbaru['tanggal']; ?>" >
      <small class="form-text text-danger"><?= form_error('tanggal');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Gambar</label>
            <input type="text" class="form-control form-control-user" id="gambar" name="gambar" placeholder="gambar" value="<?= $edpasangbaru['gambar']; ?>" >
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
