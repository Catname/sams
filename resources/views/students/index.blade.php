@extends('layouts.default')
@section('title', '注册')

@section('content')
  <h1>学生列表</h1>
  <div class="row mb-5">
    <div class="col-lg-12 col-md-12 student-list">
      <div class="card ">
        <div class="card-body">
          <div>
            <table class="table">
              <thead>
              <tr>
                <th>ID</th>
                <th>姓 名</th>
                <th>照 片</th>
                <th>语文成绩</th>
                <th>数学成绩</th>
                <th>英语成绩</th>
                <th>总 分</th>
                <th>排 名</th>
                <th>添加时间</th>
                <th>操作</th>
              </tr>
              </thead>
              <tbody>
              @if ($achievements->count() > 0)
                @foreach ($achievements as $key=>$achievement)
                  <tr>
                    <td>{{ $achievement->student->id }}</td>
                    <td>{{ $achievement->student->name }}</td>
                    <td><img class="mr-3" src="{{ $achievement->student->avatar }}" alt="{{ $achievement->student->name }}" width=32></td>
                    <td>{{ $achievement->chinese }}</td>
                    <td>{{ $achievement->math }}</td>
                    <td>{{ $achievement->english }}</td>
                    <td>{{ $achievement->count }}</td>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $achievement->student->created_at->diffForHumans() }}</td>
                    <td>

                      <form action="{{ route('students.destroy', $achievement->student->id) }}" method="DELETE" onsubmit="return confirm('您确定要删除：{{$achievement->student->name}} 同学吗？');">
                        {{ csrf_field() }}
                        <button class="btn btn-block btn-danger" type="submit" name="button"><i class="fa fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach

              @else
                <tr>
                  <td>-</td>
                  <td>无数据</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
              @endif

              </tbody>
            </table>
          </div>


          <div class="mt-5">
            {!! $achievements->appends(Request::except('page'))->render() !!}
          </div>

        </div>
      </div>
    </div>
  </div>
@stop
