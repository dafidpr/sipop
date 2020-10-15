 <div class="modal fade" id="editBtsModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">

		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
		  </button>
		  <h4 class="modal-title" id="editBtsModal">Edit Data BTS/POP</h4>
		</div>
		<div class="modal-body">
		 <form class="form-horizontal" method="post" action="<?php echo base_url('bts/editbts')?>">
		   <div class="form-group">
			<input type="hidden" class="form-control has-feedback-left" id="editidbts" name="editidbts"required>
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control has-feedback-left" id="editnamabts" name="editnamabts" placeholder="Nama BTS/POP" required>
					<span class="fa fa-rss form-control-feedback left" aria-hidden="true"></span>
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control has-feedback-left" id="editlokasi" name="editlokasi" placeholder=" Lokasi BTS/POP" required>
					<span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
				  </div>
			  </div>
			   <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control has-feedback-left" id="editlat" name="editlat" placeholder="Latitude" required>
					<span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
				  </div>
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control has-feedback-left" id="editlong" name="editlong" placeholder="Longitude" required>
					<span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
				  </div>
			  </div>
			  <div id="editmaps" style="height: 400px"></div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </div>