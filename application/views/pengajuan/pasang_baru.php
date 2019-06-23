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

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPasangBaruModal">Add Pasang Baru</a>


            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Uker</th>
                        <th scope="col">Nama Lokasi</th>
                        <th scope="col">Alamat Lokasi</th>
                        <th scope="col">Tipe Jarkom</th>
                        <th scope="col">Provider</th>
                        <th scope="col">Nama PIC</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pasang_baru as $pb) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $pb['nama_uker']; ?></td>
                        <td><?= $pb['nama_lokasi']; ?></td>
                        <td><?= $pb['alamat_lokasi']; ?></td>
                        <td><?= $pb['tipe_jarkom']; ?></td>
                        <td><?= $pb['provider']; ?></td>
                        <td><?= $pb['nama_pic']; ?></td>
                        <td><?= $pb['no_tlp']; ?></td>
                        <td><?= $pb['tanggal']; ?></td>
                        <td><?= $pb['gambar']; ?></td>
                        <td>
                            <a href="<?= base_url();?>pengajuan/editpasangbaru/<?= $pb['id_pasangbaru']; ?>"  class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger" class="badge badge-danger" data-toggle="modal" data-target="#deletePasangBaruModal">delete</a>
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
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="newPasangBaruModal" tabindex="-1" role="dialog" aria-labelledby="newPasangBaruModalLabel" aria-hidden="true">
    <?= form_open_multipart('pengajuan/pasang_baru'); ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPasangBaruModalLabel">Add Pasang Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengajuan/pasang_baru'); ?>" method="post">
                <div class="form-group">
                    <div class="form-group col-md-12">
                        <label><b>Unit Kerja</b></label>
                        <input type="text" class="form-control" id="nama_uker" name="nama_uker">
                    </div>
                     <div class="form-group col-md-12">
                        <label><b>Nama Lokasi</b></label>
                        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi">
                    </div>
                     <div class="form-group col-md-12">
                        <label><b>Alamat Lokasi</b></label>
                        <textarea type="text" class="form-control" id="alamat_lokasi" name="alamat_lokasi"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                    <label><b>Tipe Jarkom</b></label>
                    <select id="tipe_jarkom" name="tipe_jarkom" class="form-control">
                        <option value="">- Pilih -</option>
                        <option>BRISAT</option>
                        <option>VSAT</option>
                        <option>MPLS</option>
                        <option>GPRS</option>
                    </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label><b>Provider</b></label>
                        <select  type="text" class="form-control" name="provider">
                            <option value="">- Pilih -</option>
                            <option>Telkomsel</option>
                            <option>Indosat</option>
                            <option>Satkom</option>
                            <option>Brisat</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label><b>Nama PIC</b></label>
                        <input type="text" name="nama_pic" class="form-control" >
                    </div>
                    <div class="form-group col-md-12">
                        <label><b>No. Telepon</b></label>
                        <input type="int" name="no_tlp" class="form-control" >
                    </div>
                    <div class="form-group col-md-12">
                        <label><b>Target Live</b></label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                     <div class="form-group col-md-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                <label class="custom-file-label" for="gambar">Choose file</label>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dipbiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
    <?= form_close(); ?>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="deletePasangBaruModal" tabindex="-1" role="dialog" aria-labelledby="deletePasangBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePasangBaruModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="<?= base_url(); ?>administrator/hapuspasang_baru/<?= $pb['id_pasangbaru']; ?>" type="button" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>
