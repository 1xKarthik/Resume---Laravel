@extends('layouts.app')

@section('content')
    <div class="row justify-content-between">
        <div class="col-sm-6">
            <h2 id="titleName" class="sectionHead">karthik girraju</h2>
            <span id="course">M.S.S.E Graduate</span>
        </div>
        <div class="col-sm-6">
            <div class="socialIcons">
                <a class="socialIcon" id="facebookIcon" target="_blank" href="#"></a>
                <a class="socialIcon" id="facebookIcon" target="_blank" href="#"></a>
                <a class="socialIcon" id="facebookIcon" target="_blank" href="#"></a>
                <a class="socialIcon" id="facebookIcon" target="_blank" href="#"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <ul id="intro" class="sectionBody">
            <li>Graduated M.S.S.E from Vellore Institute of Technology, Tamil Nadu.</li>
            <li>Proficient in all aspects of Front-End and Back-End development.</li>
            <li>Good page layout and design skills, multitasking and handling projects from concept stage to final
                deliverable.
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">Education</h2>
    </div>
    <div class="row">

        <div class="col-6 schools">
            <div class="details">
                <h3>Vellore Institute of Technology</h3>
                <h4>M.S.S.E</h4>
                <h5>2010 - 2015</h5>
            </div>
        </div>
        <div class="col-6">
            <p>CGPA – 7.51 </p>
        </div>

        <div class="col-6 schools">
            <div class="details">
                <h3>Sri Chaitanya Institution, Tirupati, AP</h3>
                <h4>Higher Secondary - PCM</h4>
                <h5>2009 - 2010</h5>
            </div>
        </div>
        <div class="col-6">
            <p>PERCENTAGE : 90.1%</p>
        </div>

        <div class="col-6 schools">
            <div class="details">
                <h3>PriyaDarshini VidyaMandir, AP</h3>
                <h4>Primary - PCM</h4>
                <h5>2008</h5>
            </div>
        </div>
        <div class="col-6">
            <p>PERCENTAGE : 80%</p>
        </div>
    </div>
    <div class="row">
        <h2 class="sectionHead">Experience</h2>
    </div>

    <div class="row">

        <div class="col-6 jobs">
            <div class="details">
                <h3>Full-Stack Developer</h3>
                <h3>Marching Ants Marketing LLP</h3>
                <h4>Location - Bengaluru</h4>
                <h5>MAY 2017 - DEC 2017</h5>
            </div>
        </div>
        <div class="col-6">
            <p>Developed and worked on numerous projects and applications</p>
        </div>

        <div class="col-6 jobs">
            <div class="details">
                <h3>Technical Lead Developer</h3>
                <h3>Forever Networks Pvt Ltd</h3>
                <h4>Location - Bengaluru</h4>
                <h5>MAY 2016 - MAY 2017</h5>
            </div>
        </div>
        <div class="col-6">
            <p>Developed SaaS based Educational Products</p>
        </div>

        <div class="col-6 jobs">
            <div class="details">
                <h3>Web Developer (Intership)</h3>
                <h3>Kanoe Softwares Pvt Ltd</h3>
                <h4>Location - Bengaluru</h4>
                <h5>JAN 2015 - MAR 2015</h5>
            </div>
        </div>
        <div class="col-6">
            <p>Designed & developed a responsive CMS using Bootstrap, PHP, HTML, CSS, JQuery, MySQL.</p>
        </div>
    </div>

    <div class="row">
        <h2 class="sectionHead">Projects Undertaken - Marching Ants Marketing LLP</h2>
    </div>
    <div class="row" id="projects">

        <ul class="pBox">
            <li class="pList">
                <h5 class="pTitle">Fleet Management</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Laravel, PHP, MariaDB, Bootstrap, Semantic UI, VueJs, jQuery, Webpack</span>
                    </li>
                    <li class="desc">
                        <span class="sub">Modules: </span>
                        <span>Bookings, Trip sheets, Hire Pay Orders, Inventory Management, Delivery, Enquiry, User
                            roles, Administrative and Super Admin roles, Unique ID’s and Roles Assignment,
                            Dashboard, Timeline and Customized Reports for all of the modules in any major
                            format.
                        </span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">The Druid Garden</span><a class="pLink btn btn-outline-primary btn-sm" href="#"
                                                               role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Laravel, PHP, MySQL, Bootstrap, jQuery, Webpack</span>
                    </li>
                    <li class="desc">
                        <span>Worked as part of a multi-disciplinary team, developed backend architecture and on the Front-End Modules – Menus, Location, Gallery and Reviews.
                        </span>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">Relevent Experience</h2>
    </div>

    <div class="row">
        <ul id="relEx">
            <li><strong>JavaScript Frameworks: </strong> Jquery, Angular, Vue</li>
            <li><strong>PHP Framework: </strong>Laravel Framework, Slim PHP</li>
            <li><strong>NodeJs: </strong>Node package manager(npm) – ExpressJs</li>
            <li><strong>API Integration: </strong>REST API's, JSON</li>
            <li><strong>Cloud: </strong>Digital Ocean, Heroku, AWS, Google Cloud</li>
            <li><strong>Hybrid Mobile Apps: </strong>Ionic Framework, Cordova Phonegap</li>
            <li><strong>Scaffolding Tools: </strong>Webpack, Gulp, Bower</li>
            <li><strong>Testing: </strong>Gherkin Language, BDD – Behavior Driven Development Cases, Selenium web
                driver.
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">IT Skills</h2>
    </div>

    <div class="row">
        <ul id="relEx">
            <li><strong>Programming: </strong> HTML, CSS, JavaScript, PHP, Java</li>
            <li><strong>Database: </strong>PostgreSQL, MySQL, MariaDB</li>
            <li><strong>CMS: </strong>WordPress, Joomla, Drupal</li>
            <li><strong>VCS: </strong>GitHub, Bitbucket</li>
            <li><strong>Operating System: </strong>Linux, Windows, Mac</li>
            <li><strong>Software: </strong>IntelliJ IDE, Source tree, GitHub, Skype, Eclipse IDE, MS Office, Visual
                Studio
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">PERSONAL</h2>
    </div>

    <div class="row">
        <ul id="relEx">
            <li><strong>Date of Birth: </strong> Jul 1993</li>
            <li><strong>Address: </strong>J.P. Nagar 6th phase, Bengaluru.</li>
            <li><strong>Languages Known: </strong>English, Hindi, Telugu and Kannada.</li>
        </ul>
    </div>

@endsection
