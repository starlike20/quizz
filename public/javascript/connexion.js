let mail=document.getElementById('mail')
let password=document.getElementById('password')
let selection=document.getElementById('selection')
let afficher=document.getElementById('aficher')
let masquer=document.getElementById('masque')
let erro= document.getElementById('erro')
selection.addEventListener('click',function(){
    if(selection.checked==true){
        // masquer.style.display='none'
        masquer.style.visibility='hidden'
        afficher.style.visibility='visible'
        password.type='text'
    }
    else{
        masquer.style.visibility='visible'
        // afficher.style.display='none'
        afficher.style.visibility='hidden'
        password.type='password'
    }
})
function verificationtous(){
    
}