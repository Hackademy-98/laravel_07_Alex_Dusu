<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Register</h1>
            </div>
            <div class="col-12">

                <form method="post" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="name">
                    @error('name') {{$message}} @enderror

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        @error('email') {{$message}} @enderror

                    

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    @error('password') {{$message}} @enderror

                    </div>
                    <div class="mb-3">
                        <label for="password-confirmation" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
                    @error('password_confirmation') {{$message}} @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>

                </form>
            </div>
        </div>
    </div>

</x-layout>





