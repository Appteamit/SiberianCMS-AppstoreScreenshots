<?php

echo ini_get("memory_limit")."\n";
ini_set("memory_limit","2048M");
echo ini_get("memory_limit")."\n";

echo ini_get("max_execution_time")."\n";
ini_set('max_execution_time', '300'); // Extend execution time to a minute
echo ini_get("max_execution_time")."\n";


include('src/abeautifulsite/SimpleImage.php');

if(isset($_POST['upload'])) {

	if(count($_FILES['image']['name']) > 1) {

		$totalCount = count($_FILES['image']['name']);

		$imageCount = 0;

		while ($imageCount<$totalCount) {

			$image_name = $_FILES['image']['name'][$imageCount];
			$image_type = $_FILES['image']['type'][$imageCount];
			$image_size = $_FILES['image']['size'][$imageCount];
			$image_tmp_name = $_FILES['image']['tmp_name'][$imageCount];

			move_uploaded_file($image_tmp_name, "uploads/$image_name");
			echo "Image uploaded";

			// 3.5 inch

			echo 'start <br>';
			$img35 = new abeautifulsite\SimpleImage('images/3.5.png');
			$img36 = new abeautifulsite\SimpleImage("uploads/$image_name");

			$img36->resize(750, 1334);

			echo 'created <br>';
			$img35->overlay($img36, 'center', 1, 0, 0);
			echo 'overlay 1 <br>';
			$img35->resize(640, 960);
			$img35->save("photos/".$image_name."3-5.png", 100);

			// 4.0 inch

			echo 'start <br>';
			$img41 = new abeautifulsite\SimpleImage("uploads/$image_name");
			$img41->resize(640, 1136);
			$img41->save("photos/".$image_name."4-0.png", 100);

			// 4.7 inch

			echo 'start <br>';
			$img48 = new abeautifulsite\SimpleImage("uploads/$image_name");
			$img48->resize(750, 1334);
			$img48->save("photos/".$image_name."4-7.png", 100);

			// 5.5 inch

			echo 'start <br>';
			$img56 = new abeautifulsite\SimpleImage("uploads/$image_name");
			$img56->resize(1242, 2208);
			$img56->save("photos/".$image_name."5-5.png", 100);

			$imageCount++;
			
		}

	}else if(count($_FILES['image']['name']) == 0) {

		echo "<script>alert('Please upload a screenshot!')</script>";

	}else if(count($_FILES['image']['name']) > 5) {

		echo "<script>alert('Maximum 5 uploads!')</script>";

	}

}

?>

<html>
<head>

	<title>AppShotGenerator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

	<style>


	</style>


</head>

<body>

	<form method="post" enctype="multipart/form-data">

		Upload Image<input type="file" name="image[]" id="images" multiple="">
		<input type="submit" name="upload" value="Upload">

	</form>

</body>

</html>