@extends('layouts.app')

@section('content')
    <div class="row justify-content-between">
        <div class="col-sm-6">
            <h2 id="titleName" class="sectionHead">karthik girraju</h2>
            <span id="course">M.S.S.E Graduate</span>
        </div>
        <div class="col-sm-6">
            <div class="socialIcons">
                <a class="socialIcon" id="linkedinIcon" target="_blank"
                   href="https://in.linkedin.com/in/karthikgirraju"></a>
                <a class="socialIcon" id="githubIcon" target="_blank" href="https://github.com/karthikgirraj"></a>
                <a class="socialIcon" id="twitterIcon" target="_blank" href="https://twitter.com/karthikgirraju"></a>
                <a class="socialIcon" id="gplusIcon" target="_blank" href="https://plus.google.com/+KarthikGirraju"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <ul id="intro" class="sectionBody">
            <li>Graduated Master of Science in Software Engineering from Vellore Institute of Technology, Tamil Nadu.
            </li>
            <li>Proficient in all aspects of Front-End and Back-End development.</li>
            <li>Good page layout and design skills, multitasking and handling projects from concept stage to final
                deliverable.
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">Skills</h2>
    </div>

    <div class="row">
        <ul id="skills">
            <li class="s90"><span>AngularJs</span></li>
            <li class="s90"><span>PHP</span></li>
            <li class="s90"><span>HTML + CSS</span></li>
            <li class="s90"><span>JavaScript</span></li>
            <li class="s90"><span>Bootstrap</span></li>
            <li class="s90"><span>MySQL</span></li>
            <li class="s90"><span>PostgreSQL</span></li>
            <li class="s90"><span>jQuery</span></li>
            <li class="s70"><span>Java</span></li>
            <li class="s60"><span>C</span></li>
            <li class="s60"><span>C++</span></li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">Education</h2>
    </div>
    <div class="row">

        <div class="col-sm-6 schools">
            <div class="details">
                <h3>Vellore Institute of Technology (VIT)</h3>
                <h4>M.S.S.E</h4>
                <h5>2010 - 2015</h5>
            </div>
        </div>
        <div class="col-sm-6">
            <p>CGPA – 7.51 </p>
        </div>

        <div class="col-sm-6 schools">
            <div class="details">
                <h3>Sri Chaitanya Institution, Tirupati, AP</h3>
                <h4>Higher Secondary - PCM</h4>
                <h5>2009 - 2010</h5>
            </div>
        </div>
        <div class="col-sm-6">
            <p>PERCENTAGE : 90.1%</p>
        </div>

        <div class="col-sm-6 schools">
            <div class="details">
                <h3>PriyaDarshini VidyaMandir, AP</h3>
                <h4>Primary - PCM</h4>
                <h5>2008</h5>
            </div>
        </div>
        <div class="col-sm-6">
            <p>PERCENTAGE : 80%</p>
        </div>
    </div>
    <div class="row">
        <h2 class="sectionHead">Experience</h2>
    </div>

    <div class="row">

        <div class="col-sm-6 jobs">
            <div class="details">
                <h3>Full-Stack Developer</h3>
                <h3>Marching Ants Marketing LLP</h3>
                <h4>Location - Bengaluru</h4>
                <h5>MAY 2017 - DEC 2017</h5>
            </div>
        </div>
        <div class="col-sm-6">
            <p>Developed and worked on a lot of projects and applications</p>
        </div>

        <div class="col-sm-6 jobs">
            <div class="details">
                <h3>Technical Lead Developer</h3>
                <h3>Forever Networks Pvt Ltd</h3>
                <h4>Location - Bengaluru</h4>
                <h5>MAY 2016 - MAY 2017</h5>
            </div>
        </div>
        <div class="col-sm-6">
            <p>Developed and worked on SaaS based Educational Products</p>
        </div>

        <div class="col-sm-6 jobs">
            <div class="details">
                <h3>Web Developer (Internship)</h3>
                <h3>Kanoe Softwares Pvt Ltd</h3>
                <h4>Location - Bengaluru</h4>
                <h5>JAN 2015 - MAR 2015</h5>
            </div>
        </div>
        <div class="col-sm-6">
            <p>Designed & developed a responsive CMS using Bootstrap, PHP, HTML, CSS, jQuery, MySQL.</p>
        </div>
    </div>

    <div class="row">
        <h2 class="sectionHead">Projects Undertaken - Marching Ants Marketing LLP</h2>
    </div>
    <div class="row projects">

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
                <span class="pTitle">The Druid Garden</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="https://thedruidgarden.in/" target="_blank"
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
            <li class="pList">
                <span class="pTitle">Highgates Hotel Booking Management System</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="https://www.marchingants.org/highgates"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>AngularJs, Bootstrap, JavaScript, jQuery</span>
                    </li>
                    <li class="desc">
                        <span>Designed and Developed public website for Highgates Hotel.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Prestige Group</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="https://www.prestigeconstructions.com/"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>AngularJs, WordPress, jQuery, Bootstrap.</span>
                    </li>
                    <li class="desc">
                        <span>One of the biggest sites I ever worked on. Worked with a team to convert static website into Dynamic
