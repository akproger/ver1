
        @foreach($data_district as $el_district)
            <div class="alert alert-info">
                <h1>{{ $el_district->name }}</h1>
                @foreach($data_region as $el_region)
                    @if($el_region->district_id == $el_district->id)
                    <h2>{{ $el_region->name }}</h2>
                        @foreach($data_city as $el_city)
                            @if($el_city->region_id == $el_region->id)
                                <p>{{ $el_city->name }}</p>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        @endforeach()

