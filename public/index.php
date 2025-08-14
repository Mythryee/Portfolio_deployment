<?php
require_once __DIR__ . '/../components/navbar.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/process_form.php';
?>


<head>
    <link rel="stylesheet" href="style.css">
</head>

<section class="home" id="home">
    <div class="home-content">
        <h1>Hi, I'm <span>Lakshmi Mythryee Kuruguntla</span></h1>
        <h2>Full Stack Developer & Data Analyst</h2>
        <p>
            I build robust, user-focused web applications using HTML, CSS, JavaScript, PHP, MySQL, and MongoDB, and analyze complex datasets using Excel, Power BI, and Python libraries like NumPy, Pandas, Matplotlib, and Seaborn. I integrate responsive design, version control with Git/GitHub, and DevOps tools like Docker, Kubernetes, and Jenkins to deliver scalable, efficient digital solutions. I also apply prompt engineering techniques to optimize AI workflows and enhance user interaction.
        </p>
        <div class="contact-info">
            <p>College: <a href="#">Shri Vishnu Engineering College For Women</a></p>
            <p>Email: <a href="mailto:kuruguntlalakshmimythryee@gmail.com">kuruguntlalakshmimythryee@gmail.com</a></p>
            <p>Phone: <a href="tel:+919177735342">+91 9177735342</a></p>
            <p>CGPA: <a href="#">9.4</a></p>
            
        </div>
    </div>
</section>


<section class="skills-section" id="skills">
    <h2 class="skills-title">Skills</h2>
    <div class="skills-grid">
        <div class="skill-card">
            <h3>HTML & CSS</h3>
            <p>Expert in crafting responsive, semantic layouts and visually rich user interfaces using modern HTML5 and advanced CSS3 techniques.</p>
        </div>
        <div class="skill-card">
            <h3>JavaScript</h3>
            <p>Building dynamic, interactive web features with clean, modular JavaScript and working knowledge of the DOM and event handling.</p>
        </div>
        <div class="skill-card">
            <h3>PHP & MySQL</h3>
            <p>Developing secure backend systems with PHP and managing structured data through efficient MySQL queries and relationships.</p>
        </div>
        <div class="skill-card">
            <h3>MongoDB</h3>
            <p>Leveraging NoSQL flexibility for scalable data modeling and working with JSON-like documents in modern web applications.</p>
        </div>
        <div class="skill-card">
            <h3>Python & Data Libraries</h3>
            <p>Performing data analysis and visualization using Python with libraries like NumPy, Matplotlib, and Seaborn for rich insight generation.</p>
        </div>
        <div class="skill-card">
            <h3>Excel & Power BI</h3>
            <p>Transforming complex data into interactive dashboards and analytics reports using Excel tools and Power BI visualizations.</p>
        </div>
        <div class="skill-card">
            <h3>Git & GitHub</h3>
            <p>Managing version control, collaborating on codebases, and maintaining clean commit histories for reliable project tracking.</p>
        </div>
        <div class="skill-card">
            <h3>Linux & Prompt Engineering</h3>
            <p>Managing system operations, permissions, and automation using Linux, combined with crafting precise AI prompts to enhance productivity and interaction with modern AI tools.</p>
        </div>
        <div class="skill-card">
            <h3>Docker</h3>
            <p>Creating, managing, and deploying containerized applications using Docker to ensure consistent environments and scalable development workflows.</p>
        </div>
        <div class="skill-card">
            <h3>Kubernetes</h3>
            <p>Orchestrating containerized applications with Kubernetes for automated deployment, scaling, and management across dynamic environments.</p>
        </div>
        <div class="skill-card">
            <h3>Jenkins</h3>
            <p>Implementing continuous integration and continuous deployment (CI/CD) pipelines using Jenkins to automate testing, building, and deployment processes.</p>
        </div>
        <div class="skill-card">
            <h3>Figma</h3>
            <p>Designing user interfaces and interactive prototypes with attention to usability, accessibility, and user-centered principles.</p>
        </div>
    </div>
</section>

<section class="projects-section" id="projects">
    <h2 class="section-title">Projects</h2>
    <p class="project-description">
        I develop robust full stack web applications and data-driven solutions by blending responsive design, backend logic, and insightful analytics. My work ranges from intuitive, mobile-friendly websites with secure data handling to scalable, containerized applications deployed using modern DevOps practices.
        <br><br>
        Using technologies such as HTML5, CSS3, JavaScript, PHP, MySQL, and MongoDB, I create dynamic web experiences that are both user-focused and performance-optimized. On the data side, I leverage Python libraries like NumPy, Pandas, Matplotlib, and Seaborn, along with tools like Excel and Power BI, to uncover patterns and visualize key metrics for data-informed decision-making.
        <br><br>
        I integrate version control through Git and GitHub, optimize environments using Linux, and implement CI/CD pipelines using Docker, Kubernetes, and Jenkins for streamlined, scalable deployments. My development process emphasizes clean code architecture, testing, and documentation for maintainable, future-ready solutions.
        <br><br>
        I also apply prompt engineering techniques to create effective interactions with AI tools. Explore my GitHub to see the range of my projects, complete with structured code, detailed documentation, and collaborative contributions that showcase my dedication to continuous learning and professional excellence.
    </p>


    <div class="github-button">
        <a href="https://github.com/Mythryee" target="_blank" class="view-github">Visit My GitHub</a>
    </div>
</section>

<section class="contact-section" id="contact">
    <h2 class="contact-title">Contact Me</h2>
    <form class="contact-form" action="index.php" method="POST">
        <div class="form-group">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
        </div>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <textarea name="message" placeholder="Why are you contacting me?" required></textarea>
        <button type="submit" name="submit">Submit</button>
    </form>
</section>

<footer class="site-footer">
  <p>&copy; 2025 Lakshmi Mythryee. All Rights Reserved.</p>
</footer>


