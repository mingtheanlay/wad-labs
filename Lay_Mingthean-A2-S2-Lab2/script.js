const buttonSubmit = document.querySelector("[btn-submit]");
const displayCoin = document.querySelector("[data-coin]");
const displayUsername = document.querySelector("[data-username]");
const inputUsername = document.querySelector("[data-input-username]");
const inputCoin = document.querySelector("[data-input-coin]");
const allInput = document.querySelectorAll("input");
const buttonRest = document.querySelector("[button-reset]");
const displaySlot = document.querySelectorAll("[slot]");
const buttonStart = document.querySelector("[button-start]");
const displaySlotOne = document.querySelector("[slot-one]");
const displaySlotTwo = document.querySelector("[slot-two]");
const displaySlotThree = document.querySelector("[slot-three]");
const buttonClear = document.querySelector("[button-clear]");
const betAmount = document.querySelectorAll("[data]");

let slotOne = 1;
let slotTwo = 1;
let slotThree = 1;
let coin = 0;
let username = null;
let slot = [];

function bet() {
  betAmount.forEach((input) => {
    if (input.value != "") {
      if (slot.includes(parseInt(input.getAttribute("id")))) {
        coin = coin + parseInt(input.value);
      } else {
        if (input.value === "") {
          coin = coin;
        } else if (input.value != "") {
          coin = coin - parseInt(input.value);
          input.value = "";
        }
      }
    }
  });
}

function reset() {
  init();
  allInput.forEach((input) => {
    input.value = "";
  });
  coin = 0;
  username = null;
}

function init() {
  displayCoin.innerText = coin;
  displayUsername.innerText = username;
  if (coin === 0) {
    inputCoin.removeAttribute("disabled");
    inputUsername.removeAttribute("disabled");
    buttonSubmit.removeAttribute("disabled");
  } else {
    inputCoin.setAttribute("disabled", "disabled");
    inputUsername.setAttribute("disabled", "disabled");
    buttonSubmit.setAttribute("disabled", "disabled");
  }
  clearBet();
  slot = [];
}

function clearBet() {
  betAmount.forEach((input) => {
    input.value = "";
  });
}

function random() {
  if (username === null && coin === 0) {
    alert("Input name and insert coin");
    reset();
    return;
  } else {
    slotOne = Math.floor(Math.random() * 6) + 1;
    slot.push(slotOne);
    slotTwo = Math.floor(Math.random() * 6) + 1;
    slot.push(slotTwo);
    slotThree = Math.floor(Math.random() * 6) + 1;
    slot.push(slotThree);
    displaySlotOne.src = "./img/" + slotOne + ".png";
    displaySlotTwo.src = "./img/" + slotTwo + ".png";
    displaySlotThree.src = "./img/" + slotThree + ".png";
    bet();
    init();
  }
}

buttonStart.addEventListener("click", random);

buttonClear.addEventListener("click", init);

displaySlot.forEach((img) => {
  img.src = "./img/1.png";
});

buttonSubmit.addEventListener("click", () => {
  if (!isNaN(inputCoin.value)) {
    coin = parseInt(inputCoin.value);
    username = inputUsername.value;
    init();
  } else {
    alert("Wrong Input");
    reset();
    return;
  }
});

buttonRest.addEventListener("click", () => {
  reset();
  init();
});

init();
