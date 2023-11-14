<!DOCTYPE html>
<html lang="ind">

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
    <title>The Plant : Preserve Plant</title>
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
    <section class="p-4" id="main-content">
        <button class="btn btn-success" id="button-toggle">
            <i class="bi bi-list"> Menu </i>
        </button>
        <div class="B card-body mt-2">
            <form action="{{ route('plant.store') }}" method="POST" name="form-note" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                <table>
                    <h1 class="CSP">
                        Preserve Plants With Us
                    </h1>
                    <tr>
                        <th>
                            Nama Anda*
                        </th>
                        <td>
                            <input type="text" name="nator" id="nator" class="form-control"
                                placeholder="Masukkan Nama Lengkap Anda" autofocus required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email*
                        </th>
                        <td>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Masukkan Email anda" autofocus required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            No WhatsApp*
                        </th>
                        <td>
                            <input type="tel" name="nowa" id="nowa" class="form-control"
                                placeholder="Masukkan No WhatsApp anda" autofocus required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Tanaman*
                        </th>
                        <td>
                            <input type="text" name="nata" id="nata" class="form-control"
                                placeholder="Masukkan Nama Tanaman yang akan dibagi" autofocus required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Latin Tanaman
                        </th>
                        <td>
                            <input type="text" name="lata" id="lata" class="form-control"
                                placeholder="Masukkan Nama Latin Tanaman yang akan dibagi">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gambar Tanaman*
                        </th>
                        <td>
                            <input type="file" name="gamta" id="gamta" class="form-control"
                                accept="image/png, image/jpg, image/jpeg" autofocus required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kategori Tanaman*
                        </th>
                        <td>
                            <select name="katam" id="katam" class="form-control" autofocus required>
                                <option value="">Klik Memilih Kategori Tanaman ↓</option>
                                <option value="Tidak Dilindungi" data-color="#FFFF00">Tidak Dilindungi</option>
                                <option value="Dilindungi" data-color="lightgreen">Dilindungi</option>
                                <option value="Punah" data-color="red">Punah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Klasifikasi Tanaman
                        </th>
                        <td>
                            <input type="text" name="klatam" id="klatam" class="form-control" autocomplete="off"
                                placeholder="Contoh : Obat, Hias, Beracun, atau sebagainya (bisa lebih dari satu)">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lokasi Tanaman Berasal / Ditemukan*
                        </th>
                        <td>
                            <input type="text" name="lotam" id="lotam" class="form-control"
                                placeholder="Masukkan Lokasi Tanaman Berasal / Ditemukan">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi Lengkap Tanaman*
                        </th>
                        <th>
                            <textarea class="ckeditor form-control" name="deletam" id="deletam" cols="80" rows="10"
                                placeholder="Masukkan deskripsi lengkap mengenai tanaman yang ingin anda bagikan di sini" autofocus required></textarea>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="2" class="CSP">
                            <button type="submit" class="btn btn-outline-info" id="btnsave">
                                Simpan
                            </button>
                            <button type="reset" class="btn btn-outline-danger" id="btnreset">
                                Reset
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>



    {{-- javascript --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('javascript/java.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#deletam'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
