<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>





<section class="content">

    <div class="section">
        <center>
            <h2>Data User</h2>
        </center>

    </div>

    <div class="section-body">
        <div class="card">

            <div class="card-header">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    + Tambah User
                </button>

            </div>

            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-bordered table-vcenter">
                    <thead>
                        <tr style="background-color: #03b1fc;">
                            <th class="text-center">User ID</th>
                            <th class="text-center">Usernama</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Level</th>
                            <th class="text-center" style="width: 200px;"><i class="fa fa-wrench"></i> Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tampildata as $row) : ?>


                            <tr>
                                <td> <?= $row->userid; ?></td>
                                <td> <?= $row->usernama; ?></td>
                                <td> <?= $row->userpassword; ?></td>
                                <td> <?= $row->userlevelid; ?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-effect-ripple btn-success" data-toggle="modal" data-target="#modal_edit_user<?= $row->userid; ?>">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <a onclick="javascript:return confirm('Apakah Anda Yakin Ingin Menghapus <?php echo $row->userid; ?> ?');" href="<?php echo base_url() . 'user/' . $row->userid; ?>" data-toggle="tooltip" title="Hapus <?php echo $row->usernama; ?>" class="btn btn-effect-ripple btn-danger"><i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            <?php endforeach; ?>

                    </tbody>
                </table>
                <script>
                    function hapus(noku) {
                        pesan = confirm('Yakin hapus user ?');

                        if (pesan) {
                            window.location.href = ("<?= site_url('User/hapus') ?>") + noku;
                        } else return false;
                    }
                </script>
            </div>
        </div>
    </div>




</section>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="<?= base_url('User/save'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">User ID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="userid" name="userid" placeholder="User ID" required="">

                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Usernama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="usernama" name="usernama" placeholder="Usernama" required="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="userpassword" name="userpassword" placeholder="Password" required="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Level</label>
                    <div class="col-sm-9">
                        <input type="int" class="form-control" id="userlevelid" name="userlevelid" placeholder="Level" required="">
                    </div>
                </div>



                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>



        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->





<!-- update surat masuk -->
<?php
$no = 1;
foreach ($tampildata as $row) : ?>


    <tr>
        <div class="modal fade" id="modal_edit_user<?= $row->userid; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">Edit User (<?= $row->usernama; ?>)</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <form action="<?= base_url('/User/edit' . $row->userid); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User ID</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?= $row->userid; ?>" class="form-control" id="userid" name="userid" placeholder="User ID" required="">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Usernama</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?= $row->usernama; ?>" class="form-control" id="usernama" name="usernama" placeholder="Usernama" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?= $row->userpassword; ?>" class="form-control" id="userpassword" name="userpassword" placeholder="Password" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                                <input type="int" value="<?= $row->userlevelid; ?>" class="form-control" id="userlevelid" name="userlevelid" placeholder="Level ketik angka 1, 2, 3, 4, 5, 6 selain itu tidak bisa" required="">
                            </div>
                        </div>





                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>



                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php endforeach; ?>








    <?= $this->endSection() ?>