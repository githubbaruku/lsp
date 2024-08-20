<div class="content-wrapper">
    <section class="content">
        <!-- <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">

                    <div class="box-header">
                        <h3 class="box-title">KELOLA DATA TBL_DASHBOARD</h3>
                    </div>

                    <div class="box-body">
                        <div class='row'>
                            <div class='col-md-9'>
                                <div style="padding-bottom: 10px;"'>
        <?php echo anchor(site_url('dashboard/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?></div>
            </div>
            <div class=' col-md-3'>
                                    <form action="<?php echo site_url('dashboard/index'); ?>" class="form-inline" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                            <span class="input-group-btn">
                                                <?php
                                                if ($q <> '') {
                                                ?>
                                                    <a href="<?php echo site_url('dashboard'); ?>" class="btn btn-default">Reset</a>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr><?php
                                        foreach ($dashboard_data as $dashboard) {
                                        ?>
                                    <tr>
                                        <td width="10px"><?php echo ++$start ?></td>
                                        <td><?php echo $dashboard->title ?></td>
                                        <td><?php echo $dashboard->description ?></td>
                                        <td><?php echo $dashboard->image ?></td>
                                        <td style="text-align:center" width="200px">
                                            <?php
                                            echo anchor(site_url('dashboard/read/' . $dashboard->id), '<i class="fa fa-eye" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm"');
                                            echo '  ';
                                            echo anchor(site_url('dashboard/update/' . $dashboard->id), '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm"');
                                            echo '  ';
                                            echo anchor(site_url('dashboard/delete/' . $dashboard->id), '<i class="fa fa-trash-o" aria-hidden="true"></i>', 'class="btn btn-danger btn-sm" Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
            </div> -->

        <h3><?= $dashboard->title; ?></h3>
        <p><?= $dashboard->description; ?></p>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Jabatan</th>
                        <th>Nama</th>
                    </tr>
                    <tr>
                        <td>Pembina</td>
                        <td>
                            K.H. Yusuf Mansur
                        </td>
                    </tr>
                    <tr>
                        <td>Dewan Pengarah :</td>
                        <td>1. ,K.H. Ahmad Jamil, M.A. Ph.D
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2. H. Dr. Tarmizi As-Shidiq, M.Ag.</td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>3. H. Dr. M. Anwar Sani, M.E.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            4. Hj. Dr. Nurdiana Dewi, M.E.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            5. H. Darul Qutni, M.Ag.
                        </td>
                    </tr>
                    <tr>
                        <td>

                            Pengurus :
                        </td>
                        <td>

                            1. Direktur : Muhammad Bisyri, M.Pd.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            2. Manajer Administrasi : Darsono, S.Pd.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            3. Manajer Sertifikasi : Hamzah Arafah, M.Pd.
                        </td>
                    </tr>
                    <tr>
                        <td> 4. Manajer Mutu : Faqih Sadam Husen
                            Komite Skema :</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            1. K.H. Dr. Ahsin Sakho Muhammad, M.A.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            2. H. Khoirun Nidhom, Lc., M.A.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            3. Dr. Zaid Abdullah Ali
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            4. Salim Shomlah Abdoh, M.A.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            5. Syaikh Abdurrahman Hamood
                        </td>
                    </tr>
                    <tr>
                        <td>

                            Komite Ketidak-berpihakan :
                        </td>
                        <td>

                            1. Ahmad Muhaimin, M.Ag.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            2. Ahmad Nurjihansyah, M.Ag.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>

                            3. Yudi Fachruddin, M.Pd.
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </section>
</div>