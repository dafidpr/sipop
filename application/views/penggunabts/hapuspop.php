<div class="modal fade" id="hapusPengguna" tabindex="-1" role="dialog" aria-labelledby="hapusPengguna" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('penggunabts/hapuspengguna'); ?>" method="post" class="user">
                <div class="modal-body">
                     <div class="container-fluid">
						 <h4 class="text-center text-danger"><b>Hapus Data Pengguna BTS/POP!</b></h4>
						 <br>
					  <h5 class="text-center text-danger">Anda yakin ingin menghapus data ini ?</h5>
                    </div>
                 </div>
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit" name="hapuspengguna" id="hapuspengguna">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>