<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form class="user" method="post" action="<?= base_url('add/registration'); ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
        <div class="form-group col-md-5">
            <label >FullName</label>
              <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="FullName" value="<?= set_value('name'); ?>">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group col-md-5">
            <label >Kode Unit Kerja</label>
              <input type="text" class="form-control form-control-user" id="kode_uker" name="kode_uker" placeholder="Kode Unit Kerja" value="<?= set_value('kode_uker'); ?>">
            <?= form_error('kode_uker', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group col-md-5">
            <label >Nama Unit Kerja</label>
              <input type="text" class="form-control form-control-user" id="nama_uker" name="nama_uker" placeholder="Nama Unit Kerja" value="<?= set_value('nama_uker'); ?>">
            <?= form_error('nama_uker', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group col-md-5">
            <label >No HP</label>
              <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="No HP" value="<?= set_value('no_hp'); ?>">
            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-row col-md-5">
            <div class="form-group col-md-5">
                <label>Jabatan</label>
                <select id="jabatan" name="jabatan" class="form-control">
                    <option selected>Choose</option>
                    <option value="1">Admin</option>
                    <option value="2">Signer</option>
                    <option value="3">Maker</option>
                </select>
            </div>
      </div>

        <div class="form-group col-md-5">
            <label >Personal Number</label>
            <input type="text" class="form-control form-control-user" id="pn" name="pn" placeholder="Personal Number" value="<?= set_value('pn'); ?>">
            <?= form_error('pn', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group col-md-5">
            <label >Email</label>
            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

          <div class="form-group col-md-5">
            <label >Password</label>
             <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

          <div class="form-group col-md-5">
            <label>Repeat Password</label>
             <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
        </div>

        <div class="form-row col-md-5">
            <div class="form-group col-md-5">
                <label>Role</label>
                <select id="role_id" name="role_id" class="form-control">
                    <option selected>Choose</option>
                    <option value="1">Admin</option>
                    <option value="2">Signer</option>
                    <option value="3">Maker</option>
                </select>
            </div>
      </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Register</button>
            <button type="reset" class="btn btn-danger">
                <i class="fas fa-sync-alt"></i> Reset
            </button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
