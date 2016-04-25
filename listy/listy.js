var list = localStorage.listy;
if (!list) {
	list = '[]';
}
list = JSON.parse(list);

$.each(list, function(i, item) {
	$('ul').append('<li>' + item + '</li>');
});

$('form').submit(function(e) {
	e.preventDefault();
	var newItem = $('input[name=new-item]').val();
	$('input[name=new-item]').val('');
	$('ul').append('<li>' + newItem + '</li>');

	list.push(newItem);
	localStorage.listy = JSON.stringify(list);
});
