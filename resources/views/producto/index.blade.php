<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('producto.create') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Registrar producto</a>
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">

                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase
            border-b border-gray-600">
                                        <th class="px-4 py-3">idproducto</th>
                                        <th class="px-4 py-3">nombre</th>
                                        <th class="px-4 py-3">cantidad</th>
                                        <th class="px-4 py-3">id empleado</th>
                                        <th class="px-4 py-3">id marca</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    @foreach ($producto as $producto)
                                        <tr class="text-gray-700">

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $producto->idproducto }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $producto->nombre }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $producto->cantidad }}</td>

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $producto->idempleado }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $producto->idmarca }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300"
                                                    href="{{route('producto.show', $producto->idproducto)}}">
                                                        Editar
                                                    </a>
                                                </div>

                                                <form action="{{ route('producto.destroy', $producto->idproducto) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button
                                                        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
