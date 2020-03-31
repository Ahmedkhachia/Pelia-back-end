@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Completer votre inscription') }}</div>

                <div class="card-body">
                    <form action="{{url('/inscrire/cursus')}}" method="POST" >
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Site Web') }}</label>

                            <div class="col-md-6">
                                <input id="site" type="text" class="form-control @error('site') is-invalid @enderror" name="site" value="{{ old('site') }}" required autocomplete="site" autofocus>

                                @error('site')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="nom" autofocus>

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ICE') }}</label>

                            <div class="col-md-6">
                                <input id="ice" type="text" class="form-control @error('ice') is-invalid @enderror" name="ice" value="{{ old('ice') }}" required autocomplete="ice">

                                @error('ice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Fortmations') }}</label>

                            <div class="col-md-6">
                                <input id="formation" type="text" class="form-control @error('formation') is-invalid @enderror" name="formation" value="{{ old('formation') }}" required autocomplete="email">

                                @error('formation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Presentation Cabinet') }}</label>

                            <div class="col-md-6">
                                <textarea id="presentation" type="text" class="form-control @error('presentation') is-invalid @enderror" name="presentation" value="{{ old('presentation') }}" required autocomplete="nom" autofocus></textarea>

                                @error('presentation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Presentation Cabinet Arabe') }}</label>

                            <div class="col-md-6">
                                <textarea id="arabe" type="text" class="form-control @error('arabe') is-invalid @enderror" name="arabe" value="{{ old('arabe') }}" required autocomplete="nom" autofocus></textarea>

                                @error('arabe')
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
