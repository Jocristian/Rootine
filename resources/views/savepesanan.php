<?php 
$id = $_GET['id'];
    $nama = $_GET['nama'];
    $varian = $_GET['varian'];
    $jumlah = $_GET['jumlah'];
    $username = $_GET['username'];
    $alamat = $_GET['alamat'];
    $date = $_GET['date'];
    $status = $_GET['status'];

    if (empty($id)){
        //insert
        $url = 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/tambahPesanan';
        $customrequest = 'POST';
    }
    else{
        //update
        $url = 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/putPesanan';
        $customrequest = 'PUT';
    }
    
        
    
    $cUrl = curl_init();

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $customrequest,
        CURLOPT_POSTFIELDS => http_build_query(array(
            'id' => $id,
            'nama' => $nama,
            'varian' => $varian,
            'jumlah' => $jumlah,
            'username' => $username,
            'alamat' => $alamat,
            'date' => $date,
            'status' => $status
            
        ))
    );

    curl_setopt_array($cUrl,$options);

    $response = curl_exec    ($cUrl);

    curl_close($cUrl);

    return redirect()->to('/produk')->send();
?>