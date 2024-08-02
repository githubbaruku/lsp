<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>XYZ LSP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="row">
        <div class="col" style="height: 3rem;"> </div>
    </div>
    <div class="login-logo">
        <a href="<?php echo base_url(); ?>"><b> XYZ </b>Lembaga Sertifikasi Profesi </a>
    </div>
    <h3 class="text-center">Silahkan melakukan pendaftaran</h3>
    <br><br>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="">
                                <h1 class="h4 text-gray-900">Data Pribadi</h1>
                                <p>Isi data pribadi kamu</p>
                            </div>
                            <br><br>
                            <?= $this->session->flashdata('message'); ?>

                            <form method="post" action="<?= base_url('index.php/auth/registration'); ?>">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama lengkap</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="full_name" class="form-control" id="inputEmail3" placeholder="Nama lengkap">
                                        <?= form_error('full_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-5 col-form-label-sm">No. KTP/NIK/Paspor*</label>
                                    <div class="col-sm-7">
                                        <input type="number" name="idcard" class="form-control" id="idcard" placeholder="nomor ID card">
                                        <?= form_error('idcard', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!--  <div class="form-group row">
                                    <label class="col-sm-5 col-form-label-sm">Tempat,tgl lahir*</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="name" name="tempat" placeholder="Tempat">
                                        <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-user" id="datepicker" name="tgl" placeholder="Tgl/bln/thn">
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label-sm col-sm-5 pt-0">Jenis kelamin</legend>
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Laki-laki
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="option1">
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="kebangsaan" class="col-form-label-sm col-sm-5">Kebangsaan</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="pilihan">
                                                <option selected>Pilih kebangsaan</option>
                                                <option value="1">Indonesia</option>
                                                <option value="2">Asing</option>
                                                <option value="3">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-form-label-sm col-sm-5">Alamat Lengkap*</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control form-control-user" id="name" name="alamat" placeholder="Alamat Rumah"></textarea>
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group">
                                    <div class="row">
                                        <label for="province" class="col-form-label-sm col-sm-5">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select my-1 mr-sm-2" id="provinceSelect">
                                                <option selected>Pilih Provinsi</option>
                                                <option value="1">DKI</option>
                                                <option value="2">Asing</option>
                                                <option value="3">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="city" class="col-form-label-sm col-sm-5">Kota</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select my-1 mr-sm-2" id="citySelect" disabled>
                                                <option selected>Pilih Kota</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="">
                                <h1 class="h4 text-gray-900">Email dan kata sandi</h1>
                                <p>Masukkan email dan kata sandi anda</p>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <div class="row">
                                    <label for="email" class="col-form-label-sm col-sm-5">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="password1" class="col-form-label-sm col-sm-5">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="password2" class="col-form-label-sm col-sm-5">Konfirmasi password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary btn-user">
                                    Register Account
                                </button>
                            </div>
                            </form>
                            <div class="text-center mt-3">
                                <a class="small" href="<?= base_url(); ?>auth">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>/assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>/assets/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>