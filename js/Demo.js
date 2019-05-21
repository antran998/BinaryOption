function deposite(){
	var x = document.getElementById('moneyalert');
	if(x.style.visibility == "hidden"){
		x.style.visibility = "visible";
	}	
	else{
		x.style.visibility = "hidden";
	}   	
}
function AmountColorChangeWhenClick(){
	moneyIn.style.backgroundColor = "#4d4d4d";
}

// $('#submit_div').click(function(e){
//     e.preventDefault();                
//     var data = $("#name").val();
//     var datastr='name='+data;
//     $.ajax({
//         type: "POST",
//         url: $(this),
//         data: datastr,
//         success: function(data){
//             $("#content").replaceWith(data);
//         }
//     });
// });


// function takestopprofit(){
// 	var x = document.getElementById('setTLalert');
// 	if(x.style.visibility == "hidden"){
// 		x.style.visibility = "visible";
// 	}	
// 	else{
// 		x.style.visibility = "hidden";
// 	}   	
// }


