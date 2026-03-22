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
    <button class="bg-red-400 w-30 rounded-md h-9 ml-2 mt-1">
      <a href="#" class="text-white font-bold">Cadastre-se</a>
    </button>
  </div>

  <div class="w-20 h-15 bg-white ml-80 mt-3 rotate-340 rounded-[20px] shadow-lg absolute">
    <div class="w-12 h-2 mt-6 ml-4 flex justify-between">
      <div class="w-3 h-3 bg-gray-500 rounded-full animate-updown"></div>
      <div class="w-3 h-3 bg-gray-500 rounded-full animate-updown delay-1"></div>
      <div class="w-3 h-3 bg-gray-500 rounded-full animate-updown delay-2"></div>
    </div>
  </div>

  <section class="w-100% h-150 mt-20">
    
    <button class="w-130 h-100 border-7 border-[#f7f9f2] border-dashed border-b-black absolute ml-170 mt-10"></button>
    <div class="w-130 h-100 border-7 border-gray-900 border-r-[#f7f9f2]  absolute ml-40 mt-10">
      <h1 class="text-[5pc] font-bold ml-10">Diga, <a href="#" class="text-green-500">Olá</a></h1>
      <h1 class="text-[5pc] font-bold ml-10 mt-[-2pc]">Ao Sr. Krujá.</h1>
      <button class="w-60 h-15 ml-50 mt-38 font-bold text-[2.3pc] text-white bg-green-400 hover:text-[#f7f9f2]">Comece já</button>
    </div>
    <div class="w-40 h-7 ml-169 mt-10 rounded-full bg-green-100 border-1 border-green-300 absolute"></div>
    
    <div class="w-160 h-120 rounded-[1pc] border-1 border-gray-200 bg-gray-100 ml-260 mt-30 shadow-xl/20 absolute">
      <div class="w-160 h-15 border-1 bg-green-300 rounded-t-[15px]"></div>
        <img src="/images/logo.jpg" alt="" class="w-14 ml-10 mt-5 absolute">
        <div class="w-55 h-49 rounded-[20px] border-1 border-gray-200 ml-25 mt-5 shadow-xl">
          <h3 class="m-3 ml-4">Olá, qual o serviço?</h3>
          <button class="w-40 h-8 rounded-[10px] m-3 mt-0 bg-gray-300">Serviço 1</button>
          <button class="w-40 h-8 rounded-[10px] m-3 mt-0 bg-gray-300">Serviço 2</button>
          <button class="w-40 h-8 rounded-[10px] m-3 mt-0 mb-1 bg-gray-300">Serviço 3</button>
          <h5 class="ml-40 text-[14px] text-gray-500">15:03</h5>
        </div>
    </div>
    
  </section>

  <div class="w-100% h-120 border-2 border-[#f7f9f2] border-t-gray-200 mt-10 bg-[#f7f7f7]">
    <div id="container" class="w-290 h-160 ml-[20%] mt-10">
      <div class="w-170 h-70  text-center ml-[20%]">
        <h1 class="font-bold text-[4pc]">Atenda com facilidade <h1 class="font-bold text-[4pc]">e <a class="font-bold text-[4pc] text-green-400">Segurança.</a> </h1> </h1>
      </div>
    </div>
  </div>
</div>
</body>
</html>