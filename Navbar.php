<!-- <?php
session_start();
include("process.php");
// include("function.php");
// $_SESSION['USERNAME'] = $USERNAME;

?> -->

<?php
session_start();
if (!isset($_SESSION["USERNAME"])) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="NavStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        <div class="container w-auto  m-0" style="background:#d6e0f6 ; max-width: 100%;">
            <div class="container text-center ">
                <div class="row">
                    <div class="col">
                        <img src="Project Images/logo.avif" alt="logo image"
                            style="height: 120px;margin-top: 8px; border-radius: 16px;">
                    </div>
                    <div class="col-6 maintext">
                        Grampanchayat <br>Laxmi Dahiwadi
                    </div>
                    <div class="col">
                        <div class="col">
                            <img src="Project Images/laxmi dahiwadi logo.jfif" alt="logo image"
                                style="height: 120px; margin-top: 8px; border-radius: 16px;">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <nav class="navbar">
            <div class="search">
                <form id="form">
                    <input class="inputbutton" type="search" id="query" name="Search" placeholder="Search..."
                        style="font-size: 19px;">
                    <button class="searchbutton" style="font-size: 19px;">Search</button>
                </form>
            </div>
            <ul class="menu">
                <li><a href="Navbar.php">Home</a></li>
                <li><a href="work.html">Work</a></li>
                <li><a href="community.html">Community</a></li>
                <li><a href="complaint.html">Complaint</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="SignUp.php">Register</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <!-- <li><a href="help.html">Help</a></li> -->
            </ul>
            <div>
                <img style="width: 64px;" src="Project Images/digital india.webp" alt="">
            </div>

        </nav>
        <div>




        </div>

    </header>


    

    <marquee direction="left" width="100%" scrollamount="25" behavior="side">
        <div class="slider">

            <img src="Project images/flag.jpg" alt="flag image">
            <img src="Project images/made india.jpeg" alt="flag image">
            <img src="Project images/parliement.png" alt="flag image">
            <img src="Project images/make in india.jpg" alt="flag image">
            <img src="Project images/India_flag_emblem.jpg" alt="flag image">
            <img src="Project Images/image.webp" alt="flag image">
        </div>
    </marquee>
    <!-- This is a Body section of page  -->

    <div class="row">
        <div class="col ">

            <div>
                <H5 class="abouttext">About Grampanchayat</H5>
            </div>
            <div class="aboutbody">
                Established in various states of India, the Panchayat Raj system has three tiers: Zila Parishad, at the
                district
                level;
                Panchayat Samiti, at the block level; and Gram Panchayat, at the village level. Rajasthan was the first
                state to
                establish Gram Panchayat, Bagdari Village (Nagaur District) being the first village where Gram Panchayat
                was
                established, on 2 October 1959.[6]

                The failed attempts to deal with local matters at the national level caused, in 1992, the reintroduction
                ofCSS animations make it possible to animate transitions from one CSS style configuration to another.
                Animations consist
                of two components, a style describing the CSS animation and a set of keyframes that indicate the start
                and end states of
                the animation's style, as well as possible intermediate waypoints.

                There are three key advantages to CSS animations over traditional script-driven animation techniques:

                They're easy to use for simple animations; you can create them without even having to know JavaScript.
                The animations run well, even under moderate system load. Simple animations can often perform poorly in
                JavaScript. The
                rendering engine can use frame-skipping and other techniques to keep the performance as smooth as
                possible.
                Letting the browser control the animation se
                Panchayats
                for their previously used purpose as an organisation for local self-governance.[7]
            </div>



        </div>


        <div class="col">

            <div>
                <h5 class="noticetext">Notices</h5>

            </div>

            <div class="row mx-auto " style="width: 600px;">
                <marquee direction="up" scrollamount="12" behavior="side">
                    <div class="column" style=" border-radius:8px; padding : 3px ;  background-image: linear-gradient(to right, black, rgb(255, 0, 157), rgb(175, 175, 192));
