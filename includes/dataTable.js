$(document).ready(function() {
    var table = $('#example').DataTable({rowReorder: true});
     
    $('#example tbody')
	.on( 'mouseenter', 'td', function () {
		var colIdx = table.cell(this).index().column;

		$( table.cells().nodes() ).removeClass( 'highlight' );
		$( table.column( colIdx ).nodes() ).addClass( 'highlight' );
	} );
} );