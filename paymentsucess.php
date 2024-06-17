<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventureland Theme Park</title>
    <link rel="stylesheet" href="Styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">
        * {
            text-decoration: none;
        }

        .navbar {
            background: crimson;
            font-family: calibri;
            padding-right: 15px;
            padding-left: 15px;
        }



        .logo a {
            font-size: 35px;
            font-weight: 600;
            color: white;
        }

        .hours {
            font: large;
            font-family: Calibri;
            padding-left: 25px;
            padding-top: 0%;
        }

        .intro {
            padding-top: 0%;
            padding-left: 45%;
            padding-bottom: 30%;
            padding-right: 5%;
            font-family: Calibri;
            display: block;
        }
    </style>
</head>

<body>
    <nav class="">
        <div class="flex justify-between items-center px-8 py-4 bg-red-600">
            <div class="logo"><a href="Adventureland Homepage.php">AdventureLand</a> </div>
            <div class="flex gap-6">
                <a class="inline text-white font-medium" href="Visitor_Information.html">Information</a>
                <a class="inline text-white font-medium" href="Attractions.html">Attractions</a>
                <a class="inline text-white font-medium" href="#">Contact Us</a>
                <a class="inline text-white font-medium" href="Bookings.html">Bookings</a>
                <a class="inline text-white font-medium bg-black py-2 px-6 rounded rounded-xl hover:scale-105 duraion-200" href="Login.php">Members Login</a>
                <a class="inline text-white font-medium bg-black py-2 px-6 rounded rounded-xl hover:scale-105 duraion-200" href="signup.html">Register/SignUp</a>

            </div>
        </div>
    </nav>

    <!-- component -->
    <div class="bg-gray-100 h-screen">
        <div class="bg-white p-6  md:mx-auto">
            <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                </path>
            </svg>
            <div class="text-center">
                <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Payment Done!</h3>
                <p class="text-gray-600 my-2">Thank you for completing your secure online payment.</p>
                <p> Have a great day! </p>
                <div class="py-10 text-center">
                    <a href="AdventurelandHomepage.php" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                        GO BACK
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-slate-600 ">
        <div class="py-10">
            <div class="flex justify-center">
                <div class="footer-col">
                    <h4 class="font-bold text-white">Company</h4>
                    <ul>
                        <li><a class="text-white font-medium" href="#">About Us</a></li><br>
                        <li><a href="#">Our Services</a></li><br>
                        <li><a href="#">Privacy Policy</a></li><br>
                        <li><a href="#">Join Our Team</a></li><br>
                    </ul>

                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li class="text-white font-medium"><a href="#">FAQ</a></li><br>
                        <li><a href="#">Live Chat</a></li>
                        <li><a href="#">Refunds</a></li>
                        <li><a href="#">Redeemables</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href=" #"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">

                                <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">

                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg><i class="fab fa-twitter"></i></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 488 512">

                                <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                            </svg><i class="fab fa-instagram"></i></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">

                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg><i class="fab fa-linkedin-in"></i></a>
                        </ div>
                    </div>

                </div>

            </div>

        </div>
    </footer>
</body>

</html>