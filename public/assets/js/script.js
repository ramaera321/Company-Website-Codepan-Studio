let icon = document.querySelector('.landpage');
let iconLP = document.querySelector('.landing-page');

icon.addEventListener('mouseenter', function (){
    iconLP.setAttribute("style", "opacity: 1");
});

icon.addEventListener('mouseleave', function (){
    iconLP.setAttribute("style", "opacity: 0.4");
});

ClassicEditor.create(document.querySelector('#exampleFormControlTextarea1'),{
    ckfinder:{
        uploadUrl:"blog/uploadImage"
    }
});
ClassicEditor.create(document.querySelector('#exampleFormControlTextarea2'),{
    ckfinder:{
        uploadUrl:"blog/uploadImage"
    }
});
ClassicEditor.create(document.querySelector('#exampleFormControlTextarea3'),{
    ckfinder:{
        uploadUrl:"blog/uploadImage"
    }
});
ClassicEditor.create(document.querySelector('#exampleFormControlTextarea4'),{
    ckfinder:{
        uploadUrl:"blog/uploadImage"
    }
});

function previewImage(){
    const foto = document.querySelector('#foto');
    const fotoLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');

    fotoLabel.textContent = foto.files[0].name;

    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(foto.files[0]);

    fileFoto.onload = function (e) {
        imgPreview.src = e.target.result;
}
}