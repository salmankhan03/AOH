<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

        @media only screen and (max-width: 480px) {

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
            }

            h2 {
                font-size: 25pt !important;
                padding-top: 130px;
                margin-bottom: 0rem !important;
            }

            h3 {
                font-size: 15pt !important;
                padding: 10px;
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
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="cmit d-none d-md-block">
                        <h1>Our communities</h1>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 ">
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
                    <h3>Hamilton High Street Senior Residence</h3>
                    <p>Welcome to Hamilton High Street Senior Residence, one of the exceptional communities where Atrium Origin Health provides its professional care and management services. Located in the heart of Hamilton, Richmond, our residence offers a warm and inviting environment for seniors to thrive.</p>
                </div>
            </div>
        </div>
        <div class="row  space">
            <div class="col-lg-6 col-sm-12">
                <div class="text2">
                    <h3>Mayflower Coop Housing</h3>
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
                    <h3>Trillium</h3>
                    <p>The latest senior independent living project in the heart of Vancouver’s most vibrant urban centre, the Cambie Corridor. Located within walking distances to SkyTrain and bus stations, an amenity of retail and restaurants, plus the Queen Elizabeth Park is just in the backyard, this development will be your new home to enjoy your golden years.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include 'footer.php'; ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>