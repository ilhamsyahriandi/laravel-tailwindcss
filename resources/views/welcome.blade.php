<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />

</head>
<body>
   {{-- Header --}}
   <header class="min-h-[32rem] relative  w-full h-auto py-32 bg-center bg-no-repeat bg-cover 2xl:min-h-screen flex items-center" 
   style="background-image: url('./img/bg-masthead.jpg')">
    <div class="container px-4 lg:px-5 text-center 2xl:min-w-full">
        <h1 class="mb-1 text-3xl font-sanspro font-bold lg:text-8xl">Stylish Portfolio</h1>
        <h3 class="mb-5 mt-4 text-xl font-sanspro font-semibold lg:text-3xl"><em>A Free Tailwind Theme by Start Tailwind</em></h3>
        <a class="inline-block font-normal text-base text-white text-center align-middle cursor-pointer border
        px-1 py-3 mt-8 rounded bg-cyan-700 border-cyan-900 hover:bg-cyan-900 xl:py-5 xl:px-10" href="#">Find Out More</a>
    </div>
  </header>
  {{-- header --}}

  {{-- about --}}
  <section class="py-32 bg-white">
    <div class="container px-4 lg:px-5 text-center 2xl:min-w-full">
      <div class="flex flex-wrap mt-0 mx-3 gap-x-4 lg:gap-x-5 justify-center">
        <div class="lg:col-span-10">
          <h2 class="text-2xl font-sanspro font-bold lg:text-[2rem] mb-5">Stylish Portfolio is the perfect theme for your next project!</h2>
          <p class="text-xl font-sanspro font-light mb-5"> 
            This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
            <a href="https://unsplash.com/" class="underline text-blue-900 font-extralight">Unsplash</a>
            !</p>
            <a class="inline-block font-normal text-base text-white text-center align-middle cursor-pointer border
            px-1 py-3 mt-8 rounded bg-slate-700 border-slate-800 hover:bg-slate-900 xl:py-5 xl:px-10" href="#">What We Offer</a>
        </div>
      </div>
    </div>
  </section>
  {{-- about --}}

  {{-- services --}}
  <section class="py-32 bg-cyan-600">
    <div class="container px-4 lg:px-5 text-center 2xl:min-w-full">
      <div class="">
        <h3 class="uppercase text-lg text-yellow-500 font-sanspro font-semibold">
        SERVICES
        </h3>
        <h2 class="text-white text-6xl font-sanspro font-bold">What We Offer</h2>
      </div>
      <div class="gap-x-4 lg:gap-x-10 flex flex-wrap flex-row mt-16 mx-5 justify-center">
        <div class="mb-5 lg:mb-0 ">
          <span class="bg-white h-28 w-28 text-4xl leading-[7.5rem] rounded-full mb-3 flex mx-auto">
            <i class="icon-screen-smartphone mx-auto flex items-center  text-cyan-900"></i>
          </span>
          <h4 class="text-white font-sanspro font-bold text-2xl">Responsive</h4>
          <p class="mb-0 font-thin text-white">Looks great on any screen size!</p>
        </div>
        <div class="mb-5 lg:mb-0 ">
          <span class="bg-white h-28 w-28 text-4xl leading-[7.5rem] rounded-full mb-3 flex mx-auto">
            <i class="icon-pencil mx-auto flex items-center  text-cyan-900"></i>
          </span>
          <h4 class="text-white font-sanspro font-bold text-2xl">Redesigned</h4>
          <p class="mb-0 font-thin text-white">Freshly redesigned for Tailwind CSS</p>
        </div>
        <div class="mb-5 lg:mb-0 ">
          <span class="bg-white h-28 w-28 text-4xl leading-[7.5rem] rounded-full mb-3 flex mx-auto">
            <i class="icon-like mx-auto flex items-center  text-cyan-900"></i>
          </span>
          <h4 class="text-white font-sanspro font-bold text-2xl">Favorited</h4>
          <p class="mb-0 font-thin text-white">
            Millions of users
            <i class="fas fa-heart"></i>
            Start Tailwind!</p>
        </div>
        <div class="mb-5 lg:mb-0 ">
          <span class="bg-white h-28 w-28 text-4xl leading-[7.5rem] rounded-full mb-3 flex mx-auto">
            <i class="icon-mustache mx-auto flex items-center text-cyan-900"></i>
          </span>
          <h4 class="text-white font-sanspro font-bold text-2xl">Question</h4>
          <p class="mb-0 font-thin text-white">I mustache you a question...</p>
        </div>
      </div>
    </div>
  </section>
  {{-- services --}}

  {{-- callout --}}
  <section class="p-60 bg-center bg-cover bg-no-repeat relative flex items-center w-full h-auto" 
  style="background-image: url('./img/bg-callout.jpg')">
    <div class="container px-4 lg:px-5 text-center max-w-full">
      <h2 class="text-6xl font-bold block max-w-xl mx-auto">
        Welcome to
        <em>your</em>
        next website!
      </h2>
      <a class="inline-block font-normal text-base text-white text-center align-middle cursor-pointer border
        px-1 py-3 mt-14 rounded  bg-cyan-700 border-cyan-900 hover:bg-cyan-900 xl:py-5 xl:px-10" href="#">Download Now!</a>
    </div>
  </section>
  {{-- callout --}}

  {{-- portofolio --}}
  <section class="py-32">
    <div class="container px-4 lg:px-5 max-w-full">
      <div class="text-center">
        <h3 class="mb-0 text-lg text-yellow-600 font-sanspro font-bold uppercase">Portfolio</h3>
                <h2 class="mb-5 text-5xl font-sanspro font-extrabold">Recent Projects</h2>
      </div>
      <div class="grid grid-cols-2 justify-center max-w-6xl mx-auto gap-x-0 pt-4">
        <div class="relative flex flex-col justify-center overflow-hidden">
          <div class="portfolio-item relative sm:mx-auto xl:max-w-full">
            <img src="./img/portfolio-1.jpg" alt="" />
            <div class="absolute inset-0 flex items-end">
              <div class="mx-16 mb-16 tracking-tight">
                <h2 class=" text-sm uppercase font-sanspro font-semibold text-white">Stationery</h2>
                <p class="mt-2 text-sm font-normal leading-relaxed text-white">A yellow pencil with envelopes on a clean, blue backdrop!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="relative flex flex-col justify-center overflow-hidden">
          <div class="portfolio-item relative sm:mx-auto xl:max-w-full">
            <img src="./img/portfolio-2.jpg" alt="" />
            <div class="absolute inset-0 flex items-end">
              <div class="mx-16 mb-16 tracking-tight">
                <h2 class=" text-sm uppercase font-sanspro font-semibold text-white">Ice Cream</h2>
                <p class="mt-2 text-sm font-normal leading-relaxed text-white">A dark blue background with a colored pencil, a clip, and a tiny ice
                  cream cone!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="relative flex flex-col justify-center overflow-hidden">
          <div class="portfolio-item relative sm:mx-auto xl:max-w-full">
            <img src="./img/portfolio-3.jpg" alt="" />
            <div class="absolute inset-0 flex items-end">
              <div class="mx-16 mb-16 tracking-tight">
                <h2 class=" text-sm uppercase font-sanspro font-semibold text-white">Strawberries</h2>
                <p class="mt-2 text-sm font-normal leading-relaxed text-white">Strawberries are such a tasty snack, especially with a little sugar on
                  top!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="relative flex flex-col justify-center overflow-hidden">
          <div class="portfolio-item relative sm:mx-auto xl:max-w-full">
            <img src="./img/portfolio-4.jpg" alt="" />
            <div class="absolute inset-0 flex items-end">
              <div class="mx-16 mb-16 tracking-tight">
                <h2 class=" text-sm uppercase font-sanspro font-semibold text-white">Workspace</h2>
                <p class="mt-2 text-sm font-normal leading-relaxed text-white">A yellow workspace with some scissors, pencils, and other objects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </section>
      {{-- portofolio --}}
      <!-- Call to Action-->
      <section class="py-32 bg-cyan-700 text-white font-sanspro">
      <div class="container px-4 lg:px-5 text-center max-w-full">
          <h2 class="mb-4 font-bold text-3xl">The buttons below are impossible to resist...</h2>
          <a class="py-5 px-10 inline-block font-normal text-base text-center align-middle cursor-pointer 
           mt-4 rounded bg-white text-slate-700 mr-6" href="#!">Click Me!</a>
          <a class="py-5 px-10 inline-block font-normal text-base text-center align-middle cursor-pointer 
          mt-4 rounded bg-gray-800 " href="#!">Look at Me!</a>
      </div>
      </section>

      <!-- Map-->
      <div class="h-[30rem]">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=Pulau+Pasir,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" class="w-full h-full"></iframe>
    </div>


<div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
  <div class="grid h-full max-w-lg mx-auto">
      <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
          <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" 
          fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
          </svg>
          <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
      </button>
  </div>
</div>

</body>
</html>