@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">
                   <x-alert/>
                    <form method="post" action="/upload" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        
                        <input type="file" name="image" class="form-control" >
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
