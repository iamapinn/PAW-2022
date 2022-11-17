@extends('layout.main')
@section('content')
    <h1 class="mt-3">{{ $judul; }}</h1>
    {{-- menampilkan banner img --}}
    <img src="{{ $img; }}" alt="{{ $judul; }}" width="800" class=" shadow">
    {{-- membuat box konten tentang kenapa pilih informatika di universitas trunojoyo madura--}}
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            {{ $judul; }}
        </div>
        <div class="card-body text-start">
            <p class="card-text">{{ $konten['utm'][0]; }}
            <a href="{{ $konten['utm'][1]; }}" target="_blank">Sejarah UTM.</a></p>
            <p class="card-text">{{ $konten['teknik'][0]; }} 
                <ol type="a">
                    <li>{{ $konten['teknik']['a'][0] }}
                        <p>
                            {{ $konten['teknik']['a'][1] }}
                        </p>
                    </li>
                    <li>{{ $konten['teknik']['b'][0] }}
                        <p>
                            {{ $konten['teknik']['b'][1] }}
                            <ul>
                                @foreach ($konten['teknik']['b']['lab'] as $lab)
                                    <li>{{ $lab }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </li>
                </ol>
            </p>
            <p class="card-text">{{ $konten['why']; }}</p>
        </div>
    </div>
@endsection