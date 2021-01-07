var customerID = document.getElementById("id").value;
var amount = parseFloat(document.getElementById("amount").value);
var trashPrice = 0;
var totalPrice = 0;

function Calculate() {
  customerID = document.getElementById("id").value;
  amount = parseFloat(document.getElementById("amount").value);
  document.getElementById("customer-id").innerHTML = customerID;
  document.getElementById("amount-output").innerHTML = amount + " KW/H";
  if (document.getElementById("trash").checked == true) {
    document.getElementById("trash-price").innerHTML = "4000 KHR";
    trashPrice = 4000;
  } else {
    document.getElementById("trash-price").innerHTML = "គ្មានថ្លៃសំរាម";
  }
  Total();
  document.getElementById("price").innerHTML = totalPrice + " KHR";
}

function Reset() {
  document.getElementById("id").value = "";
  document.getElementById("amount").value = "";
  document.getElementById("trash").checked = false;
  document.getElementById("customer-id").innerHTML = "";
  document.getElementById("amount-output").innerHTML = "";
  document.getElementById("trash-price").innerHTML = "";
  document.getElementById("price").innerHTML = "";
  document.getElementById("a").innerHTML = "";
  document.getElementById("b").innerHTML = "";
  document.getElementById("c").innerHTML = "";
  document.getElementById("d").innerHTML = "";
  document.getElementById("e").innerHTML = "";
  trashPrice = 0;
  totalPrice = 0;
  forOutput = 0;
  subAmount = 0;
  customerID = 0;
  amount = 0;
}

function Total() {
  var subAmount = 0;
  var forOutput = 0;

  while (amount > 200) {
    subAmount = amount - 200;
    totalPrice = totalPrice + subAmount * 2500;
    amount = amount - subAmount;
    forOutput = forOutput + subAmount;
    document.getElementById("e").innerHTML =
      forOutput + " * 2500 = " + totalPrice + " KHR";
  }

  if (amount >= 151 && amount <= 200) {
    subAmount = amount - 150;
    totalPrice = totalPrice + subAmount * 2000;
    amount = amount - subAmount;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    document.getElementById("d").innerHTML =
      forOutput + " * 2000 = " + subAmount * 2000 + " KHR";
  }

  if (amount >= 101 && amount <= 150) {
    subAmount = amount - 100;
    totalPrice = totalPrice + subAmount * 1500;
    amount = amount - subAmount;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    document.getElementById("c").innerHTML =
      forOutput + " * 1000 = " + subAmount * 1500 + " KHR";
  }

  if (amount >= 51 && amount <= 100) {
    subAmount = amount - 50;
    totalPrice = totalPrice + subAmount * 1000;
    amount = amount - subAmount;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    document.getElementById("b").innerHTML =
      forOutput + " * 1000 = " + subAmount * 1000 + " KHR";
  }

  if (amount >= 1 && amount <= 50) {
    totalPrice = totalPrice + amount * 500;
    forOutput = 0;
    forOutput = forOutput + subAmount;
    document.getElementById("a").innerHTML =
      forOutput + " * 500 = " + subAmount * 500 + " KHR";
  }

  totalPrice = totalPrice + trashPrice;
}
