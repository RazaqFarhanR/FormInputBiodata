<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data User</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <nav class="navbar navbar-dark" style="background-color: #0347a0;">
            <div class="container-fluid">
                <ul>
                    <li>HanR.com</li>
                  </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
          </nav>
          <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="container">
        <h1>Masukan Data Diri Anda</h1>
        <form method="POST" action="tampil.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap :</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" placeholder="Input Jenis Kelamin"> Laki-Laki
                <input type="radio" name="jenis_kelamin" value="perempuan" placeholder="Input Jenis Kelamin"> Perempuan
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama :</label>
                <input type="text" class="form-control" name="agama" placeholder="Masukan Agama Anda" required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir :</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat lahir Anda" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" value="" placeholder="Masukan Tanggal Lahir">
            </div>
            <div class="mb-3">
                <label for="hobi" class="form-label">Hobi :</label>
                <input type="text" class="form-control" name="hobi" placeholder="Masukan Hobi Anda" required>
            </div>
            <div class="mb-3">
                <label for="cita_cita" class="form-label">Cita-cita :</label>
                <input type="text" class="form-control" name="cita_cita" placeholder="Masukan cita-cita Anda" required>
            </div>
            <div class="mb-3">
                <label for="usia_user" class="form-label">Usia :</label>
                <input type="number" class="form-control" name="usia" placeholder="Masukan Usia Anda" required>
            </div>
            <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah :</label>
                <input type="text" class="form-control" name="asal_sekolah" placeholder="Masukan Asal Sekolah" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <div class="footer">
        <div class="footer-logo">HanR.com</div>
        <div class="footer-list">
            <ul>
                <li>Terima Kasih</li>
                <li>RazaqFarhan(XIRPL7)</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>