function validateForm(){


    let fname = document.getElementById("Firstname").value;
    let Lname = document.getElementById("Lastname").value;
    let SSid = document.getElementById("ssid").value;
    let address = document.getElementById("Address").value;
    let tumbon = document.getElementById("Tambon").value;
    let Aumpor = document.getElementById("Aumpor").value;
    let PostalCode = document.getElementById("PostalCode").value;
    let Province = document.getElementById("province").value;
    let pre = document.getElementById("pre").value;




    if(SSid.length != 13){
        alert("รหัสบัตรประชาชนผิด");
        return false;
    }
    if(pre =="00"){
        alert("กรุณาเลือกคำนำหน้า");
        return false;
    }
    if(fname.length < 2 || fname.length > 20){
        alert("ชื่อจริงผิด");
        return false;
    }
    if(Lname.length < 2 || Lname.length > 30){
        alert("นามสกุลผิด");
        return false;
    }
    if(address.length < 15){
        alert("ที่อยู่ผิด");
        return false;
    }
    if(tumbon.length < 2){
        alert("ตำบลผิด");
        return false;
    }
    if(Aumpor.length < 2){
        alert("อำเภอผิด");
        return false;
    }
    if(Province == ""){
        alert("กรุณาเลือกจังหวัด")
        return false
    }
    if(PostalCode.length !=5){
        alert("รหัสไปรษณีย์ผิด")
        return false
    }



}