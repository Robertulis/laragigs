<h1>{{$heading}}</h1>

@if(count($listings)==0)
    <h1>no listings found</h1>
@else
@foreach ($listings as $listing)
    <h2>
        <a href="listings/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <br>
    <h5>Description</h5>
    <p>
        {{$listing['description']}}
    </p>
@endforeach
@endif
