@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me</h2>

    <p>
    I'm a Junior Full Stack Developer who combines an eye for front-end design with a talent for problem-solving.
I'm passionate about creating user-friendly, intuitive, visually appealing web applications. I'm also experienced in developing back-end systems and databases, and I'm comfortable working with various programming languages and frameworks. I'm always looking for ways to improve my skills and stay up-to-date with the latest technologies. I'm a team player who enjoys collaborating to create innovative solutions.
In addition to my technical background, I have a passion for music. I'm an experienced musician and have played guitar for over 30 years. I'm also knowledgeable in music production and recording and always looking for ways to combine my technical and musical skills.

    </p>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    @foreach ($projects as $project)

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3>{{$project->title}}</h3>

            </div>
            
            @if ($project->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('storage/'.$project->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($project->url)
                    View Project: <a href="{{$project->url}}">{{$project->url}}</a>
                @endif

                <p>
                    Posted: {{$project->created_at->format('M j, Y')}}
                    <br>
                
                </p>

                <a href="/project/{{$project->slug}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue"></h2>

    <p>
        <br>
       Contact:<a href="https://www.linkedin.com/in/andrew-james-barker-/">Linkedin</a>
    </p>

</section>

@endsection
