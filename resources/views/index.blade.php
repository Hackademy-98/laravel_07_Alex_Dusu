<x-layout>


    <h1 class="text-center my-5">Marketplace</h1>




    <div class="container-fluid">
        <div class="row">

            @if (session()->has('success'))
            <div class="col-12">
                <p class="alert alert-success">{{session('success')}}</p>
            </div>
        @endif

            @foreach ($articles as $article)
                <div class="col-4 d-flex justify-content-center border-0 my-5">
                    <div class="card" style="width: 18rem;">
                        <div class="img-size">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$article["title"]}}</h5>
                            <p class="card-text text-truncate">{{$article["description"]}}</p>
                            <div class="d-flex justify-content-around ">

                                <a href="{{route('show', compact('article'))}}" class="btn btn-primary">Dettagli</a>
                            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
                            <form action="{{route('article.destroy', compact('article'))}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </div>
                            
                                
                
                        </div>
                    </div>
                </div>
                
            @endforeach

        </div>
    </div>






</x-layout>
