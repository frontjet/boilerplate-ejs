$(function(){
	var $btn = $(this)
	$btn.click(function(event){
		setTimeout(function () {
			alert('this')
		}, 1000);
	})
});