let req = new XMLHttpRequest();
req.open('GET', 'data.json', false); //je charge le fichier json
req.send(null);

//ajouter un score aléatoire (0 -> 1000) à toutes ces personnes tip: arr.map()


let data = req.responseText
let arrayData = JSON.parse(data) //récuperation du json et transformation en  JS
let catA = []
let catB = []
let catC = []




for (let i = 0; i < arrayData.length; i++) { 
    arrayData[i].score = Math.round(Math.random() * 1000); //ajouter un score aléatoire (0 -> 1000) à toutes ces personnes tip: arr.map()
    
    
    if (arrayData[i].score > 750  ){
        catA.push(arrayData[i]) // envoie l'objet dans un nouveau tableau
    } else if (arrayData[i].score < 500 ){
        catB.push(arrayData[i])
    } else {
        catC.push(arrayData[i])
    }
}

arrayData.sort((a, b) => { //sort per score
    return a.score - b.score;
});




//  => test'
console.log(arrayData)
console.log(catA)
console.log(catB)
console.log(catC)


let bahrain = arrayData.filter((pays) => { // filter by country
    return pays.country == "Bahrain"
})

console.log(bahrain)

console.log('MaxScore')
console.log(arrayData[90])
console.log('MinScore')
console.log(arrayData[0])
