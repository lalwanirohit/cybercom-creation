//john's team and mark's team average
var johnTeamAverage , markTeamAverage;

johnTeamAverage = (89 + 120 + 103) / 3;
markTeamAverage = (116 + 94 + 123) / 3;

//use if else statement to compare Averages
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

/* we can do this way also

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

*/ 

//used switch case to compare avarages
switch(true){
    case (johnTeamAverage > markTeamAverage && johnTeamAverage > maryTeamAverage):
        console.log("the winner is john's basketball team with an average of " + johnTeamAverage);
        break;
    case (markTeamAverage > maryTeamAverage && markTeamAverage > johnTeamAverage):
        console.log("the winner is mark's basketball team with an average of " + markTeamAverage);
        break;
    case (maryTeamAverage > johnTeamAverage && maryTeamAverage > markTeamAverage):
        console.log("the winner is mary's basketball team with an average of " + maryTeamAverage);
        break;
    default:
        console.log("draw between mark , john and mary");
}


    

