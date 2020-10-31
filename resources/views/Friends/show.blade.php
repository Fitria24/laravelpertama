@extends('layouts.app')

@section('title','cobaaaaaaa')

@section('content')
<div class="card">
    <div class="card-body">
    <h3> Nama teman : {{$friend['nama']}}</h3>
    <h3> No Tlp teman : {{$friend['no_tlp']}}</h3>
    <h3> Alamat teman: {{$friend['alamat']}}</h3>
    </div>
</div>
@endsection
  