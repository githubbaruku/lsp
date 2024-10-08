<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA TBL_FORMAPL01</h3>
                    </div>

                    <div class="box-body">
                        <div class='row'>
                            <div class='col-md-9'>
                                <div style="padding-bottom: 10px;"'>
        <?php echo anchor(site_url('formapl01/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?></div>
            </div>
            <div class=' col-md-3'>
                                    <form action="<?php echo site_url('formapl01/index'); ?>" class="form-inline" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                            <span class="input-group-btn">
                                                <?php
                                                if ($q <> '') {
                                                ?>
                                                    <a href="<?php echo site_url('formapl01'); ?>" class="btn btn-default">Reset</a>
                                                <?php
                                                }
                                                ?>
                                                <button class="btn btn-primary" type="submit">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-md-4 text-center">
                                    <div style="margin-top: 8px" id="message">
                                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                    </div>
                                </div>
                                <div class="col-md-1 text-right">
                                </div>
                                <div class="col-md-3 text-right">

                                </div>
                            </div>
                            <table class="table table-bordered" style="margin-bottom: 10px">
                                <tr>
                                    <th>No</th>
                                    <th>Skema</th>
                                    <th>Tuk</th>
                                    <th>Nama Kampus</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nik</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kebangsaan</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Alamat Rumah</th>
                                    <th>Nama Pekerjaan</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Jabatan</th>
                                    <th>Alamat Perusahaan</th>
                                    <th>No Telepon Email</th>
                                    <th>Fotokopi Ktp</th>
                                    <th>Pas Foto</th>
                                    <th>Sertifikat Pelatihan</th>
                                    <th>Fotokopi Ijazah</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr><?php
                                        foreach ($formapl01_data as $formapl01) {
                                        ?>
                                    <tr>
                                        <td width="10px"><?php echo ++$start ?></td>
                                        <td><?php echo $formapl01->skema ?></td>
                                        <td><?php echo $formapl01->tuk ?></td>
                                        <td><?php echo $formapl01->nama_kampus ?></td>
                                        <td><?php echo $formapl01->nama_lengkap ?></td>
                                        <td><?php echo $formapl01->nik ?></td>
                                        <td><?php echo $formapl01->tempat_lahir ?></td>
                                        <td><?php echo $formapl01->tanggal_lahir ?></td>
                                        <td><?php echo $formapl01->jenis_kelamin ?></td>
                                        <td><?php echo $formapl01->kebangsaan ?></td>
                                        <td><?php echo $formapl01->email ?></td>
                                        <td><?php echo $formapl01->no_telepon ?></td>
                                        <td><?php echo $formapl01->pendidikan_terakhir ?></td>
                                        <td><?php echo $formapl01->alamat_rumah ?></td>
                                        <td><?php echo $formapl01->nama_pekerjaan ?></td>
                                        <td><?php echo $formapl01->nama_perusahaan ?></td>
                                        <td><?php echo $formapl01->jabatan ?></td>
                                        <td><?php echo $formapl01->alamat_perusahaan ?></td>
                                        <td><?php echo $formapl01->no_telepon_email ?></td>
                                        <td><?php echo $formapl01->fotokopi_ktp ?></td>
                                        <td><?php echo $formapl01->pas_foto ?></td>
                                        <td><?php echo $formapl01->sertifikat_pelatihan ?></td>
                                        <td><?php echo $formapl01->fotokopi_ijazah ?></td>
                                        <td><?php echo $formapl01->tanggal ?></td>
                                        <td style="text-align:center" width="200px">
                                            <?php
                                            echo anchor(site_url('formapl01/read/' . $formapl01->id), '<i class="fa fa-eye" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm"');
                                            echo '  ';
                                            echo anchor(site_url('formapl01/update/' . $formapl01->id), '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm"');
                                            echo '  ';
                                            echo anchor(site_url('formapl01/delete/' . $formapl01->id), '<i class="fa fa-trash-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm" Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                        }
                                ?>
                            </table>
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6 text-right">
                                    <?php echo $pagination ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>