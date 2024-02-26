function change() {
 
    let div = document.getElementById("div1");

    let labelName = document.getElementById("name");
    let labelLname = document.getElementById("lname");
    let labelCountry = document.getElementById("country");
    let button = document.getElementById("b1");

    let new_labelName = document.createElement("label");
    let textName = document.createTextNode("First Name:");
    new_labelName.appendChild(textName);
    new_labelName.setAttribute("id", "name")

    let new_labelLname = document.createElement("label");
    let textLname = document.createTextNode("Last Name:");
    new_labelLname.appendChild(textLname);    
    new_labelLname.setAttribute("id", "lname")

    let new_labelCountry = document.createElement("label");
    let textCountry = document.createTextNode("Country:");
    new_labelCountry.appendChild(textCountry);
    new_labelCountry.setAttribute("id", "country")

    let new_button = document.createElement("button");
    let textbutton = document.createTextNode("Change to Thai")
    new_button.appendChild(textbutton);
    new_button.setAttribute("id", "b1")

    let func_thai = document.createAttribute("onclick");
    func_thai.value = "change2()";
    new_button.setAttributeNode(func_thai);    

    div.replaceChild(new_labelName, labelName);
    div.replaceChild(new_labelLname, labelLname);
    div.replaceChild(new_labelCountry, labelCountry);
    div.replaceChild(new_button, button);
  }

function change2(){
  let div = document.getElementById("div1");

  let labelName = document.getElementById("name");
  let labelLname = document.getElementById("lname");
  let labelCountry = document.getElementById("country");
  let button = document.getElementById("b1");

  let new_labelName = document.createElement("label");
  let textName = document.createTextNode("ชื่อ:");
  new_labelName.appendChild(textName);
  new_labelName.setAttribute("id", "name")

  let new_labelLname = document.createElement("label");
  let textLname = document.createTextNode("นามสกุล:");
  new_labelLname.appendChild(textLname);    
  new_labelLname.setAttribute("id", "lname")

  let new_labelCountry = document.createElement("label");
  let textCountry = document.createTextNode("ประเทศ:");
  new_labelCountry.appendChild(textCountry);
  new_labelCountry.setAttribute("id", "country")

  let new_button = document.createElement("button");
  let textbutton = document.createTextNode("เปลี่ยนเป็นอังกฤษ")
  new_button.appendChild(textbutton);
  new_button.setAttribute("id", "b1")

  let func_thai = document.createAttribute("onclick");
  func_thai.value = "change()";
  new_button.setAttributeNode(func_thai);    

  div.replaceChild(new_labelName, labelName);
  div.replaceChild(new_labelLname, labelLname);
  div.replaceChild(new_labelCountry, labelCountry);
  div.replaceChild(new_button, button);  
}