<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<body>
    <form method="post" action="/tabel_ats/processForm">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="card-title">Tabel Data Anak Tidak Sekolah (ATS)</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="app/print/data_ats.php" target="_BLANK" class="btn btn-success">
                            <i class="fas fa-print"></i> Print
                        </a>
                        <div class="card mt-3">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped example3" style="font-size: 14px;">
                                        <thead>
                                            <tr>
                                                <th style="display: inline-block; text-align: center;">NIK</th>
                                                <th style="display: inline-block; text-align: center;">Nama Lengkap</th>
                                                <th style="display: inline-block; text-align: center;">Alamat</th>
                                                <th style="display: inline-block; text-align: center;">Jenis Kelamin
                                                </th>
                                                <th style="display: inline-block; text-align: center;">Tanggal Lahir
                                                </th>
                                                <th style="display: inline-block; text-align: center;">Pendidikan
                                                    Terakhir</th>
                                                <th style="display: inline-block; text-align: center;">Alasan Tidak
                                                    Sekolah</th>
                                                <th style="display: inline-block; text-align: center;">Nama Orang Tua
                                                </th>
                                                <th style="display: inline-block; text-align: center;">Pekerjaan Orang
                                                    Tua</th>
                                                <th style="display: inline-block; text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
<?= $this->endSection(); ?>