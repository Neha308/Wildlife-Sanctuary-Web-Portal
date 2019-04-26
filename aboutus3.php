<!DOCTYPE html>
<html>
<head>
   <style>
body, html {
    height: 100%;
}

.parallax {
    /* The image used */
    background-image: url('11.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1366px) {
    .parallax {
        background-attachment: scroll;
    }
}

*{
    box-sizing: border-box;

}

.row{
    display: flex;
}

.column{
    flex: 33.33%;
    padding: 110px;

}
</style>
</head>
<body>
   
    
<h1>ABOUT US</h1>
<p></p>

<div class="parallax"></div>


<div style="height:1000px;background-color:lightgrey;font-size:30px">
The National Parks and Wildlife Sanctuary Management Project will help to strengthen the capability of the National Institute of Parks, Sanctuaries and other public environmental agencies to manage the country’s national and urban parks, natural monuments, and wildlife reserves; to intensify public environmental research, training and education efforts; to involve the private sector more actively in the protection/management of natural resources; and to improve the economic sustainability of the national parks and other protected areas. Our webpage Wildlife Sanctuaries And National Parks is a webpage which helps users navigate through different sanctuaries and wildlife across the country. Our main aim is to help users reach their destinations via options that they can avail. Our website also focuses on preserving the heritage of flora and fauna of the country.


<center><video width="400" controls style='align-content: center;width: 800px;'>
    <source src="signup/video.mp4" type="video/mp4"></video></center>
</video>
<div class="row">
    <div class="column">
        <img src="images/neha2.jpg" style="height:160px;width: 150px;border-color: black;">
        <p style="font-size: 14px; font-family: sans-serif;"><b>Ms Neha Patil</b></p>
        <p style="font-size: 14px; font-family: sans-serif;"><b>(Developer)</b></p>



     
        
    
</div><br>


<div class="row">
    <div class="column">
        <img src="images/image1.png" style="height:160px;width: 150px;border-color: black;">
        <p style="font-size: 14px; font-family: sans-serif;"><b>Ms Krutika Parvatikar</b></p>
        <p style="font-size: 14px; font-family: sans-serif;"><b>(Designer)</b></p>



     
        
    </div>
    <div class="text2">
        <div id="title2">
            <div id="designation2"></div>
            <div id="description2"></div>
            
        </div>
        
    </div>
</div><br>

<div class="row">
    <div class="column">
        <img src="images/gaurav1.jpg" style="height:160px;width: 150px;border-color: black;">
        <p style="font-size: 14px; font-family: sans-serif;"><b>Mr. Gaurav Nikam</b></p>
        <p style="font-size: 14px; font-family: sans-serif;"><b>(Database Admin)</b></p>



     
        
    </div>
    <div class="text2">
        <div id="title2">
            <div id="designation2"></div>
            <div id="description2"></div>
            
        </div>
        
    </div>
</div><br>

<div class="row">
    <div class="column">
        <img src="images/subodh.jpg" style="height:160px;width: 150px;border-color: black;">
        <p style="font-size: 14px; font-family: sans-serif;"><b>Mr. Subodh Nikumbh</b></p>
        <p style="font-size: 14px; font-family: sans-serif;"><b>(Manager)</b></p>



     
        
    </div>
    <div class="text2">
        <div id="title2">
            <div id="designation2"></div>
            <div id="description2"></div>
            
        </div>
        
    </div>
</div><br>



</div>

<script>
        loadXMLDoc();
        function loadXMLDoc() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    myFunction(this);
                }
            };
            xmlhttp.open("GET", "details3.xml", true);
            xmlhttp.send();
        }
        function myFunction(xml) {
            var i;
            var xmlDoc = xml.responseXML;
            var x = xmlDoc.getElementsByTagName("member");
            console.log(x);
            final = ""
            for (i = 0; i <x.length; i++) {
                out = "<div style='border:1px solid;'>"
                name = " Name:" +x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +"</div>"
                roll = "<div style='margin-top:10px;'> Roll : " +x[i].getElementsByTagName("roll")[0].childNodes[0].nodeValue+"</div>"
                designation = "<div style='margin-top:10px;'> Designation : " +x[i].getElementsByTagName("designation")[0].childNodes[0].nodeValue+"</div>"
                description = "<div style='margin-top:10px;'> Description : " +x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue+"</div>"
                out  = out +name+ roll+designation+description+"</div>"
                final = final +out;
                
  
            }
        
            document.getElementById("output").innerHTML=final;
        }
        document.body.style.backgroundImage="url('19.jpg')";
    </script><br><br>
    

        <div id="output">
</div>






<div class="parallax"></div>

</body>
</html>
