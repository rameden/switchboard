$(document).on('click', '.edit', function(){
	var $el = $(this).closest('span');
	var id = $el.attr('id');
	var department = $el.find('.department').val();
	var phone_number = $el.find('.phone_number').val();

	var url = base_url + '/admin';

	var postData = Array();
	
	postData[0] = id;
	postData[1] = department;
	postData[2] = phone_number;

	$.ajax({
			type: 'POST',
			url: url,
			data: { data: postData }
	});

	$.gritter.add({
		title: 'Changes have been made',
		text: 'The world is now a better place young hero.',
	});
});

$(document).on('click', '.delete', function(){
	var $el = $(this).closest('span');
	var id = $el.attr('id');

	var url = base_url + '/admin/delete';

	var postData = Array();
	
	postData[0] = id;

	$.ajax({
			type: 'POST',
			url: url,
			data: { data: postData }
	});

	$.gritter.add({
		title: 'Changes have been made',
		text: 'The removial of this object has made your world safer young hero.',
	});
});
