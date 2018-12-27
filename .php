<!DOCTYPE html>
<head>

	<style>
		.left,.canvas{
			height:100px;
			border:1px dotted black;
		}
	</style>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>	
	
	<script src='https://d3js.org/d3.v3.min.js'></script>
	
</head>
	<body>
		<div class='col-md-12'>
			
			
         <div class="col-md-12">
            <div class="col-md-6 chart ui-draggable ui-draggable-handle ui-resizable" style="border: 1px solid rgb(197, 203, 214);"><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><svg viewBox="0 -15 620 290"><g transform="translate(40,20)"><g class="x axis" transform="translate(0,210)"><g class="tick" transform="translate(58.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line><text dy="-.55em" y="9" x="0" dx="-.8em" transform="rotate(-90)" style="text-anchor: end;">A</text></g><g class="tick" transform="translate(164.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line><text dy="-.55em" y="9" x="0" dx="-.8em" transform="rotate(-90)" style="text-anchor: end;">Satya</text></g><g class="tick" transform="translate(270.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line><text dy="-.55em" y="9" x="0" dx="-.8em" transform="rotate(-90)" style="text-anchor: end;">C</text></g><g class="tick" transform="translate(376.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line><text dy="-.55em" y="9" x="0" dx="-.8em" transform="rotate(-90)" style="text-anchor: end;">D</text></g><g class="tick" transform="translate(482.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line><text dy="-.55em" y="9" x="0" dx="-.8em" transform="rotate(-90)" style="text-anchor: end;">E</text></g><path class="domain" d="M0,6V0H540V6"></path></g><g class="y axis"><g class="tick" transform="translate(0,210)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">0</text></g><g class="tick" transform="translate(0,190.55555555555557)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">5</text></g><g class="tick" transform="translate(0,171.11111111111111)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">10</text></g><g class="tick" transform="translate(0,151.66666666666666)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">15</text></g><g class="tick" transform="translate(0,132.22222222222223)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">20</text></g><g class="tick" transform="translate(0,112.77777777777777)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">25</text></g><g class="tick" transform="translate(0,93.33333333333333)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">30</text></g><g class="tick" transform="translate(0,73.88888888888889)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">35</text></g><g class="tick" transform="translate(0,54.44444444444445)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">40</text></g><g class="tick" transform="translate(0,34.99999999999999)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">45</text></g><g class="tick" transform="translate(0,15.555555555555555)" style="opacity: 1;"><line x2="-6" y2="0"></line><text dy=".32em" x="-9" y="0" style="text-anchor: end;">50</text></g><path class="domain" d="M-6,0H0V210H-6"></path><text transform="rotate(-90)" y="5" dy=".71em" style="text-anchor: end;">Frequency</text></g><rect class="bar" x="8" width="101" y="132.22222222222223" height="77.77777777777777" style="fill: steelblue;"></rect><rect class="bar" x="114" width="101" y="163.33333333333334" height="46.66666666666666" style="fill: steelblue;"></rect><rect class="bar" x="220" width="101" y="27.222222222222225" height="182.77777777777777" style="fill: steelblue;"></rect><rect class="bar" x="326" width="101" y="77.77777777777777" height="132.22222222222223" style="fill: steelblue;"></rect><rect class="bar" x="432" width="101" y="0" height="210" style="fill: steelblue;"></rect></g></svg></div>
            <div class="col-md-6 chart1 ui-draggable ui-draggable-handle ui-resizable" style="border: 1px solid rgb(197, 203, 214);"><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><svg viewBox="0 -15 380 300"><g transform="translate(100,100)"><g class="slice"><path fill="#1f77b4" d="M-93.34680207204524,-35.86606394521723A100,100 0 0,1 -43.63034501347462,-89.97995884642962L0,0Z"></path><text transform="translate(-36.81970637874134,-33.82763991447341)" text-anchor="middle">A</text></g><g class="slice"><path fill="#ff7f0e" d="M-43.63034501347462,-89.97995884642962A100,100 0 0,1 -1.0718754395722282e-13,-100L0,0Z"></path><text transform="translate(-11.191537625350243,-48.73140143255035)" text-anchor="middle">Satya</text></g><g class="slice"><path fill="#2ca02c" d="M89.56559902169658,44.47475094797794A100,100 0 0,1 -61.18660185779442,79.09614246659409L0,0Z"></path><text transform="translate(11.191537625350216,48.731401432550356)" text-anchor="middle">C</text></g><g class="slice"><path fill="#d62728" d="M-61.18660185779442,79.09614246659409A100,100 0 0,1 -93.34680207204524,-35.86606394521723L0,0Z"></path><text transform="translate(-48.151377078708045,13.470147936235488)" text-anchor="middle">D</text></g><g class="slice"><path fill="#9467bd" d="M6.123233995736766e-15,-100A100,100 0 0,1 89.56559902169658,44.47475094797794L0,0Z"></path><text transform="translate(42.496286741899276,-26.34512503576849)" text-anchor="middle">E</text></g></g></svg></div>
            <script>
               function generateGraph(datas){
               
               
               var data = datas;
               
               
                data = JSON.parse(data);
               
               var margin = {top: 20, right: 20, bottom: 70, left: 40},
                width = 600 - margin.left - margin.right,
                height = 300 - margin.top - margin.bottom;
               
               
              
               var x = d3.scale.ordinal().rangeRoundBands([0, width], .05);
               
               var y = d3.scale.linear().range([height, 0]);
               
              
               var xAxis = d3.svg.axis()
                .scale(x)
                .orient("bottom")
               
               
               var yAxis = d3.svg.axis()
                .scale(y)
                .orient("left")
                .ticks(10);
               
               
              
               var svg = d3.select(".chart").append("svg")
                 .attr('viewBox', '0 -15 ' + (width+80) + ' ' + (height+80))
               .append("g")
                .attr("transform", 
                      "translate(" + margin.left + "," + margin.top + ")");
               
                
               
               
                data.forEach(function(d) {
                    d.Letter = d.Letter;
                    d.Freq = +d.Freq;
                });
               
              
               x.domain(data.map(function(d) { return d.Letter; }));
               y.domain([0, d3.max(data, function(d) { return d.Freq; })]);
               
               
               svg.append("g")
                  .attr("class", "x axis")
                  .attr("transform", "translate(0," + height + ")")
                  .call(xAxis)
                .selectAll("text")
                  .style("text-anchor", "end")
                  .attr("dx", "-.8em")
                  .attr("dy", "-.55em")
                  .attr("transform", "rotate(-90)" );
               
               svg.append("g")
                  .attr("class", "y axis")
                  .call(yAxis)
                .append("text")
                  .attr("transform", "rotate(-90)")
                  .attr("y", 5)
                  .attr("dy", ".71em")
                  .style("text-anchor", "end")
                  .text("Frequency");
               
               
               // Add bar chart
               svg.selectAll("bar")
                  .data(data)
                .enter().append("rect")
                  .attr("class", "bar")
               .style("fill","steelblue")
                  .attr("x", function(d) { return x(d.Letter); })
                  .attr("width", x.rangeBand())
                  .attr("y", function(d) { return y(d.Freq); })
                  .attr("height", function(d) { return height - y(d.Freq); });
               
               
               }
            </script>
            <script>
               function generateGraph1(datas){
               
               var data = datas;
               			
               			
               			 data = JSON.parse(data);
               
               
                   var w = 200,                        
                   h = 300,                            
                   r = 100,                            
                   color = d3.scale.category10();     
               
                  
                   
                   var vis = d3.select(".chart1")
                       .append("svg:svg")              
                       .data([data])                  
                            .attr('viewBox', '0 -15 ' + (w+180) + ' ' + (h))
                       .append("svg:g")               
                           .attr("transform", "translate(" + r + "," + r + ")")   
               
                   var arc = d3.svg.arc()              
                       .outerRadius(r);
               
                   var pie = d3.layout.pie()           
                       .value(function(d) { return d.Freq; });    
               
                   var arcs = vis.selectAll("g.slice")     
                       .data(pie)                          
                       .enter()                           
                           .append("svg:g")                
                               .attr("class", "slice");   
               
                       arcs.append("svg:path")
                               .attr("fill", function(d, i) { return color(i); } ) 
                               .attr("d", arc);                                    
               
                       arcs.append("svg:text")                                   
                               .attr("transform", function(d) {                    
                              
                               d.innerRadius = 0;
                               d.outerRadius = r;
                               return "translate(" + arc.centroid(d) + ")";        
                           })
                           .attr("text-anchor", "middle")                         
                           .text(function(d, i) { return data[i].Letter; });       
               
               
               
               }
               
            </script>
         </div>
      
			
		</div>
		
		
		
	
		
	</body>
</html>