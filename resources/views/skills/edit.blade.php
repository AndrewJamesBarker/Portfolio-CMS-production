@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Skill</h2>

    <form method="post" action="/console/skills/edit/{{$skill->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="name" name="name" id="name" value="{{old('name', $skill->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url', $skill->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="percent">Percent:</label>
            <input type="number" name="percent" id="percent" value="{{old('percent', $skill->percent)}}" required>

            @if ($errors->first('percent'))
                <br>
                <span class="w3-text-red">{{$errors->first('percent')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Skill</button>

    </form>

    <a href="/console/skills/list">Back to skill List</a>

</section>

@endsection