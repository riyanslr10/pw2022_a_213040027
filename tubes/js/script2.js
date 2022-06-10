// ambil elemen2 yg dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event keyword tulis
keyword.addEventListener('keyup', function () {



    //buat objek ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }


    //eksekusi ajax
    xhr.open('GET', '../ajax/benda.php?keyword=' + keyword.value, true);
    xhr.send();


});

// auto-type
const txtElement = ['Slayer CONSOLE'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function type() {

    if (count == txtElement.length) {
        count = 0;
    }

    currentTxt = txtElement[count];

    words = currentTxt.slice(0, ++txtIndex);
    document.querySelector('.auto-type').textContent = words;

    if (words.length == currentTxt.length) {
        count++;
        txtIndex = 0;
    }

    setTimeout(type, 500);

})();