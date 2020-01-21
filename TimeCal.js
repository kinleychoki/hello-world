function getTime(){	
var time1=document.getElementById('startTime').value;
var time2=document.getElementById('endTime').value;

var time1_min=(Math.floor(time1)*60)+((time1-Math.floor(time1))*100);
var time1_hour=(Math.floor(time1_min /60) + ((time1_min - (60* Math.floor(time1_min /60)))/100));

var time2_min=(Math.floor(time2)*60)+((time2-Math.floor(time2))*100);
var time2_hour=(Math.floor(time2_min /60) + ((time2_min - (60* Math.floor(time2_min /60)))/100));

var diff=Math.abs(time2_min-time1_min);//time difference
var diff_hour=(Math.floor(diff /60) + ((diff - (60* Math.floor(diff /60)))/100));

var normal=7.45; //normal time
var normal_min=(Math.floor(normal) * 60 )+ ((normal - Math.floor(normal)) * 100);
var normal_hour=(Math.floor(normal_min /60) + ((normal_min - (60* Math.floor(normal_min /60)))/100));

var normal1=4.45; //normal time
var normal_min1=(Math.floor(normal1) * 60 )+ ((normal1 - Math.floor(normal1)) * 100);
var normal_hour1=(Math.floor(normal_min1 /60) + ((normal_min1 - (60* Math.floor(normal_min1 /60)))/100));


var break1=1.00; //first break
var break1_min=(Math.floor(break1) * 60 )+ ((break1 - Math.floor(break1)) * 100);
var break1_hour=(Math.floor(break1_min /60) + ((break1_min - (60* Math.floor(break1_min /60)))/100)).toFixed(2);

var break2=1.30; //second break
var break2_min=(Math.floor(break2) * 60 )+ ((break2 - Math.floor(break2)) * 100);
var break2_hour=(Math.floor(break2_min /60) + ((break2_min - (60* Math.floor(break2_min /60)))/100)).toFixed(2);

var break3=0.30; //second break
var break3_min=(Math.floor(break3) * 60 )+ ((break3 - Math.floor(break3)) * 100);
var break3_hour=(Math.floor(break3_min /60) + ((break3_min - (60* Math.floor(break3_min /60)))/100)).toFixed(2);

var totalWith1=(diff-break1_min); //difference with first break
var timeWithb1=(Math.floor(totalWith1 / 60) + (( totalWith1 - (60 * Math.floor(totalWith1  / 60)))/100)).toFixed(2); 

var totalWith2=(diff-break2_min); //difference with second break
var timeWithb2=(Math.floor(totalWith2 / 60) + (( totalWith2 - (60 * Math.floor(totalWith2  / 60)))/100)).toFixed(2); 

var totalWith3=(diff); //difference without 30 min break
var timeWithb3=(Math.floor(totalWith3 / 60) + (( totalWith3 - (60 * Math.floor(totalWith3  / 60)))/100)).toFixed(2); 

var totalWith4=(diff-break3_min); //difference with 30 min break
var timeWithb4=(Math.floor(totalWith4 / 60) + (( totalWith4 - (60 * Math.floor(totalWith4  / 60)))/100)).toFixed(2); 


var extraTime=Math.abs(totalWith2-normal_min);
var extra=(Math.floor(extraTime / 60) + (( extraTime - (60 * Math.floor(extraTime  / 60)))/100)).toFixed(2); 

var extraTime1=Math.abs(totalWith4-normal_min1);
var extra1=(Math.floor(extraTime1 / 60) + (( extraTime1 - (60 * Math.floor(extraTime1  / 60)))/100)).toFixed(2); 
/*
var extraTime2=Math.abs(timeWithb1-extra1);
var extra2=(Math.floor(extraTime2 / 60) + (( extraTime2 - (60 * Math.floor(extraTime2  / 60)))/100)).toFixed(2); 
*/


var val=document.getElementById("sel").value;
document.getElementById("sel").addEventListener("change",getTime);

var dayval=document.getElementById("day").value;

if(val==='平日'){
	if(time1_hour <= 12.00 && time2_hour >= 13.00 && diff_hour <= 8.45){
	document.getElementById('break').value=break1_hour;
	document.getElementById('total').value=timeWithb1;
	document.getElementById('extraTime').value=0;
	document.getElementById('extraWork').value=0;
	}
	else if(time1_hour <= 12.00 && time2_hour >= 13.00 && diff_hour >= 8.45 && diff_hour<=9.15){
	document.getElementById('break').value=break1_hour;
	document.getElementById('total').value=normal_hour;
	document.getElementById('extraTime').value=0;
	document.getElementById('extraWork').value=0;
	}
    
	else if( (time1_hour > 12.00 && time2_hour > 13.00 || time1_hour < 12.00 && time2_hour < 13.00 ) && diff_hour <= 5.15 ){
	if(diff_hour<=4.45){
	document.getElementById('break').value=0;
	document.getElementById('total').value=timeWithb3;
	document.getElementById('extraTime').value=0;
	document.getElementById('extraWork').value=0;
    }
    else{
	document.getElementById('break').value=0;
	document.getElementById('total').value=normal_hour1;
	document.getElementById('extraTime').value=0;
	document.getElementById('extraWork').value=0;	
	}
	}
    else if( (time1_hour > 12.00 && time2_hour > 13.00 || time1_hour < 12.00 && time2_hour < 13.00)  && diff_hour > 4.45 ){
	document.getElementById('break').value=break3_hour;
	document.getElementById('total').value=normal_hour1;
	document.getElementById('extraTime').value=extra1;
	document.getElementById('extraWork').value=0;
    }		
	
  else{
	document.getElementById('break').value=break2_hour;
	document.getElementById('total').value=normal_hour;
	document.getElementById('extraTime').value=extra;
	document.getElementById('extraWork').value=0;
  }
} 

    else if(val==='休日'&& dayval==='日'){
		
		if(diff_hour <= 9.15){
	    document.getElementById('break').value=break1_hour;
		document.getElementById('total').value=0;
		document.getElementById('extraTime').value=0;
		document.getElementById('extraWork').value=timeWithb1;
		}
	
	   else{	
       document.getElementById('break').value=break2_hour;
	   document.getElementById('total').value=0;
	   document.getElementById('extraTime').value=0;
	   document.getElementById('extraWork').value=timeWithb2;
	   
	   
        }		
	}
    
    else if(val==='休日' && dayval==='土'){
		if(diff_hour <= 9.15){
	    document.getElementById('break').value=break1_hour;
		document.getElementById('total').value=0;
		document.getElementById('extraWork').value=0;
		document.getElementById('extraTime').value=timeWithb1;
		}
	
	   else{	
       document.getElementById('break').value=break2_hour;
	   document.getElementById('total').value=0;
	   document.getElementById('extraTime').value=timeWithb2;
	   document.getElementById('extraWork').value=0;
        }		
	}	
}


function getDate(){
	var n =  new Date();
	var y = n.getFullYear();
	var m = n.getMonth() + 1;
	var d = n.getDate();
	var weekdays = new Array(7);
        weekdays[0] = "日";
        weekdays[1] = "月";
        weekdays[2] = "火";
        weekdays[3] = "水";
        weekdays[4] = "木";
        weekdays[5] = "金";
        weekdays[6] = "土";
        var r = weekdays[n.getDay()];
        document.getElementById("day").value = r;
	    document.getElementById('date').value = y + "/" + m + "/" + d;
}
 
 

 
 
