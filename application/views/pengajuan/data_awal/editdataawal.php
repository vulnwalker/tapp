

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $eddataawal['id_dataawal']; ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

      
       
       <div class="form-group col-md-5">
            <label >IP Address</label>
            <input type="text" class="form-control form-control-user" id="ip_address" name="ip_address" placeholder="IP Address" value="<?= $eddataawal['ip_address']; ?>" >
      <small class="form-text text-danger"><?= form_error('ip_address');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Tipe Jarkom</label>
            <input type="text" class="form-control form-control-user" id="tipe_jarkom" name="tipe_jarkom" placeholder="Tipe Jarkom" value="<?= $eddataawal['tipe_jarkom']; ?>" >
      <small class="form-text text-danger"><?= form_error('tipe_jarkom');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Provider</label>
            <input type="text" class="form-control form-control-user" id="provider" name="provider" placeholder="Provider" value="<?= $eddataawal['provider']; ?>" >
      <small class="form-text text-danger"><?= form_error('provider');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Nama Lokasi</label>
            <input type="text" class="form-control form-control-user" id="nama_lokasi" name="nama_lokasi" placeholder="Nama Lokasi" value="<?= $eddataawal['nama_lokasi']; ?>" >
      <small class="form-text text-danger"><?= form_error('nama_lokasi');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Alamat Lokasi</label>
            <input type="text" class="form-control form-control-user" id="alamat_lokasi" name="alamat_lokasi" placeholder="Alamat Lokasi" value="<?= $eddataawal['alamat_lokasi']; ?>" >
      <small class="form-text text-danger"><?= form_error('alamat_lokasi');?></small>
        </div>

         <div class="form-group col-md-5">
            <label >Tipe Uker</label>
            <input type="text" class="form-control form-control-user" id="tipe_uker" name="tipe_uker" placeholder="Tipe Uker" value="<?= $eddataawal['tipe_uker']; ?>" >
      <small class="form-text text-danger"><?= form_error('tipe_uker');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Nama PIC</label>
            <input type="text" class="form-control form-control-user" id="nama_pic" name="nama_pic" placeholder="Nama PIC" value="<?= $eddataawal['nama_pic']; ?>" >
      <small class="form-text text-danger"><?= form_error('nama_pic');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >No.Tlp</label>
            <input type="text" class="form-control form-control-user" id="no_tlp" name="no_tlp" placeholder="No.Tlp" value="<?= $eddataawal['no_tlp']; ?>" >
      <small class="form-text text-danger"><?= form_error('no_tlp');?></small>
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
