const displayDate = document.querySelector("[date]");
const displayTime = document.querySelector("[time]");

function updateDisplay() {
  const date = new Date();

  let dateOfWeek = date.getDay();
  let dateOfMonth = date.getDate();
  let months = date.getMonth();
  let years = date.getFullYear();
  let hours = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();
  displayDate.innerHTML = dateString(dateOfWeek, dateOfMonth, months, years);
  displayTime.innerHTML = timeString(hours, minutes, seconds);
}

function dateString(dateOfWeek, dateOfMonth, months, years) {
  let dateOfWeekString = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];

  let dateOfMonthString;
  if (dateOfMonth < 10) {
    dateOfMonthString = "0" + dateOfMonth;
  } else {
    dateOfMonthString = dateOfMonth;
  }

  switch (dateOfMonth % 10) {
    case 1:
      dateOfMonthString = dateOfMonthString + "st";
      break;
    case 2:
      dateOfMonthString = dateOfMonthString + "nd";
      break;
    case 3:
      dateOfMonthString = dateOfMonthString + "rd";
      break;
    default:
      dateOfMonthString = dateOfMonthString + "th";
      break;
  }

  let monthsString = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  let dateFormat =
    dateOfWeekString[dateOfWeek] +
    " " +
    dateOfMonthString +
    " " +
    monthsString[months] +
    ", " +
    years;

  return dateFormat;
}

function pad(num, size) {
  num = num.toString();
  while (num.length < size) num = "0" + num;
  return num;
}

function timeString(hours, minutes, seconds) {
  let suffix = hours >= 12 ? "PM" : "AM";
  let h = ((hours + 11) % 12) + 1;
  h = pad(h, 2);
  let m = pad(minutes, 2);
  let s = pad(seconds, 2);
  let timeFormat = h + ":" + m + ":" + s + " " + suffix;
  return timeFormat;
}

setInterval(updateDisplay, 1000);
