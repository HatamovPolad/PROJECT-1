<?php
if(isset($_POST["password"],$_POST["email"])&&
$_POST["password"]=="b231210559"&&
$_POST["email"]=="hatamovpolad@gmail.com"
){
    
    echo '<script>alert("HOS GELDINIZ B231210560 kullanicisi")</script>';
    echo '<script>window.location.href = "PROJE-1.html";</script>';
}
else{
 echo "yanlish sifre veya email lutfen tekrar deneyiniz...";
 echo '<a href="giris.html">Geri don</a>';
 echo '<style>a:hover{color:red }</style>';
}


?>