var btc = document.getElementById("btc");
var eth = document.getElementById("eth");
var doge = document.getElementById("doge");
var solana = document.getElementById("solana");
var cardano = document.getElementById("cardano");

var settings = {
    "async" : true,
    "scrossDomain": true,
    "url" : "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Cdogecoin%2Csolana%2Ccardano&vs_currencies=usd",
    "method" : "GET",
    "headers": {} 
    }

    $.ajax(settings).done(function(response) {
        btc.innerHTML = response.bitcoin.usd;
        eth.innerHTML = response.ethereum.usd;
        doge.innerHTML = response.dogecoin.usd;
        solana.innerHTML = response.solana.usd;
        cardano.innerHTML = response.cardano.usd;
    });


     // FAVORITES 
     const toggleBtns = document.querySelectorAll('.favorites');
        
     toggleBtns.forEach((btn) => {
         btn.addEventListener('click', () => {
             btn.classList.toggle("favorites-click");
         });
     });