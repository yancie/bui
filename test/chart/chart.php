<?php  $base='../' ?>
<?php  $title='图表测试' ?>
<?php include("../templates/header.php"); ?>

  <div class="container">
   	<div class="row">
   		<div id="s1" class="span12">
   			
   		</div>

      <div id="s2" class="span12">
        
      </div>
   	</div>
  </div>
 
  <?php $url = 'bui/toolbar'?>
  <?php include("../templates/script.php"); ?>
	
	<script type="text/javascript" src="../../src/chart/plotitem.js"></script>
  <script type="text/javascript" src="../../src/chart/labels.js"></script>
  <script type="text/javascript" src="../../src/chart/markers.js"></script>

  <script type="text/javascript" src="../../src/chart/axis/base.js"></script>
  <script type="text/javascript" src="../../src/chart/axis/number.js"></script>
  <script type="text/javascript" src="../../src/chart/axis/category.js"></script>
  <script type="text/javascript" src="../../src/chart/axis/grid.js"></script>
  <script type="text/javascript" src="../../src/chart/axis/time.js"></script>

   <script type="text/javascript" src="../../src/chart/axis/auto.js"></script>
   <script type="text/javascript" src="../../src/chart/axis.js"></script>

  <script type="text/javascript" src="../../src/chart/mixin/actived.js"></script>
  <script type="text/javascript" src="../../src/chart/mixin/activedgroup.js"></script>
  <script type="text/javascript" src="../../src/chart/mixin/showlabels.js"></script>

  <script type="text/javascript" src="../../src/chart/series/base.js"></script>
  <script type="text/javascript" src="../../src/chart/series/cartesian.js"></script>
  <script type="text/javascript" src="../../src/chart/series/line.js"></script>
  <script type="text/javascript" src="../../src/chart/series/area.js"></script>
  
  <script type="text/javascript" src="../../src/chart/series/itemgroup.js"></script>
  <script type="text/javascript" src="../../src/chart/series/column.js"></script>

  <script type="text/javascript" src="../../src/chart/series.js"></script>



  <script type="text/javascript" src="../../src/chart/legend.js"></script>
  <script type="text/javascript" src="../../src/chart/plotrange.js"></script>
  <script type="text/javascript" src="../../src/chart/legenditem.js"></script>

  <script type="text/javascript" src="../../src/chart/tooltip.js"></script>
 
  <script type="text/javascript" src="../../src/chart/seriesgroup.js"></script>
  <script type="text/javascript" src="../../src/chart/plotback.js"></script>

  <script type="text/javascript" src="../../src/chart/theme.js"></script>
  <script type="text/javascript" src="../../src/chart/chart.js"></script>
  
  <script type="text/javascript" src="../specs/chart/chart-spec.js"></script><!---->

  <script type="text/javascript" src="../specs/chart/chart-area-spec.js"></script>

<?php include("../templates/footer.php"); ?>