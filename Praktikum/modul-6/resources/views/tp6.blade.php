@extends('layout.main')
@section('content')
{{-- layout soal dan jawaban --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Tugas Pendahuluan 6</h1>
            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    Soal & Jawaban
                </div>
                <div class="card-body text-start">
                    <ol>
                        <li>
                            <p>{{ $qna_tp6['soal1']; }}</p>
                            <p>Jawaban :</p>
                            <p>{{ $qna_tp6['jawaban1']; }}</p>
                        </li>
                        <li>
                            <p>{{ $qna_tp6['soal2']; }}</p>
                            <p>Jawaban :</p>
                            <p>
                                <ul>
                                    @foreach ($qna_tp6['jawaban2'] as $jawaban2)
                                        <li>{{ $jawaban2 }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </li>
                        <li>
                            <p>{{ $qna_tp6['soal3']; }}</p>
                            <p>Jawaban :</p>
                            <p>{{ $qna_tp6['jawaban3']['a']; }}</p>
                            <p>
                                <ul>
                                    @foreach ($qna_tp6['jawaban3']['b'] as $jawaban3b)
                                        <li>{{ $jawaban3b }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection