@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Skill Logo</h2>

    <div class="w3-margin-bottom">
        @if($skill->image)
            <img src="{{asset('storage/'.$skill->logo)}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/skills/logo/{{$skill->id}}" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf

        <div class="w3-margin-bottom">
            <label for="logo">Logo:</label>
            <input type="file" name="logo" id="logo" value="{{old('logo')}}" required>
            
            @if ($errors->first('logo'))
                <br>
                <span class="w3-text-red">{{$errors->first('logo')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add logo</button>

    </form>

    <a href="/console/skills/list">Back to skill List</a>

</section>

@endsection