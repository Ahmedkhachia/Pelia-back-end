@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Completer votre inscription') }}</div>

                <div class="card-body">
                    <form action="{{url('/inscrire')}}" method="POST" >
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Adress Cabinet') }}</label>

                            <div class="col-md-6">
                                <input id="cabinet" type="text" class="form-control @error('cabinet') is-invalid @enderror" name="cabinet" value="{{ old('cabinet') }}" required autocomplete="cabinet" autofocus>

                                @error('cabinet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Phone Cabinet') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="nom" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Centres') }}</label>

                            <div class="col-md-6">
                                <input id="centre" type="text" class="form-control @error('centre') is-invalid @enderror" name="centre" value="{{ old('centre') }}" required autocomplete="centre">

                                @error('centre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Langue') }}</label>

                            <div class="col-md-6">
                                <input id="langue" type="text" class="form-control @error('langue') is-invalid @enderror" name="langue" value="{{ old('langue') }}" required autocomplete="email">

                                @error('langue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Appt') }}</label>

                            <div class="col-md-6">
                                <input id="Appt" type="text" class="form-control @error('Appt') is-invalid @enderror" name="Appt" value="{{ old('Appt') }}" required autocomplete="nom" autofocus>

                                @error('Appt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>

                            <div class="col-md-6">
                                <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror" name="postal" value="{{ old('postal') }}" required autocomplete="nom" autofocus>

                                @error('postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Quartier') }}</label>

                            <div class="col-md-6">
                                <input id="cartier" type="text" class="form-control @error('cartier') is-invalid @enderror" name="cartier" value="{{ old('cartier') }}" required autocomplete="nom" autofocus>

                                @error('cartier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
