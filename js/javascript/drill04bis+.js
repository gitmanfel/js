
    
  for (let grade=0;grade<=100;grade++){
     

      if(grade>=90){

        document.write('<p> Pour '+grade+ 'le grade est A</p>');
      }
      else if(grade<90&&grade>=80){
          document.write('<p> Pour '+grade+ 'le grade est B</p>');
      }

      else if(grade<80&&grade>=70){
        document.write('<p> Pour '+grade+ 'le grade est C</p>');
    }
    else if(grade<70&&grade>=65){
        document.write('<p> Pour '+grade+ 'le grade est D</p>');
    }
    
    else{
        document.write('<p> Pour '+grade+ 'le grade est F</p>');
    }
    

       }
       

