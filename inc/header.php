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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            padding: 0;

        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .header-style {
           font-weight: 50%;
            color: #202020 !important;
            text-transform: uppercase;
        }

        .header-style {
            position: relative;
        }

        /* .nav-link:hover {
            text-decoration: underline;
        } */

        .header-style::after {
            content: '';
            opacity: 0;
            transition: all 0.2s;
            height: 1px;
            width: 100%;
            background-color: black;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .header-style:hover::after {
            opacity: 1;
        }
        /* .navbar-nav li a{
            color: #202020;
            display: inline-block;
            transition: 0.5s ease;
        }
        .navbar-nav li .active{
            color:#202020;
            border-bottom: 1px solid #202020;
            border-radius: 0.5px;
            width: 75%;
            transition: 0.5s ease;
        }
        .navbar-nav li:hover{
            color: #202020;
        } */

    </style>
</head>

<body>
    <div class="sticky-lg-top" style="background-color: white;">
        <nav class="navbar navbar-expand-md">
            <a href="" class="navbar-brand fs-3 ms-3">
                <span class="fs-4">
                    <img src="https://bridge439.qodeinteractive.com/wp-content/uploads/2021/07/logo.png" alt="" width="100%" height="31px">
                </span>
            </a>

            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
                <i class="bi bi-list bx-md"></i>
            </button>
            <div class="collapse navbar-collapse" id="btn">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link header-style active mx-3 fs-5">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="commitment.php" class="nav-link header-style mx-3 fs-5">Commitment</a>
                    </li>
                    <li class="nav-item">
                        <a href="service.php" class="nav-link header-style mx-3 fs-5">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="team.php" class="nav-link header-style mx-3 fs-5">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="communities.php" class="nav-link header-style mx-3 fs-5">Communities</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        // var btncontainer = document.getElementById("btn");
        // var btns = btncontainer.getElementsByClassName("header-style");
        
        // for(var i = 0; i < btns.length; i++){
        //     btns[i].addEventListener('click',function(){
        //         var current = document.getElementsByClassName("active");
        //         current[0].className = current[0].className.replace("active");
        //         this.className += "active";
        //     })
        // }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>