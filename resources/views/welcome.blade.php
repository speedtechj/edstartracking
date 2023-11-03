<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')

</head>
<body class=" font-nunito font-medium">
  <div id="preloader"></div>

    <!-- header -->
  <nav class="container relative max-w-full shadow-md" >
    <!-- flex -->
    <div class="flex justify-between items-center bg-white w-full p-3">
        <!-- logo -->
        <div class="ml-14">
            <a href="/"><img class="h-12 w-32" src="forexcanadainc.png" alt="logo"></a>
        </div>
        <!-- menu -->
        <div class="text-black hidden space-x-6 md:flex ml-80">
          <a href="" class="hover:border-b-2 hover:border-[#26577C] duration-75"> Send Goods</a>
          <a href="" class=" hover:border-b-2 hover:border-[#26577C] duration-75">Track Edmonton</a>
     
        </div>
        <!-- button -->
        <a
          href="https://www.google.com/maps/dir/51.1960059,-113.9976033/starexpress/@51.1121214,-114.1801755,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x53717115466bb185:0x764be2c77326ab0c!2m2!1d-114.0607551!2d51.0183754?entry=ttu"
          class=" hidden text-black p-3 px-6 pt-2 rounded-full border-solid border-[#26577C] border-2 baseline mr-32 hover:text-[#26577C] duration-300 md:block"
          >Direction</a>
          <!-- Hamburger Icon -->
        <button
          id="menu-btn"
          class="block hamburger md:hidden focus:outline-none mr-6"
        >
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div class="md:hidden">
        <div
          id="menu"
          class=" text-[#26577C] absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
        >
          <a href="">Send Goods</a>
          <a href="">Track Edmonton</a>
         
        </div>
      </div>
    </div>
</nav>
<!-- hero section -->
<section id="hero">

    <div class=" container md:w-1/2 md:ml-96 ml-10 mx-auto">
        <div class="flex flex-col text-left mt-16 space-y-6 ">
             <h1 class="text-4xl ">Track Invoice</h1>
             <p class="text-lg ">To track your shipment, Enter the invoice number below.</p>
        <form method="get" action="{{ url('show') }}">
        {{ csrf_field() }}
        <div class="w-72">
            <div class="relative h-10 w-full min-w-[430px]">
                <div class="absolute top-2/4 right-3 grid h-5 w-5 -translate-y-2/4 place-items-center ">
                <i class="fa-solid fa-truck-fast"></i>
                </div>
                <input name="invoice" id="invoice"
                class="peer h-full w-full rounded-[7px] border border-black border-t-transparent bg-transparent px-3 py-4 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-400 placeholder-shown:border-t-black focus:border-2 focus:border-[#355691] focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "
                required/>
                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-black before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-black after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[12px] peer-focus:leading-tight peer-focus:text-[#355691] peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-[#355691] peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-[#355691] peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                Enter Invoice#</label>
                </div>
            </div>
            <button type="submit" class="text-white min-w-[430px] p-3 px-6 py-3 rounded-full bg-[#26577C]  baseline mt-6 hover:opacity-70 duration-300"
               >Track</button>
        </form>
   
        </div>
    </div>
</section>


<!-- javascript -->
<script>
    const btn = document.getElementById('menu-btn')
    const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
  btn.classList.toggle('open')
  nav.classList.toggle('flex')
  nav.classList.toggle('hidden')
})

</script>
<script>
  var loader = document.getElementById("preloader");
  window.addEventListener("load", function(){
    loader.style.display="none";
  })
</script>
</body>
</html>


