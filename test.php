

<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>BMX Essentials Home | CIT 230 | KeanWVegas.github.io</title>
    <meta name="BMX Essentials" content="Page dedicated to informing users about the sport of BMX.">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="final_project/bmx.css">
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

           if (username && username != "undefined") {
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

</head>

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
<body>
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
                                <a href='index.html'>Home</a>
                                <a href="final_project/whatisbmx.html">What is BMX?</a>
                                <a href="final_project/getstarted.html">Get Started</a>
                                <a href="final_project/nearbyparks.html">Nearby Parks</a>
                                <a href="final_project/famousriders.html">Famous Riders</a><a href="final_project/myhistory.html"> My History</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navigationlarge">
                    <div class="box">
                        <div class="drop"><a href='index.html'>Home</a></div>
                        <div class="drop"><a href='final_project/whatisbmx.html'>What is BMX</a></div>
                        <div class="drop"><a href="final_project/getstarted.html">Get Started</a></div>
                        <div class="drop"><a href="final_project/nearbyparks.html">Nearby Parks</a></div>
                        <div class="drop"><a href="final_project/famousriders.html">Famous Riders</a></div>
                        <div class="drop"><a href="final_project/myhistory.html">My History</a></div>
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
            <script>
                VisitCounter()
            </script>
        </div>

    </footer>


</body>

    </html>
