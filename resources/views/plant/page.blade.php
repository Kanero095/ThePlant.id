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
    <script src="{{ asset('javascript/java.js') }}"></script>
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="image/logo/TP-2.png">
    <title>The Plant : Read Content</title>
</head>

<body>
    {{-- navbar side --}}
    <div>
        <div class="sidebar p-4" id="sidebar">
            <li>
                <div class="d-flex justify-content-center">
                    <a class="text-white" href="home"> {{-- Link logo --}}
                        <img src="{{ asset('image/logo/TP-2.png') }}" alt="ThePlant" height="100px" width="auto"
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
                {{-- <a class="text-white" href="/faq">
                    <i class="bi bi-boombox mr-2">
                        FAQ
                    </i>
                </a> --}}
            </li>
        </div>
    </div>
    {{-- content --}}
    <section class="p-4" id="main-content">
        <button class="btn btn-success" id="button-toggle">
            <i class="bi bi-list"> Menu </i>
        </button>
        <div class="paper">
            <a href="/plant" class="back btn btn-dark">
                Back
            </a>
            <div class="hero_img">
                <img src="{{ asset('storage/' . $data->gamta) }}" alt="{{ $data->nata }}" title="{{ $data->nata }}">
                <p class="nator">
                    <i style="margin-bottom: 40px;">
                        By {{ $data->nator }}
                    </i>
                </p>
            </div>
            <h2 class="judul">
                {{ $data->nata }} ({{ $data->lata }})
            </h2>

            <p style="color: {{ $data->color }}; font-size:12px; text-align:center;text-shadow:0 0 2px rgb(226, 225, 225);"
                title="{{ $data->verifer }}">{{ $data->verif }}</p>

            <div class="ket">
                <p>
                    Klasifikasi Tanaman : {{ $data->katam }}

                    <br>

                    Kategori Tanaman : {{ $data->klatam }}
                </p>
            </div>
            <p class="desk">
                {!! $data->deletam !!}
            </p>
        </div>
    </section>

</body>

{{-- javascript --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('javascript/java.js') }}"></script>

</html>
