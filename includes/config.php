<?php
	// Penggunaan base_url pada php native
	function base_url($url = NULL){
		if ($url != NULL)
		{
			$baseurl = 'http://localhost/pkl2/'.$url;
		}
		else	
		{
			$baseurl = 'http://localhost/pkl2/';
		}
		
		return $baseurl;
	}

	function tgl_indo($tanggal, $cetak_hari = false)
	{
		$hari = array ( 1 =>    'Senin',
					'Selasa',
					'Rabu',
					'Kamis',
					'Jumat',
					'Sabtu',
					'Minggu'
				);
				
		$bulan = array (1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
		$split 	  = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		
		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}
	
	class database { // membuat koneksi ke database
		var $servername = "localhost";
		var $database = "db_pkl";
		var $username = "root";
		var $password = "";
		public $koneksi = "";

		function __construct()
		{
			$this->koneksi = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
			// mengecek koneksi
			if (mysqli_connect_errno()){
				echo "Koneksi database gagal : " . mysqli_connect_error();
			}
			//mysqli_close($conn);
		}   
	}

	function auth() { // validasi login
		$db =  new database();
		$conn = $db->koneksi;
		if (isset($_POST['login'])){
			$ambil = $conn->query("SELECT * FROM user WHERE username='$_POST[username]' AND password = '$_POST[password]'");
			$cocok = $ambil->num_rows;		
			
			if($cocok==1){
				$_SESSION['user']=$ambil->fetch_assoc();
				if ($_SESSION['user']['status']=='admin'){
					echo "<meta http-equiv='refresh' content='0;url=admin/'>";
				}
				elseif ($_SESSION['user']['status']=='user'){
					echo "<meta http-equiv='refresh' content='0;url=user/'>";
				}
				else {
					echo "<meta http-equiv='refresh' content='0;url=pengemudi/'>";
				}
			}
			else {
				echo "<script>toastr.error('Maaf Masuk Gagal, Nama Pengguna atau Kata Sandi Salah');</script>";
				// echo "<meta http-equive='refresh' content='1;url=login.php'>";
			}
		}
	}

	// untuk admin , semua pengaturan
	class home { // menampilkan data di index admin
		var $title = "Dashboard";
		var $db = "";
		function tampil_user() { // untuk menampilkan data user
			$db = new database(); // definisikan object dari classnya
            $data = mysqli_query($db->koneksi, "select * from user");
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
			}
			$count = count($hasil);
            return $count;
        }
    }

	class user { // membuat crud pada tabel user
		var $title = "Data User";
		var $db = "";
		function tampil() { // untuk menampilkan data user
			$db = new database(); // definisikan object dari classnya
            $data = mysqli_query($db->koneksi, "select * from user");
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }

        function tambah() {
            
        }

        function edit() {
            
        }

        function hapus() {
            
        }
    }
?>