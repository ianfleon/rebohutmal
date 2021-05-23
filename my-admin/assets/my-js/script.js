// console.log("Hai");

const btnUbahLokasi = document.querySelectorAll('#btn-ubah-lokasi');
const modalLokasi = document.getElementById('modal-lokasi');
const linkMaps = document.getElementById('link-maps');

const maps = document.querySelector('#maps iframe');

btnUbahLokasi.forEach((btn) => {

	btn.addEventListener('click', ()=> {

		modalLokasi.querySelector('#modal-title').innerHTML = "Ubah Data Hutan";
		modalLokasi.querySelector('#btn-submit-lokasi').setAttribute('name', 'ubah');

		// linkMaps.innerHTML = btn.parentElement.parentElement.firstElementChild.firstChild;

		linkMaps.innerHTML = 'Klik untuk mengubah link lokasi hutan!';

	});

});


linkMaps.addEventListener('click', () => {
	alert('Ha');
});