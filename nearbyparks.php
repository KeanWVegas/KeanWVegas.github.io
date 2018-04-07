<!DOCTYPE HTML>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>BMX Essentials Home | CIT 230 | KeanWVegas.github.io</title>
    <meta name="BMX Essentials" content="Page dedicated to informing users about the sport of BMX.">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="bmx.css">
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
                    " <a href=..\"test.php\" onClick=\"ChangeName();history.go(-1)\">Logout</a> ");
                setCookie("username", username, now);
            } else {
                document.write("<a href=..\"test.php\" onClick=\"ChangeName();history.go(-1)\">Sign up</a>");
            }

        }

        function ChangeName(username) {
            //username = document.getElementById('name').value;
            setCookie("username", username);
            var visits = '';
            setCookie("counter", visits);
        }

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

    <main>
        <div class="primary">
            <h1> News</h1>
        </div>
        <div class="primary">
            <p> Here is where my news section would go.
            </p>
        </div>

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
