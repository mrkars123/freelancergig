@extends('layout.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>
                {{ $profileUser->username }}
                <a href="{{ route('profiles.show',$profileUser->username)}}">link to your profile page</a>

                <small>registered {{ $profileUser->created_at->diffForHumans() }}</small>
            </h1>
        </div>
    </div>
@endsection