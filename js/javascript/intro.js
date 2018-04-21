let toGuess = ['B','O','N','J','O','U','R']; // Mot à deviner
let guessed = ['', '', '', '', '', '', '']; // Mot (partiellement) déviné

let guessLetter = () => {
    let letter = prompt("Entrez la lettre");
    console.log(letter)
    for (let i = 0; i <= toGuess.length ; i++){
         if(toGuess[i] == letter) {
             guessed[i] = letter
             console.log("Bravo", guessed)
         }
    }
    
     if(guessed.indexOf('') >= 1) {
       guessLetter()
   }else {
       console.log("Vous avez gagnez")
   }
    
}
guessLetter()
