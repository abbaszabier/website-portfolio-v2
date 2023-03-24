@extends('layouts.sidebar')
@section('main')
<div class="container">
  <div class="row mt-5" >
    <div class="col-lg-4 mb-md-0 p-md-4">
      <img src="/img/a2.png" width="100%" alt="...">
    </div>
    <div class="col-lg-8 pt-4 pb-4 ps-md-1 mb-3 align-self-center">
      <h2 style="font-family: 'Poppins', serif;">About Me</h2>
      <p class="mt-2" style="font-family: 'Poppins', serif;">I am Abbas Zabier Mohammad a frontend web developer with a computer science background from IPB University. I am interested in the world of frontend programming, where I have studied programming languages such as HTML, CSS, JavaScript, and PHP. Apart from being interested in programming, I am also interested in the world of UI design, namely making mobile and web designs. The tools I use for designing are Figma or Adobe XD.</p>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-lg-12 px-4 mb-3">
      <h4 class="pb-2 border-bottom mb-3" style="font-family: 'Poppins', serif;">Education</h4>
      <div class="col-lg-12 d-flex justify-content-between">
        <h5>IPB University</h5>
        <small><p>Aug 2018 - March 2023</p></small>
      </div>
      <p>Fresh Graduate, Computer Science</p>
    </div>
    <div class="col-lg-12 px-4 mb-4">
      <h4 class="pb-2 border-bottom mb-3" style="font-family: 'Poppins', serif;">Experiences</h4>
      <div class="col-lg-12 d-flex justify-content-between">
        <h5>Frontend Developer Intern at DSITD IPB</h5>
        <small><p>Jan 2023 - March 2023</p></small>
      </div>
      <ul class="mb-4" style="list-style-type:disc;">
        <li>
          Responsible for reengineering the SITI website using ASP .NET MVC and Bootstrap
        </li>
        <li>
          Collaborated with the UI/UX design team and backend team to create optimal website
        </li>
        <li>
          Deliver responsive and cross browser friendly websites
        </li>
      </ul>
      <div class="col-lg-12 d-flex justify-content-between">
        <h5>Frontend Developer Intern at DSITD IPB</h5>
        <small><p>Feb 2022 - Jul 2022</p></small>
      </div>
      <ul style="list-style-type:disc;">
        <li>
          Responsible for developing specific features on the Digitani web project, namely Konsultani and Tanya Pakar using framework Laravel and Bootstrap
        </li>
        <li>
          Collaborated with the UI/UX design team and backend team to create optimal features
        </li>
        <li>
          Delivers features that are responsive and cross browser friendly
        </li>
        <li>
          Implemented progressive web apps (PWA) for the Konsultani and Tanya Pakar features
        </li>
        <li>
          Conducted testing and fixed bugs on the Konsultani and Tanya Pakar features
        </li>
      </ul>
    </div>
    <div class="col-lg-12 px-4 mb-2">
      <h4 class="pb-2 border-bottom" style="font-family: 'Poppins', serif;">Skills</h4>
      <div class="col-lg-12">
        <p><strong>Hard Skills</strong>: HTML, CSS, JavaScript, PHP, Bootstrap, Laravel, Responsive Web Design, Version Control/git, Wireframing, User Interface Design, Prototyping, Style Guide.</p>
      </div>
      <div class="col-lg-12">
        <p><strong>Soft Skills</strong>: Creativity, Fast Learner, Problem Solving, Teamwork.</p>
      </div>
      <div class="col-lg-12">
        <p><strong>Tools</strong>: Adobe XD, Figma, Visual Studi Code, XAMPP.</p>
      </div>
      <div class="col-lg-12">
        <p><strong>Languages</strong>: Indonesia (Native), English (Limited working proficiency).</p>
      </div>
    </div>
  </div>
  <div class="download d-grid gap-2 col-6 mx-auto mb-2">
    <a href="/cv/CV-Abbas-Zabier-Mohammad.pdf" class="btn btn-primary" target="_blank" style="margin-bottom: 20px">Download CV</a>
  </div>
</div>
@endsection