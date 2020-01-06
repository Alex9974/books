    @extends('layouts.master')
    
    @section('title')
    {{$book['title']}}
    @endsection

    @section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Un livre</h1>
            <h2>{{$book['title']}}</h2>
            <div class="mx-auto bg-light text-center border border-dark mb-3">
                <img src="http://127.0.0.1:8000/images/{{$book['picture']['link']}}" alt="">
            </div>
            <h3>Description : </h3>
            <p>{{$book['description']}}</p>
            @if(count($book['authors']) === 0)
            <h4>Pas d'auteur </h4>
            @elseif(count($book['authors']) === 1)
            <h4>Auteur :</h4>
            @elseif(count($book['authors']) > 1)
            <h4>Auteurs :</h4>
            @endif
            <ul class="ml-3">
           
            @forelse($book['authors'] as $author)
                <li>{{$author['name']}}</li>
                @empty
                <li>Il n'y a pas d'auteur.</li>
            @endforelse                   
            </ul>
            

            

            

        </div>
    </div>   
    
    @endsection