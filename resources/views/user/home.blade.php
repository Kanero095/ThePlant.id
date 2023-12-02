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
    <script src="java.js"></script>
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="image/logo/TP-2.png">
    <title>The Plants : Home</title>
</head>

<body>
    {{-- navbar side --}}
    <div>
        <div class="sidebar p-4 nb_side" id="sidebar">
            <li>
                <div class="d-flex justify-content-center">
                    <a class="text-white" href="home"> {{-- Link logo --}}
                        <img src="image/logo/TP-2.png" alt="ThePlant" height="100px" width="auto"
                            class="d-flex align-items-center">
                        <p>
                            THE PLANTS
                        </p>
                    </a>
                </div>
            </li>
            <li>
                <a class="text-white" href="/home" style="border-bottom:2px solid #1900ff; text-shadow: 0 0 3px #000">
                    {{-- link dashboard --}}
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
            {{-- <li>
                <a href="/commerce">
                    <i>Plant Commerce</i>
                </a>
            </li> --}}
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
    <section class="p-4 sec" id="main-content">
        <button class="btn btn-success" id="button-toggle">
            <i class="bi bi-list"> Menu </i>
        </button>
        <div class="card-body mt-2">
            {{-- About and img-swiper --}}
            {{-- About --}}
            <div class="A" id="about">
                <h1>
                    <u>
                        THE PLANTS
                    </u>
                </h1>
                <p>
                    The Plants merupakan sebuah platform yang memberikan informasi dan edukasi mengenai tanaman-tanaman
                    yang ada di indonesia, bahkan termasuk tanaman langkah yang tidak banyak diketahui oleh masyarakat
                    Indonesia. Tanaman yang ditampilkan telah dikelompokkan berdasarkan klasifikasi dan berdasarkan
                    kategori.
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
            {{-- img-Swiper --}}
            <div class="imgSwipCont">
                <div class="imgSwipper">
                    <div class="ImgSwipItem fade_img">
                        <img src="image/hero-img/1.jpg" alt="about1">
                    </div>
                    <div class="ImgSwipItem fade_img">
                        <img src="image/hero-img/2.jpg" alt="">
                    </div>
                    <div class="ImgSwipItem fade_img">
                        <img src="image/hero-img/3.png" alt="about3">
                    </div>
                    <div class="ImgSwipItem fade_img">
                        <img src="image/hero-img/4.jpg" alt="about4">
                    </div>
                    <div class="ImgSwipItem fade_img">
                        <img src="image/hero-img/5.jpg" alt="about5">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>



            {{-- Share Your Idea --}}
            <div class="SYI" id="preserveplant">
                <h1>
                    <u>
                        Preserve Plants With Us
                    </u>
                </h1>
                <p>
                    Jika kalian memiliki sebuah informasi atau pengetahuan mengenai sebuah tanaman yang tidak ada di
                    website, silahkan bagikan pada kami dan akan kami tampilkan secara umum untuk menambah wawasan
                    kepada masyarakat umum.
                </p>
                <div class="link">
                    <a href="/preserveplant">
                        Klik Di sini
                    </a>
                </div>
            </div>

            {{-- Contact --}}
            <div class="Co" id="Contact">
                <h1>
                    <u>
                        Contact Us
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
    <script>
        // manual
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("ImgSwipItem");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
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
</body>

</html>
