var data = document.getElementById('text');
var ul = document.getElementById('ul');
var barang = ["Buku Tulis" , "Sepatu" , "Spidol"];
var string = "";


function Tambah(){
	barang.push(data.value) ;
	tampil();
}
function tampil(){
	ul.innerHTML = "";
    barang.forEach(get);
}
function get(item , index){
	string = "<li>" + item + " [ <span onclick='edit("+ index + ")'>Edit</span> | <span onclick='Hapus("+index+")'>Hapus</span> ]</li>"; 
	ul.innerHTML += string;
}
function edit(id){
	console.log(id);
    nilai = prompt("Ubah Barang");
    if(nilai.length > 0)barang[id] = nilai;
    else alert('Tidak Boleh Kosong!');

	barang[id] = nilai;
	tampil();
	console.log(barang);
}
function Hapus(id){
	barang.splice(id , 1 );
	console.log(barang);
	tampil();
}