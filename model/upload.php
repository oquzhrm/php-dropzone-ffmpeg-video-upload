<?php
$ds = DIRECTORY_SEPARATOR; // ds değişkeni \ anlamnına gelmektedir.
$storeFolder = 'video'; // yükleyeceğimiz dosya konumunu yazıyoruz.
date_default_timezone_set('Europe/Istanbul');
$date = date('dmYHis'); // yükleme yapılacak tarihi gün ay yıl saat dakika saniye olarak alıyoruz.
if (!empty($_FILES)) { // böyle bir dosya varmı sorgusu.
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname(__DIR__) . $ds . $storeFolder . $ds; // buranın çıktısı ise şöyledir C:\AppServ\www\upload\video\ 
    $targetFile =  $targetPath .$_FILES['file']['name']; // dosyanın adı ve uzantısını burda belirtiyoruz.
    move_uploaded_file($tempFile, $targetFile);
    $ffmpeg  = "C:/ffmpeg/bin/ffmpeg"; // ffmpeg dosya konumu yazıyoruz...!!!

    $bit1080p = "5000k"; // ilk yüklemeyi yapıyoruz 1080p olarak.
    $targetFile1 =  $targetPath . $date . "_1080p" . ".mp4"; // 1080p çıktısının dosya yolu adı ve uzantısı.

    $bit720p = "2500k"; // ilk yüklemeyi yapıyoruz 720p olarak.
    $targetFile2 =  $targetPath . $date . "_720p" . ".mp4";// 720p çıktısının dosya yolu adı ve uzantısı.

    $bit480p = "1200k"; // ilk yüklemeyi yapıyoruz 480p olarak.
    $targetFile3 =  $targetPath . $date . "_480p" . ".mp4";// 480p çıktısının dosya yolu adı ve uzantısı.

    $bit360p = "700k"; // ilk yüklemeyi yapıyoruz 360p olarak.
    $targetFile4 =  $targetPath . $date . "_360p" . ".mp4";// 360p çıktısının dosya yolu adı ve uzantısı.

    $bit240p = "350k"; // ilk yüklemeyi yapıyoruz 240p olarak.
    $targetFile5 =  $targetPath . $date . "_240p" . ".mp4";// 240p çıktısının dosya yolu adı ve uzantısı.

    $command = "$ffmpeg -i $targetFile -b:v $bit1080p -bufsize $bit1080p $targetFile1 & $ffmpeg -i $targetFile -b:v $bit720p -bufsize $bit720p $targetFile2 & $ffmpeg -i $targetFile -b:v $bit480p -bufsize $bit480p $targetFile3 & $ffmpeg -i $targetFile -b:v $bit360p -bufsize $bit360p $targetFile4 & $ffmpeg -i $targetFile -b:v $bit240p -bufsize $bit240p $targetFile5"; // buda cmd ye yazılacak kod.
    system($command); // burada ise çalıştırıyoruz.
}
?>