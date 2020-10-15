<div class="modal fade" id="hapusUserModal" tabindex="-1" role="dialog" aria-labelledby="hapusUserModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('user/hapususer'); ?>" method="post" class="user">
                <div class="modal-body">
                     <div class="container-fluid">
                      <h4 class="text-center text-danger"><b>Hapus Data User!</b></h4>
                      <br>
                      <h5 class="text-center text-danger">Anda yakin ingin menghapus User ini ?</h5>
                    </div>
                 </div>
                 <input type="hidden" class="form-control" name="iduser" id="iduser">
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit" name="hapususer" id="hapususer">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>