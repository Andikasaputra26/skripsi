
<!-- <div id="scrollToTop" class="scrollToTop mbr-arrow-up" style="display: block;">
	<a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a>
</div> -->

    <script src="assets/tether.min.js.download"></script>
    <script src="assets/bootstrap.min.js.download"></script>
    <script src="assets/SmoothScroll.js.download"></script>
    <script src="assets/script.min.js.download"></script>
    <script src="assets/jquery.touchSwipe.min.js.download"></script>
    <script src="assets/script.js.download"></script>
    <script src="assets/flipclock.js.download"></script>
    <script src="assets/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
  
    $('.tanggal').datetimepicker({
       locale: 'ru',
         Default:false,
         language:  'en',
         viewMode: 'months',
         todayBtn:  1,
         autoclose: 1,
         todayHighlight: 1,
         startView: 4,
         minView: 2,
         forceParse: 0,
         format: 'yyyy-mm-dd'
    });

</script>

<div style="position: absolute; z-index: -10000; top: 0px; left: 0px; right: 0px; height: <?php echo $tinggi; ?>;"></div>
<div style="clear: both;"></div>

</body></html>