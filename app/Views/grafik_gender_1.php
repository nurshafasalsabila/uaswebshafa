<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Berdasarkan Gender</h1>
      <nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                
<div id="chartdiv"></div>
            
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?= $this->include('footer'); ?>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
 
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: false,
  panY: false,
  wheelX: "panX",
  wheelY: "zoomX",
  layout: root.verticalLayout
}));

var colors = chart.get("colors");

var data = [{
  country: "Pria",
  visits: 51.5
}, {
  country: "Wanitia",
  visits: 48.5
}];

prepareParetoData();

function prepareParetoData() {
  var total = 0;

  for (var i = 0; i < data.length; i++) {
    var value = data[i].visits;
    total += value;
  }

  var sum = 0;
  for (var i = 0; i < data.length; i++) {
    var value = data[i].visits;
    sum += value;
    data[i].pareto = sum / total * 100;
  }
}


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  categoryField: "country",
  renderer: am5xy.AxisRendererX.new(root, {
    minGridDistance: 30
  })
}));

xAxis.get("renderer").labels.template.setAll({
  paddingTop: 20
});

xAxis.data.setAll(data);

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  renderer: am5xy.AxisRendererY.new(root, {})
}));

var paretoAxisRenderer = am5xy.AxisRendererY.new(root, {opposite:true});
var paretoAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  renderer: paretoAxisRenderer,
  min:0,
  max:100,
  strictMinMax:true
}));

paretoAxisRenderer.grid.template.set("forceHidden", true);
paretoAxis.set("numberFormat", "#'%");


// Add series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "visits",
  categoryXField: "country"
}));

series.columns.template.setAll({
  tooltipText: "{categoryX}: {valueY}",
  tooltipY: 0,
  strokeOpacity: 0,
  cornerRadiusTL: 6,
  cornerRadiusTR: 6
});

series.columns.template.adapters.add("fill", function(fill, target) {
  return chart.get("colors").getIndex(series.dataItems.indexOf(target.dataItem));
})


// pareto series
var paretoSeries = chart.series.push(am5xy.LineSeries.new(root, {
  xAxis: xAxis,
  yAxis: paretoAxis,
  valueYField: "pareto",
  categoryXField: "country",
  stroke: root.interfaceColors.get("alternativeBackground"),
  maskBullets:false
}));

paretoSeries.bullets.push(function() {
  return am5.Bullet.new(root, {
    locationY: 1,
    sprite: am5.Circle.new(root, {
      radius: 5,
      fill: series.get("fill"),
      stroke:root.interfaceColors.get("alternativeBackground")
    })
  })
})

series.data.setAll(data);
paretoSeries.data.setAll(data);

// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear();
chart.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>