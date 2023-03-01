<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p.2 - form handling</title>
    <style>
        body {
            background:gray;
        }
        p, h1, h2, h3 , h4, h5, label, span{
            color:black;
        }
    </style>
</head>
<body>
    <h1>Belajar Form Headling 1</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe text -->
        <label for="nama">Mahasiswa Name</label><br>
        <input type="text" name="nama" id=""><br><br>

        <!-- tipe radio  -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" id="" value="laki_laki"> <span>Laki-laki</span>
        <input type="radio" name="jenis_kelamin" id="" value="perempuan"> <span>Perempuan</span><br><br>

        <!-- tipe checkbox  -->
        <label for="">Hobi</label><br>
        <input type="checkbox" name="hobi[]" id="" value="renang"><span>Renang</span><br>    
        <input type="checkbox" name="hobi[]" id="" value="sepak_bola"><span>Sepak Bola</span><br><br>

        <!-- tipe number  -->
        <label for="">Umur</label><br>
        <input type="number" name="umur" id=""><br><br>

        <!-- tipe date  -->
        <label for="">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir" id=""><br><br>

        <!-- tipe select  -->
        <label for="prodi">Prodi</label><br>
        <select name="prodi" id="">
            <option value="teknik_informatika">Teknik Informatika</option><br>
            <option value="teknik_informatika">Sistem Informasi</option><br>
            <option value="teknik_informatika">Bisnis Digital</option>
        </select><br><br>

        <!-- button  -->
        <button type="submit">Simpan ! </button>
        <button type="reset">Reset </button>
    </form>
</body>
</html>