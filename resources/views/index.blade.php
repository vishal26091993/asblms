<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>ASB InternSphere</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- AOS Animation -->

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/style.css') }}">

</head>

<body>

    {{-- Navbar --}}
    @include('sections.navbar')

    {{-- Hero --}}
<section class="hero-premium">

    <div class="hero-background"></div>

    <div class="container">

        <div class="hero-content">

            <div class="hero-pill">

                🚀 India's Next Generation Internship Platform

            </div>

            <h1>

                Build Skills.

                <span>Gain Experience.</span>

                Get Hired.

            </h1>

            <p>

                Transform learning into professional success
                through real projects, industry mentorship
                and placement opportunities.

            </p>

            <div class="hero-buttons">

                <a href="#">
                    Start Internship
                </a>

                <a href="#">
                    Watch Demo
                </a>

            </div>

        </div>

        <div class="ecosystem-wrapper">

            <div class="center-circle">

                ASB
                InternSphere

            </div>

            <div class="orbit certificate">
                🏆 Certificate
            </div>

            <div class="orbit mentor">
                👨‍🏫 Mentor
            </div>

            <div class="orbit projects">
                📁 Projects
            </div>

            <div class="orbit placement">
                💼 Placement
            </div>

            <div class="orbit skills">
                ⚡ Skills
            </div>

            <div class="orbit companies">
                🏢 Companies
            </div>

        </div>
        

    </div>

</section>

    {{-- Stats --}}
<section class="impact-section">

    <div class="container">

        <div class="impact-header">

            <span class="section-tag">
                Our Impact
            </span>

            <h2>
                Empowering Students
                Across India
            </h2>

            <p>
                Thousands of learners have transformed their careers
                through real-world internships, mentorship, and
                industry collaboration.
            </p>

        </div>

         <div class="swipe-indicator d-md-none">
            ← Swipe to Explore Programs →
        </div>

        <div class="impact-grid">

            <!-- Large Card -->

            <div class="impact-card impact-main">

                <div class="impact-icon">
                    🎓
                </div>

                <h3>5000+</h3>

                <span>Students Trained</span>

                <small>
                    Successfully enrolled and completed
                    internship programs.
                </small>

            </div>

            <!-- Mentors -->

            <div class="impact-card">

                <div class="impact-icon">
                    👨‍🏫
                </div>

                <h3>150+</h3>

                <span>Industry Mentors</span>

            </div>

            <!-- Companies -->

            <div class="impact-card">

                <div class="impact-icon">
                    🏢
                </div>

                <h3>50+</h3>

                <span>Partner Companies</span>

            </div>

            <!-- Success -->

            <div class="impact-card success-card">

                <div class="impact-icon">
                    🚀
                </div>

                <h3>95%</h3>

                <span>Success Rate</span>

            </div>

            <div class="impact-card">

                <div class="impact-icon">
                    🏢
                </div>

                <h3>50+</h3>

                <span>Partner Companies</span>

            </div>

        </div>

    </div>

</section>

    {{-- Features --}}
<section class="features-premium" id="features">

    <div class="container">

        <div class="section-heading">

            <span class="section-tag">
                Why InternSphere
            </span>

            <h2>
                Everything You Need
                To Become Industry Ready
            </h2>

            <p>
                More than an internship platform —
                a complete ecosystem for learning,
                mentorship and career growth.
            </p>

        </div>

        <div class="bento-grid">

            <!-- Large -->

            <div class="feature-box feature-large">

                <div class="feature-icon">
                    <i class="bi bi-kanban-fill"></i>
                </div>

                <h3>Real Industry Projects</h3>

                <p>

                    Work on practical projects designed
                    around real business requirements,
                    not classroom assignments.

                </p>

                <div class="feature-badge">

                    50+ Live Projects

                </div>

            </div>

            <!-- Mentor -->

            <div class="feature-box">

                <div class="feature-icon">
                    <i class="bi bi-person-workspace"></i>
                </div>

                <h3>1-on-1 Mentorship</h3>

                <p>

                    Learn directly from experienced
                    industry professionals.

                </p>

            </div>

            <!-- Certificate -->

            <div class="feature-box">

                <div class="feature-icon">
                    <i class="bi bi-patch-check-fill"></i>
                </div>

                <h3>Verified Certificates</h3>

                <p>

                    Shareable digital credentials
                    for LinkedIn and resumes.

                </p>

            </div>

            <!-- Placement -->

            <div class="feature-box">

                <div class="feature-icon">
                    <i class="bi bi-rocket-takeoff-fill"></i>
                </div>

                <h3>Placement Assistance</h3>

                <p>

                    Resume reviews, interview preparation,
                    hiring partner connections and referrals.

                </p>

            </div>

            <!-- Dashboard -->

            <div class="feature-box">

                <div class="feature-icon">
                    <i class="bi bi-bar-chart-fill"></i>
                </div>

                <h3>Smart Progress Tracking</h3>

                <p>

                    Track attendance, projects,
                    tasks and performance in one dashboard.

                </p>

            </div>

        </div>

    </div>

