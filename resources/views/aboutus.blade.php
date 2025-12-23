<html>

{{--
this is a comment 
this is a second comment --this is a blade comment
--}}

<!--this is a html comment-->  
    <body>
        <h1>About us</h1>
        <h2>Name: {{$name}}</h2>
        <h2>Email: {{$email}}</h2>

        @for ($i=0;$i<10;$i++)
            <p>{{ $i }}</p>

         @if ($i==5)
             <h1>this is a number {{ $i }}</h1>
         @endif   
        @endfor
        @include('subviews.Input',[
            'myName'=>'this is my name'
        ])
    </body>
</html>