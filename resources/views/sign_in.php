<?php
 session_start();
 
 $cUrl = curl_init();

 $options = array(
     CURLOPT_URL => 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/getPenggunaRootine?username='.$_GET['username'].'&password='.$_GET['password'],
     CURLOPT_CUSTOMREQUEST => 'GET',
     CURLOPT_RETURNTRANSFER => true,
 );

 curl_setopt_array($cUrl, $options);

 $response = curl_exec($cUrl);

 $data = json_decode($response);
 
 curl_close($cUrl);

 if (count($data)){
    //Teregistrasi
    $_SESSION['username'] = $_GET['username'];
 } else{
    //Tidak Teregistrasi
 }

 return redirect()->to('/index')->send();
?>