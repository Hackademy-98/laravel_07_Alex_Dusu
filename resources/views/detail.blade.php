<x-layout>


<h1 class="text-center">{{$article['title']}}</h1>
<div class="container my-5">
    <div class="row">
        <div class="col-6">
            <img src="{{Storage::url($article->img)}}" alt="">
        </div>
        <div class="col-6 text-center d-flex flex-column justify-content-center bg-primary">
            <p>{{$article['description']}}</p>

            <p>€{{$article['price']}}</p>
        </div>
    </div>
</div>











</x-layout>