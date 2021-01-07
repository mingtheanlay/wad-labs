var cusID;
var amoutInKW;
var trash;
var garbageFee;
var totalPrice;

function Application() {
  alert("សូមស្វាគមន៍មកកាន់អគ្គីសនីកម្ពុជា");
  cusID = prompt("Please Input Your Customer ID");
  amoutInKW = prompt("Please Input Your Power Usage");
  trash = confirm("Do you want to include garbage fee?");
  if (trash == true) {
    garbageFee = 4000;
  } else {
    garbageFee = 0;
  }
  Calculate();
}

function Calculate() {
  var subAmount = 0;
  var forOutput = 0;
  var totalPrice = 0;

  while (amoutInKW > 200) {
    subAmount = amoutInKW - 200;
    totalPrice = totalPrice + subAmount * 2500;
    amoutInKW = amoutInKW - subAmount;
    forOutput = forOutput + subAmount;
    var a = forOutput + " * 2500 = " + totalPrice + " KHR";
  }

  if (amoutInKW >= 151 && amoutInKW <= 200) {
    subAmount = amoutInKW - 150;
    totalPrice = totalPrice + subAmount * 2000;
    amoutInKW = amoutInKW - subAmount;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    var b = forOutput + " * 2000 = " + subAmount * 2000 + " KHR";
  }

  if (amoutInKW >= 101 && amoutInKW <= 150) {
    subAmount = amoutInKW - 100;
    totalPrice = totalPrice + subAmount * 1500;
    amoutInKW = amoutInKW - subAmount;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    var c = forOutput + " * 1000 = " + subAmount * 1500 + " KHR";
  }

  if (amoutInKW >= 51 && amoutInKW <= 100) {
    subAmount = amoutInKW - 50;
    totalPrice = totalPrice + subAmount * 1000;
    amoutInKW = amoutInKW - subAmount;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    var d = forOutput + " * 1000 = " + subAmount * 1000 + " KHR";
  }

  if (amoutInKW >= 1 && amoutInKW <= 50) {
    totalPrice = totalPrice + amoutInKW * 500;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    var e = forOutput + " * 500 = " + subAmount * 500 + " KHR";
  }

  totalPrice = totalPrice + garbageFee;
  alert(
    e +
      "\n" +
      d +
      "\n" +
      c +
      "\n" +
      b +
      "\n" +
      a +
      "\n" +
      "Garbage Fee: " +
      garbageFee +
      " KHR" +
      "\n" +
      "Your Total Price: " +
      totalPrice +
      " KHR" +
      "\n"
  );
}
