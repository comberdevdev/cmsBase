<script type="text/javascript">
$(document).ready(function() {
	$('.btnDelete').click(function(event) {
		event.preventDefault();
		var href = $(this).attr('href');
		swal({
			title: "Deseja realmente excluir?",
			text: "Você tem certeza que deseja excluir este item?",
			type: "warning", 
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Sim, pode excluir!",
			closeOnConfirm: false
		}, function(){
			window.location = href;
		});
		
	});	
});
</script>