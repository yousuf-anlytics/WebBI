function generateGraph(datas) {

	var data = datas;

	data = JSON.parse(data);

	var margin = {
		top : 20,
		right : 20,
		bottom : 70,
		left : 40
	}, width = 600 - margin.left - margin.right, height = 300 - margin.top
			- margin.bottom;

	var x = d3.scale.ordinal().rangeRoundBands([ 0, width ], .05);

	var y = d3.scale.linear().range([ height, 0 ]);

	var xAxis = d3.svg.axis().scale(x).orient("bottom").tickSize(1);

	var yAxis = d3.svg.axis().scale(y).orient("left").ticks(10).tickSize(1);

	var svg = d3.select(".chart").append("svg").attr('viewBox',
			'0 -15 ' + (width + 80) + ' ' + (height + 80)).append("g").attr(
			"transform", "translate(" + margin.left + "," + margin.top + ")");

	data.forEach(function(d) {
		d.Letter = d.Letter;
		d.Freq = +d.Freq;
	});

	x.domain(data.map(function(d) {
		return d.Letter;
	}));
	y.domain([ 0, d3.max(data, function(d) {
		return d.Freq;
	}) ]);

	svg.append("g").attr("class", "x axis").attr("transform",
			"translate(0," + height + ")").call(xAxis).selectAll("text").style(
			"text-anchor", "end").attr("dx", "-.8em").attr("dy", "-.55em")
			.attr("transform", "rotate(-90)");

	svg.append("g").attr("class", "y axis").call(yAxis).append("text").attr(
			"transform", "rotate(-90)").attr("y", 5).attr("dy", ".71em").style(
			"text-anchor", "end");

	// Add bar chart
	svg.selectAll("bar").data(data).enter().append("rect").attr("class", "bar")
			.style("fill", "steelblue").attr("x", function(d) {
				return x(d.Letter);
			}).attr("width", x.rangeBand()).attr("y", function(d) {
				return y(d.Freq);
			}).attr("height", function(d) {
				return height - y(d.Freq);
			});

}

function generateGraph1(datas) {

	var data = datas;

	data = JSON.parse(data);

	var w = 200, h = 300, r = 100, color = d3.scale.category10();

	var vis = d3.select(".chart1").append("svg:svg").data([ data ]).attr(
			'viewBox', '0 -15 ' + (w + 180) + ' ' + (h)).append("svg:g").attr(
			"transform", "translate(" + r + "," + r + ")")

	var arc = d3.svg.arc().outerRadius(r);

	var pie = d3.layout.pie().value(function(d) {
		return d.Freq;
	});

	var arcs = vis.selectAll("g.slice").data(pie).enter().append("svg:g").attr(
			"class", "slice");

	arcs.append("svg:path").attr("fill", function(d, i) {
		return color(i);
	}).attr("d", arc);

	arcs.append("svg:text").attr("transform", function(d) {

		d.innerRadius = 0;
		d.outerRadius = r;
		return "translate(" + arc.centroid(d) + ")";
	}).attr("text-anchor", "middle").text(function(d, i) {
		return data[i].Letter;
	});

}
