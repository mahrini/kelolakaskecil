</body>
<script type="text/javascript" src="../bootstrap/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../mask.js"></script>
<script type="text/javascript">
	$('#jenis').on('change', function(){
		var jenis = $(this).val();
		if(jenis == 'penerimaan')
		{
			document.getElementById('noBuk').value='<?= nobukti_penerimaan();?>';
		} else {
			document.getElementById('noBuk').value='<?= nobukti_pengeluaran();?>';
		}
	})
</script>