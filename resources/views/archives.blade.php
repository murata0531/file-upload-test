@foreach($archives as $archive)
        <img src="{{ asset('storage/' . $archive->img_url) }}">
@endforeach