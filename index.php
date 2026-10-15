<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA LOOP</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<main calass = "container">
    <section class ="card">
        <h4>FORM DATA PERULANGAN</h4>

            <form action="submit.php" method="POST">
        
               <p>
                    <div class = "form-row">
                        <label>NAMA :</label>
                        <input type="text" name="nama" placeholder="di isi nama..." required />
                    </div>
               </p>

               <p>
                    <div class ="form-row">
                        <label>JUMLAH LOOP :</label>
                        <input type="number" name="jumlah_loop" placeholder="di isi jumlah loop"  required />
                    </div>
               </p>
              
                <p>
                    <button type ="submit"> SUBMIT </button>
                </p>
    
    </form>
    </section>






</body>
</html>