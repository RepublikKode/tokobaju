function kali() {
let val1 = document.getElementById('harga').value;
let val2 = document.getElementById('total').value;

let hasil = parseInt(val1) * parseInt(val2);
document.getElementById("totalHarga").value = hasil;
}