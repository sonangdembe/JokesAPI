
const JOKE_API_ENDPOINT="http://localhost/jokes_backend/index.php";
const quoteElement=document.getElementById("quote");
const refreshbutton = document.getElementById("refresh");
refreshbutton.addEventListener("click",fetchjoke);

function fetchjoke(){
    
    //AJAX request:js bata kunai pani site hit garna paryo bhane
    const request= new XMLHttpRequest(); //class banaako
    request.open("GET",JOKE_API_ENDPOINT);
    request.setRequestHeader("Accept","application/json");
    request.send();
    request.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            const response=this.responseText;
            const parsedResponse= JSON.parse(response);
            quoteElement.textContent=parsedResponse.joke;
        }
        
    };
}
fetchjoke();