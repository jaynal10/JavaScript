<?php

$conn = mysqli_connect("localhost", "root", "","mobile_legend");

if (mysqli_connect_errno()){
	echo "koneksi database gagal ".mysqli_connect_error();
}


function tank($upload){
	global $conn;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
$sql = "INSERT INTO all_role VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
$sql .= "INSERT INTO tank VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

function fighter($upload){
	global $conn;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
$sql = "INSERT INTO all_role VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
$sql .= "INSERT INTO fighter VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

function assasin($upload){
	global $conn;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
$sql = "INSERT INTO all_role VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
$sql .= "INSERT INTO assasin VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

function mage($upload){
	global $conn;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
$sql = "INSERT INTO all_role VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
$sql .= "INSERT INTO mage VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

function marksman($upload){
	global $conn;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
$sql = "INSERT INTO all_role VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
$sql .= "INSERT INTO marksman VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

function support($upload){
	global $conn;
	
	$nama_hero = htmlspecialchars($upload["nama_hero"]);
	$first_skill = htmlspecialchars($upload["first_skill"]);
	$second_skill = htmlspecialchars($upload["second_skill"]);
	$ultimate_skill = htmlspecialchars($upload["ultimate_skill"]);
	$head_icon = htmlspecialchars($upload["head_icon"]);
	
$sql = "INSERT INTO all_role VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon')";
$sql .= "INSERT INTO support VALUES ('', '$nama_hero', '$first_skill', '$second_skill', '$ultimate_skill', '$head_icon');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