Responsive Website. Worked on Forms, Validations and Pop-ups throughout the site. Improved code efficiency
wherever necessary and fixed numerous bugs.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Hical Technologies</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://www.hical.com/pro/#/"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>AngularJs, Bootstrap, JavaScript, jQuery.</span>
                    </li>
                    <li class="desc">
                        <span>Converted the static website into AngularJs version.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Sublime Galleria </span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://www.sublimegalleria.com/" target="_blank"
                   role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>WordPress, jQuery, Bootstrap, JavaScript.</span>
                    </li>
                    <li class="desc">
                        <span>Worked on numerous bug fixes including responsive design, integrated Twitter API, improved code efficiency
and website speed.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Fairyglen</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://www.fairyglen.co.in/"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>WordPress, jQuery, Bootstrap, JavaScript.</span>
                    </li>
                    <li class="desc">
                        <span>Worked on date pickers and entire site customization.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Haute-Fitness</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="https://haute-fitness.marchingants.org/"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Laravel, jQuery, Bootstrap, Onepage-Scroll.js, Webpack.</span>
                    </li>
                    <li class="desc">
                        <span>Worked on Backend Architecture and Front-End Designs.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Prestige Group Android Application</span>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Java, Android Ecosystem</span>
                    </li>
                    <li class="desc">
                        <span>Worked on numerous bug fixes and alignment issues.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Rebel International</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://rebelinternational.biz/"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>jQuery, Bootstrap, JavaScript.</span>
                    </li>
                    <li class="desc">
                        <span>Worked on Front-End and Responsive Designs, Bug fixes.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Prakashroadlines</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://www.prakashroadlines.com/" target="_blank"
                   role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span>AngularJs bug fixes, Search, Alignment Issues</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Karanproperties</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://demo.karanproperties.com/" target="_blank"
                   role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span>Dynamic Forms, Validations, Email Format.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Ubcitybangalore</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://www.ubcitybangalore.in/"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span>Bug fixes, Code Optimization. Form Validation.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Arafaproperties</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://demo.arafaproperties.com/" target="_blank"
                   role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span>Dynamic Forms, Validations, Email Format</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Art Bengaluru</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://www.artbengaluru.in/"
                   target="_blank" role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span>Bug fixes</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Prestige Golfshire</span>
                <a class="pLink btn btn-outline-primary btn-sm" href="http://www.golfshire.com/" target="_blank"
                   role="button">Link</a>
                <ul class="description">
                    <li class="desc">
                        <span>Newsletters</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Email Templates</span>
            </li>
            <li class="pList">
                <span class="pTitle">Some websites which are not live/changed.</span>
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">Projects Undertaken - Forever Networks Pvt Ltd</h2>
    </div>
    <div class="row projects">

        <ul class="pBox">
            <li class="pList">
                <h5 class="pTitle">Subscription Module</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>AngularJs, Bootstrap, JavaScript, LESS, Gulp, Bower.</span>
                    </li>
                    <li class="desc">
                        <span>This module handles all the administrative tasks of the institute.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">School Management System</span>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>AngularJs, Bootstrap, JavaScript, LESS, Gulp, Bower</span>
                    </li>
                    <li class="desc">
                        <span>This module contains student, parent and teacher’s sub-modules and has its own features</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Subscription Public Website</span>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Bootstrap, JavaScript, Ajax, CSS</span>
                    </li>
                    <li class="desc">
                        <span>This is a public website for subscription module with pricing, testimonials, product details etc.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Educatehub Module</span>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>AngularJs, Bootstrap, JavaScript, LESS, Gulp, Bower</span>
                    </li>
                    <li class="desc">
                        <span>This module handles student assessment tasks - competitive tests, score statistics, question papers.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">Techwitzs Company Website</span>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Bootstrap, JavaScript, Ajax, SCSS, Gulp, Bower.</span>
                    </li>
                    <li class="desc">
                        <span>Created a responsive website for the company with Help Desk integration.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <span class="pTitle">School Public Website</span>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>WordPress CMS. Respond CMS</span>
                    </li>
                    <li class="desc">
                        <span>Has experience in working with WordPress as a school public website.</span>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">Relevent Experience</h2>
    </div>

    <div class="row">
        <ul class="relEx">
            <li><strong>JavaScript Frameworks: </strong> jQuery, Angular, Vue</li>
            <li><strong>PHP Framework: </strong>Laravel Framework, Slim PHP</li>
            <li><strong>NodeJs: </strong>Node Package Manager (npm) – ExpressJs, Sails.js</li>
            <li><strong>API Integration: </strong>REST API's, JSON</li>
            <li><strong>Cloud: </strong>Digital Ocean, Heroku, AWS</li>
            <li><strong>Hybrid Mobile Apps: </strong>Ionic Framework, Cordova Phonegap</li>
            <li><strong>Scaffolding Tools: </strong>Webpack, Gulp, Bower</li>
            <li><strong>Testing: </strong>Gherkin Language, BDD – Behavior Driven Development Cases, Selenium web
                driver, Xdebug
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">IT Skills</h2>
    </div>

    <div class="row">
        <ul class="relEx">
            <li><strong>Programming: </strong> HTML5, CSS3, JavaScript, PHP, Java</li>
            <li><strong>Database: </strong>PostgreSQL, MySQL, MariaDB</li>
            <li><strong>CMS: </strong>WordPress, Respond CMS, Joomla, Drupal</li>
            <li><strong>VCS: </strong>GitHub, Bitbucket, SVN</li>
            <li><strong>Operating System: </strong>Linux, Windows, Mac</li>
            <li><strong>Software: </strong>JIRA, IntelliJ IDE, Source tree, GitHub, Skype, Eclipse IDE, MS Office,
                Visual
                Studio
            </li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">PERSONAL</h2>
    </div>

    <div class="row">
        <ul class="relEx">
            <li><strong>Date of Birth: </strong> Jul 1993</li>
            <li><strong>Address: </strong>J.P. Nagar 6th phase, Bengaluru.</li>
            <li><strong>Languages Known: </strong>English, Hindi, Telugu and Kannada.</li>
        </ul>
    </div>

    <div class="row">
        <h2 class="sectionHead">Academic Projects</h2>
    </div>
    <div class="row projects">

        <ul class="pBox">
            <li class="pList">
                <h5 class="pTitle">Android ROM Development</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Cygwin packages-XDA Dev Tools, LINUX</span>
                    </li>
                    <li class="desc">
                        <span>Developed an Android Custom ROM (XDA Developers) with improvements and lots of customizations.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Online Help Desk</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>PHP, MySQL, Bootstrap Framework, JavaScript, CSS</span>
                    </li>
                    <li class="desc">
                        <span>Created a Q&A portal for college to post hostel, maintenance and canteen related problems.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Student Academic History</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>PHP, MySQL, Bootstrap Framework, JavaScript, CSS</span>
                    </li>
                    <li class="desc">
                        <span>Created an Online Portal for students to check marks throughout their academic history.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Online Quiz</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Java, JDBC: ODBC Connection</span>
                    </li>
                    <li class="desc">
                        <span>Implemented an Online Quiz system with time-lapse and display of result on completion.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Multimedia Database Management System</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>PHP, PhpMyAdmin, CSS, Blobs</span>
                    </li>
                    <li class="desc">
                        <span>Implemented a website to store multimedia files and can be played using flash player.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Understanding of RSA Algorithm</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Java, Cryptography</span>
                    </li>
                    <li class="desc">
                        <span>Implemented an RSA encryption algorithm.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Face Recognition System</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Bio-Metric Implementation in MATLAB</span>
                    </li>
                    <li class="desc">
                        <span>Recognizing accuracy of a sample image taken with a template.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Text-To-Speech</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Java, Android Application</span>
                    </li>
                    <li class="desc">
                        <span>Developing an app to convert text into speech.</span>
                    </li>
                </ul>
            </li>
            <li class="pList">
                <h5 class="pTitle">Cloud Computing</h5>
                <ul class="description">
                    <li class="desc">
                        <span class="sub">Technologies: </span>
                        <span>Openshift, GIT Repository</span>
                    </li>
                    <li class="desc">
                        <span>Connected websites to cloud platform through Git repository from Github.</span>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

@endsection
