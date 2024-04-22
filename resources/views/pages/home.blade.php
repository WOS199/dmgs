<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home page</title>
</head>
<body class="font-sans text-blue-700 overflow-x-hidden relative">
    <x-nav></x-nav>
    <div class="scroll-watcher h-1 fixed top-0 z-20 bg-blue-700 w-full"></div>
    <section
      class="hero w-full h-screen bg-blue-100 grid place-content-center fixed inset-0">
      <p id="blurTitle" class="text-5xl lg:text-9xl font-sans max-w-screen-md px-10">
        Creative developer<br />& designer
      </p>
    </section>
    <section class="wrapper w-full relative z-10 mt-[100vh] md:mt-0">
      <div class="bg-white px-10 py-44 md:px-clamp">
        <div class="text-content max-w-screen-md text-balance mb-20">
          <p class="text-xl sm:text-2xl mb-10">
            Issu initialement d’études supérieures en Web Design et
            Communication Visuelle, j’ai acquis durant 7 années une solide
            expérience en tant que D.A digital, en agence ainsi qu’en freelance.
            Dans la continuité de mes aptitudes initiales, j’ai entrepris en
            2023 une montée en compétences d’un an à temps complet (validée par
            une certification professionnelle) dans le domaine du développement
            Front End, en me spécialisant notamment dans le Framework React. Mon
            profil de Développeur Front-End et Directeur Artistique me permet
            d'aborder les projets de développment avec un regard à 360 degrés,
            renforçant ainsi mon exigence technique par une comprehension
            avancée du workflow.
          </p>
          <p class="text-3xl sm:text-4xl leading-tight underline underline-offset-4">
            Ce qui distingue mon approche, c'est ma capacité à intégrer le
            design et le développement de manière fluide.
          </p>
        </div>
        <div class="text-img-content w-full flex flex-col md:flex-row gap-10">
          <div>
            <img class="min-h-60 object-cover" src="/img/profilPic.webp" alt="Portrait de Lucien Carrer" />
          </div>
          <div class="flex flex-row md:flex-col gap-5 md:gap-0 md:justify-between">
            <p class="text-xl md:text-5xl font-bold">Lucien Carrer</p>
            <p class="text-xs md:text-base">
              <span class="font-bold">Front End Developper</span><br />
              Digital Art Director
            </p>
          </div>
        </div>
      </div>
      <div class="animation-container px-10 md:px-clamp h-[4000px] bg-white">
        <div class="sticky top-0 h-screen grid place-content-center">
          <div
            class="contents [&_svg]:w-full [&_svg]:h-full"
            x-data="{ svg:null }"
            x-init="svg = await fetch('/img/words-anime.svg').then(r => r.text())"
            x-html="svg"></div>
        </div>
      </div>
      <div class="bg-blue-100 px-10 py-44 md:px-clamp">
        <div class="text-content text-balance mb-20 flex flex-col md:flex-row gap-20">
          <p class="text-xl sm:text-2xl flex-1">
            Mon profil de Développeur Front-End et Directeur Artistique me
            permet d'aborder les projets avec un regard à 360 degrés et ainsi de
            jouer un rôle de pont entre ces deux mondes complémentaires. Mon
            approche repose sur l'idée que chaque projet digital doit offrir à
            la fois une expérience visuelle captivante et une ergonomie
            fonctionnelle sans faille.
          </p>
          <div class="w-60 flex flex-col gap-2">
            <h3 class="font-bold">Master 2<br />Communication Visuelle</h3>
            <p class="mb-8">
              HEAR Strasbourg<br />
              Félicitations du jury
            </p>
            <h3 class="font-bold">Certification Pro.<br />RNCP Nv.5</h3>
            <p>OpenClassrooms<br />Développement Front End</p>
          </div>
        </div>
        <p
          class="text-3xl sm:text-4xl leading-tight underline underline-offset-4 max-w-screen-md mb-32 text-balance">
          Je crois fermement à l'importance d'un équilibre harmonieux entre
          l'esthétique et la performance
        </p>
        <div class="flex flex-col md:flex-row gap-32 text-2xl mb-32">
          <div>
            <h3 class="font-bold mb-5">Technologies<br />les plus utilisées</h3>
            <ul>
              <li>HTML5</li>
              <li>CSS3</li>
              <li>Javascript</li>
              <li>React</li>
              <li>Sass</li>
              <li>Redux</li>
              <li>Tailwindcss</li>
              <li>Bootstrap</li>
              <li>Alpine.js</li>
              <li>Wordpress</li>
            </ul>
          </div>
          <div>
            <h3 class="font-bold mb-5">Logiciels<br />les plus utilisés</h3>
            <ul>
              <li>Figma</li>
              <li>Adobe Xd</li>
              <li>Adobe InDesign</li>
              <li>Adobe Photoshop</li>
              <li>Adobe Illustrator</li>
              <li>Affinity Publisher 2</li>
              <li>Affinity Photo 2</li>
              <li>Affinity Designer 2</li>
              <li>Canva Pro</li>
              <li>DaVinci Resolve</li>
            </ul>
          </div>
        </div>
        <div class="max-w-screen-md">
          <h2 class="text-2xl font-bold mb-10">Sélection de projets</h2>
          <div class="flex flex-col gap-10">
            <div class="relative" x-data="{hovered : false}">
              <img
                class="absolute right-0 bottom-0 w-60 rotate-12 origin-bottom-right z-0"
                src="/img/demostratif_s.jpg"
                alt="Une main de femme tenant un smartphone."
                x-show="hovered"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90 !rotate-[0deg]"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90 !rotate-[0deg]" />
              <h3
                class="text-4xl md:text-5xl lg:text-6xl underline underline-offset-4 mb-5 relative z-10">
                <a
                  class="hover:text-red-500"
                  href="/demostratif"
                  @mouseover="hovered = true"
                  @mouseleave="hovered = false"
                  >Festival Démostratif</a
                >
              </h3>
              <div class="flex gap-5 md:gap-10 text-xs">
                <p>Développement & design</p>
                <p>avec <span class="font-bold">CODE 16</span> Strasbourg</p>
                <p class="font-bold hidden sm:block">2024</p>
              </div>
            </div>
            <div class="relative" x-data="{hovered : false}">
              <img
                class="absolute right-0 bottom-0 w-60 rotate-12 origin-bottom-right z-0"
                src="/img/ozu_s.jpg"
                alt="Une main de femme tenant un smartphone."
                x-show="hovered"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90 !rotate-[0deg]"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90 !rotate-[0deg]" />
              <h3
                class="text-4xl md:text-5xl lg:text-6xl underline underline-offset-4 mb-5 relative z-10">
                <a
                  class="hover:text-red-500"
                  href="#"
                  @mouseover="hovered = true"
                  @mouseleave="hovered = false"
                  >Ozu (Bêta)</a
                >
              </h3>
              <div class="flex gap-5 md:gap-10 text-xs">
                <p>Développement & design</p>
                <p>avec <span class="font-bold">CODE 16</span> Strasbourg</p>
                <p class="font-bold hidden sm:block">2024</p>
              </div>
            </div>
            <div class="relative" x-data="{hovered : false}">
              <img
                class="absolute right-0 bottom-0 w-60 rotate-12 origin-bottom-right z-0"
                src="/img/mateo_s.jpg"
                alt="Une main de femme tenant un smartphone."
                x-show="hovered"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90 !rotate-[0deg]"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90 !rotate-[0deg]" />
              <h3
                class="text-4xl md:text-5xl lg:text-6xl underline underline-offset-4 mb-5 relative z-10">
                <a
                  class="hover:text-red-500"
                  href="#"
                  @mouseover="hovered = true"
                  @mouseleave="hovered = false"
                  >Mateo Logistics</a
                >
              </h3>
              <div class="flex gap-5 md:gap-10 text-xs">
                <p>Design & soutien intégration</p>
                <p>En agence</p>
                <p class="font-bold hidden sm:block">2021</p>
              </div>
            </div>
            <div class="relative" x-data="{hovered : false}">
              <img
                class="absolute right-0 bottom-0 w-60 rotate-12 origin-bottom-right z-0"
                src="/img/cnb_s.jpg"
                alt="Une main de femme tenant un smartphone."
                x-show="hovered"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90 !rotate-[0deg]"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90 !rotate-[0deg]" />
              <h3
                class="text-4xl md:text-5xl lg:text-6xl underline underline-offset-4 mb-5 relative z-10">
                <a
                  class="hover:text-red-500"
                  href="#"
                  @mouseover="hovered = true"
                  @mouseleave="hovered = false"
                  >CNB Architectes</a
                >
              </h3>
              <div class="flex gap-5 md:gap-10 text-xs">
                <p>Design</p>
                <p>avec <span class="font-bold">CODE 16</span> Strasbourg</p>
                <p class="font-bold hidden sm:block">2019</p>
              </div>
            </div>
            <div class="relative" x-data="{hovered : false}">
              <img
                class="absolute right-0 bottom-0 w-60 rotate-12 origin-bottom-right z-0"
                src="/img/ambiance_s.jpg"
                alt="Une main de femme tenant un smartphone."
                x-show="hovered"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90 !rotate-0"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90 !rotate-0" />
              <h3
                class="text-4xl md:text-5xl lg:text-6xl underline underline-offset-4 mb-5 relative z-10">
                <a
                  class="hover:text-red-500"
                  href="#"
                  @mouseover="hovered = true"
                  @mouseleave="hovered = false"
                  >Ambiances & Styles</a
                >
              </h3>
              <div class="flex gap-5 md:gap-10 text-xs">
                <p>Design & gestion de contenus</p>
                <p>avec <span class="font-bold">CODE 16</span> Strasbourg</p>
                <p class="font-bold hidden sm:block">2018</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="bg-white h-screen py-44 px-10 md:px-clamp grid place-content-center"
        x-data="{hovered : false}">
        <a
          href="#"
          class="text-6xl lg:text-9xl font-bold relative z-10 mix-blend-multiply underline md:no-underline md:hover:underline underline-offset-8"
          @mouseover="hovered = true"
          @mouseleave="hovered = false"
          >Me<br />contacter</a
        >
        <div class="absolute right-20 md:right-1/3">
          <img class="relative w-48 md:w-auto transition-all duration-300 origin-bottom-right" src="/img/horseman.png" alt="" :class="hovered ? 'rotate-12' : 'rotate-0'"
           /><img
            class="absolute w-6 md:w-auto top-[47px] md:top-[84px] right-[43px] md:right-[76px] rotate-12"
            src="/img/thuglife.png"
            alt=""
            x-show="hovered"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-5 !-rotate-12"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 !rotate-[45deg]" />
        </div>
      </div>
      <div class="absolute flex justify-center gap-20 bottom-10 w-full px-clamp underline underline-offset-4">
        <a class="hover:text-red-500" href="#">carrer.lucien@gmail.com</a>
        <a class="hover:text-red-500" href="#">LinkedIn</a>
      </div>
    </section>
  </body>
</html>
