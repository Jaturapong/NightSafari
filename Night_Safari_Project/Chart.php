<!-- Styles -->


<html>

<head>
    <meta charset="UTF-8">
    <?php require 'ChartData.php';?>
</head>
<style>
    #chartdiv {
        width: 100%;
        height: 600px;
    }
    
    .bg {
        background-image: url('Images/BgThank1.jpg');
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background-attachment: fixed;
        background-size: 100% 100%;
        overflow: hidden;
    }
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.XYChart);

        // Add data
        chart.data = [{
            "name": "Giraffe",
            "points": <?php echo $giraffe?>,
            "color": '#1CD3FC',
            "bullet": "Images/giraffe-chart.png"
        }, {
            "name": "White Tiger",
            "points": <?php echo $WhiteTiger?>,
            "color": '#FF4382',
            "bullet": "Images/White-tiger-chart.png"
        }, {
            "name": "Asian Elephant",
            "points": <?php echo $elephant?>,
            "color": 'rgb(13, 207, 23)',
            "bullet": "Images/elephant-chart.png"
        }, {
            "name": "Red-shanked douc",
            "points": <?php echo $Red_shanked?>,
            "color": 'rgb(245, 161, 7)',
            "bullet": "Images/ค่าง5สี.png"
        }];

        // Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "name";
        categoryAxis.renderer.grid.template.disabled = true;
        categoryAxis.renderer.minGridDistance = 30;
        categoryAxis.renderer.inside = true;
        categoryAxis.renderer.labels.template.fill = am4core.color("#fff");
        categoryAxis.renderer.labels.template.fontSize = 20;
        categoryAxis.renderer.labels.template.fontFamily = "cursive";

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.grid.template.strokeDasharray = "4,4";
        valueAxis.renderer.labels.template.disabled = true;
        valueAxis.min = 0;

        // Do not crop bullets
        chart.maskBullets = false;

        // Remove padding
        chart.paddingButtom = 0;
        chart.paddingTop = 50;

        // Create series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.dataFields.valueY = "points";
        series.dataFields.categoryX = "name";
        series.columns.template.propertyFields.fill = "color";
        series.columns.template.propertyFields.stroke = "color";
        series.columns.template.column.cornerRadiusTopLeft = 15;
        series.columns.template.column.cornerRadiusTopRight = 15;
        series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/b]";

        // Add bullets
        var bullet = series.bullets.push(new am4charts.Bullet());
        var image = bullet.createChild(am4core.Image);
        image.horizontalCenter = "middle";
        image.verticalCenter = "bottom";
        image.dy = 20;
        image.width = 100;
        image.height = 100;
        image.y = am4core.percent(100);
        image.propertyFields.href = "bullet";
        image.tooltipText = series.columns.template.tooltipText;
        image.propertyFields.fill = "color";
        image.filters.push(new am4core.DropShadowFilter());

        var label = series.columns.template.createChild(am4core.Label);
        label.text = "{points}";
        label.align = "center";
        label.valign = "middle";
        label.fontSize = 50;
        label.fill = am4core.color("#fff");
        label.fontFamily = "cursive";
        label.zIndex = 2;
        label.strokeWidth = 0;

        var bullet = series.columns.template.createChild(am4core.Circle);
        bullet.locationY = 0.5;
        bullet.align = "center";
        bullet.valign = "middle";
        // bullet.fill = am4core.color("#fff");
        bullet.fillOpacity = 0;
        // bullet.radius = 20;
    }); // end am4core.ready()
</script>

<!-- HTML -->

<body class="bg">
    <div id="chartdiv"></div>
</body>

</html>