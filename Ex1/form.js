$(document).ready(function(){

  var n1 = parseInt($("input[name='n1']").val());
  var n2 = parseInt($("input[name='n2']").val());

 $("input[name='n1']").focusout(function(){
   //N1
   if (isNaN(n1)){
     $("#grupoN1").addClass("has-error");
     $("#alertN1").slideDown();
     $("input[name='n1']").val("");
     $("input[name='n1']").focus();
     return;
   }

   $("#grupoN1").removeClass("has-error");
   $("#alertN1").hide();

    //N2
    if (isNaN(n2)){
      $("#grupoN2").addClass("has-error");
      $("#alertN2").slideDown();
      $("input[name='n2']").val("");
      $("input[name='n2']").focus();
      return;
    }

    $("#grupoN2").removeClass("has-error");
    $("#alertN2").hide();

 });

 $("button[name='calculo']").click(function(){

   var res = n1 + n2;

   $("input[name='resultado']").val(res);

 })

})
