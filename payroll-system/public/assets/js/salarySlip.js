
    $(function(){

      // Initialize card flip
      $('.card.hover').hover(function(){
        $(this).addClass('flip');
      },function(){
        $(this).removeClass('flip');
      });

      // Initialize flot chart
      var d1 =[ [1, 715],
            [2, 985],
            [3, 1525],
            [4, 1254],
            [5, 1861],
            [6, 2621],
            [7, 1987],
            [8, 2136],
            [9, 2364],
            [10, 2851],
            [11, 1546],
            [12, 2541]
      ];
      var d2 =[ [1, 463],
                [2, 578],
                [3, 327],
                [4, 984],
                [5, 1268],
                [6, 1684],
                [7, 1425],
                [8, 1233],
                [9, 1354],
                [10, 1200],
                [11, 1260],
                [12, 1320]
      ];
      var months = ["January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"];

      // flot chart generate
      var plot = $.plotAnimator($("#statistics-chart"), 
        [
          {
            label: 'Sales', 
            data: d1,    
            lines: {lineWidth:3}, 
            shadowSize:0,
            color: '#ffffff'
          },
          { label: "Visits",
            data: d2, 
            animator: {steps: 99, duration: 500, start:200, direction: "right"},   
            lines: {        
              fill: .15,
              lineWidth: 0
            },
            color:['#ffffff']
          },{
            label: 'Sales',
            data: d1, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(0,0,0,.5)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          },
          { label: "Visits",
            data: d2, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(255,255,255,.2)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          }
        ],{ 
        
        xaxis: {

          tickLength: 0,
          tickDecimals: 0,
          min:1,
          ticks: [[1,"JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"]],

          font :{
            lineHeight: 24,
            weight: "300",
            color: "#ffffff",
            size: 14
          }
        },
        
        yaxis: {
          ticks: 4,
          tickDecimals: 0,
          tickColor: "rgba(255,255,255,.3)",

          font :{
            lineHeight: 13,
            weight: "300",
            color: "#ffffff"
          }
        },
        
        grid: {
          borderWidth: {
            top: 0,
            right: 0,
            bottom: 1,
            left: 1
          },
          borderColor: 'rgba(255,255,255,.3)',
          margin:0,
          minBorderMargin:0,              
          labelMargin:20,
          hoverable: true,
          clickable: true,
          mouseActiveRadius:6
        },
        
        legend: { show: false}
      });

      $(window).resize(function() {
        // redraw the graph in the correctly sized div
        plot.resize();
        plot.setupGrid();
        plot.draw();
      });

      $('#mmenu').on(
        "opened.mm",
        function()
        {
          // redraw the graph in the correctly sized div
          plot.resize();
          plot.setupGrid();
          plot.draw();
        }
      );

      $('#mmenu').on(
        "closed.mm",
        function()
        {
          // redraw the graph in the correctly sized div
          plot.resize();
          plot.setupGrid();
          plot.draw();
        }
      );

      // tooltips showing
      $("#statistics-chart").bind("plothover", function (event, pos, item) {
        if (item) {
          var x = item.datapoint[0],
              y = item.datapoint[1];

          $("#tooltip").html('<h1 style="color: #418bca">' + months[x - 1] + '</h1>' + '<strong>' + y + '</strong>' + ' ' + item.series.label)
            .css({top: item.pageY-30, left: item.pageX+5})
            .fadeIn(200);
        } else {
          $("#tooltip").hide();
        }
      });
 
      //tooltips options
      $("<div id='tooltip'></div>").css({
        position: "absolute",
        //display: "none",
        padding: "10px 20px",
        "background-color": "#ffffff",
        "z-index":"99999"
      }).appendTo("body");

      //todo's
      $('#todolist li label').click(function() {
        $(this).toggleClass('done');
      });

      // Initialize tabDrop
      $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});

      //load wysiwyg editor
      $('#quick-message-content').summernote({
        toolbar: [
          //['style', ['style']], // no style button
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          //['insert', ['picture', 'link']], // no insert buttons
          //['table', ['table']], // no table button
          //['help', ['help']] //no help button
        ],
        height: 143   //set editable area's height
      });

      //multiselect input
      $(".chosen-select").chosen({disable_search_threshold: 10});
      
    })
      