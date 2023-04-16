@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Employment</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Employer</th>
            <th>Url</th>
            <th>Content</th>
            <th>Date Start</th>
            <th>Date End</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($employment as $employment): ?>
            <tr>
                <td>{{$employment->title}}</td>
                <td>{{$employment->employer}}</td>
                <td>
                    <a href="/employment/{{$employment->url}}">
                        {{$employment->url}}
                    </a>
                </td>
                <td>{{$employment->content}}</td>
                <td>{{\Carbon\Carbon::parse($employment->started_at)->format('d/m/Y g:i A')}}</td>
                <td>{{\Carbon\Carbon::parse($employment->ended_at)->format('d/m/Y g:i A')}}</td>
                <td><a href="/console/employment/edit/{{$employment->id}}">Edit</a></td>
                <td><a href="/console/employment/delete/{{$employment->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/employment/add" class="w3-button w3-green">New Employment</a>

</section>

@endsection