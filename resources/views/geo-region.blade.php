@foreach($data as $el)
    @foreach($data_district as $el_district)
        <div class="alert alert-info">
            @if($el->district_id == $el_district->id)
                <h2>{{ $el->name }}</h2>
                <p><b>{{ $el_district->name }}</b></p>
            @endif
        </div>
    @endforeach
@endforeach
