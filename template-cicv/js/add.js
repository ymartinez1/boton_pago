//SUMA
$(document).ready(function() {
  $(document).on('click keyup','.cuotas-check',function() {
    calcularTotal();
  });
});
function calcularTotal() {
  var tot = $('#total');
  tot.val(0);
  $('.cuotas-check').each(function() {
    if($(this).hasClass('cuotas-check')) {
      tot.val(($(this).is(':checked') ? parseFloat($(this).attr('attr-price')) : 0) + parseFloat(tot.val()));  
    }
    else {
      tot.val(parseFloat(tot.val()) + (isNaN(parseFloat($(this).val())) ? 0 : parseFloat($(this).val())));
    }
  });
  var totalParts = parseFloat(tot.val()).toFixed(2).split('.');
  tot.val('$' + totalParts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".") + '.-');
  $('#total_hidden').val($("#total").val());
}

//CHECK ALL
function selectAll(source) {
  checkboxes = document.getElementsByName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
  calcularTotal()
}

//BUSCAR TABLE
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

//REVISAR SELECCIÓN DEL CHECKBOX
function checkbox_checked() {
  document.getElementById("monto_pago").addEventListener("submit", function(event){
    let hasError = false;
    if(!document.querySelector('input[name="foo"]:checked')) {
      alert('Debe selecionar una colegiatura a pagar.');
      hasError = true;
    }
    if(hasError) event.preventDefault();
  });
}

//CONTROL CHECKBOX ANTIGUOS PRIMERO
function test(id_check){
  var check_a = "check"+id_check;
  var check_b = check_a+1;
  var check = document.getElementById(check_a);

 //alert(check);
  /*if( $('#checkbox1').attr('checked') ) {
    alert('checkbox1 esta Seleccionado');
  }*/
  var isChecked = document.getElementById(check_a).checked;
  if(isChecked){
    alert('Seleccionado');
  } else {
    alert('Deseleccionado');
  }
}