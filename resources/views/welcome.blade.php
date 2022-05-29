@extends('layouts.app')

@section('main')
@include('includes.sortie')
@include('includes.abo')
@endsection

@section('content')
@include('includes.actuellement')
@include('includes.prochainement')
@endsection

