@extends('layouts.master')
@section('title','Post')
@section('content' )
<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Post</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="{{ url('profile')}}">Profile</a>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>
        </div>
    </div>
</div>