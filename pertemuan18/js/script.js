/* Mengambil lemen yang dibutuhkan */
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var containe = document.getElementById('container');

/* Add event ketika keyword ditulis */
keyword.addEventListener('keyup', function() {
    
    /* Add ajax */
    var xhr = new XMLHttpRequest();

    /* Cek kesiapan ajax */
    xhr.onreadystatechange = function(){
        if( xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }

    /* Eksekusi ajax */
    xhr.open('GET', 'ajax/siswa.php?keyword=' + keyword.value, true);
    /* Re method, sumber darimana, sinkronus(false) / ansiqronus(true) */
    xhr.send();
});

