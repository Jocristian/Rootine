<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class ProdukController extends Controller
{
    public function uploadproduk(){
        return view('produk');
    }
    public function store(Request $request)
    {
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
    }
}

// <?php
 
// namespace App\Http\Controllers;
 
// use Illuminate\Http\Request;
 
// class UploadController extends Controller
// {
// 	public function upload(){
// 		return view('upload');
// 	}
 
// 	public function proses_upload(Request $request){
// 		$this->validate($request, [
// 			'file' => 'required',
// 			'keterangan' => 'required',
// 		]);
 
// 		// menyimpan data file yang diupload ke variabel $file
// 		$file = $request->file('file');
 
//       	        // nama file
// 		echo 'File Name: '.$file->getClientOriginalName();
// 		echo '<br>';
 
//       	        // ekstensi file
// 		echo 'File Extension: '.$file->getClientOriginalExtension();
// 		echo '<br>';
 
//       	        // real path
// 		echo 'File Real Path: '.$file->getRealPath();
// 		echo '<br>';
 
//       	        // ukuran file
// 		echo 'File Size: '.$file->getSize();
// 		echo '<br>';
 
//       	        // tipe mime
// 		echo 'File Mime Type: '.$file->getMimeType();
 
//       	        // isi dengan nama folder tempat kemana file diupload
// 		$tujuan_upload = 'data_file';
 
//                 // upload file
// 		$file->move($tujuan_upload,$file->getClientOriginalName());
// 	}
// }