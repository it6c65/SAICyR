function previewIMG(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img_articulo').attr('src', e.target.result);
      $('#img_articulo').attr('width', "150");
      $('#img_articulo').attr('height', "200");
      $('#img_articulo').removeClass("uk-hidden");
      $('#exit_img').removeClass("uk-hidden");
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#exit_img").click(function(){
  $('#img_articulo').attr('src', "#");
  $('#img_articulo').addClass("uk-hidden");
  $('#exit_img').addClass("uk-hidden");
})

$("#articulo").change(function() {
  previewIMG(this);
});
