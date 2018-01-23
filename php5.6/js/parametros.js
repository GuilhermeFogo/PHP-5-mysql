$(document).ready(function () {

			//Fazendo o Menu desaparecer e aparecer
		$(window).scroll(function () {
		 var topo = $(window).scrollTop();
		 	if (topo>350){
		 		$('.suspenso').fadeOut('1000');
		 	}else{
		 		$('.suspenso').fadeIn('1000');
		 	}

		})

			//Parte Moblie do menu
				$('#DROP').css('background','#222');
/*
 //Determinamos quando aparece ou desaparece 
     $(window).scroll(function botao_mostra_some(){
     // Se estivermos 100px ou mais abaixo da página, o botão aparece 
          if ($(this).scrollTop() &gt; 100) {
               $('.scrollup_fade').fadeIn();
          } else {
               $('.scrollup_fade').fadeOut(); // Caso contrário, desaparece
          }
     });
 
     // O que acontece quando é clicado
     $('.scrollup_fade,.back_top').click(function(){  //Quando o botão é clicado 
           // A nossa página vai fazer "scrollTop" a uma velocidade de 600 
          $("html, body").animate({scrollTop: 0 }, 600);
          return false;
     });
*/


// aqui fecha o Jquery     
});


function mensagem_cadastro() {
  return alert("Sua mensagem foi enviada com exito...");
}

    function mini_login() {
        // crindo um prompt para se identificar se entar corretamente mostra
        var entar = prompt("Se identifique , coloque seu nome a baixo:");
        if (entar === true) {
              // um alerta se nao uma negação , tente novamete
            alert(entar +" Seja Bemvido (a)");
        }else{    
            alert('Tente novamete, se identifique');
              // cria um segundo prompt 
            var entar_2= prompt("Se identifique , coloque seu nome a baixo:");
            alert(entar_2);

        if (entar_2=== true) {
          alert(entar_2 +" Seja Bemvido (a)");
        }else{
          alert('erro');
          let hh = console.log('aconteceu 1 erro');
        }
     }
}
            // crianso uma calculadora simples
      function calculadora_mini(numero1 , numero2, op) {
          if (op ==='+') {
            return alert(parseInt(numero1) + parseInt(numero2));
          } else {
            if (op=='-') {
            return alert(numero1 - numero2);
            } else {
              if (op==='*') {
            return alert(numero1 * numero2);
              } else {
                if (op==='/') {
            return alert(numero1 / numero2);
                } else {
                  alert('Erro ao fazer o calculo');
                }
              }
            }
          }
      }

  
      function campo_de_busca_com_array() {
        // array de dados 
        var array = ['estivermos', 'comprar','GG', 'Guilherme','teste', 'log de 10'];
        // variavel que pega o ID seach
        var pesquisar = document.getElementsById('serch');
            // cria uma variavel null e uma vazia 
        var testKey = null;
        var result ="";
            // neste laço for , criamos a variavel key e denominandos q ela representa o array de dados
            // logo em seguida criamos um "auxiliar" com o metodo split(), ele atribui "," nos valores 
            //os separando  
        for (var Key in array) {
              var auxArr = array[Key].split(" ");
          for(var Key2 in auxArr){
              // nesta parte temos  a key sendo comparada com testkey q é null , logo diferente é true, 
              // capturando esse valor verdadeiro para null 
                if (auxArr.indexOf(serch)> -1) {
                      if (testKey!= Key) {
                        testKey = Key;
                        result+= "<p>"+array[Key]+"</p>"
                      }
                }
          }
      }
   }// final do search    