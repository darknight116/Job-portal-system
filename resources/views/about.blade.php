@extends('layout')

@section('content')
    <title>About Us - Job Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #add8e6;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 50px;
            margin-bottom: 50px;

        }

        h1, h2, h3 {
            color: #333;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        .about-section {
            margin-bottom: 30px;
        }

        .team-member {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .team-member-details {
            flex: 1;
        }

        .team-member-name {
            font-weight: bold;
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        .team-member-role {
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 213px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <div class="about-section">
            <h1>About Us</h1>
            <ul>
            <p>“Our mission is to connect job seekers with their dream careers.”</p>
            <p>“Empowering professionals worldwide, we strive to revolutionize the job search experience.”</p>
            <p>“Explore job opportunities across multiple countries and cities.”</p>
            <p>“Access personalized career development resources and training.”</p>
            </ul>
        </div>
        <div class="team-section">
            <h2>Our Team</h2>
            <div class="team-member">
                <img src="../photo/about4.jpg" alt="Team Member 1">
                <div class="team-member-details">
                    <div class="team-member-name">John Doe</div>
                    <div class="team-member-role">CEO</div>
                </div>
            </div>
            <div class="team-member">
                <img src="../photo/about5.jpg" alt="Team Member 2">
                <div class="team-member-details">
                    <div class="team-member-name">Jane Smith</div>
                    <div class="team-member-role">HR Manager</div>
                </div>
            </div>
            <div class="team-member">
                <img src="../photo/about6.jpg" alt="Team Member 2">
                <div class="team-member-details">
                    <div class="team-member-name">Jane Smith</div>
                    <div class="team-member-role">HR Manager</div>
                </div>
            </div>
        </div>
        <a href="contact.html" class="btn">Contact Us</a>
    </div>
    @endsection