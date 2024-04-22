<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Démostratif</title>
    </head>
<body class="font-sans text-blue-700 overflow-x-hidden relative">
    <x-nav></x-nav>
    <div class="scroll-watcher h-1 fixed top-0 z-20 bg-blue-700 w-full"></div>
    <section
      class="project-hero w-full h-screen bg-[url(/public/img/demostratif-mac.jpg)] bg-cover bg-center fixed inset-0 grid place-content-center">
      <p id="blurTitle" class="text-5xl lg:text-9xl font-sans max-w-screen-md px-10">
        Démostratif
      </p>
    </section>
    <section class="wrapper w-full relative z-10 mt-[100vh] md:mt-0">
        <div class="bg-white px-10 py-44 md:px-clamp h-[2000px]"></div>
    </section>
</body>
</html>
