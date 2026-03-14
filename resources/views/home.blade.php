<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f7f9f2]">
  <div class="border-2 border-white border-b-gray-300  w-100% h-15 mt-1.5 flex flex-nowrap">
    <div class="w-140 h-10 text-center mt-2 ml-160">
      <a href="" class="mr-10">Produtos</a>
      <a href="" class="mr-10">Serviços</a>
      <a href="" class="mr-10">Bots</a>
      <a href="" class="mr-10">Sobre</a>

    </div>
    <button class="border-2 border-gray-400 w-20 rounded-md h-9 ml-60 mt-1">Login</button>
    <button class="bg-green-400 w-30 rounded-md h-9 ml-2 mt-1">
      <a href="#" class="text-white font-bold">Cadastre-se</a>
    </button>
  </div>

  <section class="w-100% h-150 mt-20">
    
    <button class="w-130 h-100 border-7 border-[#f7f9f2] border-dashed border-b-black absolute ml-170 mt-10"></button>
    <div class="w-130 h-100 border-7 border-gray-900 border-r-[#f7f9f2]  absolute ml-70 mt-10">
      <h1 class="text-[5pc] font-bold ml-10">Diga, <a href="#" class="text-blue-600">Olá</a></h1>
      <h1 class="text-[5pc] font-bold ml-10">Ao Sr. Krujá</h1>
      <button class="w-60 h-15 ml-20 mt-5 font-bold text-[2.3pc] text-green-400 border-2  border-green-400 border-dashed hover:bg-green-400 hover:text-[#f7f9f2]">Comece já</button>
    </div>
    <img src='/images/logo.jpg' class="w-28 ml-190 rotate-12 absolute">
    
    <div class="w-160 h-120 rounded-[1pc] border-1 border-gray-200 bg-white ml-260 mt-30 absolute"></div>
    
  </section>
</div>
</body>
</html>