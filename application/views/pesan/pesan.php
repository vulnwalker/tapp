<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesan</h1>

    <div class="row">

        <!-- <input type="hidden" name="id_penerima" value="<?= $pesan['id_penerima']; ?>"> -->
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover" id="dataTable">

                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Isi Pesan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                   <?php $i = 1; ?>
                    <?php foreach ($pesan as $ps) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $ps->ketegori ?></td>
                            <td><?= $ps->isi_pesan ?></td>
                            <td><?= $ps->tanggal ?></td>
                            <td><?= $ps->jam ?></td>
                            <td><?= $ps->status ?></td>
                            <td>

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
                <a href="<?= base_url(); ?>administrator/hapusdismantle/<?= $dismantle['id_dismantle']; ?>" type="button" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>
