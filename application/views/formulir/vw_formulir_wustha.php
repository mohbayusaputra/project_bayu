<section
    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"
    data-show="true" data-duration="700" data-cue="slideInDown" class="bg-light bg-heropage">
    <div class="mt-4 card rounded-0 border-0 bgi-no-repeat bgi-position-x-center bgi-size-cover bg-primary bg-opacity-75"
        style="background-size: auto 100%;">
        <div class="card-body container-xxl py-10 px-3">
            <div class="d-flex align-items-center justify-content-center">
                <span class="position-relative d-inline-block fs-1">
                    <div class="text-center fs-2x">🏛️</div>
                    <div class="text-white fw-bold opacity-75-hover">Formulir Pendaftaran Wustha</div>
                    <div
                        class="position-absolute opacity-100 bottom-0 start-25 border-4 border-warning border-bottom w-75">
                    </div>
                </span>
            </div>
        </div>
    </div>
</section>

<div class="form-container">
    <form action="<?= base_url('formulir/handleFormSubmissionW'); ?>" method="post" id="dataPribadiForm">
        <h1>Data Pribadi</h1>
        <hr>
        <div class="form-group">
            <label for="nik">NIK Santri:</label>
            <input type="text" id="nik" name="nik" data-validate="NIK is required" required>
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap Santri:</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" data-validate="Nama Lengkap is required" required>
        </div>
        <div class="form-group">
            <label for="tempats">Tempat:</label>
            <input type="text" id="tempats" name="tempats" data-validate="Tempat is required" required>
        </div>
        <div class="form-group">
            <label for="tanggals">Tanggal Lahir</label>
            <input type="date" id="tanggals" name="tanggals" data-validate="Tanggal is required" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="">Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nohps">No HP Santri</label>
            <input type="text" id="nohps" name="nohps" data-validate="No Hp is required" required>
        </div>
        <!-- ... (Kolom-kolom data pribadi lainnya) -->


        <hr>
        <h1>Data Sekolah Sebelumnya (Data Identitas Raport/SKL)</h1>
        <hr>
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" id="nisn" name="nisn" data-validate="NISN is required" required>
        </div>
        <div class="form-group">
            <label for="npsm">NPSM:</label>
            <input type="text" id="npsm" name="npsm" data-validate="NPSM is required" required>
        </div>
        <div class="form-group">
            <label for="nsm">NSM:</label>
            <input type="text" id="nsm" name="nsm" data-validate="NSM is required" required>
        </div>
        <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah:</label>
            <input type="text" id="nama_sekolah" name="nama_sekolah" data-validate="Nama Sekolah is required" required>
        </div>
        <div class="form-group">
            <label for="tingkat">Tingkat</label>
            <select name="tingkat" id="tingkat" class="form-control">
                <option value="">Tingkat</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
            </select>
        </div>
        <!-- ... (Kolom-kolom data pribadi lainnya) -->


        <!-- <h1>Pilih Tinggal Bersama</h1>
        <hr>
        <div class="form-group">
            <label for="tinggalBersama">Tinggal Bersama:</label>
        </div>

        <div class="form-group">
            <select id="tinggalBersama" name="tinggalBersama" onchange="toggleForm()" required>
                <option value="">Pilih</option>
                <option value="orangTua">Orang Tua</option>
                <option value="wali">Wali</option>
            </select>
        </div> -->
        <hr>
        <h1>Data Orang Tua (Data Menurut KK)</h1>
        <hr>
        <div class="form-group">
            <label for="nokk">No KK:</label>
            <input type="text" id="nokk" name="nokk" data-validate="No KK is required">
        </div>
        <div class="form-group">
            <label for="nik_ayah">NIK Ayah:</label>
            <input type="text" id="nik_ayah" name="nik_ayah" data-validate="NIK Ayah is required">
        </div>
        <div class="form-group">
            <label for="nama_ayah">Nama Ayah:</label>
            <input type="text" id="nama_ayah" name="nama_ayah" data-validate="Nama Ayah is required">
        </div>
        <div class="form-group">
            <label for="tempatA">Tempat:</label>
            <input type="text" id="tempatA" name="tempatA" data-validate="Tempat Lahir ayah is required">
        </div>
        <div class="form-group">
            <label for="tanggalA">Tanggal Lahir:</label>
            <input type="date" id="tanggalA" name="tanggalA" data-validate="Tanggal Lahir is required">
        </div>
        <div class="form-group">
            <label for="statusA">Status Ayah</label>
            <select name="statusA" id="statusA" class="form-control">
                <option value="">Status Ayah</option>
                <option value="Hidup">Hidup</option>
                <option value="meninggal">Meninggal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pendidikanA">Pendidikan Akhir</label>
            <select name="pendidikanA" id="pendidikanA" class="form-control">
                <option value="">Pendidikan Akhir</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pekerjaanA">Pekerjaan Ayah:</label>
            <input type="text" id="pekerjaanA" name="pekerjaanA" data-validate="Pekerjaan Ayah is required" required>
        </div>
        <div class="form-group">
            <label for="nik_ibu">NIK Ibu:</label>
            <input type="text" id="nik_ibu" name="nik_ibu" data-validate="NIK Ibu is required">
        </div>
        <div class="form-group">
            <label for="nama_ibu">Nama Ibu:</label>
            <input type="text" id="nama_ibu" name="nama_ibu" data-validate="Nama Ibu is required">
        </div>
        <div class="form-group">
            <label for="tempatI">Tempat:</label>
            <input type="text" id="tempatI" name="tempatI" data-validate="Tempat Lahir ibu is required">
        </div>
        <div class="form-group">
            <label for="tanggalI">Tanggal Lahir:</label>
            <input type="date" id="tanggalI" name="tanggalI" data-validate="Tanggal Lahir is required">
        </div>
        <div class="form-group">
            <label for="statusI">Status Ibu</label>
            <select name="statusI" id="statusI" class="form-control">
                <option value="">Status Ibu</option>
                <option value="Hidup">Hidup</option>
                <option value="meninggal">Meninggal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pendidikanI">Pendidikan Akhir</label>
            <select name="pendidikanI" id="pendidikanI" class="form-control">
                <option value="">Pendidikan Akhir</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pekerjaanI">Pekerjaan Ibu:</label>
            <input type="text" id="pekerjaanI" name="pekerjaanI" data-validate="Pekerjaan Ibu is required">

        </div>
        <!-- ... (Kolom-kolom data orang tua lainnya) -->
        <hr>
        <h1>Data Wali</h1>
        <hr>
        <div class="form-group">
            <label for="nik_wali">NIK Wali:</label>
            <input type="text" id="nik_wali" name="nik_wali" data-validate="NIK Wali is required">
        </div>
        <div class="form-group">
            <label for="nama_wali">Nama Wali:</label>
            <input type="text" id="nama_wali" name="nama_wali" data-validate="Nama Wali is required">
        </div>
        <div class="form-group">
            <label for="tempatW">Tempat:</label>
            <input type="text" id="tempatW" name="tempatW" data-validate="Tempat Lahir wali is required">
        </div>
        <div class="form-group">
            <label for="tanggalW">Tanggal Lahir:</label>
            <input type="date" id="tanggalW" name="tanggalW" data-validate="Tanggal Lahir is required">
        </div>
        <div class="form-group">
            <label for="statusW">Status Wali</label>
            <select name="statusW" id="statusW" class="form-control">
                <option value="">Status Wali</option>
                <option value="Hidup">Hidup</option>
                <option value="meninggal">Meninggal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pendidikanW">Pendidikan Akhir</label>
            <select name="pendidikanW" id="pendidikanW" class="form-control">
                <option value="">Pendidikan Akhir</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pekerjaanW">Pekerjaan Wali:</label>
            <input type="text" id="pekerjaanW" name="pekerjaanW" data-validate="Pekerjaan Wali is required">
        </div>
        <!-- ... (Kolom-kolom data wali lainnya) -->
        <hr>
        <h1>Data Alamat</h1>
        <hr>
        <div class="form-group">
            <label for="jalan">Jalan:</label>
            <input type="text" id="jalan" name="jalan" data-validate="Jalan is required" required>
        </div>
        <div class="form-group">
            <label for="rt_rw">RT/RW:</label>
            <input type="text" id="rt_rw" name="rt_rw" data-validate="RT/RW is required" required>
        </div>
        <div class="form-group">
            <label for="kel_desa">Kelurahan/Desa:</label>
            <input type="text" id="kel_desa" name="kel_desa" data-validate="kel_desa is required" required>
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" id="kecamatan" name="kecamatan" data-validate="Kecamatan is required" required>
        </div>
        <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" id="kabupaten" name="kabupaten" data-validate="Kabupaten is required" required>
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" id="provinsi" name="provinsi" data-validate="Provinsi is required" required>
        </div>
        <div class="form-group">
            <label for="negara">Negara</label>
            <input type="text" id="negara" name="negara" data-validate="Negara is required" required>
        </div>
        <!-- ... (Kolom-kolom data pribadi lainnya) -->



        <!-- Formulir terakhir atau formulir submit -->


        <button type="submit">Submit</button>

    </form>
