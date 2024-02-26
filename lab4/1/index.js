function plusnum(){
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;

    let result = parseInt(num1)+parseInt(num2);


    let labelResult = document.getElementById("Result");

    labelResult.innerHTML = "Result: "+result;

    let hisNum = document.createElement("p");
    let text = document.createTextNode(num1+" + "+num2+" =" +result);

    hisNum.appendChild(text);

    document.getElementById("div1").appendChild(hisNum);

}