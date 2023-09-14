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
        carousel-caption {
            position: absolute;
            text-align: center;
        }

        h1 {
            font-size: 65pt;
            font-family: "Cormorant_Garamond variant0", Tofu;
            text-transform: uppercase;
            color: white;
        }

        .exp {
            padding-left: 15%;
            padding-right: 15%;
            padding-top: 50px;

        }

        .space {
            padding-top: 60px;
        }

        .bg {
            padding: 50px;
        }

        h2 {
            font-size: 48pt;
            font-family: "Cormorant_Garamond variant0", Tofu;
            color: #191970;

        }

        h3 {
            font-size: 26pt;
            font-family: "Cormorant_Garamond variant0", Tofu;
            text-transform: uppercase;
        }

        p {
            font-family: "Mulish variant0", Tofu;
        }

        .accordion {
            padding-top: 25px;
        }

        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus' viewBox='0 0 16 16'%3E%3Cpath d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/%3E%3C/svg%3E") !important;
            transition: all 0.5s;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-dash' viewBox='0 0 16 16'%3E%3Cpath d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'/%3E%3C/svg%3E") !important;
        }

        .position {
            position: relative;
            margin-top: 120px;

        }

        .img1 {
            position: absolute;
            bottom: 70px;
        }

        @media only screen and (max-width: 480px) {

            html,
            body {
                width: 100%;
                height: 100%;
                padding: 0px;
                margin: 0;

            }

            .space {
                padding-top: 10px;
            }

            .exp {
                padding-left: 5%;
                padding-right: 5%;
                padding-top: 20px;

            }

            .bg {
                padding: 10px;
            }

            .position {
                margin-top: 0px;

            }
        }

        @media only screen and (max-width: 900px) {

            .img1 {
                position: relative;
                padding: 20px;
            }

            .position {
                margin-top: 0px;
            }

            .exp {
                padding-left: 10%;
                padding-right: 10%;
            }
        }
    </style>
</head>

<body>
    <?php include '../AOH/component/header.php'; ?>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/home-image-3-parallax.jpg" class="d-block w-100" alt="..." height="50%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Pioneers in driving business results through innovative approach</h1>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/home-image-5-parallax.jpg" class="d-block w-100" alt="..." height="50%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Customized services lead by strategic insights of senior living industry</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/services-image-2.jpg" class="d-block w-100" alt="..." height="50%">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Established and trusted partner in senior living management </h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row exp">
            <div class="col">
                <h2 class="card-title">Experts in the development, management, and consultation of senior living, assisted living, and memory care communities</h2>
                <p class="card-text">Atrium Origin Health stands as a leading management company dedicated to providing professional senior care and living services. Our commitment to excellence and compassion sets us apart, ensuring a superior quality of life for our elderly population. With over 20 years of experience in the industry, we offer tailored solutions and strategic insights to senior facilities and companies, making us the preferred choice for senior living services.</p>

            </div>
        </div>
    </div>
    <div class="space overflow-hidden">
        <div class="row  gx-5" style="background-color: white;">
            <div class="col-lg-6 sm-12">
                <div class="">
                    <div class="img">
                        <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/home-image-1.jpg" alt="" width="90%">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sm-12" style="padding-top: 40px;">
                <div class="p-3">
                    <div class="text">
                        <h2>Compassionate Care for Aging Loved Ones</h2>
                        <p>We firmly believe that exceptional care is not only about meeting the physical needs of our seniors but also about creating a warm and nurturing environment where they feel respected, valued and cherished. Our team of dedicated professionals goes above and beyond to ensure that each senior receives personalized attention and support, fostering a sense of belonging and well-being. We continuously strive to uphold the highest standards of service, embracing innovation and best practices to enhance the lives of our elderly population. With empathy and understanding, we walk hand-in-hand with our seniors on their journey, providing unwavering support and care every step of the way.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position">
        <div class=" space overflow-hidden">
            <div class="" style="background-color: #F0F0F0;">
                <div class="row gx-5">
                    <div class="col-lg-6 sm-12">
                        <div class="p-3">
                            <div class="text bg">
                                <h2>Customized Solutions for Senior Facilities and Companies</h2>
                                <p> We take pride in offering tailored solutions to meet the unique needs of senior living communities. Our expertise allows us to craft personalized strategies that align perfectly with the goals and aspirations of our partners. Whether it's enhancing operational efficiency, implementing specialized care programs, or optimizing resident experiences, we work closely with you to understand your specific requirements and challenges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-12">

                        <div class="img1 d-none d-md-block">
                            <img src="	https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/home-image-2-1024x733.jpg" alt="" width="100%" height="80%">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container space px-4">
        <div class="row  gx-5">
            <div class="col-lg-6 col-sm-12">
                <div class="p-3 bg-white">
                    <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/services-image-3.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="p-3 bg-white ">
                    <div class="row g-0">
                        <div class="col">
                            <h2>Atrium Origin Difference</h2>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Extensive Experience
                                        </button>
                                    </h3>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p> With years of industry-acclaimed expertise in developing, managing, and consulting for senior living, assisted living, and memory care communities, we bring a wealth of knowledge to our clients.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Tailored Solutions
                                        </button>
                                    </h3>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>We understand that each senior facility or company has unique needs. Our ability to provide customized solutions ensures that our services align perfectly with the specific requirements of our partners.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Commitment to Excellence
                                        </button>
                                    </h3>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p> Our unwavering commitment to excellence drives us to maintain the highest standards of service in every aspect of our operations, ensuring the best possible outcomes for our elderly population.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flush-headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                            Strategic Insights
                                        </button>
                                    </h3>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Leveraging our in-depth understanding of the senior care industry, we offer strategic insights and innovative practices that enable our clients to stay ahead of the curve and navigate challenges effectively.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flush-headingfive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                            Collaborative Partnerships
                                        </button>
                                    </h3>
                                    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>We view our clients as valued partners, and collaboration is at the heart of our approach. We work closely with them to achieve their goals and ensure mutual success.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flush-headingsix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                                            Integrity and Transparency
                                        </button>
                                    </h3>
                                    <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>We uphold the highest standards of integrity and transparency in all our interactions, building trust and fostering long-lasting relationships with our clients.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../AOH/component/footer.php'; ?>
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