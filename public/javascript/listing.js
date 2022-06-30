let quizz=document.querySelectorAll(".quizz-petit");
let i=0
let j=0
let quiss=[];
let recherche=document.getElementById("recherche")

recherche.addEventListener("keyup",function(){
    
})
recherche.addEventListener('keyup',function(){
    quizz.forEach(element => {
        element.classList.add('nono')
        if(recherche.value==null){
            element.classList.remove("nono")
        }
        else
        {
            i=0;
            n=recherche.value.length
            let nmail=element.querySelectorAll(".quizz-petit span").textContent
            console.log(nmail)
            let nmaila=0
            let nnoma=0
            let nprenoma=0
            while(i<=nmail.length-n+1 && nmaila==0){
                j=0
                nmaila=1
                while(j<n && nmaila==1){
                    if(nmail[i+j]!=recherche.value[j]){
                    nmaila=0;
                    }
                    j++
                }
                i++
            }
            if(nmaila==1||nnoma==1||nprenoma==1){
                element.classList.remove("none")}

        }
    }
    )
})
//             while(i<=nnom.length-n+1 && nnoma==0){
//                 j=0
//                 nnoma=1
//                 while(j<n && nnoma==1){
//                     if(nnom[i+j]!=recherche.value[j]){
//                         nnoma=0;
//                     }
//                     j++
//                 }
//                 i++
//             }
//             i=0
//             while(i<=nprenom.length-n+1 && nprenoma==0){
//                 j=0
//                 nprenoma=1
//                 while(j<n && nprenoma==1){
//                     if(nprenom[i+j]!=recherche.value[j]){
//                         nprenoma=0;
//                     }
//                     j++
//                 }
//                 i++
//             }
//             if(nmaila==1||nnoma==1||nprenoma==1){
//                 element.classList.remove("nono")
//             }
//         }
//     });
// })
// function classer(){
//     let petit=document.querySelectorAll(".quizz-petit")
//     let moyen=document.querySelectorAll(".quizz-moyen")
//     let grand=document.querySelectorAll(".quizz-grand")
//     grand.forEach(element=>{
//         quiss[i]=element
//         i++
//     })
//     moyen.forEach(element=>{
//         quiss[i]="<div class='bloc-grand'><div class='bloc-horizontale'>"+element+"<div class='bloc-grand-verticale'>"+petit[j]+"</div></div></div>"
//     })
//    n=document.querySelectorAll(".contain div")
//     n.forEach(element => {
//         if(element.ClassName=='quizz-petit'){

//         }
//     });
// }
// function vue(){
//     n=quizz.length
//     console.log(quizz[0])
//     a=Math.random()*n/2
//     b=Math.random()*n/2
//     for (let i = 0; i <a; i++) {
//         j=Math.trunc(Math.random()*n)
//         quizz[j].classList.remove("quizz-petit")
//         quizz[j].classList.add("quizz-grand")  
//     }
//     for(let i=0; i<b; i++){
//         j=Math.trunc(Math.random()*n)
//         quizz[j].classList.remove("quizz-petit")
//         if(quizz[j].className=="quizz-grand"){
//             quizz[j].remove("quizz-grand")
//         }
//         quizz[j].classList.add("quizz-moyen")
//     }
// }
