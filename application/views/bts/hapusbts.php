<div class="modal fade" id="hapusBtsModal" tabindex="-1" role="dialog" aria-labelledby="hapusBtsModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('bts/hapusbts'); ?>" method="post" class="user">
                <div class="modal-body">
                     <div class="container-fluid">
                    <h4 class="text-center text-danger"><b>Hapus Data BTS!</b></h4>
                    <br>
                    <h5 class="text-center text-danger">Anda yakin ingin menghapus BTS ini ?</h5>
                    </div>
                 </div>
                 <input type="hidden" class="form-control" id="idbts" name="idbts">
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit" name="hapusbts" id="hapusbts">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>