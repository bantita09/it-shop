@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1> <B>My Profile</B></h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2> <B>Name: </B> {{ Auth::user()->name }} </h2>
                    <h2> <B>Email: </B> {{ Auth::user()->email }} </h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
