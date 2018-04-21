let min = 20;
let max = 80;
let aleatoire = Math.round(Math.random() * (max - min) + min);
let tentative = 0;
console.log(min);
console.log(max);
console.log(aleatoire);


function argument(){

let affiche = window.prompt();

console.log(affiche);

if (affiche == aleatoire) 
{
    console.log('c\'est juste tu as trouvé en ' + tentative + ' coups')
} 
else if (affiche > aleatoire) 

{
    console.log('C\'est plus')
    argument()
} 

else {
    console.log('c\'est moins')
    argument()
};

}

argument();