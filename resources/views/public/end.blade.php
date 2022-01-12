@extends('public.layout.master')
@section('content')


<!-- Result Pages -->
<section class="resultContainer">
    <div class="textResult" style="background-color:hotpink;">
        <div class="resultDiscription" style="margin-left:150px; font-size:20px;color:greenyellow;">{{$win?? ''}} </div>
        <div class="resultDiscription" style="margin-left:150px; font-size:20px;color:greenyellow;">{{$loser?? ''}} </div>
        <div class="resultQout" style="margin-left:50px; margin-top:20px;"> Your Correct answer: {{Session::get('correctans')}} and wrong is: {{Session::get('wrongans')}}</div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Exam ID</th>
                <th>SCORE</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $resultUser as $us)
            <tr>

                <td>{{$us->user_id}}</td>
                <td>{{$us->exam_id}}</td>
                <td>{{$us->score}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="finshBtnsContainer">
        <button class="BackToCourseBtn btn">
            <a href="{{route('home')}}">Back to course</a>
        </button>
        <button class="logoutBtn btn"><a href="{{route('home')}}">Log out</a></button>
    </div>
</section>








<!-- <div>mmmmmmmmmmm</div>
        <button class="viewAnswersBtn">View Answers </button> -->






@endsection