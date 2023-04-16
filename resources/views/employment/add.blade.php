@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Employment</h2>

    <form method="post" action="/console/employment/add" novalidate class="w3-margin-bottom">

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
            
            <label for="title">Employer:</label>
            <input type="text" name="employer" id="employer" value="{{old('employer')}}" required>

            @if ($errors->first('employer'))
                <br>
                <span class="w3-text-red">{{$errors->first('employer')}}</span>
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
           
            <label for="graduated_at">Started At:</label>
            <input type="date" name="started_at" id="started_at" value="{{old('started_at')}}" required>
            
            @if ($errors->first('started_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('started_at')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
           
           <label for="graduated_at">Ended At:</label>
           <input type="date" name="ended_at" id="ended_at" value="{{old('ended_at')}}" required>
           
           @if ($errors->first('ended_at'))
               <br>
               <span class="w3-text-red">{{$errors->first('ended_at')}}</span>
           @endif
       </div>

        <button type="submit" class="w3-button w3-green">Add employment</button>

    </form>

    <a href="/console/employment/list">Back to employment List</a>

</section>

@endsection