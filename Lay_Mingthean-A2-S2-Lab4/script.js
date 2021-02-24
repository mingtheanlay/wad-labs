var x = document.getElementsByClassName("example");
var i;
for (i = 0; i < x.length; i++) {
  x[i].style.color = "red";
}

document.getElementById("exampleSelectById").innerHTML =
  " document.getElementById('exampleSelectById').innerHTML = 'Hello World'";

function TagElement() {
  document.getElementsByTagName("p")[5].innerHTML = "Hello World!";
}

function createNew() {
  var btn = document.createElement("BUTTON");
  btn.innerHTML = "CLICK ME";
  document.body.appendChild(btn);
}

function appendNew() {
  var para = document.createElement("P");
  para.innerHTML = "This is a paragraph.";
  document.getElementById("append-child").appendChild(para);
}

var append = document.getElementById("append");
append.onclick = appendNew();

console.log(document.head);
console.log(document.body);

//method DOM HTML
function Test() {
  document.getElementById("example1").innerHTML =
    "getElementById is a method, while innerHTML is a property.";
}
function myFunction() {
  var ex = document.getElementsByTagName("li");
  document.getElementById("example2").innerHTML = ex[2].innerHTML;
}
function TestClassName() {
  var ex = document.getElementsByClassName("example3");
  ex[0].innerHTML = "Hello World!";
}

function NewHtmlContent() {
  document.getElementById("example4").innerHTML = "Paragraph changed!";
}

function NewTagElement() {
  document.getElementsByTagName("H2")[3].setAttribute("class", "classexample");
}
function HtmlDOMStyle() {
  document.getElementById("myH1").style.color = "red";
}
function CreateElement() {
  var btn = document.createElement("button");
  btn.innerHTML = "New Button";
  document.body.appendChild(btn);
}
function RemoveElement() {
  var list = document.getElementById("myList");
  list.removeChild(list.childNodes[0]);
}

function AppendElement() {
  var node = document.createElement("LI");
  var textnode = document.createTextNode("Water");
  node.appendChild(textnode);
  document.getElementById("myList2").appendChild(node);
}

function ReplaceChild() {
  var textnode = document.createTextNode("Water");
  var item = document.getElementById("myList3").childNodes[1];
  item.replaceChild(textnode, item.childNodes[1]);
}

function AnchorCollection() {
  var x = document.anchors.length;
  document.getElementById("demo").innerHTML = x;
}

function BaseUrl() {
  var x = document.baseURI;
  document.getElementById("baseurl").innerHTML = x;
}

function ChangeBackgroundColor() {
  document.body.style.backgroundColor = "lightGreen";
}

function DocumentElement() {
  var x = document.documentElement.nodeName;
  document.getElementById("DE").innerHTML = x;
}

function DocumentUrl() {
  var x = document.documentURI;
  document.getElementById("DU").innerHTML = x;
}

function FindDomain() {
  var x = document.domain;
  document.getElementById("domain").innerHTML = x;
}

function myEmbed() {
  var x = document.embeds.length;
  document.getElementById("embed").innerHTML = x;
}

function FormLength() {
  var x = document.forms.length;
  document.getElementById("formlength").innerHTML = x;
}

function FindHeadID() {
  var x = document.head.id;
  document.getElementById("headID").innerHTML = x;
}

function Implement() {
  var imp = document.implementation;
  document.getElementById("implement").innerHTML = imp.hasFeature(
    "HTML",
    "1.0"
  );
}

function InputEncoding() {
  var x = document.inputEncoding;
  document.getElementById("encoding").innerHTML = x;
}

function ReadyState() {
  var x = document.readyState;
  document.getElementById("ready").innerHTML = x;
}

function Referer() {
  var x = document.referrer;
  document.getElementById("referer").innerHTML = x;
}

function myScript() {
  var x = document.scripts.length;
  document.getElementById("script").innerHTML =
    "Found " + x + " script elements.";
}

function showTitle() {
  var x = document.title;
  document.getElementById("title").innerHTML = x;
}

function FindHtmlElement() {
  var x = document.forms["frm1"];
  var text = "";
  var i;
  for (i = 0; i < x.length; i++) {
    text += x.elements[i].value + "<br>";
  }
  document.getElementById("htmlelement").innerHTML = text;
}

var id;
function Move() {
  var elem = document.getElementById("animate");
  var pos = 0;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (pos == 350) {
      clearInterval(id);
    } else {
      pos++;
      elem.style.top = pos + "px";
      elem.style.left = pos + "px";
    }
  }
}
