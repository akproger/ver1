<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Редактирование объявления
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-6 text-gray-500">
                        <form method="post" action="{{ route('ads-update-submit', $data->id) }}">
                            @csrf
                            <input type="text" value="{{ $data->ads_title }}" name="ads_title" id="ads_title" placeholder="Заголовок" class="form-control"><br>
                            <textarea name="ads_description" id="ads_description"  class="form-control">
                                 {{ $data->ads_description }}
                            </textarea><br>
                            <input type="hidden" name="user_id" id="user_id" value="{{ $data->user_id }}">
                            <button type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
