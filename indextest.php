<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>BMX Essentials Home</title>
    <meta name="BMX Essentials" content="Page dedicated to informing users about the sport of BMX.">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/final_project/bmx.css">
    <script>
        function myFunction(thiselement) {
            document.getElementById("myDropdown").classList.toggle("show");
            for (var i = 0; i < thiselement.children.length; i++) {
                var child = thiselement.children[i];
                child.classList.toggle("show");
            }
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }

            function buttonFunction(x) {
                x.classList.toggle("change");
            }
        }
        <!--//
        var expdate = new Date();
        expdate.setTime(expdate.getTime() + (24 * 60 * 60 * 1000 * 365)); // 1 yr from now 

        function setCookie(name, value, expires, path, domain, secure) {
            var thisCookie = name + "=" + escape(value) +
                ((expires) ? "; expires=" + expires.toGMTString() : "") +
                ((path) ? "; path=" + path : "") +
                ((domain) ? "; domain=" + domain : "") +
                ((secure) ? "; secure" : "");
            document.cookie = thisCookie;
        }

        function showCookie() {
            alert(unescape(document.cookie));
        }

        function getCookieVal(offset) {
            var endstr = document.cookie.indexOf(";", offset);
            if (endstr == -1)
                endstr = document.cookie.length;
            return unescape(document.cookie.substring(offset, endstr));
        }

        function GetCookie(name) {
            var arg = name + "=";
            var alen = arg.length;
            var clen = document.cookie.length;
            var i = 0;
            while (i < clen) {
                var j = i + alen;
                if (document.cookie.substring(i, j) == arg)
                    return getCookieVal(j);
                i = document.cookie.indexOf(" ", i) + 1;
                if (i == 0) break;
            }
            return null;
        }

        function DeleteCookie(name, path, domain) {
            if (GetCookie(name)) {
                document.cookie = name + "=" +
                    ((path) ? "; path=" + path : "") +
                    ((domain) ? "; domain=" + domain : "") +
                    "; expires=Thu, 01-Jan-70 00:00:01 GMT";
            }
        }

        function VisitCounter() {
            var visits = GetCookie("counter");
            if (!visits) {
                visits = 1;
                document.write("Welcome to BMX Essentials!");
            } else {
                visits = parseInt(visits) + 1;
                document.write("You've visited " + visits + " times.");
            }
            setCookie("counter", visits, expdate);
        }

        function NewName() {
            var now = new Date();
            now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000);
            var username = GetCookie("username");

            /* if ((!username) || (username == 'null')) {
                 username = prompt("Please enter your name:", "");
             }
             /*if ((!username) || (username == 'null')) {
                 username = document.getElementById('name');   
             } */

            setCookie("username", username, now);

            if (username != "undefined") {
                document.write("" + username +
                    " <a href=\"test.php\" onClick=\"ChangeName();history.go(-1)\">Logout</a> ");
                setCookie("username", username, now);
            } else {
                document.write("<a href=\"test.php\" onClick=\"ChangeName();history.go(-1)\">Sign up</a>");
            }

        }

        function ChangeName(username) {
            //username = document.getElementById('name').value;
            setCookie("username", username);
            var visits = '';
            setCookie("counter", visits);
        }

    </script>

    <?php
 if (isset($_GET['name'])){
    $json_data = json_encode($_GET);
   // var_dump($json_data);
    $file = file_put_contents('data.json', $json_data."," , FILE_APPEND | LOCK_EX);

?>
        <script type="text/javascript">
            ChangeName(<?php echo("'".$_GET['name']."'") ?>);

        </script>
        <?php } ?>

</head>

