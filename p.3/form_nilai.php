<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="nilai_mahasiswa" method="POST">
  <div class="form-group">
    <label for="nama_mahsiswa">Nama Mahasiswa</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div> 
      <input id="nama_mahsiswa" name="nama_mahsiswa" placeholder="Nama Mahasiswa" type="number" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="mata_kuliah">Mata Kuliah</label> 
    <div>
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required="required">
        <option value="Pemrograman WEB 2">Pemrograman WEB 2</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_uts">Nilai UTS</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card-o"></i>
        </div>
      </div> 
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS Mahasiswa" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_uas">Nilai UAS</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-calculator"></i>
        </div>
      </div> 
      <input id="nilai_uas" name="nilai_uas" type="number" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="nilai_tugas">Nilai Tugas</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-calculator"></i>
        </div>
      </div> 
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas/Praktikum Mahasiswa" type="number" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>