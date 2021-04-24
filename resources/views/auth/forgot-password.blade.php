<x-guest-layout>
    <div class="container-tight py-4">
        <form class="card card-md" method="POST" action="{{ route('password.email') }}" autocomplete="off">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Reset Password') }}</h2>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                    <input placeholder="{{ __('E-Mail Address') }}" id="email"
                           type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Send Password Reset Link') }}</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            <a href="{{route('login')}}" tabindex="-1">{{ __('Back to') }}</a>
        </div>
    </div>
</x-guest-layout>
