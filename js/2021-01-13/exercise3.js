// create arrays fo bill and tip
var bills = [124 , 48 , 268];
var tips = [] , finalAmount = [];

// function for tip calculation 
function tipCalculator (amount) {
    var tip;
    if (amount < 50) {
        tip = (amount * 0.2);
    }
    else if (amount > 50 && amount < 200) {
        tip = (amount * 0.15);
    }
    else {
        tip = (amount * 0.10);
    }
    return tip;
}

// loop for counting tips on each bill 
for(var i = 0 ; i < bills.length ; i++) {
    tips.push(tipCalculator(bills[i]));  // store tips in tips array
    finalAmount.push(tips[i] + bills[i]);
}

// print tips array and finalAmount array
console.log(tips);
console.log(finalAmount);