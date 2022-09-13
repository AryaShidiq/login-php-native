<?php

$koneksi = mysqli_connect("localhost","root","","loginphpnative");

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    
    $cekrole = mysqli_query($koneksi,"select * from user where username ='$username' and password ='$password' ");
    $hitung = mysqli_num_rows($cekrole);
  
    if ($hitung>0) {
      // jika data ditemukan
       $ambildatarole = mysqli_fetch_array($cekrole);
       $role = $ambildatarole['role'];
  
      if ($role=='admin') {
          // if admin
          $_SESSION['log'] = 'Logged';
          $_SESSION['role'] = 'Admin';
          header('location:admin');
      }else{
          // if non admin
          $_SESSION['log'] = 'Logged';
          $_SESSION['role'] = 'user';
          header('location:user');
      }
  
    }else{
      // kalau tidak ditemukan
      echo 'Data tidak ditemukan';
  
    }
  
  };

//   tambah buku

  if (isset($_POST ['tambahbuku'])) {
     $judulbuku = $_POST['judul'];
     $desc = $_POST['deskripsi'];
     $harga = $_POST['harga'];

    $addnewbuku = mysqli_query($koneksi, "INSERT into buku (judul_buku, deskripsi, harga) values('$judulbuku','$desc','$harga')");

    if ($addnewbuku) {
        
        header('location:../admin');

    }else{
        header('location:../admin');
    }

    }

?>