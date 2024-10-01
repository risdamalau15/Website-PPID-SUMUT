<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    </style>


    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="assets/img/ppid/ppid_home.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="assets/img/ppid/ppid_home.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/img/ppid/ppid_home.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="assets/img/ppid/ppid_home.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>


        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <div class=" jarak" style="padding-top: 30px; ">


        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->
        <!--slider 42 -->



        <div class=" jarak" style="padding-top: 200px; ">
            <style>
                * {
                    box-sizing: border-box;
                }



                /* Center website */
                .main {
                    max-width: 1000px;
                    margin: auto;
                }

                h1 {
                    font-size: 50px;
                    word-break: break-all;
                }

                .row {
                    margin: 10px -16px;
                    display: flex;
                    flex-wrap: wrap;
                }

                /* Add padding BETWEEN each column */
                .row,
                .row>.column {
                    padding: 8px;
                }

                /* Create four equal columns that floats next to each other */
                .column {
                    float: left;
                    width: 25%;
                    display: none;
                    /* Hide all elements by default */
                }

                /* Clear floats after rows */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }

                /* Content */
                .content {
                    background-color: rgb(88, 11, 231);
                    padding: 10px;
                }

                /* The "show" class is added to the filtered elements */
                .show {
                    display: block;
                }

                /* Style the buttons */
                .btn {
                    border: none;
                    outline: none;
                    padding: 12px 16px;
                    background-color: white;
                    cursor: pointer;
                }

                .btn:hover {
                    background-color: #ddd;
                }

                .btn.active {
                    background-color: #666;
                    color: white;
                }

                .slide-container {
                    position: relative;
                    width: 100%;
                }

                .slide {
                    display: none;
                }

                .slide-active {
                    display: block;
                }

                .slide-button {
                    cursor: pointer;
                    position: absolute;
                    top: 50%;
                    width: auto;
                    padding: 10px;
                    margin-top: -16px;
                    color: white;
                    font-weight: bold;
                    font-size: 10px;
                    transition: 0.6s ease;
                    border-radius: 0 3px 3px 0;
                    user-select: none;
                }

                .prev {
                    left: 0;
                    border-radius: 3px 0 0 3px;
                }

                .next {
                    right: 0;
                    border-radius: 3px 0 0 3px;
                }

                /* Fading animation */
                .fade {
                    -webkit-animation-name: fade;
                    -webkit-animation-duration: 1.5s;
                    animation-name: fade;
                    animation-duration: 1.5s;
                }

                @-webkit-keyframes fade {
                    from {
                        opacity: .4
                    }

                    to {
                        opacity: 1
                    }
                }

                @keyframes fade {
                    from {
                        opacity: .4
                    }

                    to {
                        opacity: 1
                    }
                }

                .text-center {
                    text-align: center;
                }

                .btn-click {
                    background-color: #000000;
                    color: white;
                }
            </style>




            <!-- MAIN (Center website) -->
            <div class="main text-center">

                <!-- Portfolio Gallery Grid -->
                <div class="slide-container">
                    <div class="slide fade">
                        <div class="row">
                            <div class="column show">
                                <div class="content">
                                    <h4>Mountains</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Lights</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Forest</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Beach</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan slide berikutnya dengan struktur yang sama -->
                    <div class="slide fade">
                        <div class="row">
                            <div class="column show">
                                <div class="content">
                                    <h4>Desert</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Canyon</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>River</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Valley</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan slide lainnya hingga total 11 slide -->
                    <!-- Example of slide 3 -->
                    <div class="slide fade">
                        <div class="row">
                            <div class="column show">
                                <div class="content">
                                    <h4>Ocean</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Waterfall</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Jungle</h4>
                                </div>
                            </div>
                            <div class="column show">
                                <div class="content">
                                    <h4>Lake</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat similarly for slides 4 to 11 -->

                    <a class="slide-button prev btn-click" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="slide-button next btn-click" onclick="plusSlides(1)">&#10095;</a>
                </div>

            </div>

            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("slide");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slides[slideIndex - 1].style.display = "block";
                }
            </script>
<?php /**PATH C:\xampp\htdocs\PPIDSUMUT\resources\views/video-kegiatan.blade.php ENDPATH**/ ?>