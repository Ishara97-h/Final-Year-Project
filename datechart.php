
<?php
session_start();  
 $connect = mysqli_connect("localhost", "root", "", "asa");  
 $query = "SELECT Month(Date), count(*) as number FROM medical_record";  
 $result = mysqli_query($connect, $query);  
 ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load('visualization', '1', {packages: ['controls', 'charteditor']});
google.setOnLoadCallback(drawChart);

function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('date', 'X');
    data.addColumn('number', 'Y1');
    data.addColumn('number', 'Y2');

    data.addRow([new Date(2016,  0, 1), 1,123]);
    data.addRow([new Date(2016,  1, 1), 6,42 ]);
    data.addRow([new Date(2016,  2, 1), 4,49 ]);
    data.addRow([new Date(2016,  3, 1), 23,486 ]);
    data.addRow([new Date(2016,  4, 1), 89,476 ]);
    data.addRow([new Date(2016,  5, 1), 46,444 ]);
    data.addRow([new Date(2016,  6, 1), 178,442 ]);
    data.addRow([new Date(2016,  7, 1), 12,274 ]);
    data.addRow([new Date(2016,  8, 1), 123,4934 ]);
    data.addRow([new Date(2016,  9, 1), 144,4145 ]);
    data.addRow([new Date(2016, 10, 1), 135,946 ]);
    data.addRow([new Date(2016, 11, 1), 178,747 ]);

    var dash = new google.visualization.Dashboard(document.getElementById('dashboard'));

    var control = new google.visualization.ControlWrapper({
        controlType: 'ChartRangeFilter',
        containerId: 'control_div',
        options: {
            filterColumnIndex: 0,
            ui: {
                chartOptions: {
                    height: 50,
                    width: 600,
                    chartArea: {
                        width: '80%'
                    }
                },
                chartView: {
                    columns: [0, 1]
                }
            }
        }
    });

    var chart = new google.visualization.ChartWrapper({
        chartType: 'LineChart',
        containerId: 'chart_div'
    });
    function setOptions (wrapper) {
        wrapper.setOption('width', 620);
        wrapper.setOption('chartArea.width', '80%');
    }

    setOptions(chart);

    dash.bind([control], [chart]);
    dash.draw(data);
    google.visualization.events.addListener(control, 'statechange', function () {
        var v = control.getState();
        document.getElementById('dbgchart').innerHTML = v.range.start+ ' to ' +v.range.end;
        return 0;
    });
}
</script>

<div id="dashboard">
    <div id="chart_div"></div>
    <div id="control_div"></div>
    <p><span id='dbgchart'></span></p>
</div>