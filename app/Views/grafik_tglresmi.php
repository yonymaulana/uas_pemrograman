<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>

<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->
</div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <center><h3 class="title"><b> GRAFIK TAHUN PERESMIAN </b></h3></center>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Grafik Pie</h5>
                      </div>
                      <div id="chartdiv"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Grafik Column Bar</h5>
                      </div>
                      <div id="chartdiv_batang"></div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
              </div>
            </div>
            <!-- / Content -->

<?= $this->include('footer'); ?>

<script src="//www.amcharts.com/lib/4/core.js"></script>
<script src="//www.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<style>
#chartdiv {
  width: 100%;
  height: 400px;
}
#chartdiv_batang {
  width: 100%;
  height: 400px;
}
</style>

<script>
// Create chart instance in one go
var chart = am4core.createFromConfig({
  // Create pie series
  "series": [{
    "type": "PieSeries",
    "dataFields": {
      "value": "jumlah",
      "category": "tgl_resmi"
    }
  }],

  // Add data
  
  "data":  <?php echo file_get_contents(base_url('grafik_tglresmi/grafik_tanggalresmi_json')); ?>,

  // And, for a good measure, let's add a legend
  "legend": {}

}, "chartdiv", am4charts.PieChart);
</script>

<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv_batang", am4charts.XYChart);
chart.scrollbarX = new am4core.Scrollbar();

// Add data
chart.data = <?php echo file_get_contents(base_url('grafik_tglresmi/grafik_tanggalresmi_json')); ?>;

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "tgl_resmi";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;
categoryAxis.renderer.labels.template.horizontalCenter = "right";
categoryAxis.renderer.labels.template.verticalCenter = "middle";
categoryAxis.renderer.labels.template.rotation = 0;
categoryAxis.tooltip.disabled = true;
categoryAxis.renderer.minHeight = 110;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.renderer.minWidth = 50;

// Create series
var series = chart.series.push(new am4charts.ColumnSeries());
series.sequencedInterpolation = true;
series.dataFields.valueY = "jumlah";
series.dataFields.categoryX = "tgl_resmi";
series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
series.columns.template.strokeWidth = 0;

series.tooltip.pointerOrientation = "vertical";

series.columns.template.column.cornerRadiusTopLeft = 10;
series.columns.template.column.cornerRadiusTopRight = 10;
series.columns.template.column.fillOpacity = 0.8;

// on hover, make corner radiuses bigger
var hoverState = series.columns.template.column.states.create("hover");
hoverState.properties.cornerRadiusTopLeft = 0;
hoverState.properties.cornerRadiusTopRight = 0;
hoverState.properties.fillOpacity = 1;

series.columns.template.adapter.add("fill", function(fill, target) {
  return chart.colors.getIndex(target.dataItem.index);
});

// Cursor
chart.cursor = new am4charts.XYCursor();

}); // end am4core.ready()
</script>