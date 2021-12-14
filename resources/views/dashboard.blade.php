<x-app-layout>
    <style>
        .juice {
            background-image: url('https://i.ibb.co/SN2Sp4T/juice.png');
        }

        .juice2 {
            background-image: url('https://lh3.googleusercontent.com/proxy/q0uQaXlU5pIjWttiTimi4QWOV-7VfdXu3ze9m1dCuM1y2JS6lRGlhImlfY9pYceaZ7xdEauzQed72oG9oQ1gwd8u5hDo-qtjNxXrxQ');
        }

        .juice3 {
            z-index: 10;
            position: relative;
        }

        .juice3::after {
            content: '';
            position: absolute;
            opacity: .2;
            z-index: -999;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url('https://fierros.com.co/wp-content/uploads/2021/08/Estrategias-para-una-ferreteria-exitosa.png');
        }

        .text-primary {
            color: #f9b529;
        }

        .text-primary-lite {
            color: #fac251;
        }

        .text-secondary {
            color: #294356;
        }

        .text-secondary-lite {
            color: #d5dee5;
        }

        .bg-primary {
            background-color: #f9b529;
        }

        .bg-primary-lite {
            background-color: #fac251;
        }

        .bg-secondary {
            background-color: #294356;
        }

        .bg-secondary-lite {
            background-color: #d5dee5;
        }

        .product {
            background-image: url('https://i.ibb.co/L00dH6V/2021-11-07-14h07-51.png');
        }
        .product2 {
            background-image: url('https://i.ibb.co/1fZMKPh/2021-11-07-14h08-07.png');
        }
        .product3 {
            background-image: url('https://i.ibb.co/f9tpvV3/2021-11-07-14h08-32.png');
        }
        .product4 {
            background-image: url('https://i.ibb.co/42BsKQ2/2021-11-07-14h08-17.png');
        }
        .whatsapp {
            position: fixed;
            right:25px; /Margen derecho/
            bottom:20px; /Margen abajo/
            z-index:999;
        }
        .whatsapp img {
            width:60px; /Alto del icono/
            height:60px; /Ancho del icono/
        }
        .whatsapp:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

        .facebook {
            position: fixed;
            right:25px; /Margen derecho/
            bottom:90px; /Margen abajo/
            z-index:999;
        }
        .facebook img {
            width:60px; /Alto del icono/
            height:60px; /Ancho del icono/
        }
        .facebook:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

        .telegram {
            position: fixed;
            right:25px; /Margen derecho/
            bottom:160px; /Margen abajo/
            z-index:999;
        }

        .telegram img {
            width:60px; /Alto del icono/
            height:60px; /Ancho del icono/
        }
        .telegram:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="min-h-screen bg-white">
                        <!-- body -->
                        <main>

                            <div class="whatsapp">
                                <a href="https://api.whatsapp.com/send?phone=59175152102&text=Hola!%20Quisiera%20saber%20mas%20sobre%20la%20pagina"
                                    target="_blank" title="Contactame por Whatsapp">
                                    <img src="https://www.peengler.com/wp-content/uploads/whatsapp.png" alt="WhatsApp" />
                                </a>
                            </div>
<br>
<br>
<br>
                            <div class="facebook">
                                <a href="https://m.me/profile.php?id=100010714416744" target="_blank" title="Contactame por Messenger">
                                    <img src="https://www.peengler.com/wp-content/uploads/messenger.png" alt="Messenger" />
                                </a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="telegram">
                                <a href="https://t.me/Jove14333" target="_blank" title="Contactame por Telegram">
                                    <img src="https://pngimg.com/uploads/telegram/telegram_PNG34.png" alt="Telegram" />
                                </a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <section class="juice3 bg-gray-100 bg-opacity-90 py-10">
                                <div class="container mx-auto px-4 flex flex-col lg:flex-row">
                                    <div class="juice2 mt-6 lg:mt-0 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                                        <div class="max-w-sm">
                                            <p class="text-3xl md:text-4xl font-semibold uppercase">20% sale off</p>
                                            <p class="mt-8 font-semibold">Syncthetic seeds<br />2.0 OZ</p>
                                            <button class="mt-20 bg-white font-semibold px-8 py-2 rounded"></button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="container mx-auto pt-12 bg-white">
                                <!-- title -->
                                <div class="relative flex items-end font-bold">
                                    <h2 class="text-2xl">Categoria</h2>
                                    <a href class="ml-10 flex items-center text-gray-400">
                                        <span class="text-sm">All Categories</span>
                                        <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                    </a>
                                    <div class="ml-auto flex">
                                        <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
                                        </a>
                                        <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-yellow-400">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- cards -->
                                <div class="mt-10">
                                    <ul class="-m-3.5 flex">
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://www.prisa.mx/blog/wp-content/uploads/2020/04/ventajas-pintar-paredes-brocha.jpg" alt="" />
                                            <span class="font-semibold">Pintura & Brochas</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://sc04.alicdn.com/kf/HTB1.CA8M6DpK1RjSZFrq6y78VXar.jpg" alt="" />
                                            <span class="font-semibold">plomeria & tuvos</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="http://dslv9ilpbe7p1.cloudfront.net/jRSeOK7-OopeKkqCGNaY-Q_store_banner_image.png" alt="" />
                                            <span class="font-semibold">herramientas</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://previews.123rf.com/images/tr3gi/tr3gi1102/tr3gi110200006/8751691-brillante-resumen-de-ideas-nuevas-focos-en-un-c%C3%ADrculo-alrededor-de-una-bola-de-colores-cables-aislad.jpg" alt="" />
                                            <span class="font-semibold">Cables & focos</span>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="container mx-auto pt-12">
                                <!-- title -->
                                <div class="relative flex items-end font-bold">
                                    <h2 class="text-2xl">Featured Brands</h2>
                                    <a href class="ml-10 flex items-center text-gray-400">
                                        <span class="text-sm">All Offers</span>
                                        <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                    </a>
                                    <div class="ml-auto flex">
                                        <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
                                        </a>
                                        <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- cards -->
                                <div class="mt-10">
                                    <ul class="-m-3.5 flex">
                                        <li class="product m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product2 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product4 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product3 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                    </ul>
                                </div>
                            </section>
                            <!-- footer -->
                            <footer class="mt-16 h-48">
                                <hr>
                                <div class="container mx-auto py-5">
                                    <a href>&copy; 2021 <span class="font-bold">Farmat</span> All Rights Reserved</a>
                                </div>
                            </footer>



                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
