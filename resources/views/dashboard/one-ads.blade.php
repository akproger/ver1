
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $data->ads_title }}
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
                        <div class="alert alert-info">
                            <p>{{ $data->ads_title }}</p>
                            <p>{{ $data->ads_description }}</p>
                            <p><small>{{ $data->created_at }}</small></p>
                            <a href="{{ route('ads-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
                            <a href="{{ route('ads-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
