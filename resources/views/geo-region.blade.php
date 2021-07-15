@foreach($data as $el)
    <div class="alert alert-info">
        <h3>{{ $el->name }}</h3>
        <p>{{ $el->id }}</p>
    </div>
@endforeach
