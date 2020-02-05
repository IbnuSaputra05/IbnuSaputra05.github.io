<?php include("koneksi.php"); ?>

<html>
<style>
    body {
        background-color: white;
        font-family: calibri;
    }

    tr:nth-child(even) {
        background-color: grey
    }

    th,
    td,
    table {
        border: 1px solid #ddd;
        text-align: center;

    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 15px;
    }
</style>

<title>Tabel</title>

<body background="white">
    <header align="center">

        <h1>Tabel Anggota</h1>
        <a href="test.php">Tambah</a>
    </header>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 0;
            $sql = "SELECT * FROM tb_test";
            $query = mysqli_query($con, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                $no++;
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $siswa['Name'] . "</td>";
                echo "<td>" . $siswa['Email'] . "</td>";
                echo "<td>" . $siswa['Gender'] . "</td>";
                echo "<td>" . $siswa['City'] . "</td>";
                echo "<td>" . $siswa['Status'] . "</td>";
                echo "</td>";
                echo "<tr>";
            }
            ?>

        </tbody>
        </center>
    </table>
    <center>

        <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    </center>
</body>

</html>