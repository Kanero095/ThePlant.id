<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="javascript/java.js"></script>
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="image/logo/TP-2.png">
    <title>The Plant : About Us</title>
</head>

<body>
    {{-- navbar side --}}
    <div>
        <div class="sidebar p-4" id="sidebar">
            <li>
                <div class="d-flex justify-content-center">
                    <a class="text-white" href="/home"> {{-- Link logo --}}
                        <img src="image/logo/TP-2.png" alt="ThePlant" height="100px" width="auto"
                            class="d-flex align-items-center">
                        <p>
                            THE PLANT
                        </p>
                    </a>
                </div>
            </li>
            <li>
                <a class="text-white" href="/home"> {{-- link dashboard --}}
                    <i class="bi bi-house mr-2">
                        Home
                    </i>
                </a>
            </li>
            <li>
                <a class="text-white" href="/plant"> {{-- link plant bagian edukasi --}}
                    <i class="bi bi-fire mr-2">
                        Plant
                    </i>
                </a>
            </li>
            <li>
                <a class="text-white" href="/preserveplant"> {{-- link untuk nerima ide orang lain --}}
                    <i class="bi bi-newspaper mr-2">
                        Preserve Plants
                    </i>
                </a>
            </li>
            <li>
                <a class="text-white" href="#about"> {{-- link about --}}
                    <i class="bi bi-bicycle mr-2">
                        About
                    </i>
                </a>
            </li>
            <li>
                <a class="text-white" href="#Contact"> {{-- link contact tim the plant --}}
                    <i class="bi bi-boombox mr-2">
                        Contact
                    </i>
                </a>
            </li>
            <li>
                {{-- link FAQ --}}
                {{-- <a class="text-white" href="">
                    <i class="bi bi-boombox mr-2">
                        FAQ
                    </i>
                </a> --}}
            </li>
        </div>
    </div>

    {{-- content --}}
    <section class="p-4 sec" id="main-content">
        <button class="btn btn-success" id="button-toggle">
            <i class="bi bi-list"> Menu </i>
        </button>
        <div class="card-body mt-2">
            <div class="about2" id="about">
                <h1>
                    <u>
                        THE PLANT
                    </u>
                </h1>
                <p>
                    Merupakan sebuah inovasi yang memberikan edukasi mengenai tanaman, mulai informasi tentang
                    berbagai jenis tanaman, cara menanam-merawat dan menjaga tanaman yang baik dan benar. The Plant
                    juga menyediakan fitur "Preserve Plant" guna memberikan kesempatan kepada siapapun untuk berbagi
                    informasi tentang tanaman kepada kami, sehingga kami juga akan menampilkan informasi tersebut
                    sebagai menambah wawasan dan pengetahuan kepada kita semua.
                </p>
                <br>
                <div class="slogan">
                    <p>
                        <i>
                            "We Cultivate Plants With Love and Sincerity"
                        </i>
                    </p>
                </div>
            </div>

            {{-- Contact --}}
            <div class="Co" id="Contact">
                <h1>
                    <u>
                        Our Contact
                    </u>
                </h1>
                <div class="SM">
                    <p>
                        Instagram : <a href="https://instagram.com/the.plantindonesia?igshid=MzNlNGNkZWQ4Mg=="
                            target="_blank" class="nav-link active">@the.plantindonesia</a>
                    </p>
                    <p>
                        Email : <a href="mailto:theplants468@gmail.com" target="_blank"
                            class="nav-link active">Contact@theplant.id</a>
                    </p>
                </div>
                <div class="alamat">
                    <p>
                        Alamat : Jalan Jenderal Ahmad Yani No.12 Plaju Palembang, Sumatera Selatan, 30264
                    </p>
                </div>
            </div>
        </div>
    </section>




    {{-- javascript --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('javascript/java.js') }}"></script>
</body>

</html>
