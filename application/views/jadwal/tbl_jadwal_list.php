<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">Jadwal Sertifikasi LSP
                        </h3>
                        <h5>Silahkan Ikuti Jadwal Uji Sertifikasi Sesuai Dengan Jadwal yang sudah Di Tentukan
                        </h5>
                    </div>

                    <div class="box-body">
                        <div class='row'>
                            <div class='col-md-9'>
                                <div style="padding-bottom: 10px;"'>
        <!-- <?php echo anchor(site_url('jadwal/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?></div> -->
            </div>
            <div class=' col-md-3'>
                                    <form action="<?php echo site_url('jadwal/index'); ?>" class="form-inline" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                            <span class="input-group-btn">
                                                <?php
                                                if ($q <> '') {
                                                ?>
                                                    <a href="<?php echo site_url('jadwal'); ?>" class="btn btn-default">Reset</a>
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
                                    <th>Tanggal</th>
                                    <th>Skema</th>
                                    <th>Tuk</th>
                                    <th>Action</th>
                                </tr><?php
                                        foreach ($jadwal_data as $jadwal) {
                                        ?>
                                    <tr>
                                        <td width="10px"><?php echo ++$start ?></td>
                                        <td><?php echo $jadwal->tanggal ?></td>
                                        <td><?php echo $jadwal->skema ?></td>
                                        <td><?php echo $jadwal->tuk ?></td>
                                        <td style="text-align:center" width="200px">
                                            <?php
                                            echo anchor(site_url('jadwal/ubah_jadwal/' . $jadwal->no), '<i class="fa fa-calendar" aria-hidden="true"></i> Ajukan Perubahan Jadwal', 'class="btn btn-danger btn-sm"');
                                            echo '  ';
                                            // echo anchor(site_url('jadwal/update/' . $jadwal->no), '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm"');
                                            // echo '  ';
                                            // echo anchor(site_url('jadwal/delete/' . $jadwal->no), '<i class="fa fa-trash-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm" Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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