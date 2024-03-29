<?php
// Akan connect ke API menggunakan cURL (client url)

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https: //www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCkXmLjEr95LVtGuIm3l2dPg&key=AIzaSyBjVgITRtIT2fQZil-pf1FuwXji3iECAOA
');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
$result = json_decode($result, true);
var_dump($result);
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="script/bootstrap.css">

        <!-- My CSS -->
        <link rel="stylesheet" href="css/style.css">

        <title>My Portfolio</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#home">Sandhika Galih</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="jumbotron" id="home">
            <div class="container">
                <div class="text-center">
                    <img src="img/profile1.png" class="rounded-circle img-thumbnail">
                    <h1 class="display-4">Sandhika Galih</h1>
                    <h3 class="lead">Lecturer | Programmer | Youtuber</h3>
                </div>
            </div>
        </div>


        <!-- About -->
        <section class="about" id="about">
            <div class="container">
                <div class="row mb-4">
                    <div class="col text-center">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus
                            error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus.
                            Consequuntur optio ad quae possimus, debitis earum.</p>
                    </div>
                    <div class="col-md-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus
                            error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus.
                            Consequuntur optio ad quae possimus, debitis earum.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Youtube -->
        <section class="social bg-light" id="social">
            <div class="container">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h2>Social Media</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-4"><img src="img/profile1.png" width="200"
                                    class="rounded-circle img-thumbnail"></div>
                            <div class="col-md-8">
                                <h5>Web Programming Unpas</h5>
                                <p>0 Subscribers.</p>
                            </div>
                        </div>

                        <!-- Youtube -->
                        <div class="row mt-3 pb-3">
                            <div class="col">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-4"><img src="img/profile1.png" width="200"
                                    class="rounded-circle img-thumbnail"></div>
                            <div class="col-md-8">
                                <h5>Web Programming Unpas</h5>
                                <p>0 Followers.</p>
                            </div>
                        </div>

                        <div class="row mt-3 pb-3">
                            <div class="col">
                                <div class="ig-thumbnail">
                                    <img src="img/thumbs/1.png">
                                </div>
                                <div class="ig-thumbnail">
                                    <img src="img/thumbs/2.png">
                                </div>
                                <div class="ig-thumbnail">
                                    <img src="img/thumbs/3.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h2>Portfolio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md mb-4">
                        <div class="card">
                            <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact -->
        <section class="contact bg-light" id="contact">
            <div class="container">
                <div class="row pt-4 mb-4">
                    <div class="col text-center">
                        <h2>Contact</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card bg-primary text-white mb-4 text-center">
                            <div class="card-body">
                                <h5 class="card-title">Contact Me</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>

                        <ul class="list-group mb-4">
                            <li class="list-group-item">
                                <h3>Location</h3>
                            </li>
                            <li class="list-group-item">My Office</li>
                            <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
                            <li class="list-group-item">West Java, Indonesia</li>
                        </ul>
                    </div>

                    <div class="col-lg-6">

                        <form>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


        <!-- footer -->
        <footer class="bg-dark text-white mt-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p>Copyright &copy; 2018.</p>
                    </div>
                </div>
            </div>
        </footer>







        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="script/jquery.js"></script>
        <script src="script/popper.js"></script>
        <script src="script/bootstrap.js"></script>
    </body>

</html>
