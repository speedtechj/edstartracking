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
        <a href="/"><img class="h-14 w-32" src="forexcanadainc.png" alt="logo"></a>
        </div>
        <!-- menu -->
        <div class="text-black hidden space-x-6 md:flex ml-80">
          <a href="" class="hover:border-b-2 hover:border-[#26577C] duration-75"> Send Goods</a>
          <a href="" class=" hover:border-b-2 hover:border-[#26577C] duration-75">Track Edmonton</a>
     
        </div>
        <!-- button -->
        <a
          href="https://www.google.com/maps/dir//starexpress/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x53717115466bb185:0x764be2c77326ab0c?sa=X&ved=2ahUKEwin1aO6gZKCAxVjCTQIHa73BQcQ9Rd6BAg4EAA&ved=2ahUKEwin1aO6gZKCAxVjCTQIHa73BQcQ9Rd6BAhEEAU"
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
          class=" text-[#355691] absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
        >
          <a href="">Send Goods</a>
          <a href="">Track Edmonton</a>
         
        </div>
      </div>
    </div>
</nav>

<!-- Transaction status -->
<section id="hero">

    <div class=" container md:w-1/2 md:ml-96 mx-auto ml-6">
        <div class="flex flex-col text-left mt-16 space-y-4 ">
             <h1 class="text-4xl ">Track Invoice</h1>
             <p class="text-lg ">Your Track Number.</p>
             <p class="text-2xl font-black ">{{ $invoice1 }}</p>
        </div>
    <!-- Tracking order Steps -->

    <div class="flow-root mt-10 ml-6 mr-12 md:mx-0">
      <ul role="list" class="-mb-8">
		   @foreach ($invoice as $invoices)
      <li>
         <div class="relative pb-8">
           <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
             <div class="relative flex space-x-3">
             <div>
            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
              <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
            </span>
          </div>
          <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
          
            <div>

              <p class="text-sm text-gray-500 ">{{ $invoices->trackstat }}</p>
            
            </div>
           
            <div class="whitespace-nowrap text-right text-sm text-gray-500">
              <time datetime="2020-09-28">{{ $invoices->date_encode }}</time>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endforeach
      
  </ul>
  <div class="mt-16">
  <a
          href="/"
          class="text-white rounded-full bg-[#26577C] p-3 baseline px-6 "
          >Track Another One</a>  
  </div>

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


