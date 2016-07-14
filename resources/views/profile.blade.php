@extends('layoutPages.layoutProfile')

@section('left')
  @include('sections.profilePage.profilePageLeftSide')
@endsection

@section('middle')
  @include('sections.profilePage.profilePageMiddleSide')
@endsection

@section('right')
  @include('sections.profilePage.profilePageRightSide')
@endsection
