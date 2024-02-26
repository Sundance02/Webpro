function add(){
    let table = document.getElementById("t1");
    let row = table.insertRow(-1);

    let sId = document.getElementById("Sid").value;
    let name = document.getElementById("name").value;
    let lname = document.getElementById("lname").value;

    let list = [row.rowIndex ,sId,name,lname];
    let cell,text ,tnode;

    for(i = 0 ; i<4; i++){
        cell = row.insertCell(-1);
        text = list[i];  
        tnode = document.createTextNode(text);
        cell.appendChild(tnode);
    }
}