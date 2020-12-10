let inputCari = document.getElementById('cari');
let container = document.getElementById('search');
inputCari.addEventListener('keyup', () => {
    //buat object ajax
    let ajax = new XMLHttpRequest();
    // cek kesiapan ajax
    ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                //cek jalan atau tidak ajax
                // console.log(ajax.responseText);
                container.innerHTML = ajax.responseText;

            }
        }
        ////ekseskusi ajax
    ajax.open('GET', 'sumberr/siswa.php?inputCari=' + inputCari.value, true);
    ajax.send();
})