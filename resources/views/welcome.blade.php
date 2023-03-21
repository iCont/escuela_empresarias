<x-app-layout>
<section class="bg-cover hero_section" style="background-image: url({{asset('img/desk-593327_1920.jpg')}})">
    <div class="hero_wrapper" >
        <h1 class="text-white font-bold text-4xl">Desarrolla tu liderazgo y haz crecer tu negocio  <br> con la Escuela para Empresarias</h1>
        <div class="w-full md:w-3/4 lg:w-1/2">
            <p class="text-white text-xl my-4">¡Inscríbete ahora y haz crecer tu negocio con nosotros!</p>
            <!-- component -->
            <!-- This is an example component -->
                <div class="w-1/2 pt-2 relative  text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm text-center mt-5 focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current mt-5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                    </button>
                </div>
        </div>
    </div>
</section>
<section class="mt-24 ">
    <h1 class="text-gray-600 text-center  text-3xl mb-6">CONTENIDO</h1>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/cursos.jpg')}}" alt="">
            </figure class="mt-2">
            <heCursos y Proyectosader>
                <h1 class="text-center text-xl mt-1 text-gray-700">Laravel</h1>
            </heCursos>
            <p class="text-sm text-center mt-5 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dicta commodi, minima harum voluptatum.</p>
        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/cursos.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl mt-1 text-gray-700">Cursos y Proyectos</h1>
            </header>
            <p class="text-sm text-center mt-5 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dicta commodi, minima harum voluptatum.</p>
        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/cursos.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl mt-1 text-gray-700">Java Script</h1>
            </header>
            <p class="text-sm text-center mt-5 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dicta commodi, minima harum voluptatum.</p>
        </article>
        <article>
            <figure>
                <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/cursos.jpg')}}" alt="">
            </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl mt-1 text-gray-700">MySQL</h1>
            </header>
            <p class="text-sm text-center mt-5 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dicta commodi, minima harum voluptatum.</p>
        </article>


    </div>
</section>
<section class="mt-24 bg-gray-700 py-12">
<h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
<p class="text-center text-white">Dirígete al catálogo y filtra por categoría o nivel</p>
<div class="flex justify-center mt-4"><a href="{{route('course.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Catálogo de cursos</a></div>
</section>
<section class="mt-24">
    <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
    <p class="text-center text-gray-500 text-small mb-6">Conoce los últimos cursos que la Escuela de Empresarias tiene para ti</p>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
        <article>
             <img src="{{asset('/storage/'.$course->image->url)}}" alt="">
             <div class="px-6 py-4">
                <h1>{{$course->title}}</h1>
             </div>
        </article>
        @endforeach
    </div>
</section>
</x-app-layout>
