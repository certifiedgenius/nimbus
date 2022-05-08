<?php

/*
Template Name: Träningsresor
*/

?>


<?php get_header();?>


    <!-- The Hero below the nav -->
    <div id="carouselExampleCaptionsFull" class="carousel slide carousel-fade relative h-screen" data-bs-ride="carousel">
    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
        type="button"
        data-bs-target="#carouselExampleCaptionsFull"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
        ></button>
        <button
        type="button"
        data-bs-target="#carouselExampleCaptionsFull"
        data-bs-slide-to="1"
        aria-label="Slide 2"
        ></button>
        <button
        type="button"
        data-bs-target="#carouselExampleCaptionsFull"
        data-bs-slide-to="2"
        aria-label="Slide 3"
        ></button>
    </div>
    <div class="carousel-inner relative w-full overflow-hidden h-screen">
        <div class="carousel-item active relative float-left w-full h-screen bg-no-repeat bg-cover bg-center">
        <video class="min-w-full min-h-full max-w-fit xl:min-w-0 xl:min-h-0" playsinline autoplay muted loop>
            <source class="" src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
        </video>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="flex justify-center items-center h-full">
            <div class="text-white text-center px-14 px-md-0">
                <h2 class="text-3xl font-semibold mb-4">Learn Tailwind Elements</h2>
                <h5 class="text-lg font-semibold mb-6">Best & free guide of responsive web design</h5>
                <div class="md:space-x-2">
                <a type="button" class="inline-block px-6 py-2 mb-2 md:mb-0 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="#!" role="button"     data-mdb-ripple="true" data-mdb-ripple-color="light">Start tutorial</a>
                <a type="button" class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="#!" role="button"     data-mdb-ripple="true" data-mdb-ripple-color="light">Read more</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="carousel-item relative float-left w-full h-screen bg-no-repeat bg-cover bg-center">
        <video class="min-w-full min-h-full max-w-fit xl:min-w-0 xl:min-h-0" playsinline autoplay muted loop>
            <source class="" src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
        </video>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-center items-center h-full">
            <div class="text-white text-center px-14 px-md-0">
                <h2 class="text-3xl font-semibold mb-4">You can place here any content</h2>
            </div>
            </div>
        </div>
        </div>
        <div class="carousel-item relative float-left w-full h-screen bg-no-repeat bg-cover bg-center">
        <video class="min-w-full min-h-full max-w-fit xl:min-w-0 xl:min-h-0" playsinline autoplay muted loop>
            <source class="" src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
        </video>
        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background: linear-gradient(45deg, rgba(29, 236, 197, 0.7), rgba(91, 14, 214, 0.7) 100%);">
            <div class="flex justify-center items-center h-full">
            <div class="text-white text-center px-14 px-md-0">
                <h2 class="text-3xl font-semibold mb-4">And cover it with any mask</h2>
                <a type="button" class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" href="#!" role="button"     data-mdb-ripple="true" data-mdb-ripple-color="light">Learn more</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button"
        data-bs-target="#carouselExampleCaptionsFull"
        data-bs-slide="prev"
    >
        <span
        class="carousel-control-prev-icon inline-block bg-no-repeat"
        aria-hidden="true"
        ></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button"
        data-bs-target="#carouselExampleCaptionsFull"
        data-bs-slide="next"
    >
        <span
        class="carousel-control-next-icon inline-block bg-no-repeat"
        aria-hidden="true"
        ></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>