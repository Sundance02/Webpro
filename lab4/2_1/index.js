function change() {
 
    let labelName = document.getElementById("name");
    let labelLname = document.getElementById("lname");
    let labelCountry = document.getElementById("country");
    let button = document.getElementById("b1");

    labelName.innerHTML = "First Name:";
    labelLname.innerHTML = "Last Name:";
    labelCountry.innerHTML = "Country:";
    button.innerHTML = "Change to Thai";

    let func_thai = document.createAttribute("onclick");
    func_thai.value = "change2()";
    button.setAttributeNode(func_thai);    
  }

function change2(){
    let labelName = document.getElementById("name");
    let labelLname = document.getElementById("lname");
    let labelCountry = document.getElementById("country");
    let button = document.getElementById("b1");

    labelName.innerHTML = "ชื่อ:";
    labelLname.innerHTML = "นามสกุล:";
    labelCountry.innerHTML = "ประเทศ:";
    button.innerHTML = "เปลี่ยนเป็นอังกฤษ";

    let func_thai = document.createAttribute("onclick");
    func_thai.value = "change()";
    button.setAttributeNode(func_thai);    
}