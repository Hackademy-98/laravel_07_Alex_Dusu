<x-layout>

    <h1 class="text-center">Aggiungi Articoli</h1>

    @if (session()->has('success'))
    <div class="col-12">
        <p class="alert alert-success">{{session('success')}}</p>
    </div>
@endif


    <div class="col-12">
        <form method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input name="description" type="text" class="form-control" id="description">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo (€)</label>
                    <input name="price" type="integer" class="form-control" id="price">
                </div>
                <div class="mb-3 form-check">
                  <label class="form-check-label" for="exampleCheck1"></label>
                    <input type="file" class="form-control" name="img" id="exampleCheck1">
                </div>
                <button type="submit" class="btn btn-primary">Pubblica</button>
        </form>
    </div>






</x-layout>
