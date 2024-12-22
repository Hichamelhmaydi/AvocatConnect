document.addEventListener('DOMContentLoaded', () => {
    let Client=document.getElementById("Client");
    let Avocat=document.getElementById("Avocat");  
    let choix=document.getElementById("choix");  
    let login_client=document.getElementById("login_client"); 
    let login_avocat=document.getElementById("login_avocat");
     
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