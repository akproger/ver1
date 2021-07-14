<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Новое объявление
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Заполните поля ниже для добавления объявления
                    </div>

                    <div class="mt-6 text-gray-500">
                        <form method="post" action="{{ route('naa1') }}">
                            @csrf
                            <input type="text" name="ads_title" id="ads_title" placeholder="Заголовок" class="form-control"><br>
                            <textarea name="ads_description" id="ads_description"  class="form-control"></textarea><br>
                            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-success">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
