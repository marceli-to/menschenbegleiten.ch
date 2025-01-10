@extends('app')
@section('content')
<section class="pt-100 md:pt-140 xl:pt-200 pb-40 md:pb-80">
  <x-layout.inner class="relative z-20">
    <h1 class="font-bold text-md md:text-lg xl:text-xl mb-10 md:mb-15 xl:mb-25">
      Impressum
    </h1>
    <div class="max-w-prose">
      <h2 class="text-sm md:text-md xl:text-lg mb-10">
        Inhaber der Website
      </h2>
      <p>
        Erna Ineichen<br>
        Breitenstrasse 6<br>
        6403 Küssnacht am Rigi <br>
       <a 
          href="tel: 041 852 05 04"
          class="no-underline hover:underline underline-offset-4 decoration-1">
          T. 041 852 05 04
        </a>
        <br>
        <a 
          href="mailto:info@menschenbegleiten.ch"
          class="no-underline hover:underline underline-offset-4 decoration-1">
          info@menschenbegleiten.ch
        </a>
      </p>

      <h2 class="text-sm md:text-md xl:text-lg mb-10 mt-20 xl:mt-40">
        Design und Entwicklung
      </h2>
      <p>
        Stoz Werbeagentur AG<br>
        Dennis Stoz<br>
        Barzloostrasse 2<br>
        8330 Pfäffikon ZH<br>
        <a 
          href="tel:044 950 35 50"
          class="no-underline hover:underline underline-offset-4 decoration-1">
          T. 044 950 35 50
        </a>
        <br>
        <a 
          href="mailto:hello@stoz.ch"
          class="no-underline hover:underline underline-offset-4 decoration-1">
          hello@stoz.ch
        </a>
        <br>
        <a 
          href="https://www.stoz.ch"
          target="_blank"
          class="no-underline hover:underline underline-offset-4 decoration-1">
          www.stoz.ch
        </a>
      </p>

      <h2 class="text-sm md:text-md xl:text-lg mb-10 mt-20 xl:mt-40">
        Programmierung
      </h2>
      <p>
        Marcel Stadelmann<br>
        <a 
          href="https://marceli.to"
          target="_blank"
          class="no-underline hover:underline underline-offset-4 decoration-1">
          marceli.to
        </a>
      </p>

    </div>
  </x-layout.inner>
</section>
@endsection