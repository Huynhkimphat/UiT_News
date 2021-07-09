	<!--   Core JS Files   -->
    
	<script src="{{asset('admin_assets/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('admin_assets/js/core/popper.min.js')}}"></script>
	<script src="{{asset('admin_assets/js/core/bootstrap.min.js')}}"></script>

	<!-- jQuery UI -->
	<script src="{{asset('admin_assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('admin_assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('admin_assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


	<!-- Chart JS -->
	<script src="{{asset('admin_assets/js/plugin/chart.js/chart.min.js')}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('admin_assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Chart Circle -->
	<script src="{{asset('admin_assets/js/plugin/chart-circle/circles.min.js')}}"></script>

	<!-- Datatables -->
	<script src="{{asset('admin_assets/js/plugin/datatables/datatables.min.js')}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('admin_assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset('admin_assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('admin_assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('admin_assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('admin_assets/js/atlantis.min.js')}}"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{asset('admin_assets/js/setting-demo.js')}}"></script>
	<script src="{{asset('admin_assets/js/demo.js')}}"></script>
	<script src="{{asset('admin_assets/js/select2.min.js')}}"></script>


	{{-- <script type="text/javascript" src="{{asset("ckeditor/ckeditor.js")}}"></script>

    <script type="text/javascript" src="{{asset("ckeditor/ckfinder/ckfinder.js")}}"></script> --}}

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script> 
			CKEDITOR.config.height = '600px';
			CKEDITOR.replace( 'noi_dung', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
	</script>


	{{-- <script type="text/javascript">
    //    var editor= CKEDITOR.replace('noi_dung');
	   //  CKEDITOR.replace('noi_dung');
	   noi_dung
    </script> --}}
{{-- 
	<script type="text/javascript">
		CKEDITOR.replace('noi_dung');
		CKEDITOR.config.height = '600px';
	</script> --}}

	{{-- <script type="text/javascript">
		const $ = document.querySelector.bind(document);
		const $$ = document.querySelectorAll.bind(document);
	
		console.log($$)
		const navItems = $$('.nav__item');
		navItems.forEach((navItem,index))=>{
			navItem.onclick = function(){
				this.classList.add('active');
			}
		}
	</script> --}}

	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
			
		});
	</script>

<script>
    $(document).ready(function() {
    $("#select2").select2();
    // tags:true;
    // tokenSeparators:[',',' '];
    });
</script>