// EXERCICE 1

let body = document.getElementsByTagName('body')[0]
console.log(body)
body.classList.remove('bg-aqua')
console.log(body)
body.classList.add('bg-olive')
console.log(body)

let firstP = document.getElementById('first-paragraph')
console.log(firstP)
firstP.classList.remove('bg-lime', 'gray')
console.log(firstP)
firstP.classList.add('aqua')
console.log(firstP)



let silver = document.getElementsByClassName('bg-silver') // querySelectorAll = vie
// console.log(silver)
for (let i = silver.length-1; i >= 0; i--) { // loop pour récupérer  les éléments .bg-silver
//décrémentation pour éviter la cassure
    silver[i].classList.add('bg-teal')
    silver[i].classList.remove('bg-silver')
} 
console.log(silver)

let blockquote = document.getElementsByTagName('blockquote')

for (let i = 0; i < blockquote.length; i++){
    blockquote[i].classList.add('bg-white')
    
}
console.log(blockquote)

// EXERCICE 2 

let mytable = document.querySelector('table')
//console.log(mytable)
mytable.classList.add('bg-purple')
console.log(mytable)

let container = document.querySelectorAll('.container p')
//console.log(container)
for (let i = 0; i < container.length; i++) {
    container[i].classList.add('shadow')

}
console.log(container)

// EXERCICE 3 //
let pre = document.querySelectorAll('pre')
//console.log(pre)
for (let i = 0; i < pre.length; i++) {
    pre[i].style.color = 'blue';
    pre[i].style.backgroundColor = 'black';
    pre[i].style.borderTop = "3px solid red";
    pre[i].style.borderBottom = "3px solid red";
}
// console.log(pre)

let firsth3 = document.querySelector('h3').innerHTML = '<em>Itelic title ! yeah !</em>'

console.log(firsth3)

let firsth2 = document.querySelector('h2').innerHTML = "<strong>HTML doens't work !</strong>"

console.log(firsth2)

// EXERCICE 4 

let firstUl = document.querySelector('ul')
let li = document.createElement('li')
firstUl.appendChild(li)
li.innerHTML = "Mon meilleur ami est <a href='http://www.google.com'>Google</a>"
console.log(firstUl)

let link = li.querySelector('a').style.color ='red'
console.log(link)

// EXERCICE 4 BIS 

let firstOl = document.querySelector('ol')
for (let i = firstOl.children.length-1; i >= 0; i--){
    firstOl.removeChild(firstOl.children[i])
}
console.log(firstOl)

let tab = ["Silent Teacher", "Code Monkey", "CodeCombat"]
tab.forEach((e) => {
    console.log(e)
   let newli = document.createElement('li')
   newli.innerText=e
   console.log(newli)
   firstOl.appendChild(newli)

})