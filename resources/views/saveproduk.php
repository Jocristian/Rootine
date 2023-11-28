<?php 
$id = $_POST['id'];
    $nama = $_POST['nama'];
    $Harga = $_POST['Harga'];
    $stock = $_POST['stock'];
    $PID = $_POST['PID'];
    $Desc = $_POST['Desc'];
    $mass = $_POST['mass'];
    $foto = $_FILES['foto'];

    if (move_uploaded_file($_FILES['foto']['tmp_name'], 'images/produk/'.$_FILES['foto']['name'])) {
        // echo 'Berhasil Upload';

        $cUrl = curl_init();

        $options = array(
            CURLOPT_URL => 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/tambahproduct',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query(array(
                'id' => $id,
                'nama' => $nama,
                'Harga' => $Harga,
                'stock' => $stock,
                'PID' => $PID,
                'Desc' => $Desc,
                'mass' => $mass,
                'foto' => $_FILES['foto']['name']
            ))
        );

        curl_setopt_array($cUrl, $options);

        $response = curl_exec($cUrl);

        curl_close($cUrl);

        // var_dump($response);
    } else {
        // echo 'Gagal Upload';
    }

    return redirect()->to('/produk')->send();

    
?>