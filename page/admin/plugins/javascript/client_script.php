<script type="text/javascript">

const add_client =()=>{
	var name = document.getElementById('name_client').value;
	var address = document.getElementById('address_client').value;
	var client_code = document.getElementById('client_code').value;
	var email = document.getElementById('email').value;
	var phone_no = document.getElementById('phone_no').value;
	var nature_business = document.getElementById('nature_business').value;
	var business_type = document.getElementById('business_type').value;
	var operation_years = document.getElementById('operation_years').value;
	var client_website = document.getElementById('client_website').value;
	var client_branch = document.getElementById('client_branch').value;
	var payment_option = document.getElementById('payment_option').value;
	var bank_reference = document.getElementById('bank_reference').value;
	var gross_revenue = document.getElementById('gross_revenue').value;
	var shipment_mode = document.getElementById('shipment_mode').value;
	var proposed_credit = document.getElementById('proposed_credit').value;
	var credit_limit = document.getElementById('credit_limit').value;

	$.ajax({
		url: '../../process/admin/client/client.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'add_client',
                    name:name,
					address:address,
					client_code:client_code,
					email:email,
					phone_no:phone_no,
					nature_business:nature_business,
					business_type:business_type,
					operation_years:operation_years,
					client_website:client_website,
					client_branch:client_branch,
					payment_option:payment_option,
					bank_reference:bank_reference,
					gross_revenue:gross_revenue,
					shipment_mode:shipment_mode,
					proposed_credit:proposed_credit,
					credit_limit:credit_limit
                },success:function(response){
                   if (response == 'success') {
                   	swal('Success','Successfully Added!','success');
                   	search_client();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}

const search_client =()=>{
	var name = document.getElementById('client_name').value;
	$.ajax({
      url: '../../process/admin/client/client.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_client',
                    name:name
                },success:function(response){
                   document.getElementById('list_of_client').innerHTML = response;
                }
   });
}

const get_client_details =(param)=>{
 	var string = param.split('~!~');
    var id = string[0];
    var name = string[1];
    var address = string[2];
    var client_code = string[3];
    var email = string[4];
    var phone_no = string[5];
    var nature_business = string[6];
    var business_type = string[7];
    var operation_years = string[8];
    var client_website = string[9];
    var client_branch = string[10];
    var payment_option = string[11];
    var bank_reference = string[12];
    var gross_revenue = string[13];
    var shipment_mode = string[14];
    var proposed_credit = string[15];
    var credit_limit = string[16];

    document.getElementById('id_client_update').value = id;
    document.getElementById('name_client_update').value = name;
	document.getElementById('address_client_update').value = address;
	document.getElementById('client_code_update').value = client_code;
	document.getElementById('email_update').value = email;
	document.getElementById('phone_no_update').value = phone_no;
	document.getElementById('nature_business_update').value = nature_business;
	document.getElementById('business_type_update').value = business_type;
	document.getElementById('operation_years_update').value = operation_years;
	document.getElementById('client_website_update').value = client_website;
	document.getElementById('client_branch_update').value = client_branch;
	document.getElementById('payment_option_update').value = payment_option;
	document.getElementById('bank_reference_update').value = bank_reference;
	document.getElementById('gross_revenue_update').value = gross_revenue;
	document.getElementById('shipment_mode_update').value = shipment_mode;
	document.getElementById('proposed_credit_update').value = proposed_credit;
	document.getElementById('credit_limit_update').value = credit_limit;
} 

const update_client =()=>{
	var id = document.getElementById('id_client_update').value;
	var name = document.getElementById('name_client_update').value;
	var address = document.getElementById('address_client_update').value;
	var client_code = document.getElementById('client_code_update').value;
	var email = document.getElementById('email_update').value;
	var phone_no = document.getElementById('phone_no_update').value;
	var nature_business = document.getElementById('nature_business_update').value;
	var business_type = document.getElementById('business_type_update').value;
	var operation_years = document.getElementById('operation_years_update').value;
	var client_website = document.getElementById('client_website_update').value;
	var client_branch = document.getElementById('client_branch_update').value;
	var payment_option = document.getElementById('payment_option_update').value;
	var bank_reference = document.getElementById('bank_reference_update').value;
	var gross_revenue = document.getElementById('gross_revenue_update').value;
	var shipment_mode = document.getElementById('shipment_mode_update').value;
	var proposed_credit = document.getElementById('proposed_credit_update').value;
	var credit_limit = document.getElementById('credit_limit_update').value;

	$.ajax({
		url: '../../process/admin/client/client.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_client',
                    id:id,
                    name:name,
					address:address,
					client_code:client_code,
					email:email,
					phone_no:phone_no,
					nature_business:nature_business,
					business_type:business_type,
					operation_years:operation_years,
					client_website:client_website,
					client_branch:client_branch,
					payment_option:payment_option,
					bank_reference:bank_reference,
					gross_revenue:gross_revenue,
					shipment_mode:shipment_mode,
					proposed_credit:proposed_credit,
					credit_limit:credit_limit
                },success:function(response){
                   if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                   	search_client();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}

const delete_client =()=>{
	var id = document.getElementById('id_client_update').value;

	$.ajax({
        url: '../../process/admin/client/client.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'delete_client',
                    id:id
                },success:function(response){
                   if (response == 'success') {
                    swal('Information','Successfully Deleted!','info');
                    search_client();
                   }else{
                    swal('Error','Error','error');
                   }
                }
    });
}
</script>