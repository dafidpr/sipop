        <footer>
          <div class="pull-right">
            Copyright &copy; Sistem Informasi POP <?php echo date('Y')?> by Dafid Prasetyo
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>
    <script src="<?php echo base_url('assets/')?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/')?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/')?>vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo base_url('assets/')?>vendors/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url('assets/')?>build/js/custom.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o">
    </script>
    <script>
      var markers = [
        <?php foreach($lokasi as $lok){
          echo "['".$lok->NAMA_BTS."',".$lok->LAT_BTS.", ".$lok->LONG_BTS.", '".$lok->LOKASI_BTS."'],";
       }
      ?>
      ];
      function initMap() {
        var options = {
              center: latlng,
              zoom: 10,
              mapTypeId:'roadmap'
              },
          map = new google.maps.Map(document.getElementById('maps'), options);
          var infoWindow = new google.maps.InfoWindow;
          var bounds = new google.maps.LatLngBounds();  
          for(i = 0; i < markers.length; i++){
            var latlng = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(latlng); 
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i){
              return function(){
                infoWindow.setContent('<b>'+markers[i][0]+'</b><br>'+markers[i][3]);
                infoWindow.open(map, marker);
              }
            })(marker, i));
          map.fitBounds(bounds);
          
        }
      }
      google.maps.event.addDomListener(window, 'load', initMap);
    </script>
  </body>
</html>