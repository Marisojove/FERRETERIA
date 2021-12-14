<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            empleado
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('empleado.create') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Registrar empleado</a>
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">

                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase
            border-b border-gray-600">
                                        <th class="px-4 py-3">Nombres</th>
                                        <th class="px-4 py-3">Apellidos</th>
                                        <th class="px-4 py-3">cargo</th>
                                        <th class="px-4 py-3">ci</th>
                                        <th class="px-4 py-3">celular</th>
                                        <th class="px-4 py-3">genero</th>
                                        <th class="px-4 py-3">estado</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    @foreach ($empleado as $empleado)
                                        <tr class="text-gray-700">

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $empleado->nombres }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $empleado->apellidos }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $empleado->cargo }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $empleado->ci }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $empleado->celular }}</td>

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $empleado->genero }}</td>

                                            @if($empleado->estado == 'activo')
                                            <td class="px-4 py-3 text-xs border">
                                              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$empleado->estado}} </span>
                                            </td>
                                          @else
                                            <td class="px-4 py-3 text-xs border">
                                              <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> {{$empleado->estado}} </span>
                                            </td>
                                          @endif

                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300"
                                                    href="{{route('empleado.show', $empleado->idempleado)}}">
                                                        Editar
                                                    </a>
                                                </div>

                                                <form action="{{ route('empleado.destroy', $empleado->idempleado) }}" method="POST">
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
