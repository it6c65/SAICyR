// Preview de las imagenes en el panel principal
function previewIMG(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img_articulo').attr('src', e.target.result);
      $('#img_articulo').attr('width', "150");
      $('#img_articulo').attr('height', "200");
      $('#img_articulo').removeClass("uk-hidden");
      $('#exit_img').removeClass("uk-hidden");
      $('#icon_img').addClass("uk-hidden");
    }

    reader.readAsDataURL(input.files[0]);
  }
}


$("#exit_img").click(function(){
  $('#img_articulo').attr('src', "#");
  $('#img_articulo').addClass("uk-hidden");
  $('#exit_img').addClass("uk-hidden");
  $('#icon_img').removeClass("uk-hidden");
})

$("#articulo").change(function() {
  previewIMG(this);
});

// preview de las imagenes en agregar
function previewimgADD(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img_item').attr('src', e.target.result);
      $('#img_item').attr('width', "150");
      $('#img_item').attr('height', "200");
      $('#img_item').removeClass("uk-hidden");
      $('#add_exit_img').removeClass("uk-hidden");
      $('#add_icon_img').addClass("uk-hidden");
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#add_item").change(function(){
    previewimgADD(this);
});

$("#add_exit_img").click(function(){
    $('#img_item').attr('src',"#");
    $('#img_item').addClass("uk-hidden");
    $('#add_exit_img').addClass("uk-hidden");
    $('#add_icon_img').removeClass("uk-hidden");
});