color: white;font-size: 17px; ">

                        <p>This is a first list</p>
                    </div>
                    <div class="column" style="border-radius:8px; padding : 3px ; color: white; background-image: linear-gradient(to right, rgb(255, 0, 157), rgb(175, 175, 192));
 font-size: 17px;">

                        <p>How to ge the best result</p>
                    </div>
            </div>


            <div class="row mx-auto" style="width: 600px;">
                <div class="column" style="border-radius:8px; color: white;background-image: linear-gradient(to right, black, rgb(255, 0, 157), rgb(175, 175, 192));
font-size: 17px;font-weight: 500;font-family: Verdana, Geneva, Tahoma, sans-serif;">

                    <p>Please telll me anything </p>
                </div>
                <div class="column" style="border-radius:8px; color: white;background-image: linear-gradient(to right, rgb(255, 0, 157), rgb(175, 175, 192));
font-size: 17px; ">

                    <p>Submit your attendance on time</p>
                </div>
            </div>
            <div class="row mx-auto" style="width: 600px;">
                <div class="column" style="border-radius:8px; color: white; background-image: linear-gradient(to right,  black,rgb(255, 0, 157), rgb(175, 175, 192));
font-size: 17px;">

                    <p>Make the use of the following</p>
                </div>
                <div class="column" style="border-radius:8px; color: white; background-image: linear-gradient(to right, rgb(255, 0, 157), rgb(175, 175, 192));
font-size: 17px;">

                    <p>Can you share something which is important</p>
                </div>
            </div>
            <div class="row mx-auto" style="width: 600px;">
                <div class="column" style="border-radius: 8px; color: white; background-image: linear-gradient(to right, black, rgb(255, 0, 157), rgb(175, 175, 192));
font-size: 17px;">

                    <p>Here we reach at the end of the list</p>
                </div>
                </marquee>
            </div>

        </div>
    </div>




    <!-- This for google maps  -->
    <div class="newimg" style="display: flex;">


        <div class="googlemaps">
            <a href="https://www.google.com/maps/place/Laxmidahiwadi,+Maharashtra+413305/@17.4778547,75.2959478,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc6a063c76d6e3b:0x6e8c7795b2d6306b!8m2!3d17.4775118!4d75.2985785"
                target="_blank"><img src="Project Images/google map.jpg " alt="Google Maps"></a>
            <p>Find On Google Maps</p>
        </div>
        <div class="imgage">
            <img src="Project Images/gram.jpg" alt="" style="width: 110%; border: 2px solid black;
box-shadow: 4px 3px 10px black; height: 73%; margin-left: 59%; margin-top: 35px ;">


        </div>
    </div>
    <!-- This is a Grampanchayat cartoon image -->
    <footer>
        <hr>
        <div class="foot"
            style=" margin-left: auto ; margin-right:auto  ; height: auto; background-color: rgb(39, 38, 38); color: white;">
            <div class="useful">
                <p style="font-weight:bold ; font-size: 23px ; text-align: center;">Useful links </p>

                <ul>

                    <li><a href="service.html">Home</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="service.html">Complaint</a></li>
                    <li><a href="service.html">Community</a></li>
                    <li><a href="service.html">Register</a></li>


                </ul>

            </div>


            <div class="service">
                <p style="font-weight:bold ; font-size: 23px ; text-align: center;">Services</p>
                <ul>

                    <li><a href="service.html">Marriage Registration</a></li>
                    <li><a href="service.html">Birth Registration</a></li>
                    <li><a href="service.html">Death Certificate</a></li>
                    <li><a href="service.html">Water Bills</a></li>
                    <li><a href="service.html">Residence Certificate</a></li>
                    <p style="margin-top: 20px; color: darkseagreen;"> copyright@ All rights
                        reserved SKNR solutions .</p>


                </ul>

            </div>
            <div class="address">
                <p style="font-weight:bold ; font-size: 23px ; text-align: center;">About us</p>

                Laxmi Dahiwadi Tal - Mangalwedha Dist - Solapur <br>
                email- ldsarpanch23@gmail.com <br>
                phone - 02186-250146

            </div>

        </div>


    </footer>









    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">






        </script>

</body>

</html>