<?php

include('src/abeautifulsite/SimpleImage.php');

class appShot {

	public function runAppShot() {

		// Image Manipulation
		$this->manipulateImage();

		// Zip Images
		$this->generateZip();

		// Email download link
		$this->emailUser();

	}

	private function manipulateImage() {

		global $randInt; 
		$randInt = rand(1000000000, 9999999999);

		mkdir("appshots/$randInt");
		//mkdir("appshots/$randInt/3.5");
		//mkdir("appshots/$randInt/4.0");
		//mkdir("appshots/$randInt/4.7");
		//mkdir("appshots/$randInt/12.9-2nd");
		//mkdir("appshots/$randInt/5.8");
		mkdir("appshots/$randInt/iconx");

		$totalCount = count($_FILES['file']['name']);
		$imageCount = 0;

		$imageCheck = $_FILES['file']['name'][0];

			while ($imageCount<$totalCount) {

				$image_name = $_FILES['file']['name'][$imageCount];
				$image_type = $_FILES['file']['type'][$imageCount];
				$image_size = $_FILES['file']['size'][$imageCount];
				$image_tmp_name = $_FILES['file']['tmp_name'][$imageCount];

				move_uploaded_file($image_tmp_name, "appshots/$randInt/upload_$image_name");

				// 3.5 inch
				
			//	$img35 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
			//	$img35->resize(756, 1338);
			//	$img35->save("appshots/$randInt/3.5/$imageCount-3.5.jpg", 90);
				
			//
			//	$img35 = new abeautifulsite\SimpleImage('images/3.5.png');
			//	$img36 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
			//	$img36->resize(756, 1338);
			//
			//	$img35->overlay($img36, 'center', 1, 0, 0);
			//	$img35->resize(640, 960);
			//	$img35->save("appshots/$randInt/3.5/$imageCount-3.5.jpg", 90);

				// 4.0 inch

			//	$img40 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
			//	$img40->resize(640, 1136);
			//	$img40->save("appshots/$randInt/4.0/$imageCount-4.0.jpg", 90);

				// 4.7 inch

			//	$img47 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
			//	$img47->resize(750, 1334);
			//	$img47->save("appshots/$randInt/4.7/$imageCount-4.7.jpg", 90);

				// Icon-App-20x20@2x.png

				$img1 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img1->resize(40, 40);
				$img1->save("appshots/$randInt/iconx/Icon-App-20x20@2x.png", 90);
            
                // Icon-App-20x20@3x.png

				$img2 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img2->resize(60, 60);
				$img2->save("appshots/$randInt/iconx/Icon-App-20x20@3x.png", 90);
            
                // Icon-App-29x29@1x.png
                 
				$img3 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img3->resize(29, 29);
				$img3->save("appshots/$randInt/iconx/Icon-App-29x29@1x.png", 90);
            
               
                // Icon-App-29x29@2x.png
                 
				$img4 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img4->resize(58, 58);
				$img4->save("appshots/$randInt/iconx/Icon-App-29x29@2x.png", 90);
            
               
                // Icon-App-29x29@3x.png
                 
				$img5 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img5->resize(87, 87);
				$img5->save("appshots/$randInt/iconx/Icon-App-29x29@3x.png", 90);
            
               
                // Icon-App-40x40@2x.png
                 
				$img6 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img6->resize(80, 80);
				$img6->save("appshots/$randInt/iconx/Icon-App-40x40@2x.png", 90);
            
               
                // Icon-App-40x40@3x.png
                 
				$img7 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img7->resize(120, 120);
				$img7->save("appshots/$randInt/iconx/Icon-App-40x40@3x.png", 90);
            
               
                // Icon-App-60x60@2x.png
                 
				$img8 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img8->resize(120, 120);
				$img8->save("appshots/$randInt/iconx/Icon-App-60x60@2x.png", 90);
            
               
                // Icon-App-60x60@3x.png
                 
				$img9 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img9->resize(180, 180);
				$img9->save("appshots/$randInt/iconx/Icon-App-60x60@3x.png", 90);
            
               
                // Icon-App-20x20@1x.png
                 
				$img10 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img10->resize(20, 20);
				$img10->save("appshots/$randInt/iconx/Icon-App-20x20@1x.png", 90);
            
               
                // Icon-App-40x40@1x.png
                 
				$img11 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img11->resize(40, 40);
				$img11->save("appshots/$randInt/iconx/Icon-App-40x40@1x.png", 90);
            
               
                // Icon-App-76x76@1x.png
                 
				$img12 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img12->resize(76, 76);
				$img12->save("appshots/$randInt/iconx/Icon-App-76x76@1x.png", 90);
            
               
                // Icon-App-76x76@2x.png
                 
				$img13 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img13->resize(40, 40);
				$img13->save("appshots/$randInt/iconx/Icon-App-76x76@2x.png", 90);
            
               
                // Icon-App-83.5x83.5@2x.png
                 
				$img14 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img14->resize(167, 167);
				$img14->save("appshots/$randInt/iconx/Icon-App-83.5x83.5@2x.png", 90);
            
               
                // ItunesArtwork@2x.png
                 
				$img15 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
				$img15->resize(1024, 1024);
				$img15->save("appshots/$randInt/iconx/ItunesArtwork@2x.png", 90);
            
               
                
               
				
				// 5.8 inch

			//	$img58 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
			//	$img58->resize(1125, 2436);
			//	$img58->save("appshots/$randInt/5.8/$imageCount-5.8.jpg", 90);
				
				
			//	// 12.9-3nd inch
			//
			//	$img1293 = new abeautifulsite\SimpleImage("appshots/$randInt/upload_$image_name");
			//	$img1293->resize(1242, 2688);
			//	$img1293->save("appshots/$randInt/6.5/$imageCount-6.5.jpg", 90);

			//	imagedestroy($img35);
			//	imagedestroy($img36);
			//	imagedestroy($img40);
			//	imagedestroy($img47);
			//	imagedestroy($img55);
				//imagedestroy($img58);
				imagedestroy($img1);
                imagedestroy($img2);
                imagedestroy($img3);
                imagedestroy($img4);
                imagedestroy($img5);
                imagedestroy($img6);
                imagedestroy($img7);
                imagedestroy($img8);
                imagedestroy($img9);
                imagedestroy($img10);
                imagedestroy($img11);
                imagedestroy($img12);
                imagedestroy($img13);
                imagedestroy($img14);
                imagedestroy($img15);

				$imageCount++;

			}	

	}

