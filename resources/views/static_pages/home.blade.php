@extends('layouts.default')
@section('title', '查看学生信息')
@section('content')
  <div class="jumbotron">
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('students.create') }}" role="button">添加学生</a>
    </p>
  </div>
@stop
