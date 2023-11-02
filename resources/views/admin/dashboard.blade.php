
@extends('layouts.global')
@section('title')
Dashboard - Admin
@endsection
 
@section('content')
    @include('components.navigationAdmin', [
        // 'nama' => 'Natalie Fuad',
        'gambar' => 'assets/images/gray won.jpg'])
    @include('components.admin_staff')
    @include('components.admin_cafe_menu')
    @include('components.operationHours')
    @include('components.footer')
@endsection
