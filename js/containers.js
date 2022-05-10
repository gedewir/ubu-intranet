function createBox(name, url, image) {
var div = document.createElement('div');
div.classList.add('col-xl');
div.textContent = name;
var box = document.getElementById('box');
box.appendChild(div);
                        }

var dataset;

d3.csv("admin.csv", function(data) {
  dataset = data
  print1()
                                  });

function print1() {
  createBox(dataset.website);
                  };
