function save(){
    let fname = document.getElementById("name").value;
    let Lname = document.getElementById("Lastname").value;
    let SSid = document.getElementById("ssid").value;
    let address = document.getElementById("address").value;
    let tumbon = document.getElementById("dis1").value;
    let Aumpor = document.getElementById("dis2").value;
    let PostalCode = document.getElementById("postal").value;
    let Province = document.getElementById("province").value;
    let pre = document.getElementById("pre").value;

    localStorage.setItem('userFirstName',fname);
    localStorage.setItem('Lastname',Lname);
    localStorage.setItem('ssid',SSid);
    localStorage.setItem('address',address);
    localStorage.setItem('dis1',tumbon);
    localStorage.setItem('dis2',Aumpor);
    localStorage.setItem('PostalCode',PostalCode);
    localStorage.setItem('province',Province);
    localStorage.setItem('pre',pre);
}


function show(){
    let fn = localStorage.getItem('userFirstName');
    let ln = localStorage.getItem('Lastname');
    let ss = localStorage.getItem('ssid');
    let ad = localStorage.getItem('address');
    let d1 = localStorage.getItem('dis1');
    let d2 = localStorage.getItem('dis2');
    let po = localStorage.getItem('PostalCode');
    let pro = localStorage.getItem('province');
    let pre = localStorage.getItem('pre');

    let div1 = document.getElementById("div1");

    let p = document.createElement("p");
    let tp = document.createTextNode(fn+ln+ss+ad+d1+d2+po+pro+pre);
    p.appendChild(tp);
    p.setAttribute('id', 'out');
    div1.replaceChild(p, document.getElementById('out'));
}