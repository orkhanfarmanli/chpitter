@extends('layoutPages.layout')

@section('left')
  @include('sections.mainPage.mainPageLeftSide')
@endsection

@section('middle')
  @include('sections.mainPage.mainPageMiddleSide')
@endsection

@section('right')
  @include('sections.mainPage.mainPageRightSide')
@endsection
