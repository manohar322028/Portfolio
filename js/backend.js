function SendMsg(){

    
    var email = document.getElementById("sampleInput").innerText;
    var Msg = document.getElementById("exampleMessage").innerText;
    var Request = "backend.php?Email=" + email + "&Msg=" + Msg;
    
    
    

    
    var http = new XMLHttpRequest();
    http.open("GET", Request);
    http.send(null);
    
    }