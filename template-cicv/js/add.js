//VALIDAR RUT
var Fn = {
  // Validación con formato "XXXXXXXX-X"
  validaRut : function (rutCompleto) {
    rutCompleto = rutCompleto.replace("‐","-");
    if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
      return false;
    var tmp   = rutCompleto.split('-');
    var digv  = tmp[1]; 
    var rut   = tmp[0];
    if ( digv == 'K' ) digv = 'k' ;
    return (Fn.dv(rut) == digv );
  },
  dv : function(T){
    var M=0,S=1;
    for(;T;T=Math.floor(T/10))
      S=(S+T%10*(9-M++%6))%11;
    return S?S-1:'k';
  }
}
if ($('#txt_rut').val().length != 0) {
  $("#btnvalida").click(function(){
    if (Fn.validaRut( $("#txt_rut").val() )){
      $("#msgerror").html("El RUT ingresado es correcto");
    } else {
      $("#msgerror").html("El RUT ingresado es incorrecto");
    }
  });
}

//SUMA
/*
$(document).ready(function() {
  $(document).on('click keyup','.cuotas-check',function() {
    calcularTotal();
  });
});
*/
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