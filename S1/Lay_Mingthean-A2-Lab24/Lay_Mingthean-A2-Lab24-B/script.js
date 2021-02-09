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
  var totalPrice = 0;

  while (amoutInKW > 200) {
    subAmount = amoutInKW - 200;
    totalPrice = totalPrice + subAmount * 2500;
    amoutInKW = amoutInKW - subAmount;
    var a = subAmount + " * 2500 = " + totalPrice + " KHR";
  }

  if (amoutInKW >= 151 && amoutInKW <= 200) {
    subAmount = amoutInKW - 150;
    totalPrice = totalPrice + subAmount * 2000;
    amoutInKW = amoutInKW - subAmount;
    var b = subAmount + " * 2000 = " + subAmount * 2000 + " KHR";
  }

  if (amoutInKW >= 101 && amoutInKW <= 150) {
    subAmount = amoutInKW - 100;
    totalPrice = totalPrice + subAmount * 1500;
    amoutInKW = amoutInKW - subAmount;
    var c = subAmount + " * 1500 = " + subAmount * 1500 + " KHR";
  }

  if (amoutInKW >= 51 && amoutInKW <= 100) {
    subAmount = amoutInKW - 50;
    totalPrice = totalPrice + subAmount * 1000;
    amoutInKW = amoutInKW - subAmount;
    var d = subAmount + " * 1000 = " + amoutInKW * 1000 + " KHR";
  }

  if (amoutInKW >= 1 && amoutInKW <= 50) {
    totalPrice = totalPrice + amoutInKW * 500;
    var e = amoutInKW + " * 500 = " + amoutInKW * 500 + " KHR";
  }

  totalPrice = totalPrice + garbageFee;
  alert(
    "Your Customer ID: " +
      cusID +
      "\n" +
      "Your Power Usage: " +
      amoutInKW +
      "\n" +
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
