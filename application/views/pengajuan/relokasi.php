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

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDataAwalModal"><b>Data Awal</b></a>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRelokasiModal"><b>Add Relokasi</b></a>

            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">IP Address</th>
                        <th scope="col">Provider</th>
                        <th scope="col">Nama Uker</th>
                        <th scope="col">Alamat Lama</th>
                        <th scope="col">Alamat Baru</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                 <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($Relokasi as $rk) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $rk['ip_address']; ?></td>
                            <td><?= $rk['provider']; ?></td>
                            <td><?= $rk['nama_uker']; ?></td>
                            <td><?= $rk['alamat_lama']; ?></td>
                            <td><?= $rk['alamat_baru']; ?></td>
                            <td><?= $rk['tanggal']; ?></td>
                            <td><?= $rk['gambar']; ?></td>
                            <td>
                                <a href="<?= base_url();?>pengajuan/editrelokasi/<?= $rk['id_relokasi']; ?>"  class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger" class="badge badge-danger" data-toggle="modal" data-target="#deleteRelokasiModal">delete</a>
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

<div class="modal fade" id="newDataAwalModal" tabindex="-1" role="dialog" aria-labelledby="newDataAwalModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newDataAwalModalLabel">Add New Data Awal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengajuan/data_awal'); ?>" method="post">
                <div class="form-group col-md-12">
                        <label><b>IP Address</b></label>
                        <input type="text" class="form-control" id="ip_address" name="ip_address">
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
                    <select id="provider" name="provider" class="form-control">
                        <option value="">- Pilih -</option>
                        <option>SATKOMINDO</option>
                        <option>TELKOM</option>
                        <option>PATRAKOM</option>
                        <option>LINTASARTA</option>
                        <option>INDOSAT</option>
                        <option>TANGARA</option>
                        <option>ICON+</option>
                        <option>PSN</option>
                    </select>
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
                    <label><b>Tipe Uker</b></label>
                    <select id="tipe_uker" name="tipe_uker" class="form-control">
                        <option value="">- Pilih -</option>
                        <option>TERAS</option>
                        <option>EBUZZ</option>
                        <option>UNIT</option>
                        <option>ATM</option>
                        <option>KCP</option>
                        <option>KC</option>
                    </select>
                </div>
                 <div class="form-group col-md-12">
                    <label><b>Nama PIC</b></label>
                    <input type="text" class="form-control" id="nama_pic" name="nama_pic">
                </div>
                <div class="form-group col-md-12">
                    <label><b>No. Telepon</b></label>
                    <input type="int" class="form-control" id="no_tlp" name="no_tlp">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="newRelokasiModal" tabindex="-1" role="dialog" aria-labelledby="newRelokasiModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRelokasiLabel">Add Relokasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengajuan/relokasi'); ?>" method="post">
                <div class="form-group col-md-12">
                    <label><b>IP Address</b></label>
                    <input type="text" class="form-control" id="ip_address" name="ip_address">
                </div>
                <div class="form-group col-md-12">
                    <label><b>Provider</b></label>
                    <select id="provider" name="provider" class="form-control">
                        <option value="">- Pilih -</option>
                        <option>SATKOMINDO</option>
                        <option>TELKOM</option>
                        <option>PATRAKOM</option>
                        <option>LINTASARTA</option>
                        <option>INDOSAT</option>
                        <option>TANGARA</option>
                        <option>ICON+</option>
                        <option>PSN</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label><b>Nama Uker</b></label>
                    <textarea type="text" class="form-control" id="nama_uker" name="nama_uker"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label><b>Alamat Lama</b></label>
                    <textarea type="text" class="form-control" id="alamat_lama" name="alamat_lama"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label><b>Alamat Baru</b></label>
                    <textarea type="text" class="form-control" id="alamat_baru" name="alamat_baru"></textarea>
                </div>
                 <div class="form-group col-md-12">
                    <label><b>Tanggal</b></label><br>
                    <input type="date" id="tanggal" name="tanggal">
                </div>
                <div class="form-group col-md-12">
                    <label><b>Gambar</b></label>
                    <br>
                    <input type="file" id="gambar" name="gambar">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="deleteRelokasiModal" tabindex="-1" role="dialog" aria-labelledby="deleteRelokasiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteRelokasiModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <a href="<?= base_url(); ?>administrator/hapusrelokasi/<?= $rk['id_relokasi']; ?>" type="button" class="btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>
