<div class="modal fade" id="add_messenger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Messenger</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
               <div class="col-3">
                 <label>Name:</label>
                 <input type="text" name="name" id="name" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Address:</label>
                 <input type="text" name="address" id="address" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Contact No:</label>
                 <input type="number" name="contact_no" id="contact_no" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Date Hired:</label>
                 <input type="date" name="date_hired" id="date_hired" class="form-control" autocomplete="off">
               </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <a href="#" class="btn btn-primary" onclick="add_messenger()">Add Messenger</a>
      </div>
     
    </div>
  </div>
</div>
