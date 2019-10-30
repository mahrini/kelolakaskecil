<?php
	require_once('config.php');

	class loginORM extends Model {
		public static $_table = 'login';

		public function transaksi() {
			return $this->has_many('transaksiORM');
		}
		public function permintaan(){
			return $this->has_many('permintaanORM');
		}
	}
	class transaksiORM extends Model {
		public static $_table = 'transaksi';

		public function login(){
			return $this->belongs_to('loginORM');
		}
	}
	class permintaanORM extends Model {
		public static $_table = 'permintaan';

		public function bukti(){
			return $this->has_many('buktiORM');
		}
		public function login(){
			return $this->belongs_to('loginORM');
		}
	}
	class buktiORM extends Model{
		public static $_table = 'bukti';

		public function permintaan(){
			return $this->belongs_to('permintaanORM');
		}
	}
?>