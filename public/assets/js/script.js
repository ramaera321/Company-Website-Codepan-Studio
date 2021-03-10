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

// Get the modal
const modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
const img = document.querySelectorAll(".myImg");
const modalImg = document.getElementById("img01");
const captionText = document.getElementById("caption");
for(let i=0; i<img.length; i++){
    img[i].onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }
}

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}