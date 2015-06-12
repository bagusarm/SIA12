<html>
<head>
<title>uts</title>
<style type = "text/css">
#putih {
color : black;
}
</style>
</head>

<body>
<h1>UTS PRAKTIKUM PEMOGRAMAN WEB</h1>

	<tr><td>Nama   	:Bagus Armawan <br></td></tr>
	<tr><td>Nim    	:12540042<br></td></tr>
	<tr><td>Jurusan :Sistem Informasi A<br></td></tr>
   

<P>

<form action="FUNGSI.php" method="GET">
			
			<table> 
				<tr><td colspan = "2" > <div id = "putih" align = "center"> <b>FORM PENDAFTARAN PERGURUAN TINGGI</b> </div> </td></tr>
				<tr>
				  <td width="160"><b> No KTP : </b>  </td><td width="217"> <input type = "text " name="no_ktp"value=""></td></tr>
				<tr><td><b> Nama Lengkap : </b></td><td> <input type = "text " name="nama" value=""></td></tr>
				<tr><td><b> Asal Sekolah : </b></td><td> <input type = "text " name="asal_sekolah" value=""></td></tr>
				<tr><td><b> Perguruan Tinggi : </b></td><td> <select name="PT">
												<option>UNPAD</option>
												<option>UNSRI</option>
												<option>ITB</option>
												<option>BINUS</option>
												</select></td></tr>
				<tr><td><b> Jurusan : </b></td>
							   <tr>
						           <td></td><td><input type ="checkbox" name="JTS" value="JTS">JTS</td></tr>
							   <tr>
							   <td></td><td><input type ="checkbox" name="JTK" value="JTK">JTK</td></tr>
							   <tr>
							   <td></td><td><input type ="checkbox" name="JTETI" value="JTETI">JTETI</td></tr>
							   <tr>
						           <td></td><td><input type ="checkbox" name="JTM" value="JTM">JTM</td></tr>

				<tr><td><b> Biaya Pendaftaran : </b></td><td> <select name="BP">

												<option>YA</option>
												<option>TIDAK</option>
												</select></td></tr>
				<tr><td><b> Biaya Lab : </b></td><td> <select name="BL">

												<option>YA</option>
												<option>TIDAK</option>
												</select></td></tr>
												
				<tr><td><b> Biaya Almamater : </b></td>
							   <tr>
							   <td></td><td><input type ="Radio" name="biaya_almamater" value="b">
							   Beli</td><tr>
							   <tr>
							   <td></td><td><input type ="Radio" name="biaya_almamater" value="t">
							   Tidak</td></tr>
												
				<tr><td colspan ="2"><div id = "putih" align = "center"><input type="submit" value="Submit" ><input type="submit" value="Reset" ></div></td></tr>
			</table>
				
		</form>
		
</body>
</html>