/**
* Bind search input to hide/show champions
*/
$("#search_name").bind("keyup", function(evt){
	var search_value = $.trim($(evt.currentTarget).val()).toLowerCase();

	$('span.mbc_champname').each(function(){
		var parent = $(this).closest("div"),
		name = $(this).text().toLowerCase();

		if( search_value == "" || -1 < name.indexOf(search_value) ){
			parent.css("display", "");
		}else{
			parent.css("display", "none");
		}
	});
});

/**
*
*/
$("input.mbc_champcheckbox").bind("change", function(evt){
	if( $(evt.currentTarget).prop("checked") ) {
		$(evt.currentTarget).closest("div").addClass("mbc_selectedChamp");
	}else{
		$(evt.currentTarget).closest("div").removeClass("mbc_selectedChamp");
	}
});