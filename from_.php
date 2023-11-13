<!DOCTYPEhtml>
<htmllang="id">
<kepala>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=lebar perangkat, skala awal=1.0">
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integritas="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin=" anonim">
</kepala>
<tubuh>
    <div kelas="wadah">
        <div kelas="baris">
            <div kelas="kol -6">
            <h1>Formulir Pendaftaran</h1>
            <p>Isi Data Dibawah ini:</p>
            <form action="hasil_t6.php" metode="post">
                <div kelas="mb -3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" diperlukan>
                </div>
                <div kelas="mb -3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" cols="3" placeholder="Alamat Anda" diperlukan></textarea>
                </div>
                <div kelas="mb -3">
                <label for="tempat" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat Lahir Anda" diperlukan>
                </div>
                <div kelas="mb -3">
                <label for="tanggal" class="form-label">Tanggal Lahir</label>
                <input type="tanggal" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Lahir Anda" diperlukan>
                </div>
                <div kelas="mb -3">
                <label for="je" class="form-label">Jenis Kelamin</label>
                <div kelas="mb -3">
                <input class="jk" type="radio" name="jk" id="lk" value="Laki-Laki">
                <label kelas="jk" for="lk">
                    Laki-Laki
                </label>
                </div>
                <div kelas="mb -3">
                <input class="jk" type="radio" name="jk" id="pr" value="Perempuan" dicentang>
                <label kelas="jk" for="pr">
                    Perempuan
                </label>
                </div>
                </div>
                <div kelas="mb -3">
                <label for="pend" class="form-label">Pendidikan</label>
                </div>
                <select class="pendidikan" aria-label="Contoh pilihan kecil" name="pt">
                <optionselect>Pendidikan Terakhir</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                </pilih>
                <div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-default">Batal</button>
                </div>
            </bentuk>
            </div>
        </div>

    </div>
    <skrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integritas="sha384-C6RzsynM9kWDrMNeT87bh95OGnyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonim"> </skrip>
</tubuh>
</html>