</section>

    {{-- Programs --}}
<section class="programs-section" id="programs">

    <div class="container">
  

        <div class="section-heading">

            <span class="section-tag">
                Internship Tracks
            </span>

            <h2>
                Choose Your Career Path
            </h2>

            <p>
                Industry-focused internship programs designed
                to help students become job-ready professionals.
            </p>

        </div>
        <div class="swipe-indicator d-md-none">
            ← Swipe to Explore Programs →
        </div>
        <div class="program-grid">
        
            <!-- Laravel -->

            <div class="program-card laravel">

                <div class="program-top">

                    <span class="program-level">
                        Most Popular
                    </span>

                    <div class="program-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>

                </div>

                <h3>Laravel Full Stack</h3>

                <p>
                    Build modern web applications using
                    Laravel, MySQL, APIs and Git.
                </p>

                <ul>

                    <li>Laravel Framework</li>
                    <li>MySQL Database</li>
                    <li>REST APIs</li>
                    <li>Git & GitHub</li>

                </ul>

                <a href="#">
                    View Program
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

            <!-- AI -->

            <div class="program-card ai">

                <div class="program-icon">
                    <i class="bi bi-cpu-fill"></i>
                </div>

                <h3>AI & Machine Learning</h3>

                <p>
                    Build intelligent applications using
                    Python and Machine Learning.
                </p>

                <a href="#">
                    Explore
                </a>

            </div>

            <!-- UI -->

            <div class="program-card uiux">

                <div class="program-icon">
                    <i class="bi bi-palette-fill"></i>
                </div>

                <h3>UI / UX Design</h3>

                <p>
                    Learn modern design systems,
                    Figma and user experience.
                </p>

                <a href="#">
                    Explore
                </a>

            </div>

            <!-- Marketing -->

            <div class="program-card marketing">

                <div class="program-icon">
                    <i class="bi bi-megaphone-fill"></i>
                </div>

                <h3>Digital Marketing</h3>

                <p>
                    SEO, Social Media,
                    Content & Analytics.
                </p>

                <a href="#">
                    Explore
                </a>

            </div>

            <!-- Flutter -->

            <div class="program-card flutter">

                <div class="program-icon">
                    <i class="bi bi-phone-fill"></i>
                </div>

                <h3>Mobile App Development</h3>

                <p>
                    Flutter, Firebase and
                    Android application development.
                </p>

                <a href="#">
                    Explore
                </a>

            </div>

        </div>

    </div>

</section>
    {{-- Journey --}}
<section class="journey-horizontal">

    <div class="container">

        <div class="section-heading">

            <span class="section-tag">
                Internship Journey
            </span>

            <h2>
                Your Path To Success
            </h2>

            <p>
                Follow a structured journey from registration
                to certification and career opportunities.
            </p>

        </div>

        <div class="journey-steps">

            <div class="step-card">
                <div class="step-number">01</div>
                <i class="bi bi-person-plus-fill"></i>
                <h4>Register</h4>
            </div>

            <div class="step-line"></div>

            <div class="step-card">
                <div class="step-number">02</div>
                <i class="bi bi-file-earmark-person-fill"></i>
                <h4>Profile</h4>
            </div>

            <div class="step-line"></div>

            <div class="step-card">
                <div class="step-number">03</div>
                <i class="bi bi-pencil-square"></i>
                <h4>Consent</h4>
            </div>

            <div class="step-line"></div>

            <div class="step-card">
                <div class="step-number">04</div>
                <i class="bi bi-mortarboard-fill"></i>
                <h4>Training</h4>
            </div>

            <div class="step-line"></div>

            <div class="step-card">
                <div class="step-number">05</div>
                <i class="bi bi-kanban-fill"></i>
                <h4>Projects</h4>
            </div>

            <div class="step-line"></div>

            <div class="step-card">
                <div class="step-number">06</div>
                <i class="bi bi-patch-check-fill"></i>
                <h4>Certificate</h4>
            </div>

        </div>

    </div>

</section>

    {{-- Testimonials --}}
