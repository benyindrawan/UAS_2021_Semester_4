@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                MIT (Media Informasi Terupdate)
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/06/03/13/57/digital-marketing-1433427_1280.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Cara Belajar Pemrograman Laravel
        </h2>
        <p class="py-8 text-gray-500 text-s">
            Mencari Laravel tutorial lengkap yang mudah dipahami? Selamat, Anda berada di tempat yang tepat! Di sini, kami akan memberikan tutorial Laravel pemula yang pastinya tidak membuat Anda semakin mumet alias pusing.

            Di websitenya, Laravel dengan jelas, Laravel menyatakan diri sebagai “The PHP Framework for Web Artisans.” Artinya, Laravel dirancang untuk seniman website.
        </p>
        <p class="font-extrabold text-gray-600 text-s pb-9">
            Kalau Anda meneruskan membaca sampai sini, itu artinya Anda semakin yakin untuk belajar Laravel. Nah tanpa berlama-lama lagi, yuk simak tutorial Laravel lengkap ini!
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl"> Find Out More</a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        Media Informasi
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        Teknologi
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Kesehatan
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Pendidikan
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Hiburan
    </span>

</div>
<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Postingan Terbaru
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        buah segar adalah bahan pangan yang tidak memerlukan pengolahan sudah dapat dikonsumsi secara langsung. Buah segar dapat dimakan langsung tanpa diolah terlebih dulu, karena rasanya sudah beraneka, segar, bentuk dan warnanya menarik.
    </p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                Manfaat Buah Bagi Tubuh
            </span>
            <h3 class="text-xl font-bold py-10">
                Makan buah secara rutin dapat mencegah penyakit jantung
                Buah juga dapat mencegah tekanan darah tinggi
                Buah dapat dijadikan sebagai diet alami yang dapat mencegah kolesterol jahat menyerang tubuh kita
            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl"> Find Out More</a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/05/11/19/44/fresh-fruits-2305192_1280.jpg" width="700" alt="">
    </div>
</div>
@endsection