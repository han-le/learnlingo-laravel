<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-center handwriting-font mt-5 mb-5">Sign in</h1>
            <div class="col-10 col-md-6 col-lg-4" style="margin: 0 auto">
                <!-- Register form -->
                <form method="POST" action="/login">

                    <!-- Block teh Cross-site request forgery -->
                    @csrf

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
                        @error('password')
                        <span class="error-message">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="text-center mt-5">
                        <a href="/">Back to homepage</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
