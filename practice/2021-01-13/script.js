/*
GAME RULES:

- The game has 2 players, playing in rounds
- In each turn, a player rolls a dice as many times as he whishes. Each result get added to his ROUND score
- BUT, if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
- The player can choose to 'Hold', which means that his ROUND score gets added to his GLBAL score. After that, it's the next player's turn
- The first player to reach 100 points on GLOBAL score wins the game

*/

// global variables
var scores , roundScore , activePlayer , dice;

scores = [0,0];
roundScore = 0;
activePlayer = 1;


//document.querySelector('#current-' + activePlayer).innerHTML = '<em>' + dice + '</em>'; // we can also put decorated text too.

// var x = document.querySelector('#score-0').textContent;
// console.log(x);

//document.querySelector('.dice').style.display = 'none';

document.querySelector('.btn-roll').addEventListener('click',function() {
    dice = Math.floor(Math.random() * 6) + 1 ;
    if(dice == 1) {
        totalCurrent = 0;
        document.querySelector('#current-' + activePlayer).textContent = 0; // we can put only simple text
    }
    else {
        totalCurrent += dice;
        document.querySelector('#current-' + activePlayer).textContent = totalCurrent; // we can put only simple text
    }
    var totalCurrent;
    document.querySelector('.btn-hold').addEventListener('click',function() {
        document.querySelector('#score-' + activePlayer).textContent = totalCurrent; 
    });
});

