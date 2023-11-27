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
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="image/logo/TP-2.png">
    <title>The Plant : Plants</title>
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
                        Preserve Plant
                    </i>
                </a>
            </li>
            <li>
                <a class="text-white" href="/about"> {{-- link about --}}
                    <i class="bi bi-bicycle mr-2">
                        About
                    </i>
                </a>
            </li>
            <li>
                <a class="text-white" href="/about#Contact"> {{-- link contact tim the plant --}}
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
        <li class="cari widget_search">
            <a class="text-white" href="#">
                <form action="/plant" method="GET" class="d-flex" role="search">
                    <a href="{{ route('plant.index') }}" class="btn clear-filter">
                        🏠
                    </a>
                    {{-- Filter Kategori --}}
                    <select name="filkatam" id="katam" class="form-control" required>
                        <option value="">Kategori*</option>
                        <option value="Tidak DiLindungi">Tidak Dilindungi</option>
                        <option value="Dilindungi">Dilindungi</option>
                        <option value="Punah">Punah</option>
                    </select>
                    {{-- fitur seacrh --}}
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search" autocomplete="off" value="{{ request('search') }}">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </a>
        </li>
        <div class="fledis">
            @foreach ($data as $plant)
                <div class="bungkus">
                    <div class="image">
                        <img src="{{ asset('storage/' . $plant->gamta) }}" alt="thumbnail-tanaman">
                        {{-- <img src="image/img/bunga-angrek.jpg" alt=""> --}}
                    </div>
                    <div class="caption">
                        <p class="nata">
                            {{ $plant->nata }} (<i>{{ $plant->lata }}</i>)
                            <br>

                            <span
                                style="color: {{ $plant->color }}; font-size:12px; text-align:center;text-shadow:0 0 2px rgb(226, 225, 225);"
                                title="{{ $plant->verifer }}">
                                {{ $plant->verif }}
                            </span>
                        </p>
                        <br>
                        <p class="klatam deks_klatam">
                            Merupakan Tanaman <i>{{ $plant->klatam }}</i>,
                            dan juga termasuk dalam kategori tanaman <i>{{ $plant->katam }}</i>.......
                        </p>
                        <button class="btn-more">
                            <a href="{{ route('plant.read', $plant->id) }}">
                                Selengkapnya
                            </a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <div class="pagination justify-content-center">
        {{-- link page --}}
        {{ $data->links() }}
    </div>
</body>

{{-- javascript --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('javascript/java.js') }}"></script>

</html>
