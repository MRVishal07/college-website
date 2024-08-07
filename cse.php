<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css" >
    <title>Computer Science Department</title>
    <style>
        #tophead{
            font-family: sans-serif;
            color: yellow;
            font-weight: 600;
            padding: 1rem;
        }
        main{
            background-color: darkcyan;
            color: #fff;
        }

        #color{
            color: #ffa500;
        }
        .lead{
            color: darkblue;
            font-weight: 400;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
   <?php
   include("header.php");
   ?>
<main>
  <div class="container" id="full-container">
  <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4" id="tophead">Computer Science Department</h1>
                <p class="lead">Welcome to the Computer Science Department at V.M. GOVT. POLYTECHNIC COLLEGE NARSINGHPUR. Our department is dedicated to providing a top-tier education that prepares students for successful careers in the rapidly evolving field of technology.</p>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-12">
                <img src="./assest/cse-1.jpg" class="img-fluid rounded" alt="Computer Science">
            </div>
            <div class="col-md-6 mt-2">
                <h2 id="tophead">Overview</h2>
                <p>We offer a comprehensive curriculum that covers the theoretical and practical aspects of computer science, equipping students with the skills and knowledge needed to thrive in various tech industries.</p>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <h2 id="tophead">Curriculum</h2>
                <p>Our curriculum is designed to provide a strong foundation in computer science principles, while also allowing students to explore specialized areas. Key areas of study include:</p>
                <ul>
                    <li><strong id="color">Programming Languages</strong> : Learn multiple programming languages such as Python, Java, C++, and more.</li>
                    <li><strong id="color">Data Structures and Algorithms</strong> : Understand the fundamental concepts that are essential for problem-solving and efficient programming.</li>
                    <li><strong id="color">Software Engineering</strong> : Gain knowledge in software development life cycles, project management, and best practices in coding.</li>
                    <li><strong id="color">Database Management</strong> : Explore how to design, implement, and manage databases using SQL and other technologies.</li>
                    <li><strong id="color">Web Development</strong> : Develop skills in front-end and back-end web development, including HTML, CSS, JavaScript, and frameworks like React and Node.js.</li>
                    <li><strong id="color">Artificial Intelligence and Machine Learning</strong> : Dive into the world of AI and machine learning, learning how to create intelligent systems and applications.</li>
                    <li><strong id="color">Cybersecurity</strong> : Understand the importance of cybersecurity and learn techniques to protect systems and data from cyber threats.</li>
                </ul>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6">
                <h2 id="tophead">Facilities</h2>
                <p>Our department boasts state-of-the-art facilities to support your learning and research activities:</p>
                <ul>
                    <li>Advanced Computer Labs: Equipped with the latest hardware and software to provide hands-on experience.</li>
                    <li>Research Centers: Dedicated centers for AI, cybersecurity, and software engineering research.</li>
                    <li>Collaborative Spaces: Areas designed for group work and project collaboration.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 id="tophead">Faculty</h2>
                <p>Our faculty members are experts in their fields, bringing both academic and industry experience to the classroom. They are dedicated to mentoring students and guiding them through their academic journey and career planning.</p>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <h2 id="tophead">Career Opportunities</h2>
                <p>A degree in computer science opens up a plethora of career opportunities. Our graduates have gone on to work in various roles such as:</p>
                <ul>
                    <li id="color"><strong>Software Developer</strong></li>
                    <li id="color"><strong>Data Scientist</strong></li>
                    <li id="color"><strong>Systems Analyst</strong></li>
                    <li id="color"><strong>Cybersecurity Analyst</strong></li>
                    <li id="color"><strong>AI/ML Engineer</strong></li>
                    <li id="color"><strong>Database Administrator</strong></li>
                    <li id="color"><strong>Web Developer</strong></li>
                </ul>
                <p>We also have a strong network of alumni and industry connections to help our students with internships and job placements.</p>
            </div>
        </div>
  </div>
</main>
  <!-- Footer -->
  <?php
    include("footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
