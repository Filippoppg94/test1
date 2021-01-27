$('.containerbottone').show();
$('#registrati').click(function(){
    $('#form').show();
    $('.containerbottone').show();
})
$nome= $('#inputname');
$cognome= $('#inputsurname');
$sesso= $('#selectgen');
$vardiv= $('.messaggioerrore');

var contatoremessaggio=0;
$('#submit').click(function(){
    var verifica= checkdati($nome,$cognome);
    if (verifica>0){
       contatoremessaggio+=1;
    if (contatoremessaggio==1){
        messaggioerrore($vardiv);
    }   
    } else {
        $.ajax({
            url: 'insert.php',
            method: 'POST',
            type: JSON,
            data: 'nomeuser='+$nome.val()+'&cognomeuser='+$cognome.val()+'&sesso='+$sesso.val(),
            success: function(data_server){
                var dati=JSON.parse(data_server);
                console.log(dati);
            }
        })
    }
})
 
function checkdati(elemento1, elemento2){
    var contatore=0;
    if (elemento1.val()==''){
        elemento1.css('border','2px solid red');
        elemento1.attr('placeholder','inserisci nome');
        contatore+=1;
    } else {
        elemento1.css('border', '2px solid green');
    }
    if (elemento2.val()==''){
        elemento2.css('border','2px solid red');
        elemento2.attr('placeholder','inserisci cognome');
        contatore+=1;
    } else {
        elemento2.css('border', '2px solid green');
    }
return contatore;
}
function messaggioerrore(x){
var messaggio= document.createElement('p');
messaggio.innerText='campi vuoti compilali';
x.append(messaggio);
}
 //con javascript 
$('#annull').click(function(){  
   $('.containerbottone').fadeOut();
   $('form').fadeOut();
})



/*
 con javascript

var annullamento= document.getElementById('annull');
annullamento.addEventListener('click',function(){
var ddddd=document.getElementsByClassName('containerbottone')[0].style.display="none";
console.log(ddddd);
})
*/