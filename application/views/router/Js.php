<script>
function tambahrouter(){
	$('#inputRouterModal').modal('show');
}
function infoRouter(){
	var bts = $('#namabts').val();
	$.ajax({
		url: "<?php echo base_url('router/infoRouter/')?>"+bts,
		type: "post",
		success:function(data){
			var obj = JSON.parse(data);
			$('#lokasirouter').val(obj.LOKASI_BTS);
			$('#lat').val(obj.LAT_BTS);
			$('#long').val(obj.LONG_BTS);
		}
	})
}
function hapusrouter(e){
	$('#hapusrouter').click(function(){
		$.ajax({
			url: "<?php echo base_url('router/hapusdatarouter/')?>"+e,
			type: "post"
		})
	})
	$('#hapusRouter').modal('show');
}
function editrouter(e){
	window.location.href = "<?php echo base_url('router/detildata/')?>"+e;
}
</script>