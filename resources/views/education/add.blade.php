@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/education/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>

            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url')}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
          
            <label for="content">Content:</label>
            <input type="text" name="content" id="content" value="{{old('content')}}" required>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
           
            <label for="graduated_at">Graduated At:</label>
            <input type="date" name="graduated_at" id="graduated_at" value="{{old('graduated_at')}}" required>
            
            @if ($errors->first('graduated_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('graduated_at')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

@endsection