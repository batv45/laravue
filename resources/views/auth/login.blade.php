<x-guest-layout>
    <div class="container-tight py-4">
        <form class="card card-md" method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">{{ __('Login') }}</h2>
                <div class="mb-3">
                    <label class="form-label">{{ __('E-Mail') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" required
                            autofocus name="email"
                           placeholder="{{ __('E-Mail Address') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        {{ __('Password') }}
                        <span class="form-label-description">
                          <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        </span>
                    </label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                           placeholder="{{ __('Password') }}" name="password"
                               autocomplete="off">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input class="form-check-input" type="checkbox"
                               name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}/>
                        <span class="form-check-label">{{ __('Remember Me') }}</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Login') }}</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            {{__("Don't have account yet?")}} <a href="{{route('register')}}" tabindex="-1">{{ __('Register') }}</a>
        </div>
    </div>
</x-guest-layout>
