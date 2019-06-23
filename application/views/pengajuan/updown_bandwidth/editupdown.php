

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $edupdown['id_bandwidth']; ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

      
       
       <div class="form-group col-md-5">
            <label >Bandwidth Lama</label>
            <input type="text" class="form-control form-control-user" id="bandwidth_lama" name="bandwidth_lama" placeholder="Bandwidth Lama" value="<?= $edupdown['bw_lama']; ?>" >
      <small class="form-text text-danger"><?= form_error('bandwidth_lama');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Bandwidth Baru</label>
            <input type="text" class="form-control form-control-user" id="bandwidth_baru" name="bandwidth_baru" placeholder="Bandwidth Baru" value="<?= $edupdown['bw_baru']; ?>">
      <small class="form-text text-danger"><?= form_error('bandwidth_baru');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Keterangan</label>
            <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?= $edupdown['ug_dg']; ?>" >
      <small class="form-text text-danger"><?= form_error('keterangan');?></small>
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
