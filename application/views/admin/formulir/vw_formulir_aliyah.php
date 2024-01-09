<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>NIk</td>
                        <td>Nama Lengkap</td>
                        <td>Tempat Lahir</td>
                        <td>Tanggal Lahir Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>No HP</td>
                        <td>NISN</td>
                        <td>NPSM</td>
                        <td>NSM</td>
                        <td>Nama Sekolah</td>
                        <td>Tingkat</td>
                        <td>NO KK</td>
                        <td>NIK Ayah</td>
                        <td>Nama Ayah</td>
                        <td>Tempat Lahir Ayah</td>
                        <td>Tanggal Lahir Ayah</td>
                        <td>Status Ayah</td>
                        <td>Pendidikan Akhir Ayah</td>
                        <td>Pekerjaan Ayah</td>
                        <td>NIK Ibu</td>
                        <td>Nama Ibu</td>
                        <td>Tempat Lahir Ibu</td>
                        <td>Tanggal Lahir Ibu</td>
                        <td>Status Ibu</td>
                        <td>Pendidikan Akhir Ibu</td>
                        <td>Pekerjaan Ibu</td>
                        <td>NIK Wali</td>
                        <td>Nama Wali</td>
                        <td>Tempat Lahir Wali</td>
                        <td>Tanggal Lahir Wali</td>
                        <td>Status Wali</td>
                        <td>Pendidikan Akhir Wali</td>
                        <td>Pekerjaan Wali</td>
                        <td>Jalan</td>
                        <td>RT/RW</td>
                        <td>Kelurahan/Desa</td>
                        <td>Kecamatan</td>
                        <td>Kabupaten</td>
                        <td>Provinsi</td>
                        <td>Negara</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($forma as $us): ?>
                        <tr>
                            <td>
                                <?= $i; ?>
                            </td>
                            <td>
                                <?= $us['nik']; ?>
                            </td>
                            <td>
                                <?= $us['nama_lengkap']; ?>
                            </td>
                            <td>
                                <?= $us['tempats']; ?>
                            </td>
                            <td>
                                <?= $us['tanggals']; ?>
                            </td>
                            <td>
                                <?= $us['jenis_kelamin']; ?>
                            </td>
                            <td>
                                <?= $us['nohps']; ?>
                            </td>
                            <td>
                                <?= $us['nisn']; ?>
                            </td>
                            <td>
                                <?= $us['npsm']; ?>
                            </td>
                            <td>
                                <?= $us['nsm']; ?>
                            </td>
                            <td>
                                <?= $us['nama_sekolah']; ?>
                            </td>
                            <td>
                                <?= $us['tingkat']; ?>
                            </td>
                            <td>
                                <?= $us['nokk']; ?>
                            </td>
                            <td>
                                <?= $us['nik_ayah']; ?>
                            </td>
                            <td>
                                <?= $us['nama_ayah']; ?>
                            </td>
                            <td>
                                <?= $us['tempatA']; ?>
                            </td>
                            <td>
                                <?= $us['tanggalA']; ?>
                            </td>
                            <td>
                                <?= $us['statusA']; ?>
                            </td>
                            <td>
                                <?= $us['pendidikanA']; ?>
                            </td>
                            <td>
                                <?= $us['pekerjaanA']; ?>
                            </td>
                            <td>
                                <?= $us['nik_ibu']; ?>
                            </td>
                            <td>
                                <?= $us['nama_ibu']; ?>
                            </td>
                            <td>
                                <?= $us['tempatI']; ?>
                            </td>
                            <td>
                                <?= $us['tanggalI']; ?>
                            </td>
                            <td>
                                <?= $us['statusI']; ?>
                            </td>
                            <td>
                                <?= $us['pendidikanI']; ?>
                            </td>
                            <td>
                                <?= $us['pekerjaanI']; ?>
                            </td>
                            <td>
                                <?= $us['nik_wali']; ?>
                            </td>
                            <td>
                                <?= $us['nama_wali']; ?>
                            </td>
                            <td>
                                <?= $us['tempatW']; ?>
                            </td>
                            <td>
                                <?= $us['tanggalW']; ?>
                            </td>
                            <td>
                                <?= $us['statusW']; ?>
                            </td>
                            <td>
                                <?= $us['pendidikanW']; ?>
                            </td>
                            <td>
                                <?= $us['pekerjaanW']; ?>
                            </td>
                            <td>
                                <?= $us['jalan']; ?>
                            </td>
                            <td>
                                <?= $us['rt_rw']; ?>
                            </td>
                            <td>
                                <?= $us['kecamatan']; ?>
                            </td>
                            <td>
                                <?= $us['kel_desa']; ?>
                            </td>
                            <td>
                                <?= $us['kabupaten']; ?>
                            </td>
                            <td>
                                <?= $us['provinsi']; ?>
                            </td>
                            <td>
                                <?= $us['negara']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('index.php/formulirA/hapusA/') . $us['id']; ?>"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>