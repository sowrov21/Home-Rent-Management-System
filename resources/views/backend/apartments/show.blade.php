
<div><p>Title:{{ $apartment->title }}</p></div>
<div><p>Loction:{{ $apartment->locations->name ?? ''}}</p></div>

<div>
<p>Image</p>
@foreach ($images as $image)
{{-- @dd($image->name) --}}
            @if(file_exists(storage_path().'/app/public/apartments/'.$image->name ) && (!is_null($image->name)))

            <img src="{{ asset('storage/apartments/'.$image->name) }}" height="100" width="100">

            @else
            {{'image nai'}}
            {{-- <img src="{{ asset('img/default.png') }}" /> --}}
            @endif
@endforeach

</div>







