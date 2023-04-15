@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Url</th>
            <th>Content</th>
            <th>Date</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($education as $education): ?>
            <tr>
                <td>{{$education->title}}</td>
                <td>
                    <a href="/education/{{$education->url}}">
                        {{$education->url}}
                    </a>
                </td>
                <td>{{$education->content}}</td>
                <td>{{\Carbon\Carbon::parse($education->graduated_at)->format('d/m/Y g:i A')}}</td>
                <td><a href="/console/education/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/education/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

@endsection