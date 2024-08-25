<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/jquery-price-slider.js"></script>
<script src="../assets/js/jquery.meanmenu.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<script src="../assets/js/jquery.scrollUp.min.js"></script>
<script src="../assets/js/counterup/jquery.counterup.min.js"></script>
<script src="../assets/js/counterup/waypoints.min.js"></script>
<script src="../assets/js/counterup/counterup-active.js"></script>
<script src="../assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/js/scrollbar/mCustomScrollbar-active.js"></script>
<script src="../assets/js/metisMenu/metisMenu.min.js"></script>
<script src="../assets/js/metisMenu/metisMenu-active.js"></script>
<script src="../assets/js/morrisjs/raphael-min.js"></script>
<script src="../assets/js/morrisjs/morris.js"></script>
<script src="../assets/js/morrisjs/morris-active.js"></script>
<script src="../assets/js/sparkline/jquery.sparkline.min.js"></script>
<script src="../assets/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="../assets/js/sparkline/sparkline-active.js"></script>
<script src="../assets/js/calendar/moment.min.js"></script>
<script src="../assets/js/calendar/fullcalendar.min.js"></script>
<script src="../assets/js/calendar/fullcalendar-active.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

<script src="../assets/js/DataTables/datatables.js"></script>


<script src="../assets/js/pdf/jquery.media.js"></script>
<script src="../assets/js/pdf/pdf-active.js"></script>

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
		document.getElementById('bulan').addEventListener('change', updatePage);
		document.getElementById('tahun').addEventListener('change', updatePage);
		document.getElementById('jenis')?.addEventListener('change', updatePage);
	});

	function updatePage() {
		var bulan = document.getElementById('bulan').value;
		var tahun = document.getElementById('tahun').value;
		var jenis = document.getElementById('jenis')?.value;
		var params = [];
		if (bulan) {
			params.push('bulan=' + bulan);
		}
		if (tahun) {
			params.push('tahun=' + tahun);
		}
		if (jenis) {
			params.push('jenis=' + jenis);
		}
		var queryString = params.join('&');
		if (queryString) {
			window.location.href = '?' + queryString;
		}
	}

	$(document).ready(function() {
		$('.table-datatable').DataTable();
	});
</script>
</body>

</html>