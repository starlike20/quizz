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
mail.addEventListener('keyup',function(){
    let n=mail.value
    if(n.includes(' ')){
        erro.innerText="entrez un mail valide"
        erro.style.color="red"
    }
    else if(n.includes('@') && n.includes('.')){
        erro.innerText="mail respectant le formatage"
        erro.style.color="green"
    }
    else{
        erro.innerText="ceci n'est pas encore un mail"
        erro.style.color="orange"
    }
})