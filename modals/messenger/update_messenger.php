<div class="modal fade" id="update_messenger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Update Messenger</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="" id="id_messenger_update">
            <div class="row">
               <div class="col-3">
                 <label>Name:</label>
                 <input type="text" name="name_update" id="name_update" class="form-control">
               </div>
               <div class="col-3">
                 <label>Address:</label>
                 <input type="text" name="address_update" id="address_update" class="form-control">
               </div>
               <div class="col-3">
                 <label>Contact No:</label>
                 <input type="number" name="contact_no_update" id="contact_no_update" class="form-control">
               </div>
               <div class="col-3">
                 <label>Date Hired:</label>
                 <input type="date" name="date_hired_update" id="date_hired_update" class="form-control">
               </div>
            </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-danger" onclick="delete_messenger()">Delete Messenger</a>
        <a href="#" class="btn btn-primary" onclick="update_messenger()">Update Messenger</a>
      </div>
     
    </div>
  </div>
</div>
