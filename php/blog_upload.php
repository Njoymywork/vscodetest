<?php 

$host = "localhost"; #localhost
$user = "root"; #username of phpmyadmin
$pw = "";  #password of phpmyadmin
$db = "blog";  #database name
 


$conn = mysqli_connect($host,$user,$pw,$db);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(10000,100000)."-".$_FILES["file"]["name"];
     $pname2 = rand(10000,100000)."-".$_FILES["file2"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    $tname2 = $_FILES["file2"]["tmp_name"];
   
     #upload directory path
$uploads_dir = '../blog/';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    move_uploaded_file($tname2, $uploads_dir.'/'.$pname2);
 
    #sql query to insert into database
    $sql = "INSERT into blog(meno,img,pdf) VALUES('$title','$pname','$pname2')";
    
 
    if(mysqli_query($conn,$sql)){
 
    echo "Údaje boli úspešne nahrané";
    }
    else{
        echo "Error";
    }
}
 
 
?>