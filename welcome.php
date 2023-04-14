<html>
    <head>
        <style>
            body{
                margin:0 0 0 0;
                background-image: url('airplane.jpg');
                opacity:0.8;
                background-repeat: no-repeat;
                background-size: 1000px 500px;
            }
            .nav{
               height:75px;
               background-color:  rgb(0, 0, 0, 0.5);
              
            }
            ul{
             list-style: none;
             display: inline-flex;
            }
            li{
               
                font-size: larger;
                margin-top:5px;
            }
            a{
                text-decoration: none;
                color:black;
                
            }
            
            h2{
              margin: 5 10 0 -10; 
            }
            .dhikchik{
                margin-left:190px;
                font-weight: bold;
               
            }
            .dhoom{
                
                height:30px;
                width:200px;
                margin:15px 0 0 195px;
                font-size: larger;
                
            }
            li:hover{
                border-radius: 2px;
                box-shadow:inset 0 150px 0 0 rgb(255, 255, 255,0.8);
                transition: 0.8s;
                
            }
            .register:hover{
                background-color:rgb(255, 255, 255, 0.7);
                 border-radius: 10px;
                padding:0 25px 0 25px;
                transition:0.5s;
            }
            .Style{
                height:150px;
                width:300px;
                
                padding:20px;
                background-color: rgb(0, 0, 0, 0.5);
                border-radius: 25px;
                transition: 0.5s;
            }
            .main{
                height:300px;
                width:600px;
               
                margin:10px 0 0 160px;
                padding:20px;
                background-color: rgb(0, 0, 0, 0.5);
                border-radius: 25px;
                transition: 0.5s;
            }
            .home,.service,.about,.contact{
                margin:10px 0 -200px 10px;
                padding:10 25 10 25;
                font-size: larger; 
            }
            .single,.multi{
                font-weight:bold;
                padding:5 5 5 5;
            }
            .dep{
                padding:5 0 5 10;
                width:200px;
                border-radius:5px;
                font-weight:bold;
                background-color:rgb(0,0,0,0.2);
                color:white;
            }
            .arr{
                padding:5 0 5 10;
                width:200px;
                border-radius:5px;
                font-weight:bold;
                background-color:rgb(0,0,0,0.2);
                color:white;
            }
            .trip{
                list-style:none;
                display:inline-flex;
            }
            input:checked ~ .single{
                background-color:rgb(255, 255, 255, 0.8);
            }
            input:checked ~ .multi{
                background-color:rgb(255, 255, 255, 0.8);
            }
            </style>
            </head>
            <body>
               
            <div class="nav">
                <ul>
                   <h2><a href="welcome.php">FLIGHTS</a></h2>
                    
                    <li><a class="home" href="welcome.php">Home</a></li>
            <li><a class="service" href="service.html">Service</a></li>
            <li><a class="about" href="about.html">About</a></li>
            <li><a class="contact" href="contact.html">Contact</a></li>
                </ul>
            </div>
            <h2 class="dhikchik">
            Welcome to our new Airline seat booking page.
        </h2>
            <div class="main">
            <ol class="trip">
            <input type="radio"><li class="single">SINGLE TRIP</li>
            <input type="radio"><li class="multi">MULTI TRIP</li>
        </ol>
                <h4>FROM:
                    <input class="dep" type="text" placeholder="ENTER DEPARTURE PLACE">
                    DESTINATION:
                    <input class="arr" type="text" placeholder="ENTER ARRIVAL PLACE">    
                </h4>
                <h4>
                    TRAVELLERS:
                    <input class="dep" type="number" placeholder="ENTER TRAVELLERS">    
                    DATE:
                    <input class="arr" type="date" placeholder="ENTER TIME PLACE">
                </h4>
               <div class="dhoom"><a class="register" href="flight.html">SHOW FLIGHTS</a></div>
            </div>
            </body>
        </html>