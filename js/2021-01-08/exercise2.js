//john's team and mark's team average
var johnTeamAverage , markTeamAverage;

johnTeamAverage = (89 + 120 + 103) / 3;
markTeamAverage = (116 + 94 + 123) / 3;

//comparing two values using simple if statement
if(johnTeamAverage > markTeamAverage){
    console.log("the winner is john's basketball team with an average of " + johnTeamAverage );
}
else if (markTeamAverage > johnTeamAverage){
    console.log("the winner is mark's basketball team with an average of " + markTeamAverage );
}
else{
    console.log("draw between mark and john");
}

// mary's team average 
var maryTeamAverage;
maryTeamAverage = (97 + 134 + 105) / 3;

// compare more than two values usinf if....else if....else statement 
if(johnTeamAverage > markTeamAverage && johnTeamAverage > maryTeamAverage){
    console.log("the winner is john's basketball team with an average of " + johnTeamAverage);
}
else if(markTeamAverage > maryTeamAverage && markTeamAverage > johnTeamAverage){
    console.log("the winner is mark's basketball team with an average of " + markTeamAverage);
}
else if(maryTeamAverage > johnTeamAverage && maryTeamAverage > markTeamAverage){
    console.log("the winner is mary's basketball team with an average of " + maryTeamAverage);
}
else{
    console.log("draw between mark , john and mary")
}

    

