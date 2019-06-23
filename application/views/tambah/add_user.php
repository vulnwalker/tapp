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

            <a href="<?php echo base_url('add/registration') ?>" class="btn btn-primary mb-3" >Add User</a>
            <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">


            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Kode Uker</th>
                        <th scope="col">Nama Uker</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">PN</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Role ID</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tambah as $tmb) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $tmb['name']; ?></td>
                        <td><?= $tmb['kode_uker']; ?></td>
                        <td><?= $tmb['nama_uker']; ?></td>
                        <td><?= $tmb['no_hp']; ?></td>
                        <td><?= $tmb['jabatan']; ?></td>
                        <td><?= $tmb['pn']; ?></td>
                        <td><?= $tmb['email']; ?></td>
                        <td><?= $tmb['image']; ?></td>
                        <td><?= $tmb['role_id']; ?></td>
                        <td>
                           <a href="<?= base_url();?>add/edituser/<?= $tmb['id']; ?>"  class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteModal">delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</spantmb>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url(); ?>administrator/hapususer/<?= $tmb['id']; ?>" type="button" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div> 
<!-- /.container-fluid -->