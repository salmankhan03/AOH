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
            color: #191970;
        }

        h5 {
            font-size: 9pt;
            font-family: "Mulish variant0", Tofu;
            font-weight: bold;
        }

        p {
            font-family: "Mulish variant0", Tofu;
        }

        .space {
            padding-top: 60px;
        }

        .cont {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .cmit {
            padding-bottom: 120px;
            display:flex;
            text-align:start
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

        button {
            border: none;
            background: none;
            color: black !important;

        }

        .list {
            border-bottom: 1px solid gray;
        }

        .line-style {
            color: #202020 !important;
            text-transform: uppercase;
            position: relative;
        }

        /* .nav-link:hover {
            text-decoration: underline;
        } */

        .line-style::after {
            content: '';
            opacity: 0;
            transition: all 0.2s;
            height: 2px;
            width: 100%;
            background-color: black;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .line-style:hover::after {
            opacity: 1;
        }

        .gap {
            padding: 30px;
        }

        .navbar {
            padding: 0;
            background-color: #FAF5EC;

        }

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
                padding-top: 60px;
            }

            .cmit {
                padding-bottom: 10px;
            }

            .gap {
                padding: 0px;
            }

            .space {
                padding-top: 20px;
            }

            .line-style {
                padding: 0.5rem !important;
            }

            .logo {
                padding-top: 230px;
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



            h2 {
                font-size: 25pt !important;
            }

            /* .gap {
                padding-top: 30px;
                padding: 15px;         
               } */
        }
        @media only screen and (min-width: 1446px) {
            /* .container{
                max-width: 2500px !important;
            } */
            .img2 {
                /* position: absolute; */
                position: relative;
                width: 100% !important;
                right: 20px;
                padding-top: 10px;
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
                        <h1>Our services</h1>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="img2">
                        <img src="./images/service/banner_services.jpg" class="d-block w-100"  alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- space -->
    <div class="container ">
        <div class="row logo pt-5">
            <div class="p-3">
                <div class="col-lg-12 col-sm-12">
                    <h2>Turnkey solution in transforming your business</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container overflow-hidden">
        <div class="row gx-5">
            <div class="col-lg-6 col-sm-12">
                <div class="p-3">
                    <p>The demand for senior living, assisted living, and memory care communities has been on the rise since the turn of the century. Navigating this challenging landscape requires a fresh perspective, and this is where we come in. Atrium Origin Health possess the expertise to optimize operational expenses, improve margins, and enhance overall profitability. Our approach also focuses on broadening audience appeal to expedite community occupancy.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="p-3">
                    <p>With a deep-rooted commitment to the service-enriched housing communities, we are passionate about leading the industry forward and sharing our knowledge with others in the business. Our services cater to your unique needs and objectives, ranging from full-service management to project development and consulting services. Let us align our expertise with your business, empowering you to thrive and succeed in this ever-evolving landscape.</p>
                </div>
            </div>
        </div>
    </div>


    <nav class="space gap ">
        <div class="nav list" id="nav-tab" role="tablist">
            <button class="nav-link line-style  active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Management</button>
            <button class="nav-link line-style" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Development</button>
            <button class="nav-link line-style" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Consulting</button>
        </div>
    </nav>
    <div class="container my-5">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col-lg-5 col-sm-12">
                            <div class="">
                                <h3>
                                    Management
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12 text-muted">
                            <div class="">
                                <p>We collaborate with owners of existing communities, bolstering their operational capacity and capability. Our goal is to reduce expenses, enabling them to lower fees, attract a broader audience, operate at full capacity, and ultimately enhance their bottom line. As a full-service management agent, we oversee all aspects of their operation, ranging from pre-opening marketing and staff management to policy development, accounting services, and regulatory compliance. Our comprehensive approach ensures seamless operations and maximizes the potential for growth and success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col-lg-5 col-sm-12">
                            <div class="">
                                <h3>
                                    Development
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-12 text-muted">
                            <div class="">
                                <p>We leverage our vast experience to spearhead the entire development process on your behalf. This includes conducting thorough market analyses, creating site selection and evaluation models, securing financing, providing architectural design consultation, managing zoning matters, and obtaining regulatory approval. Additionally, we offer expert guidance on construction and site build-out, review construction payouts, and implement pre-marketing and sales initiatives. Our dedication extends to designing ongoing management and operating systems, ensuring a seamless and successful development journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col-lg-5 col-sm-12">
                            <div class="">
                                <h3>
                                    Consulting
                                </h3>
                            </div>
                        </div>
                        <div class="col col-lg-7 col-sm-12">
                            <div class=" text-muted">
                                <p>Our team specializes in providing strategic and operational consulting services tailored to your specific business needs. Across various facets of your organization, we offer expertise in:</p>
                                <div class="cont">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    OPERATIONS
                                                </button>
                                            </h3>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p> • Advising on operational systems and procedures.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    MANAGEMENT
                                                </button>
                                            </h3>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>• Offering guidance on administrative and organizational structure.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                    DEVELOPMENT
                                                </button>
                                            </h3>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p> • Assisting with construction scheduling. <br>
                                                        • Designing residency agreements. <br>
                                                        • Securing regulatory approvals and licensing. <br>
                                                        • Providing architectural design advice. <br>
                                                        • Estimating project budget and costs.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="flush-headingfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                    FINANCIAL
                                                </button>
                                            </h3>
                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        • Advising on financing structures. <br>
                                                        • Negotiating contracts. <br>
                                                        • Modeling project financials and forecasting. <br>
                                                        • Budgeting and procuring furniture, fixtures, and equipment. <br>
                                                        • Managing development period accounting.

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="flush-headingfive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                    MARKETING & SALES
                                                </button>
                                            </h3>
                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        • Conducting strategic assessments of existing market research. <br>
                                                        • Performing market analyses and qualitative and quantitative consumer research. <br>
                                                        • Developing product and service concepts, along with pricing models. <br>
                                                        • Designing and implementing marketing and sales plans or specific initiatives.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-3 text-muted">
                                    <p>Our comprehensive consulting services empower your business to thrive and achieve its objectives effectively and efficiently.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>