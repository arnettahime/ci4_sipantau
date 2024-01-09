<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<body>
    <form method="post" action="/formats/processForm">
        <!-- Field formulir -->
        <div class="card mt-3">
            <div class="card-header text-center" style="background-color: transparent; border: none;">
                <h3 class="card-title">Formulir Lapor Anak Tidak Sekolah (ATS)</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" name="nik" class="form-control" id="" placeholder="Masukkan NIK">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id=""
                                placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id=""
                                placeholder="Masukkan Alamat Lengkap">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2" name="jk" style="width: 100%;">
                                <option hidden>--Pilih Jenis Kelamin--</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" class="form-control" id=""
                                placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control select2" name="pend_terakhir" style="width: 100%;">
                                <option hidden>--Pilih Pendidikan--</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                                <option value="SD dan Sederajat">SD dan Sederajat</option>
                                <option value="SMP dan Sederajat">SMP dan Sederajat</option>
                                <option value="SMA dan Sederajat">SMA dan Sederajat</option>
                                <option value="Diploma 1-3">Diploma 1-3</option>
                                <option value="S1 dan Sederajat">S1 dan Sederajat</option>
                                <option value="S2 dan Sederajat">S2 dan Sederajat</option>
                                <option value="S3 dan Sederajat">S3 dan Sederajat</option>
                            </select>
                        </div>
                        <div class="formjkjk">
                            <div class="form-group">
                                <label>Alasan Tidak Sekolah</label>
                                <select class="form-control select2 jkjk" name="alasan" style="width: 100%;">
                                    <option hidden>--Pilih Alasan--</option>
                                    <option value="1">Ekonomi</option>
                                    <option value="3">Disabilitas</option>
                                    <option value="9">Anak Berhadapan Hukum</option>
                                    <option value="7">Anak Punk/Anak Jalanan</option>
                                    <option value="6">Menikah Usia Dini</option>
                                    <option value="4">Sudah Lulus SMA/Perguruan Tinggi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Orang Tua</label>
                            <input type="text" name="nama_ortu" class="form-control" id=""
                                placeholder="Masukkan Nama Orang Tua">
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Orang Tua</label>
                            <select class="form-control select2" name="pekerjaan" style="width: 100%;">
                                <option hidden>--Pilih Pekerjaan--</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Petani">Petani</option>
                                <option value="Buruh Tani">Buruh Tani</option>
                                <option value="Buruh Bangunan">Buruh Bangunan</option>
                                <option value="Buruh Perkebunan">Buruh Perkebunan</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Guru">Guru</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="submit" name="simpan_data" class="btn btn-block btn-success float-right"><i
                        class="fas fa-save"></i> Simpan Data</button>
            </div>
        </div>
</body>
<?= $this->endSection(); ?>