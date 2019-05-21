// submit.addEventListener("click", function(){
//     var pur = valPurTime.value;
//     var clo = valCloseTime.value;

//     var sendObj = {
//     	pur: pur,
//     	clo: clo
//     }
    
//     // $.ajax({        
//     //     url: "../DemoStock/signup.php",
//     //     method: "post",
//     //     data: {sendObj: JSON.stringify(sendObj)},
//     //     success: function(data){
//     //         console.log(data);            
//     //     }
//     // });
    
// });
alert(wu);
if(localStorage.getItem("abv")!=null){
    var lk = JSON.parse(localStorage.getItem("abv"));
    output1.innerHTML=lk['obj']['pur'];
}

submit.addEventListener("click", function(){
    var mai = [];
    ////////////////
    mai.push({
        ope: "ffff",
        wa: "zzz"
    });
    mai.push({
        ope: "aaaa",
        wa: "wwww"
    });
    ////////////////

    var obj = {
        pur: "123",
        clo: "avc"
    }

    var an = {
        obj: obj,
        mai: mai
    };
    localStorage.setItem("abv",JSON.stringify(an));
});