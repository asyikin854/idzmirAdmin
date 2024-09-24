// Progress chart
var options = {
  series: [
      (sessionLeft / sessionTotal * 100).toFixed(2), 
      (sessionDone / sessionTotal * 100).toFixed(2)
  ],
  chart: {
      width: 240,
      height: 360,
      type: 'radialBar',
      offsetX: -28,
  },
  plotOptions: {
      radialBar: {
          dataLabels: {
              name: {
                  offsetY: 20,
                  color: "var(--chart-text-color)",
                  fontFamily: 'Rubik, sans-serif',
                  fontWeight: 500,
              },
              value: {
                  fontSize: '22px',
                  offsetY: -16,
                  fontFamily: 'Rubik, sans-serif',
                  fontWeight: 500,
              },
              total: {
                  show: true,
                  label: 'Task Done!',
                  fontSize: '12px',
                  formatter: function () {
                      return (sessionDone / sessionTotal * 100).toFixed(2) + "%";
                  }
              }
          },
          hollow: {
              margin: 5,
              size: '70%',
              imageWidth: 115,
              imageHeight: 115,
              imageClipped: false,
          },
          track: {
              background: 'transparent',
          }
      }
  },
  colors: ["var(--theme-deafult)", "#FFA941"],
  labels: ['Upcoming', 'Done'],
  stroke: {
      lineCap: 'round'
  },
  legend: {
      show: true,
      position: "bottom",
      horizontalAlign: 'center',
      offsetY: -15,
      fontSize: '14px',
      fontFamily: 'Rubik, sans-serif',
      fontWeight: 500,
      labels: {
          colors: "var(--chart-text-color)",
      },
      markers: {
          width: 6,
          height: 6,
      }
  },
  responsive: [
      {
          breakpoint: 1830,
          options: {
              chart: {
                  offsetX: -40,
              }
          }
      },
      {
          breakpoint: 1750,
          options: {
              chart: {
                  offsetX: -50,
              }
          }
      },
      {
          breakpoint: 1661,
          options: {
              chart: {
                  offsetX: -10,
              }
          }
      },
      {
          breakpoint: 1530,
          options: {
              chart: {
                  offsetX: -25,
              }
          }
      },
      {
          breakpoint: 1400,
          options: {
              chart: {
                  offsetX: 10,
              }
          }
      },
      {
          breakpoint: 1300,
          options: {
              chart: {
                  offsetX: -10,
              }
          }
      },
      {
          breakpoint: 1200,
          options: {
              chart: {
                  width: 255,
              }
          }
      },
      {
          breakpoint: 992,
          options: {
              chart: {
                  width: 245,
              }
          }
      },
      {
          breakpoint: 600,
          options: {
              chart: {
                  width: 225,
              }
          }
      },
  ]
};

var chart = new ApexCharts(document.querySelector("#progresschart"), options);
chart.render();

