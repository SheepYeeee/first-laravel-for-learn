@extends('layouts.master')
@section('title','排行榜')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background:#fff;color:#000;text-align:center;">
                <h3 class="m-0" >排行榜</h3></div>
                <div class="card-body p-0">
                    <table class="table table-hover m-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>名次</th>
                                <th>學號</th>
                                <th>姓名</th>
                                <th>國文</th>
                                <th>英文</th>
                                <th>數學</th>
                                <th>總分</th>
                                <th>動作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($score as $score)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $score->student->no}}</td>
                                    <td>{{ $score->student->user->name}}</td>
                                    <td>{{ $score->chinese}}</td>
                                    <td>{{ $score->english}}</td>
                                    <td>{{ $score->math}}</td>
                                    <td>{{ $score->total}}</td>
                                    <td>
                                        <a href="{{ route('students',['student_no' => $score->student->no]) }}" class="btn btn-info btn-sm">
                                            查看
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop