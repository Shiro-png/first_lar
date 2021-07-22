@extends('layouts.app')
@section('content')
    <h2>All task</h2>
    <!-- Bootstrap шаблон... -->
    <a href="{{route('tasks.create')}}" class="btn btn-default">
        <i class="fa fa-plus"></i>Создать новую задачу
    </a>
@endsection