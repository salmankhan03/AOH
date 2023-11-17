<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
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

        .cmit {
            padding-bottom: 120px;
        }

        .gap {
            padding-top: 50px;
            padding-right: 20px;
        }

        h1 {
            font-family: "Cormorant_Garamond variant0", Tofu;
            text-transform: uppercase;
            color: #191970;
            text-align: center;
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
        }

        p {
            font-family: "Mulish variant0", Tofu;
        }

        .space {
            padding-top: 50px;
        }

        .navbar {
            padding: 0;
            background-color: #FAF5EC;

        }
        .container-with-image {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .container-title {
        text-align: center;
        padding: 20px;
        width: 100%;
        }

        .container-image {
        width: 100%;
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
                padding-top: 0px;
                top: 80px !important;
            }

            .cmit {
                padding-bottom: 20px;
            }

            /* h1{
                padding-top: 5%;
            } */

            h2 {
                font-size: 25pt !important;
                padding-top: 175px;
            }

            h3 {
                font-size: 15pt !important;
            }

            .space {
                padding-top: 0px;
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

            .space {
                padding-top: 0px;

            }

            h3 {
                font-size: 20pt !important;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid" style="background-color: #FAF5EC;">
        <div class="row">
            <div class="col-md-6 container-with-image">
            <div class="container-title">
                <h1>Our Communities</h1>
            </div>
            </div>
            <div class="col-md-6 container-with-image bannerImg">
            <img src="images\home\img1.jpg" alt="Your Image" class="img-fluid container-image" />
            </div>
        </div>
    </div>
   
    <div class="container space my-5 sm-my-3">
        <div class="gap">
            <h2>
                Our trophied accomplishments</h2>
        </div>
    </div>
    <div class=" container">
        <div class="row gx-5 space my-5 ">
            <div class="col-lg-4 col-sm-12">
                <h3>Hamilton High Street Senior Residence</h3>
            </div>
            <div class="col-lg-8 col-sm-12">
                <p>Welcome to Hamilton High Street Senior Residence, one of the exceptional communities where Atrium Origin Health provides its professional care and management services. Located in the heart of Hamilton, Richmond, our residence offers a warm and inviting environment for seniors to thrive.</p>
            </div>
        </div>
        <hr>
        <div class="row gx-5 space my-5 ">
            <div class="col-lg-4 col-sm-12">
                <h3>Mayflower Coop Housing</h3>
            </div>
            <div class="col-lg-8 col-sm-12">
                <p>Mayflower Coop Housing, situated in the heart of Surrey, is a community partnered with Atrium Origin Health to provide exceptional care and living services to its residents. Nestled in the heart of a friendly neighborhood, Mayflower Coop Housing offers a unique and inclusive environment for seniors seeking an enriching and supportive lifestyle.</p>
            </div>
        </div>
        <hr>
        <div class="row gx-5 space my-5 ">
            <div class="col-lg-4 col-sm-12">
                <h3>Trillium</h3>
            </div>
            <div class="col-lg-8 col-sm-12">
                <p>The latest senior independent living project in the heart of Vancouver’s most vibrant urban centre, the Cambie Corridor. Located within walking distances to SkyTrain and bus stations, an amenity of retail and restaurants, plus the Queen Elizabeth Park is just in the backyard, this development will be your new home to enjoy your golden years.</p>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>