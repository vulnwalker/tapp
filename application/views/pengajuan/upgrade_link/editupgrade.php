

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $edup['id_link']; ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

      
       
       <div class="form-group col-md-5">
            <label >Upgrade_link</label>
            <input type="text" class="form-control form-control-user" id="upgrade" name="upgrade" placeholder="Upgrade Link" value="<?= $edup['fiber_optic']; ?>" readonly="">
      <small class="form-text text-danger"><?= form_error('dismantle');?></small>
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
