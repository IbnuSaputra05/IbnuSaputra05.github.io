<html>
<link rel="stylesheet" href="css/stylee.css">
<title>test</title>

<style>
    body {
        font-family: calibri;
    }

    input[type=text],
    [type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #03A9F4;
        outline: none;
    }

    .kotak {
        width: 400px;
        height: 420px;
        background: white;
        /*meletakkan form ke tengah*/
        margin: 80px auto;
        padding: 30px 20px;
    }

    select {
        width: 100%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
        outline: none;
    }
</style>

<body class="body" align="center">
    <form action="" method="post">
        <div class="kotak">

            <p align="center">
                <h2>DAFTAR</h2>
            </p>

            <label for="name"><b>Name</b></label>
            <input type="text" name="Name" placeholder="Nama Lengkap" />

            <label for="email"><b>Email</b></label>
            <input type="email" name="Email" placeholder="Silakan Isi Email Anda">

            <label for="gender" class="tulisan"><b>Gender</b></label>
            <div class="radio">
                <input type="radio" name="Gender" value="Male">Male
                <input type="radio" name="Gender" value="Female">Female
            </div>

            <label for="city"><b>City</b></label><br>
            <select name="City">
                <option value="Solo">Solo</option>
                <option value="Karanganyar">Karanganyar</option>
                <option value="Sukoharjo">Sukoharjo</option>
                <option value="Sragen">Sragen</option>
                <option value="Wonogiri">Wonogiri</option>

            </select><label for="status"><b>Status</b></label><br>
            <input type="checkbox" name="Status" value="Pelajar">Pelajar
            <input type="checkbox" name="Status" value="Kerja">Kerja
            <input type="checkbox" name="Status" value="Menikah">Menikah</th><br>

            <button type="submit" value="Daftar" name="Daftar" class="tombol">Daftar </button>
            <br><a href="tabel.php">Tabel</a>
        </div>
    </form>
</body>

<?php

include("koneksi.php");

if (isset($_POST['Daftar'])) {

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $City = $_POST['City'];
    $Status = $_POST['Status'];

    $sql = "INSERT INTO tb_test
        (Name, Email, Gender, City, Status) VALUES 
        ('$Name','$Email','$Gender','$City','$Status')";
    $query = mysqli_query($con, $sql);
} else {
    die("Akses Dilarang....");
}
?>

</html>