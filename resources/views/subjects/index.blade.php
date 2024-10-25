@extends('layouts.main')
@section('content')
<div class='container md:mx-auto'>
    @foreach(@subjects as $subject)
    <div>
        {{$subject->title}}

        @foreach($subject->$students as $srudent)
        <div class="flex">
            <p>{{student->lname}}</p>
            <p>{{student->fname}}</p>
            <p>{{student->pivot->grade}}</p>
        </div>
        @endforeach

    </div>
    @endfortlse
</div>

@endsection()