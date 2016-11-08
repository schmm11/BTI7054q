$(function(){
	var name = true, email = true;
	var s = $('input[type=submit]');
	s.prop('disabled', true);
	$('* mark').hide();
	
	$('#name input').focusout(function(){
		noname = !this.value;
		if (noname) $('#name mark').fadeIn(1000);
		else $('#name mark').fadeOut(500);
		s.prop('disabled', (noname || noemail));
	});
	
	$('#email input').focusout(function(){
		noemail = !/\S+@\S+\.\S+/.test(this.value);
		if (noemail) $('#email mark').fadeIn(1000);
		else $('#email mark').fadeOut(500);
		s.prop('disabled', (noname || noemail));
	});
	
	$('#adress_street').focusout(function(){
		nostreet = !this.value;
		if (nostreet) $('#adress_street mark').fadeIn(1000);
		else $('#adress_street mark').fadeOut(500);
		s.prop('disabled', (noname || noemail || nostreet ));
	});
	
});