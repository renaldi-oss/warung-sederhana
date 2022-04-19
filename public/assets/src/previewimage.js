function previewimage(){
    const image = document.querySelector("#image");
    const prev = document.querySelector('.img-preview');

    prev.style.display='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent){
      prev.src=oFREvent.target.result;
    }
  }