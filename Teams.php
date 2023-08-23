<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  type="text/css" href="./styleTeams.css">

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
                    <h1 class="title">Premier League Teams</h1>
                </div>
                
                <div class="clockDiv">
                    <p class="clockDescription">FINAL MATCH DAY: May 18th, 2023</p>
                    <p id="countdownClock"></p>
                </div>
            </div>

            <nav class="navGrid">
                <button id="button" class="Home" onclick = "location.href='Home.php'">Home</button>
                <button id="button" class="Current" onclick = "location.href='Teams.php'">Teams</button>
                <button id="button" class="LeagueTable" onclick = "location.href='LeagueTable.php'">League Table</button>
                <button id="button" class="Records" onclick = "location.href='Records.php'">Records</button>
            </nav>
            
            <div class="TeamsGrid">
               <div class="Teams">
                    <div class = "teamsTableHeader">
                        <h1>Team Name</h1>
                    </div>

                        <?php
                            require_once("db.php");
                            
                            //send a query to the database
                            $sql = "Select teamName, teamID from teams order by teamID asc";
                            $result = $mydb->query($sql);
                            //$result should be a resultset
                            echo "<table class ='teamsTable'>";

                                echo "<tbody>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                        echo "<td class = 'teamName' id = ".$row["teamID"]." onclick = 'locateID(this.id)'>".$row["teamName"]."</td>";
                                        echo "</tr>";
                                    }
                                echo "</tbody>";
                            echo "</table>"; 
                        ?>
                </div>

                <div class="contentGrid">
                    <div class="contentHeader">
                        
                        <h1 id = "selectedTeam" onclick = "locateID()">Pick a Team</h1>

                        <script>

                            function locateID(clickedID) {
                                   
                                document.getElementById("selectedTeam").innerHTML = clickedID;
                            }
                            
                        </script>

                        
                    </div>

                    
                </div> 


            </div>
            
        </main>

    
    </body>
</html>