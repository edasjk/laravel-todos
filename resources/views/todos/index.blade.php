@extends('layouts.app')



@section('title')

    Todos List

@endsection




@section('content')

<h1 class="text-center my-5">TODOS PAGE</h1>
            <div class="card card-default">
                <div class="card-header"                          >
                    Todos
                    <div class="card-body">
                        @foreach($todos as $todo)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    {{ $todo->name }}
                                    
                                    @if(!$todo->completed)
                                        <a href="/todos/{{ $todo->id }}/complete"><button class="btn btn-warning btn-sm float-right ml-2" style="color:white;">Complete</button></a>
                                    @endif

                                    <a href="/todos/{{ $todo->id }}"><button class="btn btn-primary btn-sm float-right">View</button></a>
                                </li>
                            </ul>
                        @endforeach   
                    </div>
                </div>
            </div>

@endsection