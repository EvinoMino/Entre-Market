const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
function showNotification() {
  var notification = document.getElementById("notification");
  notification.style.display = "block";

  setTimeout(function() {
    notification.style.display = "none";
  }, 3000); // Menyembunyikan notifikasi setelah 3 detik (3000ms)
}
// // Timer function
// function startTimer(duration, display) {
//   var timer = duration, hours, minutes, seconds;
//   setInterval(function () {
//     hours = parseInt(timer / 3600, 10);
//     minutes = parseInt((timer % 3600) / 60, 10);
//     seconds = parseInt(timer % 60, 10);

//     hours = hours < 10 ? "0" + hours : hours;
//     minutes = minutes < 10 ? "0" + minutes : minutes;
//     seconds = seconds < 10 ? "0" + seconds : seconds;

//     display.textContent = hours + ":" + minutes + ":" + seconds;

//     if (--timer < 0) {
//       timer = duration;
//     }
//   }, 1000);
// }

// // Start the timer
// window.onload = function () {
//   var duration = 60 * 30 * 1; // 2 hours (change it according to your needs)
//   var display = document.querySelector('#timer');
//   startTimer(duration, display);
  
// };
// Timer function
function startTimer(duration, display) {
  var timer = duration, hours, minutes, seconds;
  setInterval(function () {
    hours = parseInt(timer / 3600, 10);
    minutes = parseInt((timer % 3600) / 60, 10);
    seconds = parseInt(timer % 60, 10);

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = hours + ":" + minutes + ":" + seconds;

    if (--timer < 0) {
      timer = duration;
    }
  }, 1000);
}

// Start the timers
window.onload = function () {
  var timers = document.querySelectorAll('.timer');

  timers.forEach(function (timerElement) {
    var duration = parseInt(timerElement.getAttribute('data-duration'), 10);
    var display = timerElement.querySelector('.timer-display');
    startTimer(duration, display);
  });
};

document.addEventListener('DOMContentLoaded', function() {
  // Select all elements with the class "bid-button"
  var bidButtons = document.querySelectorAll('.bid-button');

  // Attach a click event listener to each bid button
  bidButtons.forEach(function(button) {
      button.addEventListener('click', function() {
          // Read the data-redirect-url attribute from the clicked button
          var redirectUrl = button.getAttribute('data-redirect-url');

          // Redirect to the specified URL
          window.location.href = redirectUrl;
      });
  });
});


document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with the class "card-btn"
    var cardButtons = document.querySelectorAll('.card-btn');

    // Attach a click event listener to each card-btn
    cardButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Read the data-redirect-url attribute from the clicked button
            var redirectUrl = button.getAttribute('data-redirect-url');

            // Redirect to the specified URL
            window.location.href = redirectUrl;
        });
    });
});
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
