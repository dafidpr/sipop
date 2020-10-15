<script>
function tambahuser(){
	$('#inputUserModal').modal('show');
}
function edituser(e){
	$.ajax({
		url: "<?php echo base_url('user/detiluser/')?>"+e,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			$('#iduser').val(obj.ID_USER);
			$('#editusername').val(obj.USERNAME);
			$('#editnama').val(obj.NAMA_USER);
			$('#edittelp').val(obj.TELP);
			$('#editemail').val(obj.EMAIL);
			$('#editalamat').val(obj.ALAMAT);
			$('#edittipe').val(obj.TIPE);
		}
	})
	$('#editUserModal').modal('show');
}
function hapususer(e){
	$.ajax({
		url: "<?php echo base_url('user/cekdelete/')?>"+e,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			if(obj.num == 1){
				Swal.fire({
				title: "Tidak Bisa Menghapus!",
				text: "Data ini berelasi dengan data lain!",
				icon: "error",
			});
			} else {
				$('#hapusUserModal').modal('show');
				$('#iduser').val(e);
			}
		}
	})
}
</script>