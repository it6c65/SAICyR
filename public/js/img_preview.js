// Preview de las imagenes en el panel principal
function previewIMG(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img_preview').attr('src', e.target.result);
      $('#img_preview').attr('width', "150");
      $('#img_previewm').attr('height', "200");
      $('#sent_gallery').removeClass("uk-hidden");
      $('#img_preview').removeClass("uk-hidden");
      $('#select_button').addClass("uk-hidden");
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#select_img").change(function() {
  previewIMG(this);
});

$("#exit_img").click(function(){
    $('#img_preview').attr('src',"#");
    $('#sent_gallery').addClass("uk-hidden");
    $('#img_preview').addClass("uk-hidden");
    $('#select_button').removeClass("uk-hidden");
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
