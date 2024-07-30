<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksperimen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        
        <a href="index.html">Home</a> 
        <a href="contact.php">Project</a> 
        <a href="about.html">About me</a>
        <div class="logo">NurFakhri</div>
        
    </nav>

    <header>
    <h1>Eksperiment</h1>
    <p style="text-align: center;">laman untuk eksperimen pembelajaran di bawah</p>
    </header>


    
    
    <main>
    <hr> 
    <br><br>
    <center>
      <h1> TABEL </h1>
   
      
    <table>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Photo</th>
      <?php
      require_once("koneksi.php");

      
      while ($row = mysqli_fetch_array($query))
{
echo '<tr>

     
<td>'.$row['no'].' </td>
<td>'.$row['nama_siswa'].'</td>
<td>'.$row['kelas'].'</td>
<td><img src="image.png" style="width:20px"></td>

</tr>';
}      
        
      ?>
    
      
      </table>

      
      <br>
      <button> <a href="login.html"> > </a></button>
      <blockquote style="font-family: 'Courier New', Courier, monospace;"> Tabel By NurFakhri </blockquote>
      <br> <br> <br>
      
    </main>

  
   
    <footer style="text-align: center; margin-top: auto;">   
    <p> Create By NurFakhri</p>
    </footer>
    
</body>
</html>