<?php
  include("../scripts/db_connection.php"); 
  
  

  
  if(isset($_POST["slide_id"])) {

    $judul = mysqli_real_escape_string($conn, $_POST["judul"]); 
    $isi1 = mysqli_real_escape_string($conn, $_POST["isi1"]); 
    $isi2 = mysqli_real_escape_string($conn, $_POST["isi2"]); 
    $isi3 = mysqli_real_escape_string($conn, $_POST["isi3"]); 
    $isi4 = mysqli_real_escape_string($conn, $_POST["isi4"]);
   
    echo $judul;
    if($_POST["checkBox"] == '1') {
      echo "1";
    } else {
      echo "0";
    }
    
    //if( empty($_POST["checkBox"]) ) { echo "Checkbox was left unchecked."; }
    //  else { echo "Checkbox was checked."; }



    
  
    
    
    
          /* 
            if($_POST["slide_id"] != '') {
                           
              if(isset($_POST["checkBox"])) {

                //--Ganti foto jika ada perubahan
                $foto = $_FILES['foto']['name'];
                $size   = $_FILES['foto']['size'];
                $location = "../assets/images/".$foto;
                $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                $valid_extensions = array("jpg","jpeg","png");

                if(in_array(strtolower($imageFileType),$valid_extensions) ) {     
                  if ($size < 1024000) {
                    if(move_uploaded_file($_FILES['foto']['tmp_name'],$location)) {

                      $sql = "UPDATE slides SET judul = '$judul',";
                      $sql.= "isi1 = '$isi1',isi2 = '$isi2',";
                      $sql.= "isi3 = '$isi3',isi4 = '$isi4',";
                      $sql.= "foto = '$foto'";
                      $sql.= "WHERE slide_id = '".$_POST['slide_id']."'";
                    } 

                  } else {
                    echo "<script>alert('Ukuran file harus di bawah 1 MB.');</script>";
                  }
                } else {
                  echo "<script>alert('File yang akan diupload harus dalam format JPG, JPEG & PNG.');</script>";
                }

                
                
              } else {              
                
                //--Abaikan field foto jika tidak ada perubahan foto 
                $sql = "UPDATE slides SET judul = '$judul',";
                $sql.= "isi1 = '$isi1',isi2 = '$isi2',";
                $sql.= "isi3 = '$isi3',isi4 = '$isi4'";
                $sql.= "WHERE slide_id = '".$_POST['slide_id']."'";

              }  
               
            } else {
                $foto = $_FILES['foto']['name'];
                $size   = $_FILES['foto']['size'];
                $location = "../assets/images/".$foto;
                $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                $valid_extensions = array("jpg","jpeg","png");

                if(in_array(strtolower($imageFileType),$valid_extensions) ) {     
                  if ($size < 1024000) {
                    if(move_uploaded_file($_FILES['foto']['tmp_name'],$location)) {
                      
                      $sql = "INSERT INTO slides (judul,isi1,isi2,isi3,isi4,foto)";
                      $sql.= "VALUES ('$judul','$isi1','$isi2','$isi3','$isi4','$foto')";
                    } 

                  } else {
                    echo "<script>alert('Ukuran file harus di bawah 1 MB.');</script>";
                  }
                } else {
                  echo "<script>alert('File yang akan diupload harus dalam format JPG, JPEG & PNG.');</script>";
                }
            }

            //--Query penyimpanan data ke database--//
            if ($conn->query($sql) === TRUE) {
              echo "<script>alert('Data berhasil disimpan.');</script>";                   
            } else {
              echo "<script>alert('Terjadi kegagalan dalam penyimpanan data : " . $conn->error . ". Cek koneksi database.)";
            }
          
          */
  }

  //--Load Table--//
  include('view_slides.php');    

?>