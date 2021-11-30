const sick_M = 10;
const casual_M = 10;
const annual_M = 10;

var leave_type = document.getElementById("leave_type");
var start_date = document.getElementById("start_date");
var end_date = document.getElementById("end_date");
var half_date = document.getElementById("half_date");
var half_time = document.getElementById("half");
var dateObj = new Date();

var max_m = dateObj.getUTCMonth()+1;
var max_d = dateObj.getUTCDate();
var max_y = dateObj.getUTCFullYear();

today_date = max_y + "-" + max_m + "-" + max_d;


leave_type.addEventListener('input',()=>{

    console.log("inside Event Listener ");

    if(leave_type.value == "sick"){
        // var dateObj = new Date();
        var min_date = subDays(dateObj,5);

        var min_m = min_date.getUTCMonth() + 1; //months from 1-12
        var min_d = min_date.getUTCDate();
        var min_y = min_date.getUTCFullYear();

        newdate = min_y + "-" + min_m + "-" + min_d;

        var max_m = dateObj.getUTCMonth()+1;
        var max_d = dateObj.getUTCDate();
        var max_y = dateObj.getUTCFullYear();

        max_date = max_y + "-" + max_m + "-" + max_d;
        
    
        console.log(newdate);

        start_date.min = newdate;
        start_date.max = max_date;
        // end_date.min = start_date;
        //end_date.min = max_date;

        start_date.addEventListener('input',()=>{
            var end_date = document.getElementById("end_date");
            console.log(start_date.value);
            end_date.min = start_date.value;
            end_date.max = max_date;
            console.log(`${end_date.min} end date min`);
            console.log(`${end_date.max} end date max`);
            // today accident and full week in hospital senario have to discuss
        })
        

        // console.log(start_date.value);
        // console.log(start_date.min);

        // console.log("inside if condition ");
    }
    else if(leave_type.value == "casual"){
        start_date.min = today_date;

        var max_date = addDays(dateObj,30);

        var max_m = max_date.getUTCMonth()+1;
        var max_d = max_date.getUTCDate();
        var max_y = max_date.getUTCFullYear();

        max_date = max_y + "-" + max_m + "-" + max_d;
        
        start_date.max = max_date;

        start_date.addEventListener('input',()=>{
            var end_date = document.getElementById("end_date");
            console.log(start_date.value);
            end_date.min = start_date.value;
            end_date.max = max_date;
            console.log(`${end_date.min} end date min`);
            console.log(`${end_date.max} end date max`);
            // today accident and full week in hospital senario have to discuss
        })
        
    }
    else if(leave_type.value == "annual"){
        start_date.min = today_date;

        var max_date = addDays(dateObj,360);

        var max_m = max_date.getUTCMonth()+1;
        var max_d = max_date.getUTCDate();
        var max_y = max_date.getUTCFullYear();

        max_date = max_y + "-" + max_m + "-" + max_d;
        
        start_date.max = max_date;
        start_date.addEventListener('input',()=>{
            var end_date = document.getElementById("end_date");
            console.log(start_date.value);
            end_date.min = start_date.value;
            end_date.max = max_date;
            console.log(`${end_date.min} end date min`);
            console.log(`${end_date.max} end date max`);
            // today accident and full week in hospital senario have to discuss
        })
        
    }
})

function addDays(myDate,days) {
    return new Date(myDate.getTime() + days*24*60*60*1000);
}

function subDays(myDate, days){
    return new Date(myDate.getTime() - days*24*60*60*1000);
}
    
var myDate = new Date('2013-02-11');
    


