<div class="modal fade" id="hapusOperator" tabindex="-1" role="dialog" aria-labelledby="hapusOperator" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('operator/hapusoperator'); ?>" method="post" class="user">
                <div class="modal-body">
                     <div class="container-fluid">
                        <h4 class="text-center text-danger"><b>Hapus Data Operator!</b></h4>
                        <br>
                        <h5 class="text-center text-danger">Anda yakin ingin menghapus Operator ini ?</h5>
                    </div>
                 </div>
                    <input type="hidden" class="form-control" name="idoperator" id="idoperator">
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit" name="hapusoperator" id="hapusoperator">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>