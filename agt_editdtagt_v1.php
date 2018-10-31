
<!--agt_editdtagt_v1.php-->
<!--connect dan panggil db satu-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
  <style>
      
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	/*header
	page-header {
    color: #ff0000;
	background-color: #66ff33;
	
	}*/
	/*text
	
	body {
		
		color : green ;
	}
	
	input[type="text"] {
    color:red;

	}
		
	*/
	
  </style>
</head>

<!--connect dan panggil db satu-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ksp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

		$KA=$_POST['Kode_Anggota'];
		

$sql = "SELECT * FROM anggota WHERE Kode_Anggota = '$KA'";

$result = mysqli_query($conn,$sql);


$row1=mysqli_fetch_assoc($result);



mysqli_close($conn);
}
	
?>


<body>
<!--clear chace-->

	
<div class="container">
  <div class="page-header text-center">
    <h1><b>EDIT DATA ANGGOTA KSP-S2</b></h1>      
  </div>
        
</div>


<div class="container">    
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-success">
        <div class="panel-heading">BIO DATA</div>
        <div class="panel-body">
			<form method="post" action="agt_editdtagtsave_v1.php" action="update.php">
			<div class="form-group">
			  <label for="Kode_Anggota">Kode Anggota :</label>
			  <input type="varchar" class="form-control" id="KodeAgt" placeholder="Ketik Kode Anggota" name="Kode_Anggota"
			  value='<?php echo $row1['Kode_Anggota'];?>'>
			</div>	
			
			<div class="form-group">
			  <label for="Nama_Anggota">Nama :</label>
			  <input type="text" class="form-control" id="nama" placeholder="Ketik Nama" name="Nama_Anggota1" 
			  value='<?php echo $row1['Nama_Anggota'];?>'>
			  <script language="JavaScript" src="js/myscript.js?n=1"></script>
			</div>
			<div class="form-group">
			  <label for="JK">Pilih Jenis Kelamin:</label>
			  <select class="form-control" id="JK" name="Jenis_Kelamin1" type="text">
				<option><?php echo $row1['Jenis_Kelamin'];?></option>
				<option>laki-laki</option>
				<option>Perempuan</option>
			  </select>
			</div>
			
			<div class="form-group">
			  <label for="Tempat_Lahir">Tempat Lahir :</label>
			  <input type="text" class="form-control" id="TL" placeholder="Ketik Tempat Lahir" name="Tempat_Lahir1" 
			  value='<?php echo $row1['Tempat_Lahir'];?>'>
			</div>
			<div class="form-group">
			  <label for="Tanggal_Lahir">Tanggal Lahir :</label>
			  <input type="text" class="form-control" id="Tanggal_Lahir" placeholder="Ketik Tanggal Lahir" name="Tanggal_Lahir1" 
			  value='<?php echo $row1['Tanggal_Lahir'];?>'>
			</div>
			<div class="form-group">
			  <label for="Alamat">Alamat:</label>
			  <input type="text" class="form-control" id="Alamat" placeholder="Ketik Alamat" name="Alamat1" value='<?php echo $row1['Alamat'];?>'>
			</div>
			<div class="form-group">
			  <label for="Nomor_HP">Nomor HP:</label>
			  <input type="text" class="form-control" id="HP" placeholder="Ketik Nomor HP" name="Nomor_HP1" value='<?php echo $row1['Nomor_HP'];?>'>
			</div>
				
			</div>   
      </div>
    </div>
    <div class="col-sm-6"> 
      <div class="panel panel-success">
        <div class="panel-heading">DATA OPD & LAINNYA</div>
        <div class="panel-body">
			<div class="form-group">
		  <label for="SKPD">Nama SKPD:</label>
		  <input type="text" class="form-control" id="SKPD" placeholder="Ketik Nama SKPD" name="SKPD1" value='<?php echo $row1['SKPD'];?>'>
		</div>
		<div class="form-group">
		  <label for="Bendahara_SKPD">Nama Bendahara :</label>
		  <input type="text" class="form-control" id="NamaBend" placeholder="Ketik Nama Bendahara" name="Bendahara_SKPD1" 
		  value='<?php echo $row1['Bendahara_SKPD'];?>'>
		</div>
		<div class="form-group">
		  <label for="NoHP_BendSKPD">Nomor HP Bendahara :</label>
		  <input type="text" class="form-control" id="NHPBend" placeholder="Ketik No HP Bend" name="NoHP_BendSKPD1" 
		  value='<?php echo $row1['NoHP_BendSKPD'];?>'>
		</div>
		<div class="form-group">
		  <label for="SW_Per_Bulan">Jumlah Simpanan Wajib :</label>
		  <input type="number" class="form-control" id="JSW" placeholder="Ketik Jumlah Simpanan Wajib" name="SW_Per_Bulan1" 
		  value='<?php echo $row1['SW_Per_Bulan'];?>'>
		</div>
		<!--<div class="form-group">
		  <label for="Cara_Bayar">Cara Bayar :</label>
		  <input type="text" class="form-control" id="Cara_Bayar" placeholder="Ketik Cara Bayar" name="Cara_Bayar1">
		</div>-->
		
		<div class="form-group">
		  <label for="CB">Cara Bayar:</label>
		  <select class="form-control" id="CB" name="Cara_Bayar1" type="text">
			<option><?php echo $row1['Cara_Bayar'];?></option>
			<option>Tunai</option>
			<option>Potong Gaji</option>
		  </select>
		</div>
		<div class="form-group">
			  <label for="Email">Email:</label>
			  <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email1" value='<?php echo $row1['Email'];?>' >
			</div>
		
		<br><br>
		<!--<button type="submit" class="btn btn-default">Submit</button>-->
		<button type="submit" class="btn btn-success btn-block">Save Perubahan</button>
	  </form>
		</div>
        
      </div>
    </div>
    
  </div>
</div><br>

<br>

<footer class="container-fluid text-center">
  <p>MENOLONG BUKAN MENGGOLONG</p>  
</footer>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="Tanggal_Lahir1"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</body>
</html>
