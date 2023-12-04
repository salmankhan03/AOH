<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>AOH</title>

    <style>
        body {
            position: relative;
        }

        .img2 {
            position: absolute;
            width: 50%;
            right: 20px;
            padding-top: 10px;
        }

        h1 {
            font-family: "Cormorant_Garamond variant0", Tofu;
            text-transform: uppercase;
            color: #191970;
            text-align: center;
            padding-top: 40%;
            font-size: 65pt;
        }

        h2 {
            font-family: "Cormorant_Garamond variant0", Tofu;
            color: #191970;
            font-size: 48pt !important;


        }

        h3 {
            font-size: 26pt;
            font-family: "Cormorant_Garamond variant0", Tofu;
            text-transform: uppercase;
            padding-top: 40px;
        }

        p {
            font-family: "Mulish variant0", Tofu;
            padding-top: 30px;
        }

        .gap {
            padding-top: 70px;
        }

        .space {
            padding-top: 50px;
        }

        .text1 {
            padding-left: 80px;
        }

        .text2 {
            padding-right: 80px;
        }

        .cmit {
            padding-bottom: 120px;
        }

        .navbar {
            padding: 0;
            background-color: #FAF5EC;

        }

        .line {
            position: relative;
            font-size: 40px;
            color: #333;
            font-weight: 600;
            text-decoration: none;
        }

        .line::before {
            content: "";
            position: absolute;
            bottom: -2px;
            height: 3px;
            width: 0;
            background: #D2BD92;
            border-radius: 10px;
            transition: width 0.3s ease;
        }

        .line:hover::before {
            width: 100%;
        }

        /* button a{
            background: transparent;
            border: 1PX solid #202020;
            color: #202020;
            text-transform: uppercase;
            font-size: 18PX;
            letter-spacing: 2px;
            cursor: pointer;
            padding: 10px 50px;
            position: relative;
            transition: 0.5s ease-in-out;
        }

        button a::before {
            position: absolute;
            content: "";
            inset: 0;
            z-index: -1;
            clip-path: circle(100% at 50% 50%);
            background: #F0F0F0;
            transition: 0.5s ease-in-out;
        }

        button a:hover {
            color: #191970;
        }

        button a:hover::before {
            clip-path: circle(100% at 50% 50%);
        } */


        @media only screen and (max-width: 500px) {

            html,
            body {
                width: 100%;
                height: 100%;
                padding: 0px;
                margin: 0;

            }

            .img2 {
                width: 100%;
                right: 0px;
                padding-top: 0px;
            }

            h1 {
                font-size: 40pt;
                padding-top: 10px;
            }

            h3 {
                font-size: 15pt !important;
            }


            h2 {
                font-size: 25pt !important;
                padding-top: 100px !important;
            }

            .cmit {
                padding-bottom: 10px;
            }

            p {
                padding: 15px;
            }

            .space {
                padding-top: 20px;
            }

            .text1 {
                padding-left: 0px;
            }

            .text2 {
                padding-right: 0px;
            }

            /* .img1{
                width: 100% !important;
                padding: 0px;
            } */
        }

        @media only screen and (300px <=width <=500px) {
            h2 {
                font-size: 25pt !important;
                padding-top: 200px !important;
            }
        }

        @media only screen and (500px <=width <=600px) {
            .img2 {
                width: 100%;
                height: 50%;
                right: 0px;
                padding-top: 0px;

            }

            h1 {
                font-size: 50pt;
                padding-top: 10px;
            }

            h2 {
                font-size: 30pt !important;
                padding-top: 300px !important;
            }

            h3 {
                font-size: 20pt !important;
            }

            .cmit {
                padding-bottom: 10px;
            }


        }

        @media only screen and (700px <=width <=800px) {
            h2 {
                font-size: 30pt !important;
                padding-top: 400px !important;

            }

        }

        @media only screen and (800px <=width <=900px) {
            h2 {
                font-size: 30pt !important;
                padding-top: 475px !important;

            }

        }

        @media only screen and (900px <=width <=1000px) {
            h2 {
                font-size: 30pt !important;
                padding-top: 550px !important;

            }

        }

        @media only screen and (600px <=width <=1000px) {
            .img2 {
                width: 100%;
                height: 50%;
                right: 0px;
                padding-top: 0px;

            }

            h1 {
                font-size: 50pt;
                padding-top: 10px;
            }

            h2 {
                font-size: 30pt !important;
                padding-top: 330px;

            }

            h3 {
                font-size: 20pt !important;
            }

            /* .gap {
                margin-top: 40px;
            } */

            .cmit {
                padding-bottom: 10px;
            }

        }


        @media only screen and (max-width: 900px) {

            /* .img2 {
                width: 55% !important;
                padding-top: 80px;
            } */

            h2 {
                font-size: 25pt !important;
            }

            /* .gap {
                padding-top: 30px;

            } */

            h3 {
                font-size: 20pt !important;
            }

            .text1 {
                padding-left: 0px;
            }

            .text2 {
                padding-right: 0px;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="" style="background-color:  #FAF5EC;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="cmit">
                        <h1>Our communities</h1>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="img2">
                        <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/home-image-5-parallax.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container gap">
        <div class="gap">
            <h2>
                Our trophied accomplishments</h2>
        </div>
    </div>
    <div class="container">
        <div class="row space">
            <div class="col-lg-6 col-sm-12">
                <div class="img1">
                    <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/home-image-3-parallax.jpg" alt="" width="102.5%">
                </div>

            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="text1">
                    <div class="line">
                        <h3>Hamilton High Street Senior Residence</h3>
                    </div>
                    <p>Welcome to Hamilton High Street Senior Residence, one of the exceptional communities where Atrium Origin Health provides its professional care and management services. Located in the heart of Hamilton, Richmond, our residence offers a warm and inviting environment for seniors to thrive.</p>
                    <!-- <button><a href="#" class="nav-link">website</a></button> -->
                </div>
            </div>
        </div>
        <div class="row  space">
            <div class="col-lg-6 col-sm-12">
                <div class="text2">
                    <div class="line">
                        <h3>Mayflower Coop Housing</h3>
                    </div>
                    <p> Mayflower Coop Housing, situated in the heart of Surrey, is a community partnered with Atrium Origin Health to provide exceptional care and living services to its residents. Nestled in the heart of a friendly neighborhood, Mayflower Coop Housing offers a unique and inclusive environment for seniors seeking an enriching and supportive lifestyle.</p>
                </div>

            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="img">
                    <img src="	https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/home-image-2-1024x733.jpg" alt="" width="102.5%">
                </div>
            </div>
        </div>
        <div class="row  space">
            <div class="col-lg-6 col-sm-12">
                <div class="img1">
                    <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/services-image-2.jpg" alt="" width="102.5%">
                </div>

            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="text1">
                    <div class="line">
                        <h3>Trillium</h3>
                    </div>
                    <p>The latest senior independent living project in the heart of Vancouver’s most vibrant urban centre, the Cambie Corridor. Located within walking distances to SkyTrain and bus stations, an amenity of retail and restaurants, plus the Queen Elizabeth Park is just in the backyard, this development will be your new home to enjoy your golden years.</p>
                </div>
            </div>
        </div>

    </div>

    <?php include 'footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>