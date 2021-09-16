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
                        Сформувати договір страхування подорожуючих за кордон
                    </p>
                </div>

                <form class="p-6 space-y-6" method="post">

                    <div class="mt-1 flex flex-row flex-wrap">
                        <div class="mt-4 w-3/12">
                            <x-label for="territory_covered" value="Територія дії"/>
                            <x-input id="territory_covered" class="block mt-1 w-full" type="text" name="territory_covered"
                                     :value="old('territory_covered')" required />
                        </div>
                        <div class="mt-4 w-4/12 ml-6">
                            <x-label for="valid_from" value="Строк дії з"/>
                            <x-input id="valid_from" class="block mt-1 w-full" type="date" name="valid_from"
                                    required/>
                        </div>
                        <div class="mt-4 w-1/12  ml-6">
                            <x-label for="duration" value="Кількість днів"/>
                            <x-input id="duration" class="block mt-1 w-full" type="text" name="duration"
                                     :value="old('duration')" required />
                        </div>
                        <div class="mt-3 w-3/12 ml-6" >
                            <span class="text-gray-700">Програма страхування</span>
                            <div class="mt-4">
                                <x-label class="inline-flex items-center">
                                    <x-input type="radio" class="form-radio" name="program_type" value="foreign_first"/>
                                    <span class="ml-2">1</span>
                                </x-label>
                                <x-label class="inline-flex items-center ml-6">
                                    <x-input type="radio" class="form-radio" name="program_type"
                                             value="foreign_second"/>
                                    <span class="ml-2">2</span>
                                </x-label>
                                <x-label class="inline-flex items-center ml-6">
                                    <x-input type="radio" class="form-radio" name="program_type" value="foreign_third"/>
                                    <span class="ml-2">3</span>
                                </x-label>
                            </div>
                        </div>
                        <div class="mt-3 w-3/12">
                            <span class="text-gray-700">Група ризику</span>
                            <div class="mt-4">
                                <x-label class="inline-flex items-center">
                                    <x-input type="radio" class="form-radio" name="risk_group" value="work"/>
                                    <span class="ml-2">Робота</span>
                                </x-label>
                                <x-label class="inline-flex items-center ml-6">
                                    <x-input type="radio" class="form-radio" name="risk_group"
                                             value="sport"/>
                                    <span class="ml-2">Спорт</span>
                                </x-label>
                                <x-label class="inline-flex items-center ml-6">
                                    <x-input type="radio" class="form-radio" name="risk_group" value="study"/>
                                    <span class="ml-2">Навчання</span>
                                </x-label>
                            </div>
                        </div>
                        <div class="mt-4 w-4/12 ml-6">
                            <x-label for="name" value="Страхувальник"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="insured"
                                     :value="old('insured')" required/>
                        </div>
                        <div class="mt-4 ml-6 w-4/12">
                            <x-label for="last_name" :value="__('Фамілія')"/>

                            <x-input id="last_name" class="block mt-1 w-full"
                                     type="text"
                                     :value="old('last_name')"
                                     name="last_name"
                                     required/>
                        </div>

                    </div>
                    <div class="mt-4">
                        <x-input id="submit_contract" class="cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800
                            border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'"
                                 type="submit"
                                 value="Сформувати"
                                 name="submit_contract"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
