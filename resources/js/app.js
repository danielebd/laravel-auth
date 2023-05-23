import './bootstrap';
import Alpine from 'alpinejs';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const imageIntup = document.querySelector('#image');

imageIntup.addEventListener('change', showPreview);

function showPreview(event) {
    if (event.target.files.length > 0){
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById("file-image-preview");
        preview.src = src;
        preview.style.display = "block";
        console.log('ciao');
    }
}