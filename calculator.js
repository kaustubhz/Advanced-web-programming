function clearText(){
    document.getElementById("num1").value="";
    console.log("In clearText");
} 
function setValue(x){
    document.getElementById("num1").value+=x;
    console.log(x);
}
function arithmeticOps(){
var x=document.getElementById("num1").value;
var res=eval(x);
    // switch(operator)
    // {
    //     case '+':
    //     case '-':      
    //     case '*':               
    //     case '/':x=document.getElementById("num1").value;
    //     break;
    //     case '=':var y=document.getElementById("num1").value;
    //     console.log("y is "+y);
    //     var result=eval("x operator y");
    // }

    document.getElementById("num1").value=res;
}

function removeLastElement(){
    var x=document.getElementById("num1").value;
    document.getElementById("num1").value=x.slice(0,-1);
}