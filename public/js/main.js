$(document).ready(function(){
	var token = $("#token").val();
	$('#search').keyup(function(){
		var search = $("#search").val();
		var searchby = $("#searchby").val();
		var see = $('#see').val();
		var tablename = $('#tablename').val();
		$.ajax({
			url: "/admin/search",
			method: 'post',
			datatype : 'json',
			headers: {
				'X-CSRF-Token': token 
		   	},
			data : {'tablename': tablename,
					'see' : see,
					'search':search,
					'searchby':searchby},
			success:function(response){
				var tableBody="<tr><td>User Name</td><td>Name</td><td>Email</td><td>Address</td><td>Phone</td><td>Status</td><td></td></tr>";
				if(response != 'error'){
					response.forEach(element => {
						var tableRow="";
						tableRow+="<td>"+element.username+"</td>";
						tableRow+="<td>"+element.name+"</td>";
						tableRow+="<td>"+element.email+"</td>";
						tableRow+="<td>"+element.address+"</td>";
						tableRow+="<td>"+element.contactno+"</td>";
						if(element.status == 1){
							tableRow+="<td>Valid</td>";
						}
						else if(element.status == 0){
							tableRow+="<td>InValid</td>";
						}
						else{
							tableRow+="<td>Blocked</td>";
						}
						if(element.type == 1){
							tableRow += "<td><a href='/admin/personalUseredit/"+element.id+"' class='btn btn-warning'>View</a>";
						}
						else if(element.type == 2){
							tableRow += "<td><a href='/admin/organizationalUseredit/"+element.id+"' class='btn btn-warning'>View</a>";
						}
						else if(element.type == 3){
							tableRow += "<td><a href='/admin/volunteeredit/"+element.id+"' class='btn btn-warning'>View</a>";
						}
						tableBody=tableBody+"<tr>"+tableRow+"</tr>";
					});
					$('table').html(tableBody);
				}else{
					var tableBody="<tr><td>User Name</td><td>Name</td><td>Email</td><td>Address</td><td>Phone</td><td>Status</td><td></td></tr>";
					$("table").html(tableBody);
				}
			},
			error:function(response){
				alert("kando vai kando");
			}
		});
	});
	
	$('#see').change(function(){
		var search = $("#search").val();
		var searchby = $("#searchby").val();
		var see = $('#see').val();
		var tablename = $('#tablename').val();
		$.ajax({
			url: '/admin/search',
			method: 'post',
			datatype : 'json',
			headers: {
				'X-CSRF-Token': token 
		   	},
			data : {'tablename': tablename,
					'see' : see,
					'search':search,
					'searchby':searchby},
			success:function(response){
				var tableBody="<tr><td>User Name</td><td>Name</td><td>Email</td><td>Address</td><td>Phone</td><td>Status</td><td></td></tr>";
				if(response != 'error'){
					response.forEach(element => {
						var tableRow="";
						tableRow+="<td>"+element.username+"</td>";
						tableRow+="<td>"+element.name+"</td>";
						tableRow+="<td>"+element.email+"</td>";
						tableRow+="<td>"+element.address+"</td>";
						tableRow+="<td>"+element.contactno+"</td>";
						if(element.status == 1){
							tableRow+="<td>Valid</td>";
						}
						else if(element.status == 0){
							tableRow+="<td>InValid</td>";
						}
						else{
							tableRow+="<td>Blocked</td>";
						}
						if(element.type == 1){
							tableRow += "<td><a href='/admin/personalUseredit/"+element.id+"' class='btn btn-warning'>View</a>";
						}
						else if(element.type == 2){
							tableRow += "<td><a href='/admin/organizationalUseredit/"+element.id+"' class='btn btn-warning'>View</a>";
						}
						else if(element.type == 3){
							tableRow += "<td><a href='/admin/volunteeredit/"+element.id+"' class='btn btn-warning'>View</a>";
						}
						tableBody=tableBody+"<tr>"+tableRow+"</tr>";
					});
					$('table').html(tableBody);
				}else{
					var tableBody="<tr><td>User Name</td><td>Name</td><td>Email</td><td>Address</td><td>Phone</td><td>Status</td><td></td></tr>";
					$("table").html(tableBody);
				}
			},
			error:function(response){
				
			}
		});
	});
});