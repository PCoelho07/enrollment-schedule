<template>
    <div class="card">
        <div class="card-header card-chart" data-background-color="red">
            <div class="ct-chart" id="completedTasksChart"></div>
        </div>
        <div class="card-content">
            <h4 class="title">{{ title }}</h4>
            <p class="category">{{ category }}</p>
        </div>
    </div>   
</template>

<script>
    export default {
        props: ['title', 'category'],

        data: function() {
            return {
                dataChart: {
                    labels: [],
                    series: [[]]
                },
            }
        },
        mounted: function() {
            this.init() 
        },
        methods: {
            init: function () {
                this.dataChart.labels = ['78am', '3pm', '6pm', '9pm', '12pm', '3am', '6am', '9am']
                this.dataChart.series = [
                    [230, 750, 450, 300, 280, 240, 200, 190]
                ]

                var optionsCompletedTasksChart = {
                    lineSmooth: Chartist.Interpolation.cardinal({
                        tension: 0
                    }),
                    low: 1,
                    high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                    chartPadding: { top: 0, right: 0, bottom: 0, left: 0}
                }

                var chart = new Chartist.Line('#completedTasksChart', this.dataChart, optionsCompletedTasksChart);
                this.startAnimationForLineChart(chart);

            },
            startAnimationForLineChart: function(chart){
                var seq = 0;

                chart.on('draw', function(data) {
                  if(data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                      d: {
                        begin: 600,
                        dur: 700,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                      }
                    });
                  } else if(data.type === 'point') {
                        seq++;
                        data.element.animate({
                          opacity: {
                            begin: seq * delays,
                            dur: durations,
                            from: 0,
                            to: 1,
                            easing: 'ease'
                          }
                        });
                    }
                });

                seq = 0;
            }
        }
    }
</script>
