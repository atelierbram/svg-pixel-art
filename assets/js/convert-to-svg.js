d3main();

function d3main() {
  var w = 32;
  var h = 32;

  d3.select('body')
    .append('canvas')
    .attr('id', 'canvas')
    .attr('width', w)
    .attr('height', h)
    .attr('style', 'display: none;');

  var canvas = document.getElementById('canvas');
  var ctx = canvas.getContext('2d');

  imgObj.onload = function() {
    ctx.drawImage(imgObj, 0, 0);

    var imgData = ctx.getImageData(0, 0, w, h);

    var imgDataArray  = [];
    for(var i=0; i < imgData.width * imgData.height * 4 ; i+=4){
      imgDataArray.push( {
r:imgData.data[i],
g:imgData.data[i+1],
b:imgData.data[i+2],
color:(function(r,g,b){
  return ((((0<<8)+r<<8)+g<<8)+b);
  })
(imgData.data[i], imgData.data[i+1], imgData.data[i+2])
} );
}

var svg = d3.select('#svg-container').append('svg')
.attr('xmlns','http://www.w3.org/2000/svg')
.attr('version','1.1')
.attr('width', 512)
.attr('height', 512)
.attr('viewBox','0 0 512 512')
.attr('enable-background','new 0 0 512 512')
.attr('id', 'svgPic')
.attr('class', 'svg-pic');

  svg.selectAll("rect")
  .data(imgDataArray)
.enter()
  .append("svg:rect")
  .attr('x', function(d, i){ return (i % w) * 16;})
  .attr('y', function(d, i){ return Math.floor(i / w) * 16;})
  .attr('fill', function(d, i){ return  "#" + d.color.toString(16);})
  .attr('class', function(d, i){ return  "pixel c-" + d.color.toString(16);})
  .attr('width', 16)
  .attr('height', 16);

  };
}