</div>

<script>
    function showNextForm(currentFormId, nextFormId) {
        var currentForm = document.getElementById(currentFormId);

        // Validasi input pada formulir saat ini
        var inputs = currentForm.querySelectorAll('input[required], select[required]');
        var isValid = true;

        if (currentFormId === 'tinggalBersamaForm') {
            var tinggalBersamaSelect = document.getElementById('tinggalBersama');
            var selectedOption = tinggalBersamaSelect.options[tinggalBersamaSelect.selectedIndex].value;

            if (selectedOption === 'orangTua') {
                // Langsung arahkan ke formulir Data Alamat
                currentForm.style.display = 'none';
                document.getElementById('dataAlamatForm').style.display = 'block';
                return;
            } else if (selectedOption === 'wali') {
                // Langsung arahkan ke formulir Data Alamat
                currentForm.style.display = 'none';
                document.getElementById('dataAlamatForm').style.display = 'block';
                return;
            }
        }

        inputs.forEach(function (input) {
            if (!input.value) {
                alert(input.getAttribute('data-validate'));
                isValid = false;
            }
        });

        if (isValid) {
            currentForm.style.display = 'none';
            document.getElementById(nextFormId).style.display = 'block';
        }
    }

    function toggleForm() {
        var tinggalBersama = document.getElementById('tinggalBersama').value;
        var orangTuaForm = document.getElementById('orangTuaForm');
        var waliForm = document.getElementById('waliForm');

        if (tinggalBersama === 'orangTua') {
            orangTuaForm.style.display = 'block';
            waliForm.style.display = 'none';
        } else if (tinggalBersama === 'wali') {
            orangTuaForm.style.display = 'none';
            waliForm.style.display = 'block';
        }
    }
</script>


<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .form-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .form-group label,
    .form-group input,
    .form-group select {
        width: 100%;
        box-sizing: border-box;
    }

    .form-group label {
        flex: 1;
    }

    .form-group input,
    .form-group select {
        flex: 2;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        display: grid;
        grid-gap: 10px;
    }

    label {
        font-weight: bold;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>