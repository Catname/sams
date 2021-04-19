@extends('layouts.default')
@section('title', '添加学生信息')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">添加学生信息</div>

          <div class="card-body">
            <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">学生姓名</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="chinese" class="col-md-4 col-form-label text-md-right">语文成绩</label>

                <div class="col-md-6">
                  <input id="chinese" type="text" class="form-control @error('chinese') is-invalid @enderror" name="chinese" value="{{ old('chinese') }}" required autocomplete="current-chinese">

                  @error('chinese')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="math" class="col-md-4 col-form-label text-md-right">数学成绩</label>

                <div class="col-md-6">
                  <input id="math" type="text" class="form-control @error('math') is-invalid @enderror" name="math" value="{{ old('math') }}" required autocomplete="current-math">

                  @error('math')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="english" class="col-md-4 col-form-label text-md-right">英语成绩</label>

                <div class="col-md-6">
                  <input id="english" type="text" class="form-control @error('english') is-invalid @enderror" name="english" value="{{ old('english') }}" required autocomplete="current-english">

                  @error('english')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label text-md-right">用户头像</label>

                <div class="col-md-6">
                  <input id="avatar" type="file" class="form-control-file @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="current-english">

                  @error('avatar')
                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    添加
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
