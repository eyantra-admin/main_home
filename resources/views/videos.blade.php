@extends('layout.main')
@section('content')
<section class="container-fluid py-4 mx-auto bg-cover items-center mr-6 bg-gray-200 justify-center" data-aos="fade-up" data-aos-duration="1500">
<div class="px-4 py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
    <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-32  font-bold leading-tight text-center text-gray-800">e-Yantra Videos</h1>
    <div class="flex flex-wrap -mx-4 -mb-8 mt-8 justify-center">
        @foreach($video_link as $list)
        <div class="md:w-1/4 px-4 mb-8 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
            <iframe src="{{$list->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @endforeach
    </div>
</div>
</section>
@stop