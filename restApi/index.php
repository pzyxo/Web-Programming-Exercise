<?php

include_once("koneksi.php");
$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);


function get_karyawan($id=""){
	global $koneksi;
	
	if (empty($id)) {
		$query = "SELECT * FROM mahasiswa";
	} else {
		$query = "SELECT * FROM mahasiswa WHERE NIM=$id";
	}
	$respon = array();
	$result = mysqli_query($koneksi, $query);
	$i = 0;
	if ($result){
		$respon['kode'] = 1;
		$respon['status'] = "sukses";
		while ($row=mysqli_fetch_array($result)) {
			$respon['data'][$i]['NIM'] = $row['NIM'];
			$respon['data'][$i]['nama'] = $row['nama'];
			$respon['data'][$i]['angkatan'] = $row['angkatan'];
			$respon['data'][$i]['semester'] = $row['semester'];
			$respon['data'][$i]['IPK'] = $row['IPK'];
			$i++;
		}
	} else {
		$respon['kode'] = 0;
		$respon['status'] = 'gagal';
	
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

function insert_karyawan(){
	global $koneksi;
	$data = json_decode(file_get_contents('php://input'), true);
	$NIM = $data['NIM'];
	$nama= $data['nama'];
	$angkatan = $data['angkatan'];
	$semester = $data['semester'];
	$IPK = $data['IPK'];

	$query = "INSERT INTO mahasiswa (NIM, nama, angkatan, semester, IPK) VALUES ('$NIM', '$nama', '$angkatan', '$semester', '$IPK')";

	if(mysqli_query($koneksi, $query)){
		$respon = [
			'kode' => 1,
			'status' => 'Data Mahasiswa Berhasil Ditambahkan'
		];
	} else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Mahasiswa Gagal Ditambahkan'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);

}

function update_karyawan($id){
	global $koneksi;
	$data = json_decode(file_get_contents('php://input'), true);
	$nama= $data['nama'];
	$angkatan = $data['angkatan'];
	$semester = $data['semester'];
	$IPK = $data['IPK'];

	$query = "UPDATE mahasiswa SET nama = '{$nama}', angkatan = '{$angkatan}', semester = '{$semester}', IPK = '{$IPK}' WHERE mahasiswa.NIM = $id";

	if(mysqli_query($koneksi, $query)){
		$respon = [
			'kode' => 1,
			'status' => 'Data Mahasiswa Berhasil Diupdate'
		];
	} else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Mahasiswa Gagal Diupdate'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);

}

function delete_karyawan($id){
	global $koneksi;

	$query = "DELETE FROM mahasiswa WHERE NIM = $id";

	if(mysqli_query($koneksi, $query)){
		$respon = [
			'kode' => 1,
			'status' => 'Data Mahasiswa Berhasil Dihapus'
		];
	} else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Mahasiswa Gagal Dihapus'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);

}



switch($request){
	case 'GET':
		if(empty($_REQUEST['id'])){
			get_karyawan();
		} else {
			$id = $_REQUEST['id'];
			get_karyawan($id);
		}
		break;
	case 'POST':
		insert_karyawan();
		break;
	case 'PUT':
		$id = $_REQUEST['id'];
		update_karyawan($id);
		break;
	case 'DELETE':
		$id = $_REQUEST['id'];
		delete_karyawan($id);
		break;
	default:
	header("HTTP/1.0 405 Method Tidak Terdaftar");
	break;
}
?>