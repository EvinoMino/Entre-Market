window.addEventListener('DOMContentLoaded', function() {

    var targetDate = new Date('2023-11-30T23:59:59').getTime();
  

    var timer = setInterval(function() {

      var currentDate = new Date().getTime();

      var remainingTime = targetDate - currentDate;
  

      var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
  

      document.getElementById('timer').textContent = minutes.toString().padStart(2, '0') + ' minutes ' +
                                                      seconds.toString().padStart(2, '0') + ' seconds left';

      if (remainingTime < 0) {
        clearInterval(timer);
        document.getElementById('timer').textContent = 'Expired';
      }
    }, 1000);
  });


function updateLeaderboard() {
    // Add the current bid to the topBids array
    topBids.push(currentBid);
  
    // Sort the topBids array in descending order
    topBids.sort((a, b) => b - a);
  
    // Display the top 3 bids in the leaderboard
    leaderboard.innerHTML = '';
    for (let i = 0; i < Math.min(topBids.length, 3); i++) {
      const listItem = document.createElement('li');
      listItem.textContent = `${i + 1}. ${formatCurrency(topBids[i])}`;
      leaderboard.appendChild(listItem);
    }
  }
  // ... (rest of the code remains unchanged)
  
function formatCurrency(amount) {
    var currencyFormat = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR'
    });
    return currencyFormat.format(amount).replace(/\.\d{2}$/, ''); // Remove the .00 decimal part
  }
  
  let currentBid = 600000;
  let walletBalance = 500000;
  const leaderboard = document.getElementById('leaderboard');
  const currentBidElement = document.getElementById('currentBid');
  const walletBalanceElement = document.getElementById('walletBalance');
  const bid5000Button = document.getElementById('bid5000');
  const bid10000Button = document.getElementById('bid10000');
  const bid15000Button = document.getElementById('bid15000');
  
  // Keep track of the top 3 bids
  const topBids = [];
  
  function placeBid(increment) {
    if (walletBalance >= increment) {
      currentBid += increment;
      walletBalance -= increment;
      updateBidDisplay();
      updateWalletDisplay();
      updateLeaderboard();
    } else {
      alert("Insufficient funds in your wallet!");
    }
  }
  
  function updateBidDisplay() {
    currentBidElement.textContent = formatCurrency(currentBid);
  }
  
  function updateWalletDisplay() {
    walletBalanceElement.textContent = formatCurrency(walletBalance);
  
    // Enable or disable buttons based on wallet balance
    bid5000Button.disabled = walletBalance < 5000;
    bid10000Button.disabled = walletBalance < 10000;
    bid15000Button.disabled = walletBalance < 15000;
  }
  
 function updateLeaderboard() {
    console.log('Updating leaderboard...');

    // Add the current bid to the topBids array
    topBids.push(currentBid);

    // Sort the topBids array in descending order
    topBids.sort((a, b) => b - a);

    // Display the top 3 bids in the leaderboard
    console.log('Top Bids:', topBids);
    leaderboard.innerHTML = '';
    for (let i = 0; i < Math.min(topBids.length, 3); i++) {
        const listItem = document.createElement('li');
        listItem.textContent = `#${i + 1}: ${formatCurrency(topBids[i])}`;
        leaderboard.appendChild(listItem);
    }
}

  document.addEventListener('DOMContentLoaded', function () {
    // ... (your existing code)

    let isCooldown = false;

    function enableCooldown() {
        isCooldown = true;
        setTimeout(function () {
            isCooldown = false;
        }, 5000); // Set the cooldown duration in milliseconds (5 seconds in this case)
    }

    function placeBid(increment) {
        if (!isCooldown && walletBalance >= increment) {
            currentBid += increment;
            walletBalance -= increment;
            updateBidDisplay();
            updateWalletDisplay();
            updateLeaderboard();
            enableCooldown(); // Enable the cooldown after successfully placing a bid
        } else {
            alert("Cooldown period. Please wait before placing another bid.");
        }
    }

    // ... (the rest of your existing code)
});
let isButtonDisabled = false;
let cooldownTimer;

function placeBid(increment) {
  if (isButtonDisabled) {
    alert("Cooldown period. Please wait before placing another bid.");
    return;
  }

  if (walletBalance >= increment) {
    currentBid += increment;
    walletBalance -= increment;
    updateBidDisplay();
    updateWalletDisplay();
    updateLeaderboard();
    disableBidButton();
    startCooldownTimer();
  } else {
    alert("Insufficient funds in your wallet!");
  }
}

function disableBidButton() {
  isButtonDisabled = true;
}

function enableBidButton() {
  isButtonDisabled = false;
  clearInterval(cooldownTimer);
  document.getElementById("cooldownTimer").textContent = "";
}

function startCooldownTimer() {
  let cooldownTime = 3; // Change the cooldown time to 3 seconds
  disableBidButton();

  cooldownTimer = setInterval(function () {
    if (cooldownTime > 0) {
      document.getElementById("cooldownTimer").textContent = `Cooldown: ${cooldownTime}s`;
      cooldownTime--;
    } else {
      enableBidButton();
      document.getElementById("cooldownTimer").textContent = "Bidding is ready";
    }
  }, 1000);
}





  // Initial setup
  updateBidDisplay();
  updateWalletDisplay();
  updateLeaderboard();
  