

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $eduser['id']; ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
       
        <div class="form-group col-md-5">
            <label >Name</label>
            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="name" value="<?= $eduser['name']; ?>">
      <small class="form-text text-danger"><?= form_error('name');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Kode Unit Kerja</label>
            <input type="text" class="form-control form-control-user" id="kode_uker" name="kode_uker" placeholder="Kode Unit Kerja" value="<?= $eduser['kode_uker']; ?>">
      <small class="form-text text-danger"><?= form_error('kode_uker');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Nama Unit Kerja</label>
            <input type="text" class="form-control form-control-user" id="nama_uker" name="nama_uker" placeholder="Nama Unit Kerja" value="<?= $eduser['nama_uker']; ?>">
      <small class="form-text text-danger"><?= form_error('nama_uker');?></small>
        </div>


        <div class="form-group col-md-5">
            <label >No HP</label>
            <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="no_hp" value="<?= $eduser['no_hp']; ?>">
      <small class="form-text text-danger"><?= form_error('no_hp');?></small>
        </div>

            <div class="form-group col-md-5">
                <label>Jabatan</label>
                <select id="jabatan" name="jabatan" class="form-control">
                    <option selected>Choose</option>
                    <option value="1">Admin</option>
                    <option value="2">Signer</option>
                    <option value="3">Maker</option>
                </select>
            </div>
      

           <div class="form-group col-md-5">
            <label >Personal Number</label>
            <input type="text" class="form-control form-control-user" id="pn" name="pn" placeholder="Personal Number" value="<?= $eduser['pn']; ?>">
      <small class="form-text text-danger"><?= form_error('pn');?></small>
        </div>

           <div class="form-group col-md-5">
            <label >Email</label>
            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= $eduser['email']; ?>">
      <small class="form-text text-danger"><?= form_error('email');?></small>
        </div>

           <div class="form-group col-md-5">
            <label >Role ID</label>
            <input type="text" class="form-control form-control-user" id="role_id" name="role_id" placeholder="Role  ID" value="<?= $eduser['role_id']; ?>">
      <small class="form-text text-danger"><?= form_error('role_id');?></small>
        </div>

                    <div class="form-group col-md-5">
                <label>Menoaktifkan User</label>
                <select id="is_active" name="is_active" class="form-control">
                    <option selected>Choose</option>
                    <option value="1">Active</option>
                    <option value="0">Non-Active</option>
                </select>
            </div>
                
        <br>
        <div>
            <button type="submit" name="ubah" class="btn btn-primary">Edit Data</button>
            <button type="reset" class="btn btn-danger">
                <i class="fas fa-sync-alt"></i> Reset
            </button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
