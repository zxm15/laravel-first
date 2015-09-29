{{--Let the user choose the looking of the page --}}
@if($looking == 'welcome')
    @extends('welcome')
@section('DIY')
    <h1>Contact {{$contactInfo['name']}}!</h1>
    <p>Email: <span style="color:red">{{$contactInfo['email']}}</span></p>
@endsection

@elseif($looking == 'app')
    @extends('app')
    @section('content')
        <div style="text-align: center">
            <h1>one page, two different looking</h1>
            <h3>People I like:</h3>
            <ul>
                @foreach ($people as $person)
                    <li style="color:blue">{{$person}}</li>
                @endforeach
            </ul>
        </div>


    @endsection
@endif