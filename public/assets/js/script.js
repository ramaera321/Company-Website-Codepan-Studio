const chek = document.querySelector("#passwordchek");
const password = document.querySelectorAll(".password");

chek.addEventListener("click", showPassword);

function showPassword(){
    if(this.checked){
        password[0].type = "text";
        password[1].type = "text";
    }
    else{
        password[0].type = "password";
        password[1].type = "password";
    }
}

let icon = document.querySelector('.landpage');
let iconLP = document.querySelector('.landing-page');

icon.addEventListener('mouseenter', function (){
    iconLP.setAttribute("style", "opacity: 1");
});

icon.addEventListener('mouseleave', function (){
    iconLP.setAttribute("style", "opacity: 0.4");
});

function previewImage(){
    const foto = document.querySelector('#foto');
    const fotoLabel = document.querySelector('#label-gambar');
    const imgPreview = document.querySelector('.img-preview');

    fotoLabel.textContent = foto.files[0].name;

    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(foto.files[0]);

    fileFoto.onload = function (e) {
        imgPreview.src = e.target.result;
    }
}
function previewLogo(){
    const foto = document.querySelector('#logo');
    const fotoLabel = document.querySelector('#logo-label');
    const imgPreview = document.querySelector('.logo-preview');

    fotoLabel.textContent = foto.files[0].name;

    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(foto.files[0]);

    fileFoto.onload = function (e) {
        imgPreview.src = e.target.result;
    }
}

function profile() {
    const imgProfile = document.querySelector('#im-profile');
    const width = imgProfile.naturalWidth;
    const height = imgProfile.naturalHeight;


    if (width < height) {
        imgProfile.style.width = "100%";
        imgProfile.style.height = "auto";
        let n = 1;
        let nilai = (height - width)/2;
        let data_margin = (nilai / width) * 100;
        let margin = (210 * data_margin) / 100;
        imgProfile.style.marginTop = "-"+margin+"px";
    } else if (width > height) {
        imgProfile.style.width = "auto";
        imgProfile.style.height = "100%";
        let n = 2;
        const nilai = (width - height)/2;
        let data_margin = (nilai / width) * 100;
        let margin = (210 * data_margin) / 100;
        imgProfile.style.marginLeft = "-"+margin+"px";
    } else{
        imgProfile.style.width = "100%";
        imgProfile.style.height = "auto";
        let n = 0;
        imgProfile.style.margin = "0";
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


