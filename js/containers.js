function createBox(name, url, image) {
var div = document.createElement('div');
div.classList.add('col-sm');
div.classList.add('text-center');
div.innerHTML = '<a href="'+url+'">'+ '<img src="'+image+'" id="box-images" />' + '</br>' + name + '</a>' ;
var box = document.getElementById('box');
box.appendChild(div);
console.log(div);
                        }

var dataset;

d3.csv("admin.csv", function(data) {
  dataset = data
  print1()
                                  });

function print1() {
  createBox(dataset.website, dataset.url, dataset.image);
                  };
