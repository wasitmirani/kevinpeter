@extends('admin.layouts.app')
@section('content')
@if(Auth::user()->role_id == '1')

@include('admin.components.admindeshboard')

@endif
@if(Auth::user()->role_id == '2')
@include('admin.components.studentdeshboard')

@endif
@if(Auth::user()->role_id == '3')
@include('admin.components.teacherdeshboard')


@endif

@endsection
