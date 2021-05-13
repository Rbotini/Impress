<?php
 
 Class Notificacao{

   

   public function alerta($type, $title,$msg){
    global $pdo;
       echo "<script type ='text/javascript'>
        Swal.fire({
        type: '$type',
        title: '$title',
        text: '$msg',
        showConfirmButton: false,
        timer: 1500
      });
       
       </script>";
       
       
   }
   
 }
 

 




