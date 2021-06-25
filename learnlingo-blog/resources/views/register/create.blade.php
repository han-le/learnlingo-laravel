<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-center handwriting-font mt-5 mb-5">Register</h1>
            <div class="col-10 col-md-6 col-lg-4" style="margin: 0 auto">
                {{-- Register form --}}
                <form method="POST" action="/register">

                    <!-- Block teh Cross-site request forgery -->
                    @csrf

                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="name" value="{{old('name')}}">
                        @error('name')
                        <span class="error-message">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}">
                        @error('username')
                        <span class="error-message">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                        <span class="error-message">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                        <div id="" class="form-text">Password must have more than 3 characters</div>
                        @error('password')
                        <span class="error-message">Your password is too short :'(</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
