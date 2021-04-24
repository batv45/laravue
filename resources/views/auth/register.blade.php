<x-guest-layout>

    <div class="container-tight py-4">
        <form class="card card-md" method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Register') }}</h2>
                <div class="mb-3">
                    <label for="name" class="form-label">{{__('Name')}}</label>
                    <input placeholder="{{__('Name')}}" id="name" type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('E-Mail') }}</label>
                    <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>

                    <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                    <input placeholder="{{ __('Confirm Password') }}" id="password-confirm"
                           type="password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password">
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Register') }}</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            {{__("Already registered?")}} <a href="{{ route('login') }}" tabindex="-1">{{ __('Login') }}</a>
        </div>
    </div>
</x-guest-layout>
