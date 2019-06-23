<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <!-- <input type="hidden" name="id_penerima" value="<?= $pesan['id_penerima']; ?>"> -->
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>

          <!-- Tabel -->
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDismantleModal">Add Dismantle</a>
            <table class="table table-hover" id="dataTable">

                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                   <?php $i = 1; ?>
                    <?php foreach ($dismantle as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $d['id_pengirim'] ?></td>
                            <td><?= $d['id_penerima'] ?></td>
                            <td><?= $d['dismantle'] ?></td>
                            <td>
                                 <a href="<?= base_url();?>pengajuan/editdismantle/<?= $d['id_dismantle']; ?>"  class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger" class="badge badge-danger" data-toggle="modal" data-target="#deleteDismantleModal">delete</a>
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
<div class="modal fade" id="newDismantleModal" tabindex="-1" role="dialog" aria-labelledby="newDismantleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDismantleModalLabel">Add Dismantle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengajuan/dismantle'); ?>" method="post">
                 <div class="form-group">
              <label class="col-md-2 control-label">User</label>

              <div class="col-md-5">
             <select name="id_user" class="form-control">
              <?php foreach($user1 as $user) { ?>
              <option value="<?= $user->email  ?>">
                <?= $user->name ?>
             </option>
             <?php } ?>
             </select>
              </div>
            </div>
                <div class="form-group col-md-10">
                    <label><b>Keterangan</b></label>
                    <input type="text" class="form-control" id="dimantle" name="dismantle" readonly value="Dismantle">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteDismantleModal" tabindex="-1" role="dialog" aria-labelledby="deleteDismantleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDismantleLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to Edit?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="<?= base_url(); ?>administrator/hapusdismantle/<?= $d['id_dismantle']; ?>" type="button" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>
