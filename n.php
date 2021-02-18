<input type="range" id="slider" value="0.5" min="0.0" max="1.0" step="0.01" />

$(document).on('input', '#slider', function() {
  $('#slider_value').html( $(this).val() );

  var ans = 0.50;

  if($(this).val() == 0.50){
  alert("ans");
  }


});