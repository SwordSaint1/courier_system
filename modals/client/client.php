<div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Client Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
               <div class="col-3">
                 <label>Name:</label>
                 <input type="text" name="name" id="name_client" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Address:</label>
                 <input type="text" name="address" id="address_client" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Client Code:</label>
                 <input type="text" name="client_code" id="client_code" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Email:</label>
                 <input type="text" name="email" id="email" class="form-control" autocomplete="off">
               </div>
            </div>
            <hr>
            <div class="row">
               <div class="col-3">
                 <label>Phone No:</label>
                 <input type="number" name="phone_no" id="phone_no" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Nature of Business:</label>
                 <input type="text" name="nature_business" id="nature_business" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Business Type:</label>
                 <input type="text" name="business_type" id="business_type" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Operation Years:</label>
                 <input type="date" name="operation_years" id="operation_years" class="form-control" autocomplete="off">
               </div>
            </div>
            <hr>
             <div class="row">
               <div class="col-3">
                 <label>Client Website:</label>
                 <input type="text" name="client_website" id="client_website" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Client Branch:</label>
                 <input type="text" name="client_branch" id="client_branch" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Payment Option:</label>
                 <input type="text" name="payment_option" id="payment_option" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Bank Reference:</label>
                 <input type="text" name="bank_reference" id="bank_reference" class="form-control" autocomplete="off">
               </div>
            </div>
            <hr>
              <div class="row">
               <div class="col-3">
                 <label>Gross Revenue:</label>
                 <input type="number" name="gross_revenue" id="gross_revenue" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Shipment Mode:</label>
                 <input type="text" name="shipment_mode" id="shipment_mode" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Proposed Credit:</label>
                 <input type="number" name="proposed_credit" id="proposed_credit" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Credit Limit:</label>
                 <input type="number" name="credit_limit" id="credit_limit" class="form-control" autocomplete="off">
               </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <a href="#" class="btn btn-primary" onclick="add_client()">Add Client</a>
      </div>
     
    </div>
  </div>
</div>
