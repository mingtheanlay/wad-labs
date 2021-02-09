const buttonSubmit = document.querySelector("[btn-submit]");
const displayCoin = document.querySelector("[data-coin]");
const displayUsername = document.querySelector("[data-username]");
const inputUsername = document.querySelector("[data-input-username]");
const inputCoin = document.querySelector("[data-input-coin]");
const allInput = document.querySelectorAll("input");
const buttonRest = document.querySelector("[button-reset]");

let coin = 0;
let username = null;

init();

function reset() {
  allInput.forEach((input) => {
    input.value = "";
  });
}

function init() {
  displayCoin.innerText = coin;
  displayUsername.innerText = username;
}

buttonSubmit.addEventListener("click", () => {
  if (!isNaN(inputCoin.value)) {
    coin = inputCoin.value;
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
});
