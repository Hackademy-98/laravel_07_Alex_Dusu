<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Login</h1>
            </div>
            <div class="col-12">

                <form method="post" action="{{route('login')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    @error('email') {{$message}} @enderror

                        
                                        <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>

                </form>
            </div>
        </div>
    </div>

</x-layout>





