<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    function home()
    {
        $title = "UTM | Home";
        $judul = "Universitas Trunojoyo Madura, Teknik Informatika, And Why";
        $img = "img/utm.jpg";
        $link = "<a href='https://www.trunojoyo.ac.id/profil/sejarah.html'>Sejarah UTM</a>";
        $konten = [
            'utm' => [
                'Universitas Trunojoyo Madura dulunya bernama Universitas Bangkalan Madura (Unibang) yang berubah statusnya dari Perguruan Tinggi Swasta menjadi Perguruan Tinggi Negeri pada tahun 2001. Untuk sejarah yang lebih lengkap bisa kamu baca di website resminya,',
                'https://www.trunojoyo.ac.id/profil/sejarah.html'
            ],
            'teknik' => [
                'Prodi Teknik Informatika merupakan prodi unggulan di jurusan Teknik, kenapa? Bukan akreditas yang dibanggakan tapi potensi dan apa yang sudah diraih mahasiswa teknik informatika dalam lomba lomba di tingkat nasional maupun internasional. Dari prestasi prestasi yang sudah diraih jangan tanyakan bagaimana mereka (mahasiswa teknik informatika) mampu bersaing dengan mahasiswa mahasiswa di seluruh universitas yang ada di indonesia, selain metode pembelajaran yang diterapkan fasilitas yang sangat mendukung untuk proses belajar dan mengeksplore. Hingga kini prodi teknik informatika memiliki beberapa fasilitas seperti:',
                'a' => [
                    'Gedung RKB-F',
                    'Yaitu gedung yang di khususkan ditempati mahasiswa fakultas teknik termasuk prodi Teknik Informatika untuk melakukan proses belajar dan mengajar yang dilengkapi dengan AC,LCD, proyektor, papan tulis, spidol, meja dan kursi untuk dosen dan mahasiswa.'
                ],
                'b' => [
                    'Laboratorium Komputer',
                    'Prodi Teknik Informatika memiliki 4 Laboratorium komputer yang terletak di depan gedung cakra. Laboratorium ini mengelola dan mengembangkan mata kuliah prodi di lingkungan Universitas, kursus-kursus dan pelatihan dengan sarana yang cukup memadai.',
                    'lab' => [
                        'Laboratorium Digital Multimedia',
                        'Laboratorium Sistem Terdistribusi',
                        'Laboratorium Sistem Informasi dan Rekayasa Perangkat Lunak',
                        'Laboratorium Komputasi dan Sistem Cerdas'
                    ]
                ],
            ],
            'why' => 'Saya memilih jurusan Teknik Informatika karena sudah tertarik dengan dunia programming dari SMK, dulu SMK saya mengambil kejuruan Rekayasa Perangkat Lunak (RPL) dan disitu mulai tertarik dengan Solving beberapa code program yang error dan akhirnya mengantarkan saya kepada prodi Teknik Informatika'
        ];

        return view('home', compact('title', 'judul', 'img', 'konten'));
    }
    function about()
    {
        $title = 'UTM | About';
        $nama = 'Muhammad Muqtafin Nuha';
        $nim = '210411100218';
        $kelas = 'PAW C';
        $semester = 3;
        $alamat = 'Gresik';
        $prodi = 'Teknik Informatika';
        $jurusan = 'Teknik Informatika';
        $fakultas = 'Teknik';
        $universitas = 'Universitas Trunojoyo Madura';
        $img = 'img/apinn.jpg';

        return view('about', compact('title', 'nama', 'nim', 'kelas', 'semester', 'alamat', 'prodi', 'jurusan', 'fakultas', 'universitas', 'img'));
    }

    function tp6()
    {
        $title = 'UTM | Tugas Pendahuluan 6';
        $qna_tp6 = [
            'soal1' => 'Jelaskan apa yang dimaksud dengan Framework!',
            'jawaban1' => 'Framework adalah kerangka kerja yang digunakan untuk membangun aplikasi web. Framework memudahkan developer dalam mengembangkan aplikasi web, karena framework menyediakan fitur-fitur yang sering digunakan dalam aplikasi web.',
            'soal2' => 'Jelaskan keunggulan menggunakan Laravel Framework!',
            'jawaban2' => [
                'Laravel Framework menggunakan konsep MVC (Model View Controller) yang memudahkan developer dalam memisahkan kode program menjadi tiga bagian yaitu model, view, dan controller.',
                'Laravel Framework memiliki fitur yang lengkap dan mudah digunakan.',
                'Laravel Framework memiliki dokumentasi yang lengkap, sehingga developer mudah dalam mempelajari dan menggunakan Laravel Framework.',
                'Laravel Framework memiliki komunitas yang aktif, sehingga developer tidak akan kesulitan saat mengembangkan aplikasi web dengan Laravel Framework.'
            ],
            'soal3' => 'Jelaskan mengenai konsep MVC dalam pemrograman Laravel',
            'jawaban3' => [
                'a' => 'MVC adalah singkatan dari Model View Controller. MVC adalah konsep yang digunakan untuk memisahkan kode program menjadi tiga bagian yaitu model, view, dan controller.',
                'b' => [
                    'Model adalah bagian yang berhubungan dengan database. Model digunakan untuk mengambil data dari database dan mengirimkan data ke view. Model juga digunakan untuk mengirimkan data ke database.',
                    'View adalah bagian yang berhubungan dengan tampilan. View digunakan untuk menampilkan data yang diterima dari controller ke browser. View juga digunakan untuk menerima input dari user.',
                    'Controller adalah bagian yang berhubungan dengan logika. Controller digunakan untuk mengatur alur program. Controller juga digunakan untuk mengambil data dari model dan mengirimkan data ke view.'

                ],
            ]
        ];

        return view('tp6', compact('title', 'qna_tp6'));
    }
}
