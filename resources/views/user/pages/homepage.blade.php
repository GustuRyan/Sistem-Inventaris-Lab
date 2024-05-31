@extends('user.layouts.dashboard')
@section('page')
    Dashboard
@endsection
@section('contents')
    <div class="pt-[92px]">
        @include('user.components.sections.hero')
        @include('user.components.sections.features')
    </div>
@endsection
