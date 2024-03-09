@foreach($foots as $foot)
    <div>
        <h3>{{ $foot->title }}</h3>
        <p>{{ $foot->description }}</p>
        <img src="{{ asset('storage/'.$foot->image) }}" alt="img" >
    </div>
@endforeach
