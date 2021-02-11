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
const betTiger = document.querySelector("[data-tiger]");
const betLobster = document.querySelector("[data-lobster]");
const betKlouk = document.querySelector("[data-klouk]");
const betCrab = document.querySelector("[data-crab]");
const betRoster = document.querySelector("[data-roster]");
const betFish = document.querySelector("[data-fish]");
const buttonClear = document.querySelector("[button-clear]");
const betAmount = document.querySelectorAll("[data]");

let slot = [];
let slotOne = 1;
let slotTwo = 1;
let slotThree = 1;
let coin = 0;
let username = null;
let prize = 0;
let lost = 0;

function bet() {
  slot.push(slotOne);
  slot.push(slotTwo);
  slot.push(slotThree);
  betAmount.forEach((input) => {
    if (slot.includes(parseInt(input.getAttribute("id")))) {
      prize = prize + parseInt(input.value);
      console.log(prize);
    } else {
      if (input.value == "") {
      } else {
        let val = parseInt(input.value);
        console.log(val);
        lost = lost - val;
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
  slot = [];
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
  prize = 0;
  // slot = [];
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
    slotTwo = Math.floor(Math.random() * 6) + 1;
    slotThree = Math.floor(Math.random() * 6) + 1;
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
