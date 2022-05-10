var date = new Date()
var dateHour = date.getHours()
var time;

if (dateHour > 12) {
  time = (dateHour - 12) + 'PM';
} else if (dateHour < 12) {
  time = dateHour + 'AM';
};

var text = ('The time is currently: ' + time)

function createTime(timeTitle){
  var div = document.createElement('div');
  div.classList.add('col-xxl');
  div.textContent = timeTitle;
  var current = document.getElementById('current');
  current.appendChild(div);
}

createTime(text);
