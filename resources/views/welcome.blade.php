@extends('layouts.app')

@section('main')
@include('includes.abo')
@include('includes.search')
@include('includes.sortie')
@endsection

@section('content')
@include('includes.actuellement')
@include('includes.prochainement')

@endsection

