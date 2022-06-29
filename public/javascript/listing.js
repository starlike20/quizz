let quizz=document.querySelectorAll(".quizz-petit");
let i=0
let j=0
let quiss=[];
let recherche=document.getElementById("recherche")

recherche.addEventListener("keyup",function(){
    
})
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
