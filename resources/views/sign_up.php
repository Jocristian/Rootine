<?php 
    session_start();

    
    $id = $_GET['id'];
    $email = $_GET['email'];
    $fullname = $_GET['fullname'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    
    if (empty($id)){
        //insert
        $url = 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/postUserRootine';
        $customrequest = 'POST';
    }
    else{

    }
    $cUrl = curl_init();

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $customrequest,
        CURLOPT_POSTFIELDS => http_build_query(array(
            'id' => $id,
            'email' => $email,
            'fullname' => $fullname,
            'username' => $username,
            'password' => $password
        ))
    );

    curl_setopt_array($cUrl,$options);

    $response = curl_exec($cUrl);

    curl_close($cUrl);

    header('Location: login.php?login=true');
?>