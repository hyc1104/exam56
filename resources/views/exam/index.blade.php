@extends('layouts.app') 
@section('content')

{{-- b4-list-default快速產生 --}}

    <h1>所有測驗列表<small>（共 {{$exams->total()}} 筆資料）</small></h1>

    <ul class="list-group">
        @forelse($exams as $exam)
            <li class="list-group-item">
                
                {{ $exam -> updated_at -> format("Y年m月d日") }}
                <a href="/exam/{{ $exam -> id }}">{{ $exam -> title }}</a>
            
            </li>

        @empty

            <li class="list-group-item">尚無任何測驗</li>

        @endforelse
    </ul>
        <div class="my-3">
            {{ $exams->links() }}
        </div>
@stop