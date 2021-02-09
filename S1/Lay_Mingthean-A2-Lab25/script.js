var text = " Hello World";
var textLen = text.length;
var rightToLeft;
var leftToRight;
var topToBottom;
var bottomToTop;

var rightCounter = 0;
var leftCounter = 0;
var topCounter = 0;
var bottomCounter = 0;

start();

function start() {
  rightToLeft = setInterval(rightFunction, 300);
  leftToRight = setInterval(leftFunction, 300);
  topToBottom = setInterval(topFunction, 300);
  bottomToTop = setInterval(bottomFunction, 300);
}

function stop() {
  clearInterval(leftToRight);
  clearInterval(rightToLeft);
  clearInterval(topToBottom);
  clearInterval(bottomToTop);
}

function rightFunction() {
  var temp = text.substr(0, leftCounter + 1);
  document.getElementById("right").innerText = temp;
  rightCounter++;
  if (rightCounter > textLen) {
    rightCounter = 0;
  }
}

function leftFunction() {
  var temp = text.substr(leftCounter, textLen);
  document.getElementById("left").innerText = temp;
  leftCounter++;
  if (leftCounter > textLen) {
    leftCounter = 0;
  }
}

function topFunction() {
  var temp = text.substring(0, topCounter + 1);
  document.getElementById("top").innerText = temp;
  topCounter++;
  if (topCounter > textLen) {
    topCounter = 0;
  }
}

function bottomFunction() {
  var temp = text.substring(bottomCounter, textLen);
  document.getElementById("bottom").innerText = temp;
  bottomCounter++;
  if (bottomCounter > textLen) {
    bottomCounter = 0;
  }
}
