function clear1() {
    let angka1 = document.getElementById("formulir");
    angka1.a1.value= "";
}
function clear2() {
    let angka2 = document.getElementById("formulir");
    angka2.a2.value= "";
}
function kosong(){
    let kosong = document.getElementById("formulir");
    kosong.a1.value="";
    kosong.a2.value="";
    kosong.hasil.value= "";

}
function tambah(){
    let input = document.getElementById("formulir");
    let angka1 = input.a1.value;
    let angka2 = input.a2.value;
    if (isNaN(angka1) || angka1 == '') {
        alert ("yang anda masukan di angka 1 salah");
    } else if (isNaN(angka2) || angka2 == '') {
        alert ("yang anda masukakn di angka 2 salah");
    } else {
    let jumlah = Number(angka1) + Number(angka2);
    input.hasil.value = jumlah;
    }
}
function kurang(){
    let input = document.getElementById("formulir");
    let angka1 = input.a1.value;
    let angka2 = input.a2.value;
    if (isNaN(angka1) || angka1 == '') {
        alert ("yang anda masukan di angka 1 salah");
    } else if (isNaN(angka2) || angka2 == '') {
        alert ("yang anda masukakn di angka 2 salah");
    } else {
    let jumlah = angka1 - angka2;
    input.hasil.value = jumlah;
    }
}
function bagi(){
    let input = document.getElementById("formulir");
    let angka1 = input.a1.value;
    let angka2 = input.a2.value;
    if (isNaN(angka1) || angka1 == '') {
        alert ("yang anda masukan di angka 1 salah");
    } else if (isNaN(angka2) || angka2 == '') {
        alert ("yang anda masukakn di angka 2 salah");
    } else {
    let jumlah = angka1 / angka2;
    input.hasil.value = jumlah;
    }
}
function kali(){
    let input = document.getElementById("formulir");
    let angka1 = input.a1.value;
    let angka2 = input.a2.value;
    if (isNaN(angka1) || angka1 == '') {
        alert ("yang anda masukan di angka 1 salah");
    } else if (isNaN(angka2) || angka2 == '') {
        alert ("yang anda masukakn di angka 2 salah");
    } else {
    let jumlah = angka1 * angka2;
    input.hasil.value = jumlah;
    }
}
function kuadrat(){
    let input = document.getElementById("formulir");
    let angka1 = input.a1.value;
    let angka2 = input.a2.value;
    if (isNaN(angka1) || angka1 == '') {
        alert ("yang anda masukan di angka 1 salah");
    } else if (isNaN(angka2) || angka2 == '') {
        alert ("yang anda masukakn di angka 2 salah");
    } else {
    let jumlah = Math.pow(angka1,angka2);
    input.hasil.value = jumlah;
    }
}

