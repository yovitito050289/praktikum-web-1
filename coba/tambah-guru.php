<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <title>Tambah Guru</title>
    </head>

    <body>

      <div class="container" style="margin-top: 80px">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                TAMBAH GURU
              </div>
              <div class="card-body">
                <form action="simpan-guru.php" method="POST">
                  
                  <div class="form-group">
                    <label>NUPTK</label>
                    <input type="text" name="nuptk" placeholder="Masukkan Nuptk Guru" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Guru" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Golongan</label><br>
                    <select id="golongan-select" name="golongan" class="form-control">
                    <option value="" disabled selected>Pilih Golongan</option>
                    <option value="III/A">Golongan III A</option>
                    <option value="III/B">Golongan III B</option>
                    <option value="III/C">Golongan III C</option>
                    <option value="III/D">Golongan III D</option>
                    <option value="IV/A">Golongan IV A</option>
                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" value="1">
                      <label class="form-check-label" for="jenis_kelamin">
                        Laki-laki
                      </label>
                      </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" value="2">
                      <label class="form-check-label" for="jenis_kelamin">
                        Perempuan
                      </label>
                      </div>
                  
                  <button type="submit" class="btn btn-success">SIMPAN</button>
                  <button type="reset" class="btn btn-warning">RESET</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
    $(document).ready(function() {
      $('#golongan-select').select2({
        placeholder: "Pilih Golongan",
        allowClear: true
      });
    });
  </script>
    </body>
  </html>