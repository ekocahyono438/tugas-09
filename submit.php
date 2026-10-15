<?php
$submit = $_SERVER ['REQUEST_METHOD'] === 'POST';

// bikin function
function CetakLoop ($nama_loop, $jumlah_loop){
        $cetak= "";
        for ($i=1; $i <= $jumlah_loop ; $i++) { 
            $cetak .= $i . "  =  "  . $nama_loop . "<br>";
        }
        return $cetak;
}
if ($submit) {
    $nama = ($_POST['nama']);
    $jumlah =($_POST['jumlah_loop']);

    //panggil function
    $hasil = CetakLoop($nama,$jumlah);
    
}else{
    $hasil = "tolong di isi dulu";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil data pengulangan</title>
   <link rel="stylesheet" href="css/submit.css">
</head>
<body>
    <div class = "card">
    <h4>HASIL  DATA PENGULANGAN</h4>
    <?php echo $hasil; ?>
    <br>
    <form action="index.php" method="POST"> <button type ="submit" action = "index.php"> <--kembali</button> </form>
    </div>

    
</body>
</html>