
 function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function Mycolor(element) {
var element = document.getElementById("myID");
if(element.style.backgroundColor == '' || element.style.backgroundColor == '#282A35' || element.style.color == 'white'){
  element.style.backgroundColor = 'white';
  element.style.color = 'black';
  }else{
   /*element.style.backgroundColor = '#002233';*/
   element.style.backgroundColor = '#282A35';
   element.style.color = 'white';
  }
  
}
