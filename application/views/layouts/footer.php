 <footer class="main-footer">
 	<strong>Copyright &copy; 2020-2024 <a href="ninoadiprasetyo">NinoAdi</a>.</strong>
 	All rights reserved.
 	<div class="float-right d-none d-sm-inline-block">
 		
 	</div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
 	<!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url() ?>assets/selectize/standalone/selectize.min.js"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
 <!-- jQuery UI 1.11.4 -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/sparklines/sparkline.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/moment/moment.min.js"></script>
 <script src="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
 <!-- DataTables -->
 <script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
 <script src="<?php echo base_url() ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
 <!-- <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script> 
 <script src="<?php echo base_url() ?>assets/admin/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/myscript.js"></script> 
 
 -->


 <!-- page script -->
 <script>
 	$(function() {
		$("#example2").DataTable();
 		$('#example1').DataTable({
 			dom: 'Bfrtip',
 			buttons: [
 			],
 			"paging": true,
 			"lengthChange": true,
 			"searching": true,
 			"ordering": true,
 			"info": true,
 			"autoWidth": false,
 			"columnDefs": [{
 				"targets": '_all',
 				"createdCell": function(tr, cellData, rowData, row, col) {
 					$(tr).css('padding', '10px')

 				}
 			}]

 		});
 	});

 	$('.bahan').selectize({
 		create:true,
 		sortField:'text'
 	});

 	$('.harga').selectize({
    delimiter: '.',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
});
 </script>
 </body>

 </html>
