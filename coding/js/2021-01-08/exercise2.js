//john's team and mark's team average
var johnTeamAverage , markTeamAverage;

johnTeamAverage = (188 + 120 + 103) / 3;
markTeamAverage = (116 + 94 + 123) / 3;

//compare two values using ternery operator 
var winner = (johnTeamAverage > markTeamAverage) ? 
console.log("the winner is john's basketball team with an average of " + johnTeamAverage) :
console.log("the winner is mark's basketball team with an average of " + markTeamAverage) ;

//comparing two values using simple if statement
if(johnTeamAverage > markTeamAverage){
    console.log("the winner is john's basketball team with an average of " + johnTeamAverage );
}
else{
    console.log("the winner is mark's basketball team with an average of " + markTeamAverage );
}

// mary's team average 
var maryTeamAverage;
maryTeamAverage = (115 + 99 + 200) / 3;

// compare more than two values usinf if....else if....else statement 
if(johnTeamAverage > markTeamAverage && johnTeamAverage > maryTeamAverage){
    console.log("the winner is john's basketball team with an average of " + johnTeamAverage);
}
else if(maryTeamAverage > maryTeamAverage && markTeamAverage > johnTeamAverage){
    console.log("the winner is mark's basketball team with an average of " + markTeamAverage);
}
else{
    console.log("the winner is mary's basketball team with an average of " + maryTeamAverage);
}
    

