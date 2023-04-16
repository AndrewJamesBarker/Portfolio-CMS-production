@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Name</th>
            <th>Percent</th>
            <th>url</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
            <tr>
                <td>
                    @if ($skill->logo)
                        <img src="{{asset('storage/'.$skill->logo)}}" width="100">
                    @endif
                </td>
                <td>{{$skill->name}}</td>
                <td>{{$skill->percent}}%</td>
                <td>{{$skill->url}}</td>
                <td>{{$skill->created_at->format('M j, Y')}}</td>
                <td><a href="/console/skills/logo/{{$skill->id}}">Logo</a></td>
                <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
                <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/skills/add" class="w3-button w3-green">New Skill</a>

</section>

@endsection