<section class="testimonial-orbit">

    <div class="container">
             <div class="section-heading">

         <span class="section-tag"> Success Stories </span>

            <h2>
                Our Success Stories
            </h2>
        </div>
 
        <div class="row align-items-center">

            <div class="col-lg-5">

                <div class="orbit-wrapper">

                    <svg class="orbit-line"
                         viewBox="0 0 300 400">

                        <path d="M220 20
                                 C80 120,
                                 80 280,
                                 220 380"
                              fill="none"
                              stroke="#dcdcdc"
                              stroke-width="3"/>

                    </svg>
                   

                    <div class="profile profile-1 active"
                         data-index="0">

                        <img src="{{ asset('public/frontend/profile/student1.jpg') }}">

                    </div>

                    <div class="profile profile-2"
                         data-index="1">

                        <img src="{{ asset('public/frontend/profile/student2.jpg') }}">

                    </div>

                    <div class="profile profile-3"
                         data-index="2">

                        <img src="{{ asset('public/frontend/profile/student3.jpg') }}">

                    </div>

                    <div class="profile profile-4"
                         data-index="3">

                        <img src="{{ asset('public/frontend/profile/student4.jpg') }}">

                    </div>

                </div>

            </div>

            <div class="col-lg-7">

                <div class="testimonial-content">

                    <div class="quote-mark">
                        "
                    </div>

                    <h3 id="studentName">
                        Rahul Sharma
                    </h3>

                    <span id="studentRole">
                        Full Stack Developer
                    </span>

                    <p id="testimonialText">

                        The internship helped me secure
                        my first software developer role.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

    {{-- Certificate --}}
<section class="certificate-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Certificate Preview -->

            <div class="col-lg-6">

                <div class="certificate-showcase">

                    <div class="certificate-glow"></div>

                    <div class="certificate-card">

                        <img src="{{ asset('public/frontend/certificate.png') }}"
                             alt="Certificate"
                             class="img-fluid">

                    </div>

                    <div class="floating-badge badge-1">
                        <i class="bi bi-patch-check-fill"></i>
                        Verified
                    </div>

                    <div class="floating-badge badge-2">
                        <i class="bi bi-shield-check"></i>
                        Secure
                    </div>

                </div>

            </div>

            <!-- Content -->

            <div class="col-lg-6">

                <span class="section-tag"> 
                    Certification
                </span>

                <h2 class="certificate-title">

                    Earn Industry
                    Recognized Certificates

                </h2>

                <p class="certificate-desc">

                    Showcase your internship achievements with
                    professional certificates, performance reports,
                    and recommendation letters that strengthen
                    your resume and LinkedIn profile.

                </p>

                <div class="certificate-features">

                    <div class="cert-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Digital Certificate
                    </div>

                    <div class="cert-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Performance Report
                    </div>

                    <div class="cert-item">
                        <i class="bi bi-check-circle-fill"></i>
                        Recommendation Letter
                    </div>

                    <div class="cert-item">
                        <i class="bi bi-check-circle-fill"></i>
                        LinkedIn Shareable
                    </div>

                </div>

                <a href="#"
                   class="certificate-btn">

                    View Sample Certificate

                </a>

            </div>

        </div>

    </div>

</section>

    {{-- FAQ --}}
<section class="faq-section">

    <div class="container">

        <div class="row g-5 align-items-start">

            <!-- Left Side -->

            <div class="col-lg-4">

                <div class="faq-info">

                    <span class="section-tag">
                        FAQs
                    </span>

                    <h2>
                        Frequently Asked Questions
                    </h2>

                    <p>

                        Everything you need to know
                        about ASB InternSphere.

                    </p>

                    <a href="#contact"
                       class="faq-btn">

                        Contact Us

                    </a>

                </div>

            </div>

            <!-- Right Side -->

            <div class="col-lg-8">

                <div class="faq-wrapper">

                    <!-- FAQ -->

                    <div class="faq-item active">

                        <button class="faq-question">

                            <span>
                                How long is the internship?
                            </span>

                            <i class="bi bi-plus-lg"></i>

                        </button>

                        <div class="faq-answer">

                            Internship duration ranges from
                            1 to 6 months depending on the
                            selected program.

                        </div>

                    </div>

                    <!-- FAQ -->

                    <div class="faq-item">

                        <button class="faq-question">

                            <span>
                                Will I receive a certificate?
                            </span>

                            <i class="bi bi-plus-lg"></i>

                        </button>

                        <div class="faq-answer">

                            Yes. Every successful intern
                            receives a verified digital
                            certificate.

                        </div>

                    </div>

                    <!-- FAQ -->

                    <div class="faq-item">

                        <button class="faq-question">

                            <span>
                                Is placement assistance provided?
                            </span>

                            <i class="bi bi-plus-lg"></i>

                        </button>

                        <div class="faq-answer">

                            Yes. Resume reviews, interview
                            preparation and hiring support
                            are included.

                        </div>

                    </div>

                    <!-- FAQ -->

                    <div class="faq-item">

                        <button class="faq-question">

                            <span>
                                Are live projects included?
                            </span>

                            <i class="bi bi-plus-lg"></i>

                        </button>

                        <div class="faq-answer">

                            All internship tracks include
                            real-world projects and tasks.

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ==================================
FINAL CTA
================================== -->

