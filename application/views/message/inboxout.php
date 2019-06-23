<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Create Message</a>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">kepada</th>
                        <th scope="col">isi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($getMassage as $gm) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $gm['id_user']; ?></td>
                        <td><?= $gm['isi']; ?></td>
                        <td>
                            <a href="<?= base_url();?>menu/editsubmenu/<?= $ms['id']; ?>"  class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger" class="badge badge-danger" data-toggle="modal" data-target="#deleteSubModal">delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Send Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('message'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="id_user" id="id_user" class="form-control">
                            <option value="">Kepada</option>
                            <?php foreach ($message as $ms) :  ?>
                            <option value="<?= $ms['id_user'];  ?>"><?= $ms['message'];  ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi" name="isi" placeholder="isi">
                    </div>
                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="deleteSubModal" tabindex="-1" role="dialog" aria-labelledby="deleteSubModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSubModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url(); ?>administrator/hapusSub/<?= $sm['id']; ?>" type="button" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div> 