    @extends('layouts.master')
    
    @section('title')
    Tous les books
    @endsection

    @section('content')
        <div class="container">
            <div class="col-md-12">
                
                <h1>Les tous derniers livres publiques sur notre site</h1>
                {{ $books->links() }}
                <ul class="list-group">
                    @forelse($books as $book)
                    <li class="list-group-item">
                        <h2><a href="{{url('front/show', $book['id'])}}">{{$book['title']}}</a></h2>
                        @if(count([$book['picture']]) > 0)
                        <div class="w-25 float-left px-4 bg-dark mr-2">
                            <img class="w-100" src="http://127.0.0.1:8000/images/{{$book['picture']['link']}}" alt="">
                        </div>
                        
                        @endif
                                    
                        <p>{{$book['description']}}</p>
                        <ul class="list-group text-black-50" style="clear:both">
                            <h3>Auteur(s)</h3>
                            @forelse($book['authors'] as $author)
                            <li>{{$author['name']}}</li>
                            @empty
                            <li>Il n'y a pas d'auteur.</li>
                            @endforelse            
                        </ul>
                    </li>
                    @empty
                    <li class="list-group-item">Désolée pour l'instant aucun livre n'est publié sur le site</li>
                    @endforelse
                </ul>
                        
            </div>
        </div>
    @endsection 