<?php

//agt_insertagt_v1.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ksp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
		$Kode_Anggota=$_POST['Kode_Anggota1'];
        $Nama_Anggota=$_POST['Nama_Anggota1'];
		$SW_Per_Bulan=$_POST['SW_Per_Bulan1'];
        $Nomor_HP=$_POST['Nomor_HP1'];
		$Jenis_Kelamin=$_POST['Jenis_Kelamin1'];
		$SKPD=$_POST['SKPD1'];
        $Email=$_POST['Email1'];
		$Alamat=$_POST['Alamat1'];
        $Bendahara_SKPD=$_POST['Bendahara_SKPD1'];
		$NoHP_BendSKPD=$_POST['NoHP_BendSKPD1'];
		$Tempat_Lahir=$_POST['Tempat_Lahir1'];
        $Tanggal_Lahir=$_POST['Tanggal_Lahir1'];
		$Cara_Bayar=$_POST['Cara_Bayar1'];
	
	$sql = "INSERT INTO anggota(`Kode_Anggota`, `Nama_Anggota`, `SW_Per_Bulan`, `Nomor_HP`, `Jenis_Kelamin`, `SKPD`, `Email`,
	`Alamat`, `Bendahara_SKPD`, `NoHP_BendSKPD`, `Tempat_Lahir`, `Tanggal_Lahir`, `Cara_Bayar`) VALUES ('$Kode_Anggota', 
	'$Nama_Anggota','$SW_Per_Bulan', '$Nomor_HP', '$Jenis_Kelamin', '$SKPD', '$Email', '$Alamat', '$Bendahara_SKPD', '$NoHP_BendSKPD', 
	'$Tempat_Lahir','$Tanggal_Lahir', '$Cara_Bayar')";
	

    if (mysqli_query($conn, $sql)) {
        echo $Nama_Anggota." added to table successfully";
    } else {
        echo "Error: ". mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