<body>
    <a name="home" />
    <header>
        <div class="navlogo">
            <nav class="nav">
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
    
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <div class="navigationsmall">
                            <div class="box">
                                <a href='#home' class="navbutton">Home</a>
                                <a href="#whatisbmx" class="navbutton">What is BMX?</a>
                                <a href="#getstarted" class="navbutton">Get Started</a>
                                <a href="#nearbyparks" class="navbutton">Nearby Parks</a>
                                <a href="#news" class="navbutton">News</a>
                                <a href="" class="navbutton"> Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navigationlarge">
                    <div class="box">
                        <div class="drop"><a href='#home' class="navbutton">Home</a></div>
                        <div class="drop"><a href='#whatisbmx' class="navbutton">What is BMX</a></div>
                        <div class="drop"><a href="#getstarted" class="navbutton">Get Started</a></div>
                        <div class="drop"><a href="#nearbyparks" class="navbutton">Nearby Parks</a></div>
                        <div class="drop"><a href="#news" class="navbutton">News</a></div>
                        <div class="drop"><a href="" class="navbutton">Sign Up</a></div>
                    </div>
                </div>
            </nav>
            <div class="logoholder">
                <h1 class="logo"> BMX Essentials</h1>
            </div>
            <div class="counterholder">
                <div class="counter">
                    <p>
                        <script type="text/javascript">
                            NewName()

                        </script>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <main>

        <div class="primary">
            <h1>BMX Advice</h1>
        </div>
        <div class="primary">
            <h2>Learn about Bicycle Moto-Cross</h2>
        </div>
        <div class="primary">
            <p>Learn what bmx is, how to get started, and skateparks near you.</p>
        </div>
        <div class="primary">
            <p> Here's a quick clip of the 2014 Red Bull Dreamline, showcasing a few famous riders, including Ryan Nyquist and Morgan Wade!</p>
        </div>
        <div class="primary">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/t43CcBw1nWw" allowfullscreen></iframe>
        </div>

        <script>
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById("names").innerHTML = myObj.name;
                }
            };
            xmlhttp.open("GET", "data.json", true);
            xmlhttp.send();

        </script>
        <a name="whatisbmx" />
        <div class="primary">
            <h1> What is BMX?</h1>
        </div>
        <div class="primary">
            <p class="grow">BMX is an abbreviation for bicycle motocross, and is a sport performed on BMX bikes, which are generally smaller in size to allow for quick, jerking movements on dirt courses, skateparks, or street settings. It began when young riders created dirt courses to perform tricks on. BMX began in the early 70's when children would ride their bikes on dirt courses, immitating the similar motorsport 'motocross.' Eventually manufacturers began creating smaller, lighter and more maneuverable bikes than the average road bike.</p>
        </div>
        <div class="primary">
            <p class="grow"> Freestyle BMX is now one of the main events at the annual Summer X Games competition. The popularity of the sport has increased due to its relative ease and availability of places to ride due to the growing amount of skateparks in the nation. There are other events, not including the X Games, such as the Mountain Dew Tour and Etnies Backyard Jam.</p>
        </div>
        <a name="getstarted" />
        <div class="primary">
            <h1> Get Started</h1>
        </div>
        <div class="primary">
            <p>Getting started in BMX is rather easy. First of all, you can begin by watching a few videos online that showcase the sport, and see if it is something that truly does interest you. If you still are interested after doing that, I would recommend by getting a starter BMX bike off of <a href="https://www.danscomp.com/">DansComp</a>, <a href="https://craigslist.org/">Craigslist</a>, or something similar. <a href="https://www.youtube.com/watch?v=ZTQNtG0AvtI">This</a> video shows what to look for when trying to purchase a BMX bike, <a href="https://www.youtube.com/watch?v=ZTQNtG0AvtI">BMX Bike Buying Guide.</a> Just to give you an idea of what it should look like, here is what a good beginner BMX bike looks like, <a href="https://www.danscomp.com/products/102902/2018_Kink_Curb_Bike.html">2017 Kink Curb Bike</a>. </p>
        </div>
        <div class="primary">
            <p>Now that you have a BMX bike you can take it to one of your nearby skateparks found using our 'Nearby Parks' tool. I would recommend watching and getting to know some of the people at the park, and ask if they could teach you the basics. If that isn't really possible for you, I 'd recommend by watching some beginner videos on youtube- I'll link a few below.</p>
        </div>
        <div class="primary">
            <a href="https://www.youtube.com/watch?v=danm2Kgxozo">BMX for Beginners - Getting started </a></div>
        <div class="primary">
            <a href="https://www.youtube.com/watch?v=d6TRILP6kaI">4 BMX Skills to Learn First</a></div>
        <div class="primary">
            <a href="https://www.youtube.com/watch?v=NZ1qeVe8-yM">BMX Basics - 7 Skatepark Skills</a></div>
        <div class="primary">
            <p> After honing those skills, just remember that the internet is one of the greatest sources of learning. But, like stated in the first video, to truly get better it takes time and practice. Without these you will remain stagnant, and wont ever get better.</p>
        </div>
        <div class="primary">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VGmtMNkpNX4" allowfullscreen></iframe>
        </div>
        <a name="nearbyparks" />
        <div class="primary">
            <h1> Nearby Parks</h1>
        </div>
        <div class="primary">
            <p>Here is a map of the skateparks closest to you according to Google. For a more detailed and large-scale map, click the 'View Larger Map' button located in the top left of the below map.
            </p>
        </div>
        <div class="map">
            <iframe width="600" height="450" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=skatepark&key=AIzaSyDNVNkWY0zEVZRJGKB-BANHs-UNmEtuOjg" allowfullscreen></iframe>
        </div>
        <a name="news" />
        <div class="primary">
            <h1> News</h1>
        </div>
        <div class="primary">
            <p> Here is where my news section would go.
            </p>
        </div>
        <form id="myform" type="post" class="form">
            <fieldset>
                <legend>Sign Up</legend>
                <p>Please sign up for our website here!</p>
                <div>
                    <input required="required" type="text" placeholder="First name" name="name" size="25" class="inputBox" />
                </div>
                <div>
                    <input required="required" type="text" placeholder="Username" name="username" size="25" class="inputBox" />
                </div>
                <div>
                    <input required="required" type="text" placeholder="Email Address" name="email" size="25" class="inputBox" />
                </div>
                <div>
                    <input required="required" type="number" value="" id="age" name="age" size="3" placeholder="Age" class="inputBox" min="1" max="99"/>
                </div>
                <div class="genderBox">
                    <label for="gender">Gender :</label>
                    <input type="radio" name="gender" value="Male" checked="checked" id="r1"> Male
                    <input type="radio" name="gender" value="Female" id="r2"> Female
                </div>
                <div>
                    <input type="submit" name="submit" id="submit" value="Submit" class="submit" />
                </div>
            </fieldset>
        </form>


        <p id="names"></p>

        <script>
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById("names").innerHTML = myObj.name;
                }
            };
            xmlhttp.open("GET", "data.json", true);
            xmlhttp.send();
        </script>
        
        
        
    </main>
    <footer>
        <div class="footer">
            <a>&copy;2017 Kean Weithofer</a>
        </div>
        <div class="footer">
            <a href="/final_project/oldindex.html">Homework Page</a>
        </div>
        <div class="footer">
            <a href="../weather/project-proposal-page.html">Planning Page</a>
        </div>
    </footer>
</body>

</html>
