<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <title>Cardapio - Online</title>
</head>

<body>



    {{-- CABEÇALHO --}}
    <header class="w-full h-[420px] bg-zinc-900 bg-home bg-cover bg-center">
        <div class="w-full h-full flex flex-col justify-center items-center">
            <img src="{{ asset('assets/hamb-1.png') }}" alt="Logo"
                class="w-32 h-32 rounded-full shadow-lg hover:scale-110 duration-200">
            <h1 class="text-4xl mt-4 mb-2 font-bold text-white">Hamburgueria do VT</h1>

            <span class="text-white font-medium">Rua da tal, Multirao Russas</span>

            <div class="bg-green-600 px-4 py-1 rounded-lg mt-5" id="date-span">
                <span class="text-white font-medium">Seg á Dom - 18:00 as 20:00</span>
            </div>

        </div>
    </header>
    {{-- CABEÇALHO FIM --}}

    <h2 class="text-2xl md:text-3xl font-bold text-center mt-9 mb-6">
        Conheça nosso Menu
    </h2>


    {{-- INICIO DO MENU --}}
    <div id="menu">
        <main class="grid grid-cols-1 md:grid-cols-2 gap-7 md:gap-10 mx-auto max-w-7xl px-2 mb-16">

            {{-- PRODUTO ITEM --}}
            <div class="flex gap-2">
                <img src="{{ asset('/assets/hamb-1.png') }}" alt="Hamburguer Tal"
                    class="w-28 h-28 rounded-md hover:scale-110 hover:-rotate-2 duration-300">

                <div>
                    <p class="font-bold">
                        Hamburguer Tal
                    </p>
                    <p class="text-sm">
                        Um hambúrguer suculento com um pão macio e dourado abraçando um hambúrguer suculento de carne,
                    </p>

                    <div class="flex items-center gap-2 justify-between mt-3">
                        <p class="font-bold text-lg">R$ 20.90</p>
                        <button class="bg-gray-900 px-5 rounded add-to-cart-btn" data-name="Hamburguer Tal"
                            data-price="20.90" data-image="{{ asset('/assets/hamb-1.png') }}">
                            <i class="fa fa-cart-plus text-lg text-white"></i>
                        </button>

                    </div>
                </div>
            </div>
            {{-- FIM PRODUTO 1 --}}
            {{-- PRODUTO ITEM 2 --}}
            <div class="flex gap-2">
                <img src="{{ asset('/assets/hamb-2.png') }}" alt="Hamburguer Cheddar"
                    class="w-28 h-28 rounded-md hover:scale-110 hover:-rotate-2 duration-300">

                <div>
                    <p class="font-bold">
                        Hamburguer Cheddar
                    </p>
                    <p class="text-sm">
                        Um hambúrguer suculento com um pão macio e dourado, recheado com delicioso queijo cheddar
                        derretido.
                    </p>

                    <div class="flex items-center gap-2 justify-between mt-3">
                        <p class="font-bold text-lg">R$ 24.90</p>
                        <button class="bg-gray-900 px-5 rounded add-to-cart-btn" data-name="Hamburguer Cheddar"
                            data-price="24.90"
                            data-image="{{ asset('/assets/hamb-2.png') }}"
                            >
                            <i class="fa fa-cart-plus text-lg text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- FIM PRODUTO ITEM 2 --}}

            {{-- PRODUTO ITEM 3 --}}
            <div class="flex gap-2">
                <img src="{{ asset('/assets/hamb-3.png') }}" alt="Hamburguer Vegano"
                    class="w-28 h-28 rounded-md hover:scale-110 hover:-rotate-2 duration-300">

                <div>
                    <p class="font-bold">
                        Hamburguer Vegano
                    </p>
                    <p class="text-sm">
                        Um hambúrguer vegano com um pão macio e dourado, preparado com ingredientes frescos e saborosos.
                    </p>

                    <div class="flex items-center gap-2 justify-between mt-3">
                        <p class="font-bold text-lg">R$ 28.50</p>
                        <button class="bg-gray-900 px-5 rounded add-to-cart-btn" data-name="Hamburguer Vegano"
                            data-price="28.50"
                            data-image="{{ asset('/assets/hamb-3.png') }}"
                            >
                            <i class="fa fa-cart-plus text-lg text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- FIM PRODUTO ITEM 3 --}}
            {{-- PRODUTO ITEM 4 --}}
            <div class="flex gap-2">
                <img src="{{ asset('/assets/hamb-4.png') }}" alt="Hamburguer de Frango"
                    class="w-28 h-28 rounded-md hover:scale-110 hover:-rotate-2 duration-300">

                <div>
                    <p class="font-bold">
                        Hamburguer de Frango
                    </p>
                    <p class="text-sm">
                        Um hambúrguer leve e saboroso com um pão macio e dourado, preparado com filé de frango grelhado.
                    </p>

                    <div class="flex items-center gap-2 justify-between mt-3">
                        <p class="font-bold text-lg">R$ 22.50</p>
                        <button class="bg-gray-900 px-5 rounded add-to-cart-btn" data-name="Hamburguer de Frango"
                            data-price="22.50"
                            data-image="{{ asset('/assets/hamb-4.png') }}"
                            >
                            <i class="fa fa-cart-plus text-lg text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- FIM PRODUTO ITEM 4 --}}
        </main>

        <div class="mx-auto max-w-7xl px-2 my-2">
            <h2 class="font-bold text-3xl">
                Bebidas
            </h2>
        </div>

        {{-- GRID BEBIDAS --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-7 md:gap-10 mx-auto max-w-7xl px-2 mb-16" id="menu">
            {{-- BEBIDA-1 --}}
            <div class="flex gap-2 w-full">
                <img src="{{ asset('/assets/refri-1.png') }}" alt="Coca-Lata"
                    class="w-28 h-28 rounded-md hover:scale-110 hover:-rotate-2 duration-300">

                <div class="w-full">
                    <p class="font-bold">
                        Coca Lata
                    </p>
                    {{-- <p class="text-sm">
                        Um hambúrguer leve e saboroso com um pão macio e dourado, preparado com filé de frango grelhado.
                    </p> --}}

                    <div class="flex items-center gap-2 justify-between mt-3">
                        <p class="font-bold text-lg">R$ 6.00</p>
                        <button class="bg-gray-900 px-5 rounded add-to-cart-btn" data-name="Coca Lata"
                            data-price="6.00"
                            data-image="{{ asset('/assets/refri-1.png') }}"
                            >
                            <i class="fa fa-cart-plus text-lg text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- FIM BEBIDA-1 --}}

            {{-- BEBIDA-2 --}}
            <div class="flex gap-2 w-full">
                <img src="{{ asset('/assets/refri-2.png') }}" alt="Coca-Lata"
                    class="w-28 h-28 rounded-md hover:scale-110 hover:-rotate-2 duration-300">

                <div class="w-full">
                    <p class="font-bold">
                        Guarana Lata
                    </p>
                    {{-- <p class="text-sm">
                        Um hambúrguer leve e saboroso com um pão macio e dourado, preparado com filé de frango grelhado.
                    </p> --}}

                    <div class="flex items-center gap-2 justify-between mt-3">
                        <p class="font-bold text-lg">R$ 6.00</p>
                        <button class="bg-gray-900 px-5 rounded add-to-cart-btn" data-name="Guarana Lata"
                            data-price="6.00" data-image="{{ asset('/assets/refri-2.png') }}">
                            <i class="fa fa-cart-plus text-lg text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- FIM BEBIDA-2 --}}
        </div>
        {{-- FIM GRID BEBIDAS --}}

    </div>
    {{-- FIM DO MENU --}}


    {{-- MODAL DO CARRINHO --}}
    <div id="cart-modal"
        class="bg-black/60 w-full h-full fixed top-0 left-0 z-[99] items-center justify-center hidden">
        <div class="bg-white p-5 rounded-md min-w-[90%] md:min-w-[600px]">
            <h2 class="text-center font-bold text-2xl mb-2">
                Meu Carrinho
            </h2>

            {{-- OS ITENS DO CARRINH VAO FICAR AKI --}}
            <div id="cart-items" class="flex justify-between mb-2 flex-col"></div>
            {{-- FIM OS ITENS DO CARRINH VAO FICAR AKI --}}

            <p class="font-bold mt-4">Total: <span id="cart-total">0.00</span></p>

            <label for="address" class="font-bold">Endereço de Entrega<span class="text-red-500">*</span></label>
            <input type="text" name="adress" id="address" placeholder="Digite seu Endereço completo"
                class="w-full border-2 p-1 rounded my-1">

            <p class="text-red-500 hidden" id="address-warn">Digite seu Endereço completo!</p>


            <div class="flex items-center justify-between mt-5 w-full">
                <button id="close-modal-btn">Fechar</button>
                <button id="checkout-btn" class="bg-green-500 text-white px-4 py-1 rounded">Finalizar Pedido</button>
            </div>
        </div>
    </div>
    {{-- FIM MODAL CARRINHO --}}


    {{-- FOOTER DE CARRINHO --}}
    <footer class="w-full bg-red-500 py-2 fixed bottom-0 z-40 flex items-center justify-center">
        <button class="flex items-center gap-2 font-bold text-white" id="cart-btn">
            (<span id="cart-count">0</span>)
            Veja meu CARRINHO
            <i class="fa fa-cart-plus text-lg text-white"></i>
        </button>
    </footer>
    {{-- FIM FOOTER DE CARRINHO --}}


    <script src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>
