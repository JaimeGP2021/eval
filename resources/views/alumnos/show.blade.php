<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver alumno
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Nombre
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $alumno->nombre }}
                            </dd>
                        </div>
                    </dl>
                    @if ($alumno->notas()->exists())
                    <br>
                        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Calificaciones:</h2>
                        <ol class="max-w-screen-2xl space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                            @foreach ($alumno->notas as $nota)
                            <li>
                                CE:
                                <span class="font-semibold text-gray-900 dark:text-white">{{$nota->ce->ce}}</span> --- Nota:
                                <span class="font-semibold text-gray-900 dark:text-white">{{$nota->nota}}</span>
                            </li>
                            @endforeach
                        </ol>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
