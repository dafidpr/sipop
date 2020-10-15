<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
<script>
function tambahbts(){
	$('#inputBtsModal').modal('show');
}
function hapusbts(e){
	$.ajax({
		url: "<?php echo base_url('bts/cekdelete/')?>"+e,
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
				$('#idbts').val(e);
				$('#hapusBtsModal').modal('show');
			}
		}
	})
}
function editbts(e){
	$.ajax({
		url: "<?php echo base_url('bts/detilbts/')?>"+e,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			$('#editidbts').val(obj.ID_BTS);
			$('#editnamabts').val(obj.NAMA_BTS);
			$('#editlokasi').val(obj.LOKASI_BTS);
			$('#editlat').val(obj.LAT_BTS);
			$('#editlong').val(obj.LONG_BTS);
			editMap(obj.LAT_BTS, obj.LONG_BTS);
		}
	});
	$('#editBtsModal').modal('show');
}
var marker;

function tandaiMarker(peta, koordinat) {
	if (marker) {
		marker.setPosition(koordinat);
	} else {
		marker = new google.maps.Marker({
			position: koordinat,
			map: peta
		});
	}
}

function initMap() {
	var latlng = new google.maps.LatLng(-8.369665323907917, 114.32527379353769),
		options = {
			center: latlng,
			zoom: 10,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		},
		map = new google.maps.Map(document.getElementById('maps'), options);
	// 	var marker = new google.maps.Marker({
	// 	position: latlng,
	// 	map: map
	// });
	google.maps.event.addListener(map, 'click', function (event) {
		 document.getElementById('lat').value = event.latLng.lat();
		 document.getElementById('long').value = event.latLng.lng();

		tandaiMarker(this, event.latLng);

	})
}
google.maps.event.addDomListener(window, 'load', initMap);

function editMap(lat, long){
	var latlng = new google.maps.LatLng(lat, long),
	options = {
		center: latlng,
		zoom: 10,
	},
	map = new google.maps.Map(document.getElementById('editmaps'), options);
	var marker = new google.maps.Marker({
		position: latlng,
		map: map
	});
	google.maps.event.addListener(map, 'click', function(event){
		document.getElementById('editlat').value = event.latLng.lat();
		document.getElementById('editlong').value = event.latLng.lng();
		tandaiMarker(this, event.latLng);
	})
}
google.maps.event.addDomListener(window, 'load', editMap);
</script>