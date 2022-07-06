<div class="modal fade" id="update_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Client Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="" id="id_client_update">
            <div class="row">
               <div class="col-3">
                 <label>Name:</label>
                 <input type="text" name="name" id="name_client_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Address:</label>
                 <input type="text" name="address" id="address_client_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Client Code:</label>
                 <input type="text" name="client_code" id="client_code_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Email:</label>
                 <input type="text" name="email" id="email_update" class="form-control" autocomplete="off">
               </div>
            </div>
            <hr>
            <div class="row">
               <div class="col-3">
                 <label>Phone No:</label>
                 <input type="number" name="phone_no" id="phone_no_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Nature of Business:</label>
                 <input type="text" name="nature_business" id="nature_business_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Business Type:</label>
                 <input type="text" name="business_type" id="business_type_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Operation Years:</label>
                 <input type="date" name="operation_years" id="operation_years_update" class="form-control" autocomplete="off">
               </div>
            </div>
            <hr>
             <div class="row">
               <div class="col-3">
                 <label>Client Website:</label>
                 <input type="text" name="client_website" id="client_website_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Client Branch:</label>
                 <input type="text" name="client_branch" id="client_branch_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Payment Option:</label>
                 <input type="text" name="payment_option" id="payment_option_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Bank Reference:</label>
                 <input type="text" name="bank_reference" id="bank_reference_update" class="form-control" autocomplete="off">
               </div>
            </div>
            <hr>
              <div class="row">
               <div class="col-3">
                 <label>Gross Revenue:</label>
                 <input type="number" name="gross_revenue" id="gross_revenue_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Shipment Mode:</label>
                 <input type="text" name="shipment_mode" id="shipment_mode_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Proposed Credit:</label>
                 <input type="number" name="proposed_credit" id="proposed_credit_update" class="form-control" autocomplete="off">
               </div>
               <div class="col-3">
                 <label>Credit Limit:</label>
                 <input type="number" name="credit_limit" id="credit_limit_update" class="form-control" autocomplete="off">
               </div>
            </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-danger" onclick="delete_client()">Delete Client</a>
        <a href="#" class="btn btn-primary" onclick="update_client()">Update Client</a>
      </div>
     
    </div>
  </div>
</div>
