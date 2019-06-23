

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $user_sub_menu['id']; ?>">
         <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
       
        <div class="form-group col-md-5">
            <label >Title</label>
            <input type="text" class="form-control form-control-user" id="title" name="title" placeholder="Title" value="<?= $user_sub_menu['title']; ?>">
      <small class="form-text text-danger"><?= form_error('title');?></small>
        </div>

          <div class="form-group col-md-5">
            <label >Menu</label>
            <input type="text" class="form-control form-control-user" id="menu_id" name="menu_id" placeholder="Menu" value="<?= $user_sub_menu['menu_id']; ?>">
      <small class="form-text text-danger"><?= form_error('menu_id');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >URL</label>
            <input type="text" class="form-control form-control-user" id="url" name="url" placeholder="URL" value="<?= $user_sub_menu['url']; ?>">
      <small class="form-text text-danger"><?= form_error('url');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Icon</label>
            <input type="text" class="form-control form-control-user" id="icon" name="icon" placeholder="Icon" value="<?= $user_sub_menu['icon']; ?>">
      <small class="form-text text-danger"><?= form_error('icon');?></small>
        </div>

        <div class="form-group col-md-5">
            <label >Active</label>
            <input type="text" class="form-control form-control-user" id="is_active" name="is_active" placeholder="Menu" value="<?= $user_sub_menu['is_active']; ?>">
      <small class="form-text text-danger"><?= form_error('is_active');?></small>
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
