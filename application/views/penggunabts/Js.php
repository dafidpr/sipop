<script>
function tambahpengguna(){
	$('#inputPenggunaPop').modal('show');
}
function infoBts(){
	var bts = $('#namabtspop').val();
	$.ajax({
		url: "<?php echo base_url('penggunabts/infoBts/')?>"+bts,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			$('#lokasibts').val(obj.LOKASI_BTS);
			$('#lat').val(obj.LAT_BTS);
			$('#long').val(obj.LONG_BTS);
		}
	})
}
function hapuspop(e){
	$('#hapuspengguna').click(function(){
		$.ajax({
			url: "<?php echo base_url('penggunabts/hapuspengguna/')?>"+e,
			type: "post"
		})
	})
	$('#hapusPengguna').modal('show');
}
function detilpop(e){
	var html = '';
	$.ajax({
		url: "<?php echo base_url('penggunabts/detilpop/')?>"+e,
		type: "post",
		success:function(data){
			var obj = JSON.parse(data);
			console.log(obj);
			html +='<tr><td>'+obj.WIDTH+'</td>'+
					'<td>'+obj.MODE+'</td>'+
					'<td>'+obj.BAND+'</td>'+
					'<td>'+obj.SECURITY+'</td>'+
					'<td>'+obj.KODE_SECURITY+'</td>'+
					'<td>'+obj.NAMA_PRODUK+'</td></tr>';
						
			$('#detilPengguna').modal('show');
			$('#datadetilpop').html(html);
		}
	})
}
function editpop(e){
	window.location.href = "<?php echo base_url('penggunabts/detildata/')?>"+e;
}
</script>
