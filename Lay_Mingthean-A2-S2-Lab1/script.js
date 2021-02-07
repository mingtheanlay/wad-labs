class Calculator {
  constructor(previousOutput, currentOutput) {
    this.previousOutput = previousOutput;
    this.currentOutput = currentOutput;
  }

  clear() {
    this.currentOperand = "";
    this.previousOperand = "";
    this.operator = undefined;
  }

  delete() {
    this.currentOperand = this.currentOperand.toString().slice(0, -1);
  }

  appendNumber(number) {
    if (number.toString() === "." && this.currentOperand.includes(".")) {
      return;
    }
    this.currentOperand = this.currentOperand.toString() + number.toString();
  }

  chooseOperator(operator) {
    if (this.currentOperand === "") {
      return;
    }
    if (this.previousOperand !== "") {
      this.compute;
    }
    this.operator = operator;
    this.previousOperand = this.currentOperand;
    this.currentOperand = "";
  }

  compute() {
    let computation;
    let prev = parseFloat(this.previousOperand);
    let cur = parseFloat(this.currentOperand);
    if (isNaN(prev) || isNaN(cur)) {
      return;
    }
    switch (this.operator) {
      case "+":
        computation = prev + cur;
        break;
      case "-":
        computation = prev - cur;
        break;
      case "*":
        computation = prev * cur;
        break;
      case "÷":
        computation = prev / cur;
        break;
      default:
        return;
    }
    this.currentOperand = computation;
    this.previousOperand = "";
    this.operator = undefined;
  }

  getDisplayNumber() {
    const stringNumber = number.toString();
    const integerDigits = parseFloat(stringNumber.split(".")[0]);
    const decimalDigits = stringNumber.split(".")[1];
    let integerDisplay;
    if (isNaN(integerDigits)) {
      integerDisplay = "";
    } else {
      integerDisplay = integerDigits.toLocaleString("en", {
        maximumFractionDigits: 0,
      });
    }
    if (decimalDigits != null) {
      return `${integerDisplay}.${decimalDigits}`;
    } else {
      return integerDisplay;
    }
  }

  getDisplayNumber(number) {
    const stringNumber = number.toString();
    const integerDigits = parseFloat(stringNumber.split(".")[0]);
    const decimalDigits = stringNumber.split(".")[1];
    let integerDisplay;
    if (isNaN(integerDigits)) {
      integerDisplay = "";
    } else {
      integerDisplay = integerDigits.toLocaleString("en", {
        maximumFractionDigits: 0,
      });
    }
    if (decimalDigits != null) {
      return `${integerDisplay}.${decimalDigits}`;
    } else {
      return integerDisplay;
    }
  }

  updateOutput() {
    this.currentOutput.innerText = this.getDisplayNumber(this.currentOperand);
    if (this.operator != null) {
      this.previousOutput.innerText = `${this.getDisplayNumber(
        this.previousOperand
      )} ${this.operator}`;
    } else {
      this.previousOutput.innerText = "";
    }
  }
}

const number = document.querySelectorAll("[data-number]");
const operator = document.querySelectorAll("[data-operator]");
const equalButton = document.querySelector("[data-equals]");
const delButton = document.querySelector("[data-delete]");
const clearButton = document.querySelector("[data-clear]");
const previousOutput = document.querySelector("[data-previous]");
const currentOutput = document.querySelector("[data-current]");

const calculator = new Calculator(previousOutput, currentOutput);

calculator.clear();

number.forEach((button) => {
  button.addEventListener("click", () => {
    calculator.appendNumber(button.innerText);

    calculator.updateOutput();
  });
});

operator.forEach((button) => {
  button.addEventListener("click", () => {
    calculator.chooseOperator(button.innerText);
    calculator.updateOutput();
  });
});

equalButton.addEventListener("click", (button) => {
  calculator.compute();
  calculator.updateOutput();
});

clearButton.addEventListener("click", (button) => {
  calculator.clear();
  calculator.updateOutput();
});

delButton.addEventListener("click", (button) => {
  calculator.delete();
  calculator.updateOutput();
});
