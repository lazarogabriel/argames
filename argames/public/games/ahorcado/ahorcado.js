
////////////////// CLASES //////////////////////////
class UI{
    mensajeError(mensaje, input, tag){
        document.getElementById(tag).innerHTML = mensaje;
        
        const element_message = document.getElementById(input);
        element_message.classList.add('is-invalid');

        setTimeout(function(){
            element_message.classList.remove('is-invalid');
        }, 3500);
    }

    mostrarPalabra(){
        word.innerHTML = palabra_encriptada.join('');
    }

    actualizaHorca(oportunidades){
        const imagen = document.getElementById("imagen");
        switch(oportunidades){
            case 5:
                imagen.src = 'games/ahorcado/man_body/cabeza.png';
            break;
            case 4:
                imagen.src = 'games/ahorcado/man_body/dorso.png';
            break;
            case 3:
                imagen.src = 'games/ahorcado/man_body/brazo_derecha.png';
            break;
            case 2:
                imagen.src = 'games/ahorcado/man_body/brazo_izquierda.png';
            break;
            case 1:
                imagen.src = 'games/ahorcado/man_body/pierna_derecha.png';
            break;
            case 0:
                imagen.src = 'games/ahorcado/man_body/pierna_izquierda_endgame.png';
            break;

        }
    }

    endGameMessage(won){
        const element_won = document.createElement('div');
        
        if(won){
            element_won.innerHTML = `
            <div>
                <h2 style="color:green;"> GANASTE !</h2>
                <p class="py-3" style="letter-spacing:5px;">La palabra era  ${palabra}</p>
                <a href="/ahorcado" class="btn btn-success">Jugar Otra vez</a>
            </div> 
            `;
        }else{
            element_won.innerHTML = `
            <div>
                <h2 style="color:red;"> PERDISTE BOLUDO</h2>
                <p class="py-3" style="letter-spacing:5px;">La palabra era  ${palabra}</p>
                <a href="/ahorcado" class="btn btn-danger">Jugar Otra vez</a>
            </div>
            `;
        }

        document.getElementById('endGameContainerMessage').appendChild(element_won); 
        word.remove();
        formulario_letra.style.display = "none"; 
    }


}

const formulario_letra = document.getElementById('form_letter');
const formulario_palabra = document.getElementById('form_word');
const abecedario = new RegExp('^[A-Z]+$', 'i');
const interface = new UI();
var letra;
var oportunidades = 6;
var palabra;
var palabra_encriptada;


formulario_palabra.addEventListener('submit', function(e){
    e.preventDefault();

    palabra = document.getElementById("palabra").value;
    if(palabra == null || palabra.length == 0 || /^\s+$/.test(palabra) || !abecedario.test(palabra))return interface.mensajeError("Debes ingresar una palabra!", "palabra","alerta_1");
    if(palabra.length < 3 || palabra.length > 25)return interface.mensajeError("Debe contener tener entre 3 y 25 caracteres!", "palabra", "alerta_1");    
        
    iniciarJuego();
});

formulario_letra.addEventListener('submit', function(e){
    
    e.preventDefault();

    letra = document.getElementById("letra").value;

    if(letra == null || letra.length == 0 || letra.length > 1 || /^\s+$/.test(letra) || !abecedario.test(letra))return interface.mensajeError("Debe ingresar solo una letra!","letra", "alerta_2");

    var fail_letter = true;

    for(var i = 0; i < palabra.length; i++){
        if(palabra[i] === letra){
            fail_letter = false;
            palabra_encriptada[i] = palabra[i];
        }
    }


    if(fail_letter){
        oportunidades--;
        interface.actualizaHorca(oportunidades);
    }
    if(palabra_encriptada.join('') === palabra) return interface.endGameMessage(1);    
    if(!oportunidades)                          return interface.endGameMessage(0);

    document.getElementById("letra").value = "";
    interface.mostrarPalabra();
});

function iniciarJuego(){
    form_word.style.display = "none";
    form_letter.style.display = "block";
    
    palabra_encriptada = Array.from(palabra);

    var n_rand = Math.floor(Math.random() * (palabra.length));

    for (var i = 0; i < palabra.length; i++)
    if(i != n_rand && (palabra.length-1 != i))palabra_encriptada[i] = "?"; 

    interface.mostrarPalabra();
}
 

