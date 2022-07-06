<script type="text/javascript">
	
const search_messenger =()=>{
	var messenger_name = document.getElementById('messenger_name').value;

	$.ajax({
      url: '../../process/admin/messenger/messenger.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_messenger',
                    messenger_name:messenger_name
                },success:function(response){
                   document.getElementById('list_of_messenger').innerHTML = response;
                }
   });
}

const add_messenger =()=>{
	var name = document.getElementById('name').value;
	var address = document.getElementById('address').value;
	var contact_no = document.getElementById('contact_no').value;
	var date_hired = document.getElementById('date_hired').value;

    if (name == '') {
        swal('Information','Please Input Name of Messenger!','info');
    }else if(address == ''){
        swal('Information','Please Input Address!','info');
    }else if(contact_no == ''){
        swal('Information','Please Input Contact No!','info');
    }else if(date_hired == ''){
        swal('Information','Please Input Date Hired!','info');
    }else{
	$.ajax({
      url: '../../process/admin/messenger/messenger.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'add_messenger',
                    name:name,
					address:address,
					date_hired:date_hired,
					contact_no:contact_no
                },success:function(response){
                    if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                   	search_messenger();
                   }else if(response == 'Already Exist'){
                   	swal('Information','Messenger Already Exist!', 'info')
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
   });
}
}
const get_messenger_details =(param)=>{
 	var string = param.split('~!~');
    var id = string[0];
    var name = string[1];
    var address = string[2];
    var contact_no = string[3];
    var date_hired = string[4];

    document.getElementById('id_messenger_update').value = id;
    document.getElementById('name_update').value = name;
    document.getElementById('address_update').value = address;
    document.getElementById('contact_no_update').value = contact_no;
    document.getElementById('date_hired_update').value = date_hired;
}

const update_messenger =()=>{
	var id = document.getElementById('id_messenger_update').value;
    var name = document.getElementById('name_update').value;
    var address = document.getElementById('address_update').value;
    var contact_no = document.getElementById('contact_no_update').value;
    var date_hired = document.getElementById('date_hired_update').value;

    $.ajax({
      url: '../../process/admin/messenger/messenger.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_messenger',
                    id:id,
                    name:name,
					address:address,
					contact_no:contact_no,
					date_hired:date_hired
                },success:function(response){
                   if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                   	search_messenger();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
   });
}

const delete_messenger =()=>{
	var id = document.getElementById('id_messenger_update').value;

	$.ajax({
      url: '../../process/admin/messenger/messenger.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'delete_messenger',
                    id:id
                },success:function(response){
                   if (response == 'success') {
                    swal('Information','Successfully Deleted!','info');
                    search_messenger();
                   }else{
                    swal('Error','Error','error');
                   }
                }
   });
}
</script>