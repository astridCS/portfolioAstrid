function Mycolor(element) {
var element = document.getElementById("myID");
if(element.style.backgroundColor == '' || element.style.backgroundColor == '#343a40' || element.style.color == 'white'){
  element.style.backgroundColor = 'white';
  element.style.color = 'black';
  }else{
   element.style.backgroundColor = '#343a40';
   element.style.color = 'white';
  }
  
}

    
   