	private function generateZip() {

		global $randInt;

		$totalCount = count($_FILES['file']['name']);
		echo $totalCount;
		$imageCount = 0;

		$imageFiles = array();

		while ($imageCount<$totalCount) {

		//	array_push($imageFiles, "appshots/$randInt/3.5/$imageCount-3.5.jpg");
		//	array_push($imageFiles, "appshots/$randInt/4.0/$imageCount-4.0.jpg");
		//	array_push($imageFiles, "appshots/$randInt/4.7/$imageCount-4.7.jpg");
		//	array_push($imageFiles, "appshots/$randInt/5.5/$imageCount-5.5.jpg");
		//	array_push($imageFiles, "appshots/$randInt/5.8/$imageCount-5.8.jpg");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-20x20@3x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-29x29@1x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-29x29@2x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-29x29@3x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-40x40@2x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-40x40@3x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-60x60@2x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-60x60@3x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-20x20@1x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-40x40@1x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-76x76@1x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-76x76@2x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/Icon-App-83.5x83.5@2x.png");
            array_push($imageFiles, "appshots/$randInt/iconx/ItunesArtwork@2x.png");
     
        

			$imageCount++;

		}
		
		$zip = new ZipArchive();
		$zip->open("appshots/AppIconx_".$randInt.".zip", ZipArchive::CREATE);

		foreach($imageFiles as $file) {

			$zip->addFile($file);

		}

		$zip->close();

	}

	private function emailUser() {
        $host = $_SERVER['HTTP_HOST'];
		global $randInt;

		$emailTo = $_POST["email"];

		$subject = "AppShots Iconx Generated";

		$body = "https://$host/app/local/modules/AppstoreScreenshoot/resources/var/web/modules/appstorescreenshoot/iconx/appshots/AppIconx_".$randInt.".zip";

		$headers = "From: info@$host";

		if(mail($emailTo, $subject, $body, $headers)){
		}else {
			echo "Failure";
		}		

	}

}

?>