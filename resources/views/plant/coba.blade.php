@extends('layouts.app')

<title>The Plant : Read Content</title>
@section('content')
    {{-- content --}}
    <section class="p-4 sec" id="main-content">
        <button class="btn btn-success" id="button-toggle">
            <i class="bi bi-list"> Menu </i>
        </button>

        <div class="fledis">
            @csrf
            <div class="bungkus">
                <h1 class="nata_h1">
                    {{ $data->nata }} (<i>{{ $data->lata }}</i>)
                </h1>
                <div class="image">
                    <img src="{{ asset('storage/' . $data->gamta) }}" alt="thumbnail-tanaman">
                </div>
                <div class="caption">

                    <p class="klatam deks_klatam">
                        Merupakan Tanaman <i>{{ $data->klatam }}</i>,
                        dan juga termasuk dalam kategori tanaman <i>{{ $data->katam }}</i>.......
                    </p>
                    <button class="btn-more">
                        <a href="#selengkapnya">
                            Selengkapnya
                        </a>
                    </button>
                </div>
            </div>
            <h1>
                Hello, Ini di halaman view blog
            </h1>
        </div>
    </section>
@endsection
