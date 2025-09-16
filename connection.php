<?php

$koneksi = mysqli_connect("localhost", "root", "","mobile_legend");

if (mysqli_connect_errno()){
	echo "koneksi database gagal ".mysqli_connect_error();
}

function query($query){
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result)){
  	$rows[] = $row;
  }
	return $rows;
}

function upload(){
	$namefile = $_FILES['head_icon']['name'];
	$sizefile = $_FILES['head_icon']['size'];
	$error = $_FILES['head_icon']['error'];
	$tmpname = $_FILES['head_icon']['tmp_name'];


	if( $error === 4 ) {
		echo "<script>
				alert('Pilih gambar yang ingin anda input !');
			</script>";
		return false;
	}

	$ekstensivalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $namefile);
	$ekstensigambar = strtolower(end($ekstensigambar));

	if( !in_array($ekstensigambar, $ekstensivalid)) {
		echo "<script>
				alert('Pilih file gambar !');
			</script>";
		return false;
	}

	if ( !in_array($ekstensigambar, $ekstensivalid)) {
		echo "<script>
				alert('Hanya boleh upload file gambar !');
			</script>";
		return false;
	}

	if ( $sizefile > 10000000 ) {
		echo "<script>
				alert('Size gambar terlalu besar !');
			</script>";
		return false;
	}

	$newfilename = uniqid();
	$newfilename = '.';
	$newfilename = $ekstensigambar;

	move_uploaded_file($tmpname, 'img/' . $namefilename);
	return $namefilename;

}

	
function fighter($upload){
	global $koneksi;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
	$query = "INSERT INTO fighter
						VALUES
					('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
					
	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
	}
	
function tank($upload){
	global $koneksi;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
	$query = "INSERT INTO tank
						VALUES
					('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
					
	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
	}
	
function marksman($upload){
	global $koneksi;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
	$query = "INSERT INTO marksman
						VALUES
					('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
					
	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
	}
	
function mage($upload){
	global $koneksi;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
	$query = "INSERT INTO mage
						VALUES
					('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
					
	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
	}
	
function support($upload){
	global $koneksi;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
	$query = "INSERT INTO support
						VALUES
					('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
					
	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
	}
	
function assasin($upload){
	global $koneksi;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
	$query = "INSERT INTO assasin
						VALUES
					('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
					
	mysqli_query($koneksi, $query);
	
	return mysqli_affected_rows($koneksi);
	}
	
	
	
?>