// Learning chart
var optionslearning = {
  series: [{
      name: 'growth',
      type: 'line',
      data: [25, 30, 43, 25, 38, 25, 33, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 30, 41, 25, 36, 25, 31, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 29, 37, 25, 34, 25, 29, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 28, 34, 25, 32, 25, 28, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 27, 30, 25, 28, 25, 27, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 26, 24, 25, 24, 25, 24, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 26, 20, 25, 21, 25, 23, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 24, 16, 25, 18, 25, 22, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 23, 12, 25, 15, 25, 21, 25]
  },
  {
      name: 'growth',
      type: 'line',
      data: [25, 23, 10, 25, 13, 25, 19, 25]
  },
  {
      name: 'growth',
      type: 'area',
      data: [25, 28, 37, 25, 33, 25, 27, 25]
  }
  ],
  chart: {
      height: 315,
      type: 'line',
      toolbar: {
          show: false
      }
  },
  grid: {
      show: true,
      borderColor: 'var(--chart-border)',
      xaxis: {
          lines: {
              show: true
          }
      },
  },
  colors: ["var(--theme-deafult)", "#F47DEA", "#FFA941", "#FFC200", "#54BA4A", "#3DA831",
      "#57B9F6", "#FF3377", "#773ACE", "#945CFF", "#7366ff"],
  stroke: {
      width: 1.5,
      curve: 'smooth'
  },
  markers: {
      discrete: [{
          seriesIndex: 0,
          dataPointIndex: 0,
          fillColor: '#7064F5',
          strokeColor: 'var(--white)',
          size: 6,
      }, {
          seriesIndex: 1,
          dataPointIndex: 5,
          fillColor: '#7064F5',
          strokeColor: 'var(--white)',
          size: 6,
      },
      {
          seriesIndex: 2,
          dataPointIndex: 3,
          fillColor: '#7064F5',
          strokeColor: 'var(--white)',
          size: 6,
      },
      ],
  },
  tooltip: {
      shared: false,
      intersect: false,
  },
  xaxis: {
      type: 'category',
      categories: ['Sep 5', 'Sep 8', 'Sep 12', 'Sep 16', 'Sep 18', 'Sep 17', 'Sep 23', 'Sep 26'],
      tickAmount: 12,
      labels: {
          style: {
              colors: "var(--chart-text-color)",
              fontSize: '12px',
              fontFamily: 'Rubik, sans-serif',
              fontWeight: 400,
          }
      },
      axisTicks: {
          show: false
      },
      axisBorder: {
          show: false
      },
      tooltip: {
          enabled: false
      }
  },
  fill: {
      type: ['solid', 'solid', 'solid', 'solid', 'solid', 'solid', 'solid', 'solid', 'solid', 'solid', 'gradient'],
      gradient: {
          shade: 'light',
          type: "vertical",
          shadeIntensity: 0.5,
          opacityFrom: 0.5,
          opacityTo: 0,
          stops: [0, 80, 100],
      },
  },
  yaxis: {
      min: 0,
      max: 50,
      tickAmount: 5,
      labels: {
          style: {
              colors: "var(--chart-text-color)",
              fontSize: '12px',
              fontFamily: 'Rubik, sans-serif',
              fontWeight: 400,
          }
      },
  },
  legend: {
      show: false
  },
  responsive: [
      {
          breakpoint: 1661,
          options: {
              chart: {
                  height: 265,
              }
          }
      },
  ]
};

var learningchart = new ApexCharts(document.querySelector("#learning-chart"), optionslearning);
learningchart.render();

// Activity chart
var optionsactivity = {
  series: [{
      name: 'Activity',
      data: [2, 4, 2.5, 1.5, 5.5, 1.5, 4]
  }],
  chart: {
      height: 300,
      type: 'bar',
      toolbar: {
          show: false
      },
      dropShadow: {
          enabled: true,
          top: 10,
          left: 0,
          blur: 5,
          color: "#7064F5",
          opacity: 0.35
      }
  },
  plotOptions: {
      bar: {
          horizontal: false,
          columnWidth: '20%',
          endingShape: 'rounded',
      },
  },
  dataLabels: {
      enabled: false
  },
  grid: {
      show: true,
      borderColor: 'var(--chart-border)',
      xaxis: {
          lines: {
              show: true
          }
      },
  },
  stroke: {
      show: true,
      width: 4,
      colors: ['transparent']
  },
  colors: ["var(--theme-deafult)"],
  xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      tickAmount: 12,
      labels: {
          style: {
              colors: "var(--chart-text-color)",
              fontSize: '12px',
              fontFamily: 'Rubik, sans-serif',
              fontWeight: 400,
          }
      },
      axisTicks: {
          show: false
      },
      axisBorder: {
          show: false
      },
      tooltip: {
          enabled: false
      }
  },
  fill: {
      opacity: 1
  },
  yaxis: {
      min: 0,
      max: 6,
      tickAmount: 3,
      labels: {
          style: {
              colors: "var(--chart-text-color)",
              fontSize: '12px',
              fontFamily: 'Rubik, sans-serif',
              fontWeight: 400,
          }
      },
  },
  tooltip: {
      y: {
          formatter: function (val) {
              return val.toFixed(2);
          }
      }
  },
  responsive: [
      {
          breakpoint: 1661,
          options: {
              chart: {
                  height: 230,
              }
          }
      },
  ]
};

var activitychart = new ApexCharts(document.querySelector("#activity-chart"), optionsactivity);
activitychart.render();
