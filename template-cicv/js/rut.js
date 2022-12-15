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