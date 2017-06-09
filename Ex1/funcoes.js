//Sintaxe:
//$(seletor).acao()

$(document).ready(function(){
  //Todo código jQuery
  console.log("Documento pronto para uso.");

  //Ocultar "P" -> click
  $("p").click(function(){
    $(this).hide(); //seleciona apenas o clicado
    //$("p").hide(); //seleciona todas as tags
  });

  $("button[name='exibir']").click(function(){
    $("#links").show();
  });

  $("button[name='ocultar']").click(function(){
    $("#links").hide();
  });

  $("button[name='mudar']").click(function(){
    $("#titulo").addClass("jumbotron");
    $("button").addClass("btn btn-primary");
    $("p").removeClass("h2");
    $("#links").addClass("alert alert-info");

    $("a").toggleClass("btn btn-warning");
  });

  $("button[name='validar']").click(function(){
    if ($("estado").val() == "0") {
      alet("Selecione o estado!");
      $("estado").focus();
    } else {
      alert($("#estado option:selected").text());
    }
  });

});
