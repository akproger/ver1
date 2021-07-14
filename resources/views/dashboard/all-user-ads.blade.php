<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Все Ваши объявления
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-6 text-gray-500">
                        @foreach($data as $el)
                            <div class="alert alert-info">
                                <h3>{{ $el->ads_title }}</h3>
                                <p>{{ $el->ads_description }}</p>
                                <p><small>{{ $el->created_at }}</small></p>
                                <a href="{{ route('one-ads', $el->id) }}"><button class="btn btn-warning">Просмотреть</button></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
