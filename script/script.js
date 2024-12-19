document.addEventListener('DOMContentLoaded', () => {
    Client=document.getElementById("Client");
    Avocat=document.getElementById("Avocat");  
    choix=document.getElementById("choix");  
    login_client=document.getElementById("login_client"); 
    login_avocat=document.getElementById("login_avocat"); 


    Client.addEventListener("click", showClient);
    function showClient() {
        choix.style.display ='none';
        login_client.style.display='block';
    }

    Avocat.addEventListener("click", showAvocat);
    function showAvocat() {
        choix.style.display ='none';
        login_avocat.style.display='block';
    }
})