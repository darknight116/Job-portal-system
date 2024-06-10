@extends('layout')
@section ('content')
  <section class="hero">
    <h2>Find your dream job</h2>
    <marquee behavior="scroll" direction="left" scrollamount="10">
    <p>Explore thousands of job opportunities across various industries and locations.</p>
    </marquee>
    <!-- <div class="search-bar">
      <input type="text" placeholder="Search for jobs">
      <button type="button">Search</button>
    </div> -->
  </section>

<!--JOb details-->
<span><h1 class="ins">Our Most Highlighted Jobs</h1> </span> 
<section class="instructor-row" id="instructure_details">   
<div class="instructor-card1">
<img src="../photo/seniorenginer.jpg" alt="">
  <div class="instructor-details">
    <h3>Software Engineer:</h3>
    <p>Design, develop, and maintain software applications.</p>
    <p>Collaborate with cross-functional teams including 
      product managers and designers to deliver high-quality software solutions.</p> 
  </div>
</div>

<div class="instructor-card2">
  <img src="../photo/project-manager.jpg" alt="">
  <div class="instructor-details">
    <h3>Project Manager </h3>
    <p>Plan, organize, and oversee projects from initiation to completion.</p>
    <p>Define project scope, objectives, and deliverables.</p>
    <p>Develop project plans, schedules, and budgets.</p> 
  </div>
</div>


<div class="instructor-card3">
  <img src="../photo/HRManager.webp" alt="">

  <div class="instructor-details">
    <h3>Human Resources Manager</h3>
    <p>Oversee all aspects of human resource management 
      including recruitment, training, compensation, and employee relations.
</p>
    <p>Address employee concerns and grievances effectively.</p>
    <p>Ensure a positive and inclusive work culture. </p>
  </div>
</div>

<marquee behavior="scroll" direction="left" scrollamount="10" class="marquee-container">
    <p>"Welcome to our job portal! Discover exciting career opportunities tailored just for you.</p>
    </marquee>


<div class="instructor-card4">
  <img src="../photo/Digital-Marketing-Specialist.jpg" alt="">
  <div class="instructor-details">
    <h3>Digital Marketing Specialist:</h3>
    <p>Develop and implement digital marketing campaigns 
    across various platforms such as social media, email, and search engines.</p>
    <p>Analyze digital data to identify trends 
      and insights to optimize marketing strategies.</p>
    <p>Manage online brand presence and reputation.</p>
  </div>
</div>


<div class="instructor-card5">
  <img src="../photo/accountant.jpg" alt="">
  <div class="instructor-details">
    <h3>Joseph Anderson </h3>
    <p>fitness coach</p>
    <p>BSc in Sports Science </p>
    <p>Qualified in health and nutrition</p>
    <p>Specialises in devising strength</p>
    <p>and conditioning programs for combat athletes</p>
  </div>
</div>


<div class="instructor-card6">
  <img src="../photo/data-science.jpg" alt="">
  <div class="instructor-details">
    <h3>Allen Murphy </h3>
    <p>fitness coach</p>
    <p>BSc in Physiotherapy </p>
    <p>MSc in Sports Science</p>
  </div>
</div>
</section>


<section class="how-it-works">
    <h2>How It Works</h2>
    <div class="steps">
      
        <div class="step">
            <h3>Step 1: Sign Up</h3>
            <p>Create an account to access job listings and apply.</p>
        </div>
        <div class="step">
            <h3>Step 2: Find Jobs</h3>
            <p>Browse through various job listings based on your preferences.</p>
        </div>
        <div class="step">
            <h3>Step 3: Apply</h3>
            <p>Apply to jobs that match your skills and interests.</p>
        </div>
    </div>
</section>


<!--Blog Section-->
<section class="blog-section">
        <div class="container">
            <h2>Latest Blog Posts</h2>
            <div class="blog-posts">
                <div class="blog-post">
                    <img src="../photo/resume.png" alt="Blog Image">
                    <h3>Resume Tips</h3>
                    <p>Stick to one page if possible, focusing on relevant information. 
                    Use bullet points to showcase accomplishments and skills.
                    Tailor your resume to the specific job description and company.
                    Choose a clean layout with easy-to-read fonts and adequate spacing....</p>
                    <a href="#">Read More</a>
                </div>
                <div class="blog-post">
                    <img src="../photo/career.webp" alt="Blog Image">
                    <h3>Career Development Advice</h3>
                    <p>Evaluate your skills, interests, and values to understand your strengths 
                        and weaknesses. Identify areas for growth and improvement based on your career goals. 
                        Define short-term and long-term career objectives....</p>
                    <a href="#">Read More</a>
                </div>
                <div class="blog-post">
                    <img src="../photo/linkedin.jpg" alt="Blog Image">
                    <h3>linkedin profile optimization</h3>
                    <p>Use a professional and high-quality profile picture that clearly shows your face.
                    Craft a compelling headline that highlights your current role, expertise, and value 
                    proposition.Incorporate relevant keywords to improve visibility in search results......</p>
                    <a href="#">Read More</a>
                </div>
                <!-- Add more blog posts as needed -->
            </div>
        </div>
    </section>

    <!--Success Stories-->
    <h2 class="inss">Success Stories</h2>
    <section class="sec">
    <div class="flip-container">
    <div class="flipper">
      <div class="front">
            <!-- Front content with the photo -->
            <img src="../photo/success1.jpg" alt="Photo">
        </div>
        <div class="back">
            <!-- Back content with the text -->
            <h2>Success Story</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>

<div class="flip-container">
    <div class="flipper">
      <div class="front">
            <!-- Front content with the photo -->
            <img src="../photo/success2.jpg" alt="Photo">
        </div>
        <div class="back">
            <!-- Back content with the text -->
            <h2>Success Story</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
<div class="flip-container">
    <div class="flipper">
      <div class="front">
            <!-- Front content with the photo -->
            <img src="../photo/success3.webp" alt="Photo">
        </div>
        <div class="back">
            <!-- Back content with the text -->
            <h2>Success Story</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
<div class="flip-container">
    <div class="flipper">
      <div class="front">
            <!-- Front content with the photo -->
            <img src="../photo/success4.jpg" alt="Photo">
        </div>
        <div class="back">
            <!-- Back content with the text -->
            <h2>Success Story</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
<div class="flip-container">
    <div class="flipper">
      <div class="front">
            <!-- Front content with the photo -->
            <img src="../photo/success5.jpg" alt="Photo">
        </div>
        <div class="back">
            <!-- Back content with the text -->
            <h2>Success Story</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
<div class="flip-container">
    <div class="flipper">
      <div class="front">
            <!-- Front content with the photo -->
            <img src="../photo/success6.jpg" alt="Photo">
        </div>
        <div class="back">
            <!-- Back content with the text -->
            <h2>Success Story</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
</section>

  @endsection

  
  

