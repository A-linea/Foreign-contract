<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="divide-y divide-gray-200">
                    <p class="p-6 bg-white border-b border-gray-200 text-xl font-medium text-black">
                        Сгенерировать договор
                    </p>
                </div>

                <form class="p-6 space-y-6" method="post">
{{--                    <div>--}}
{{--                        <label for="name" class="block">1.Им'я особи</label>--}}
{{--                    </div>--}}
                    <div class="mt-1">
{{--                        <input type="text" id="name" name="name" class="w-full border border-gray-300 px-3 py-2--}}
{{--                        rounded-lg shadow-sm"--}}
{{--                               required>--}}
                        <x-label for="name" :value="__('Ім\'я')" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <div class="mt-4">
                            <x-label for="last_name" :value="__('Фамілія')" />

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="current-password" />
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
