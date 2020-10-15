<script>
function tambahoperator(){
	$('#inputOperator').modal('show');
}
function hapusop(e){
	$.ajax({
		url: "<?php echo base_url('operator/cekdelete/')?>"+e,
		type: "post",
		success:function(data){
			var obj = JSON.parse(data);
			if(obj.num == 1){
				Swal.fire({
				title: "Tidak Bisa Menghapus!",
				text: "Data ini berelasi dengan data lain!",
				icon: "error",
			});
			} else {
				$('#idoperator').val(e);
				$('#hapusOperator').modal('show');
			}
		}
	})
}
function editop(e){
	$.ajax({
		url: "<?php echo base_url('operator/detiloperator/')?>"+e,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			$('#editidop').val(obj.ID_OPERATOR);
			$('#editnama').val(obj.NAMA_OPERATOR);
			$('#editalamat').val(obj.ALAMAT);
			$('#editkelurahan').val(obj.KELURAHAN);
			$('#editkecamatan').val(obj.KECAMATAN);
			$('#editkabupaten').val(obj.KABUPATEN);
			$('#editkodepos').val(obj.KODE_POS);
		}
	});
	$('#editOperator').modal('show');
}
// function deleteOperator(){
// 	var id = $('#idoperator').val();
// 	$.ajax({
// 		url: "<?php echo base_url('operator/hapusoperator/')?>"+id,
// 		type: "post",
// 		success:function(data){
// 			console.log(data);
// 		}
// 	})
// }
</script>