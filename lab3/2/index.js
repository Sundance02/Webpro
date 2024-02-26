function changeposition(){
    let imgone = document.getElementById('1');
    let imgtwo = document.getElementById('2');
    let imgthree = document.getElementById('3');
    let imgfour = document.getElementById('4');

    let one = imgone.getAttribute('src');
    let two = imgtwo.getAttribute('src');
    let three = imgthree.getAttribute('src');
    let four = imgfour.getAttribute('src');

    document.getElementById('1').src = three;
    document.getElementById('2').src = one;
    document.getElementById('3').src = four;
    document.getElementById('4').src = two;
}