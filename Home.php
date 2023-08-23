<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  type="text/css" href="./styleHome.css">

        <title>Premier League Practice Project</title>

        <script>
            function getTimeDiff(today, commencementDate) {
            var c = document.getElementById("countdownClock");
            
            setInterval(updateTime, 1000)

            function updateTime() {
                var commencementDate = new Date("May 28, 2023"). getTime();
                var today = new Date().getTime();
                var difference = (commencementDate -  today) / 1000;
                
                var days = Math.floor(difference / (60 * 60 * 24));
                var hours = Math.floor((difference % (60 * 60 * 24)) / (60 * 60));
                var minutes = Math.floor((difference % (60 * 60)) / (60));
                var seconds = Math.floor((difference % (60) ));
                
                c.innerHTML = days + " Days " + hours + " Hours " + minutes + " Minutes " + seconds + " Seconds";
            }
            
            }   

            document.addEventListener("DOMContentLoaded", getTimeDiff, false);

        </script>
    </head>
    
    <body>
        <main>
            <div class="Header">
                <div class="LogoDiv">
                    <img src="PremierLeagueLogo.png" alt="Logo" id="Logo">
                </div>
                
                <div class="titleDiv">
                    <h1 class="title">Premier League Home</h1>
                </div>
                
                <div class="clockDiv">
                    <p class="clockDescription">FINAL MATCH DAY: May 18th, 2023</p>
                    <p id="countdownClock"></p>
                </div>
                
            </div> 

            <nav class="navGrid">
                <button id="button" class="Current" onclick = "location.href='Home.php'">Home</button>
                <button id="button" class="Teams" onclick = "location.href='Teams.php'">Teams</button>
                <button id="button" class="LeagueTable" onclick = "location.href='LeagueTable.php'">League Table</button>
                <button id="button" class="Records" onclick = "location.href='Records.php'">Records</button>
            </nav>
            
            <div class="Box1">
                <h1>Box 1</h1>
            </div>

            <div class="Box2">
                <h1>Box 2</h1>
            </div>


        </main>
        

    
    
    </body>
</html>