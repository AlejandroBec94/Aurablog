@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <app></app>
    {{--<div class="row justify-content-center">
        <div class="col-md-8" >
            <posts-component :posts="{{ $posts }}" ></posts-component>
            --}}{{--<div class="card" v-for="(post,index) in posts" :key="index">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @{{ post.title }}
                    {{ __('You are logged in!') }}
                </div>
            </div>--}}{{--
        </div>
    </div>--}}
</div>
@endsection
