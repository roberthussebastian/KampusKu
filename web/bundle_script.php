    <!-- jQuery 2.1.4 -->
    <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Data Tables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Slim Scroll -->
    <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- Fast Click -->
    <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/app.min.js"></script>
	<!-- Date Picker -->
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../assets/plugins/select2/select2.full.min.js"></script>
	<script src="../assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Scriptnyaa -->
    <script>
      $(function () {	
		// Date Picker
		$('#Tanggal_Lahir').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>
	
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// Dosen
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "dosen_modal_edit.php",
					type: "GET",
					data : {NIP: m,},
					success: function (ajaxData){
					$("#ModalEditDosen").html(ajaxData);
					$("#ModalEditDosen").modal('show',{backdrop: 'true'});
					}
				});
			});
		
		// Mahasiswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "mahasiswa_modal_edit.php",
					type: "GET",
					data : {NIM: m,},
					success: function (ajaxData){
					$("#ModalEditMahasiswa").html(ajaxData);
					$("#ModalEditMahasiswa").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Matakuliah
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "matakuliah_modal_edit.php",
					type: "GET",
					data : {Kode_Matakuliah: m,},
					success: function (ajaxData){
					$("#ModalEditMatakuliah").html(ajaxData);
					$("#ModalEditMatakuliah").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jurusan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jurusan_modal_edit.php",
					type: "GET",
					data : {Kode_Jurusan: m,},
					success: function (ajaxData){
					$("#ModalEditJurusan").html(ajaxData);
					$("#ModalEditJurusan").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jenjang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jenjang_modal_edit.php",
					type: "GET",
					data : {Kode_Jenjang: m,},
					success: function (ajaxData){
					$("#ModalEditJenjang").html(ajaxData);
					$("#ModalEditJenjang").modal('show',{backdrop: 'true'});
					}
				});
			});
			
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>