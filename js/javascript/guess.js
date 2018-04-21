let guessed = ['', '', '', '', '', '', '']; // Mot (partiellement) déviné
let blank = true;

let guessLetter = () => {
    let letter = prompt("Entrez vottre lettre");
    letter.toUpperCase();
    
    for (let i = 0; i <= toGuess.length; i++){
        
        if(toGuess[i] == letter) {
            guessed[i] = letter;
            console.log('Bravo', guessed)                       
        }            
    }


   if(guessed.indexOf('') >= 0) {
       guessLetter()
   }else {
       console.log("Vous avez gagnez")
   }

}


guessLetter()