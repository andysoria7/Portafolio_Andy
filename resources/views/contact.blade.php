@extends('layout')

@section('title','Contacto')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                

                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
                    @csrf
                    <h1 class="display-4 text-center">{{ __('Contact') }}</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control @error('name') is-invalid @enderror shadow-sm bg-light" id="name" name="name" placeholder="Nombre ..." value={{ old('name') }}>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control @error('email') is-invalid @enderror shadow-sm bg-light" type="email" name="email" placeholder="Email ..." value={{ old('email') }}>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control @error('subject') is-invalid @enderror shadow-sm bg-light" name="subject" placeholder="Asunto ..." value={{ old('subject') }}>
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Mensaje</label>
                        <textarea class="form-control @error('content') is-invalid @enderror shadow-sm bg-light" name="content" placeholder="Mensaje ..." >{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
                </form>
            </div>
        </div>
        
    </div>
@endsection