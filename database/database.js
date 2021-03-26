var giv = {"Jajdat":"Dschmou"}

document.getElementById("test").innerHTML= giv.Givara;


//mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass&ssl=false


var xhr = new XMLHttpRequest();

xhr.open("GET", "data.json", true);
xhr.responseType ='json';



xhr.onload =()=>{
    
    console.log(xhr.response);
}




xhr.send();

