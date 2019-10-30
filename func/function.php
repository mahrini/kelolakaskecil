<?php
require_once '../model.php';

function showImage($image) {
    return 'data:image/jpeg;base64,'.base64_encode($image);
}
function nobukti_penerimaan()
{
	 $list = transaksiORM::where('jenis', 'penerimaan')->find_many();
	 foreach($list as $data) {
	 	$a = $data->no_bukti;
	 	list($kode, $no) = explode('-', $a);
	 }
	 $r = ['M-00', $no+1];
	 $r = join('', $r);
	 return $r;
}
function nobukti_pengeluaran()
{
	 $list = transaksiORM::where('jenis', 'pengeluaran')->find_many();
	 foreach($list as $data) {
	 	$a = $data->no_bukti;
	 	list($kode, $no) = explode('-', $a);
	 }
	 $r = ['K-00', $no+1];
	 $r = join('', $r);
	 return $r;
}
function rupiah($angka)
{
	return 'Rp.'. number_format($angka,0,',','.');
}

?>