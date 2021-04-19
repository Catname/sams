@extends('layouts.default')
@section('title', '主页')
@section('content')
  <div class="jumbotron">
    <h1>欢迎来到学生成绩管理系统</h1>
    <p class="lead">
      点击 <a href="{{ route('students.index') }}">查看学生列表</a>
    </p>
    <p>
      或者，你可以添加学生信息
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('students.create') }}" role="button">添加学生</a>
    </p>
  </div>
@stop
