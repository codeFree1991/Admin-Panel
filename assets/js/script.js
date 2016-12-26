jQuery(function($) {
  //  Au focus
  $('.field-input').focus(function(){
    $(this).parent().addClass('is-focused has-label');
  });

  // à la perte du focus
  $('.field-input').blur(function(){
    $parent = $(this).parent();
    if($(this).val() == ''){
      $parent.removeClass('has-label');
    }
    $parent.removeClass('is-focused');
  });

  // si un champs est rempli on rajoute directement la class has-label
  $('.field-input').each(function(){
    if($(this).val() != ''){
      $(this).parent().addClass('has-label');
    }
  });
})

// count the number with using paragraphs line

$(document).ready(function(){
          var count = 1;

          for (i=count;i<=5;i++){
            var content = document.getElementById('countNumber');
            content.innerHTML=content.innerHTML + "<p>count the number"+i+"</p>";
          }
        });



function myFunction() {
    var x = document.getElementById("sel").value;
    document.getElementById("textval").innerHTML = "You selected: " + x;
for(var i=0;i<x;i++){
    var intTextBox=x;
    var objNewDiv = document.createElement('div');
    objNewDiv.setAttribute('id', 'div_' + intTextBox);
    
    objNewDiv.innerHTML = 'Textbox ' + intTextBox + ': <input type="text" class="form-control" id="tb_' + intTextBox + '" name="tb_' + intTextBox + '"/>' +'<br>';
    document.getElementById('content').appendChild(objNewDiv);
}


}


