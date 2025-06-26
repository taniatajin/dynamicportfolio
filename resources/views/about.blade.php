@extends('layout')

@section('content')
<div class="about-container">
    <div class="profile-section">
        <img src="{{ asset('images/profile.jpg') }}" alt="My Photo" class="profile-image">
        <h2 class="name-heading">Tania Tajin</h2>
        <p class="tagline">Final-year CSE Student | Web & App Developer | Tech Enthusiast</p>
    </div>

    <div class="about-details">
        <h3> Who Am I?</h3>
        <p>
            Hello! I’m a passionate and creative developer currently in my final year of Computer Science and Engineering. I love solving problems through code and creating clean, user-friendly web and mobile applications.
        </p>

        <h3> Tech Stack</h3>
        <p>
            Laravel | PHP | JavaScript | Flutter | Firebase | MySQL | Git & GitHub
        </p>

        <h3> Career Goals</h3>
        <p>
            I aim to become a full-stack developer and build smart systems that integrate IoT and AI. I enjoy exploring innovative solutions and developing tools that make life easier.
        </p>

        <h3> Fun Facts</h3>
        <ul>
            
            <li>Enjoy UI/UX design and writing tech blogs</li>
            <li>Active in tech communities and open-source projects</li>
        </ul>

        <a href="{{ asset('cv/tania_resume.pdf') }}" class="cv-button" download>📄 Download My CV</a>
    </div>
</div>
@endsection
