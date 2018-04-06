$(document).ready(function(){
	
	$.ajax({
        type: 'GET',
        url: "getData.php",
        dataType: "json",  
    })
	.done(function(data) {
        console.log(data);
	});
	
	

	Highcharts.chart('chartContainer', {

		title: {
			text: 'Expressions of Interest'
		},

		yAxis: {
			title: {
				text: 'Number of Subscriptions'
			}
		},
		
		legend: {
			enabled: false
		},

		plotOptions: {
			series: {
				pointStart: 2010
			}
		},

		series: [{
			name: 'Number of Expressions',
			type: 'spline',
			data: [
				[0, 1],
				[1, 2],
				[2, 5],
				[3, 1]
			]
		}],

		responsive: {
			rules: [{
				condition: {
					maxWidth: 500
				},
				chartOptions: {
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom'
					}
				}
			}]
		}

	});
});