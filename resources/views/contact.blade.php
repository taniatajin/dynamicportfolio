@extends('layout')

@section('content')
<div class="contact-container">
    <h1 class="contact-title"> Get in Touch</h1>
    <p class="contact-subtitle">Have a project in mind, a question, or just want to say hello? I’d love to hear from you!</p>

    <form class="contact-form" action="#" method="POST">
        @csrf
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label for="email"> Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        </div>

        <div class="form-group">
            <label for="message"> Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
        </div>

        <button type="submit" class="send-button">🚀 Send Message</button>
    </form>
</div>
@endsection