<section class="footer-cta">

    <div class="container">

        <div class="cta-card">

            <h2>
                Ready To Launch
                Your Career?
            </h2>

            <p>

                Join thousands of students gaining
                industry experience through
                ASB InternSphere.

            </p>

            <div class="cta-buttons">

                <a href="/register"
                   class="cta-primary">

                    Apply Now

                </a>

                <a href="#contact"
                   class="cta-secondary">

                    Contact Us

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==================================
FOOTER
================================== -->

<footer class="footer-premium">

    <div class="container">

        <div class="row gy-5">

            <!-- Brand -->

            <div class="col-lg-4">

                <div class="footer-brand">

                    <h3>
                        ASB InternSphere
                    </h3>

                    <p>

                        Transforming students into
                        future-ready professionals through
                        practical learning, mentorship,
                        and real-world experience.

                    </p>

                    <div class="social-links">

                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>

                        <a href="#">
                            <i class="bi bi-youtube"></i>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Links -->

            <div class="col-lg-2">

                <h5>Company</h5>

                <ul>

                    <li><a href="#home">Home</a></li>

                    <li><a href="#about">About</a></li>

                    <li><a href="#features">Features</a></li>

                    <li><a href="#contact">Contact</a></li>

                </ul>

            </div>

            <!-- Programs -->

            <div class="col-lg-3">

                <h5>Programs</h5>

                <ul>

                    <li>
                        Laravel Full Stack
                    </li>

                    <li>
                        AI & Machine Learning
                    </li>

                    <li>
                        UI / UX Design
                    </li>

                    <li>
                        Digital Marketing
                    </li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="col-lg-3">

                <h5>Contact</h5>

                <ul>

                    <li>
                        support@asbinternsphere.com
                    </li>

                    <li>
                        +91 98765 43210
                    </li>

                    <li>
                        Pune, Maharashtra
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <p>

                © 2026 ASB InternSphere.
                All Rights Reserved.

            </p>

            <div>

                <a href="#">
                    Privacy Policy
                </a>

                <a href="#">
                    Terms
                </a>

            </div>

        </div>

    </div>

</footer>
    <!-- Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>

        AOS.init({
            duration:1000,
            once:true
        });

    </script>
<script>

window.addEventListener('scroll',function(){

    let navbar =
    document.querySelector('.navbar-modern');

    if(window.scrollY > 50)
    {

        navbar.style.width = '92%';
        navbar.style.background = 'rgba(255,255,255,.92)';
        navbar.style.boxShadow = '0 15px 50px rgba(0,0,0,.10)';

    }
    else
    {
        navbar.style.width = '95%';
        navbar.style.background =  'rgba(255,255,255,.75)';
    }

});

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>

const testimonials = [

{
name:"Rahul Sharma",
role:"Full Stack Developer",
text:"The internship helped me secure my first software developer role."
},

{
name:"Priya Patel",
role:"UI UX Designer",
text:"Real projects helped me build a portfolio and get hired."
},

{
name:"Arjun Singh",
role:"Data Analyst",
text:"Mentorship accelerated my learning and confidence."
},

{
name:"Neha Verma",
role:"AI Engineer",
text:"The practical assignments prepared me for industry work."
}

];

let current = 0;

const profiles =
document.querySelectorAll('.profile');

function updateTestimonial(index){

    document
    .getElementById('studentName')
    .innerText =
    testimonials[index].name;

    document
    .getElementById('studentRole')
    .innerText =
    testimonials[index].role;

    document
    .getElementById('testimonialText')
    .innerText =
    testimonials[index].text;

    profiles.forEach(p =>
    p.classList.remove('active'));

    profiles[index]
    .classList.add('active');
}

setInterval(()=>{

    current++;

    if(current >= testimonials.length){

        current = 0;
    }

    updateTestimonial(current);

},3000);

profiles.forEach((p,index)=>{

    p.addEventListener('click',()=>{

        current=index;

        updateTestimonial(index);

    });

});

</script>

<script>

document.querySelectorAll('.faq-question')
.forEach(button => {

    button.addEventListener('click', () => {

        const item =
        button.parentElement;

        document
        .querySelectorAll('.faq-item')
        .forEach(faq => {

            if(faq !== item){

                faq.classList.remove('active');
            }

        });

        item.classList.toggle('active');

    });

});

</script>
</body>

</html>