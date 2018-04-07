<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>BMX Essentials Home | CIT 230 | KeanWVegas.github.io</title>
    <meta name="BMX Essentials" content="Page dedicated to informing users about the sport of BMX.">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/final_project/bmx.css">
    <script>
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
                    " <a href=\"index.php\" onClick=\"ChangeName();history.go(-1)\">Logout</a> ");
                setCookie("username", username, now);
            } else {
                document.write("<a href=\"#\" onClick=\"OpenModal();\">Sign up</a>");
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
        <script>
            function readTextFile(file, callback) {
                var rawFile = new XMLHttpRequest();
                rawFile.overrideMimeType("application/json");
                rawFile.open("GET", file, true);
                rawFile.onreadystatechange = function() {
                    if (rawFile.readyState === 4 && rawFile.status == "200") {
                        callback(rawFile.responseText);
                    }
                }
                rawFile.send(null);
            }

            readTextFile("/data.json", function(text) {
                var jsonData = JSON.parse(text);
                console.log(data);
                var table = document.getElementById("myTable");
                for (var i = 0; i < jsonData.length; i++) {
                    var user = jsonData[i];
                    var row = table.insertRow(i);
                    var cell1 = row.insertCell(0);
                    cell1.innerHTML = user.username;
                }

            });

        </script>
</head>

<body>
    <a name="home" />
    <header>
        <div class="navlogo">
            <nav class="nav">
                <button class="dropbtn sidenavOpener" id="sidenavOpener" onclick="openNav()">
                        <div class="bar1 bars"></div>
                        <div class="bar2 bars"></div>
                        <div class="bar3 bars"></div>
                    
                    </button>
                <div id="sidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="openNav()">&times;</a>
                    <a href='#home' class="navbutton" onclick="openNav()">Home</a>
                    <a href="#whatisbmx" class="navbutton" onclick="openNav()">What is BMX?</a>
                    <a href="#getstarted" class="navbutton" onclick="openNav()">Get Started</a>
                    <a href="#nearbyparks" class="navbutton" onclick="openNav()">Nearby Parks</a>
                    <a href="#news" class="navbutton" onclick="openNav()">News</a>
                    <a href="#" class="navbutton" id="signUpNav" onclick="OpenModal()">Sign Up</a>
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

        <table id="myTable" border="1">
            <tr>
                <td>username</td>
            </tr>
        </table>

        <div class="modalBox" id="modalBox">
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
                        <input required="required" type="email" placeholder="Email Address" name="email" size="25" class="inputBox" />
                    </div>
                    <div>
                        <input required="required" type="number" value="" id="age" name="age" size="3" placeholder="Age" class="inputBox" min="1" max="99" />
                    </div>
                    <div class="genderBox">
                        <label for="gender">Gender :</label>
                        <input type="radio" name="gender" value="Male" checked="checked" id="r1"> Male
                        <input type="radio" name="gender" value="Female" id="r2"> Female
                    </div>
                    <div>
                        <input type="submit" name="submit" id="submit" value="Submit" class="submit" />
                        <button type="button" class="submit" onclick="CloseModal()">Cancel</button>
                    </div>

                </fieldset>

            </form>

        </div>

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
            modal = document.getElementById('modalBox');

            function OpenModal() {
                modal.style.display = "block";
            }

            function CloseModal() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            var username = GetCookie("username");
            if (username && username == "undefined") {
                OpenModal();
            } else {
                document.getElementById('signUpNav').innerHTML = username;
            }

            function openNav() {
                if (document.getElementById("sidenav").style.width == "250px") {
                    document.getElementById("sidenav").style.width = "0";
                    var bars = document.getElementsByClassName("bars");
                    for (var i = 0; i < bars.length; i++) {
                        bars[i].classList.toggle("show");
                    }

                } else {
                    var bars = document.getElementsByClassName("bars");
                    for (var i = 0; i < bars.length; i++) {
                        bars[i].classList.toggle("show");
                    }
                    document.getElementById("sidenav").style.width = "250px";
                }
            }

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

<script>
    'undefined' === typeof _trfq || (window._trfq = []);
    'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
        'tccl.baseHost': 'secureserver.net'
    }), _trfd.push({
        'ap': 'cpsh'
    }, {
        'server': 'a2plcpnl0923'
    }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.

</script>
<script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>
