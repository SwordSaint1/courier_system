<script type="text/javascript">
	
const submit =()=>{
	var title = document.getElementById('title').value;
	var author = document.getElementById('author').value;
	var date_posted = document.getElementById('date_posted').value;
	var content = document.getElementById('content').value;

	if (title == '') {
		swal('Information','Please Input Title','info');
	}else if(author == ''){
		swal('Information','Please Input Author','info');
	}else if(date_posted == ''){
		swal('Information','Please Input Post Date','info');
	}else if(content == ''){
		swal('Information','Please Input Content','info');
	}else{
	$.ajax({
		url: '../../process/admin/announcement/announcement.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'announcement',
                    title:title,
					author:author,
                    date_posted:date_posted,
                    content:content
                },success:function(response){
                   if (response == 'success') {
                   	swal('Success','Successfully Announce!','success');
                   	search_announcement();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});

}
}

const search_announcement =()=>{
	var date_posted_from = document.getElementById('date_posted_from').value;
	var date_posted_to = document.getElementById('date_posted_to').value;

	$.ajax({
      url: '../../process/admin/announcement/announcement.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_announcement',
                    date_posted_from:date_posted_from,
					date_posted_to:date_posted_to
                },success:function(response){
                   document.getElementById('list_of_announcement').innerHTML = response;
                }
   });
}

const get_announcement_details =(param)=>{
 	var string = param.split('~!~');
    var id = string[0];
    var title = string[1];
    var author = string[2];
    var date_posted = string[3];
    var content = string[4];

    document.getElementById('id_announcement_update').value = id;
    document.getElementById('title_update').value = title;
    document.getElementById('author_update').value = author;
    document.getElementById('date_posted_update').value = date_posted;
    document.getElementById('content_update').value = content;
} 

const update_announcement =()=>{
	var id = document.getElementById('id_announcement_update').value;
	var title = document.getElementById('title_update').value;
	var author = document.getElementById('author_update').value;
	var date_posted = document.getElementById('date_posted_update').value;
	var content = document.getElementById('content_update').value;

	$.ajax({
		url: '../../process/admin/announcement/announcement.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_announcement',
                    id:id,
                    title:title,
					author:author,
                    date_posted:date_posted,
                    content:content
                },success:function(response){
                   if (response == 'success') {
                   	swal('Success','Successfully Updated!','success');
                   	search_announcement();
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});

}

const delete_announcement =()=>{
    var id = document.getElementById('id_announcement_update').value;
    $.ajax({
        url: '../../process/admin/announcement/announcement.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'delete_announcement',
                    id:id
                },success:function(response){
                   if (response == 'success') {
                    swal('Information','Successfully Deleted!','info');
                    search_announcement();
                   }else{
                    swal('Error','Error','error');
                   }
                }
    });
}
</script>