<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience & Skills - Timeless Memories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --accent-color: #3498db;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #7f8c8d;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        /* Header - Consistent with other pages */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .logo span {
            color: var(--secondary-color);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2rem;
            position: relative;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            transition: color 0.3s;
            display: flex;
            align-items: center;
        }
        
        nav ul li a:hover {
            color: var(--secondary-color);
        }
        
        nav ul li a i {
            margin-left: 0.3rem;
        }
        
        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        /* Experience & Skills Section */
        #experience-skills {
            padding: 4rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        #experience-skills h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: var(--primary-color);
            text-align: center;
            position: relative;
        }
        
        #experience-skills h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }
        
        .experience, .skills, .awards {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            border-bottom: 2px solid var(--light-color);
            padding-bottom: 0.5rem;
        }
        
        ul {
            list-style-position: inside;
        }
        
        li {
            margin-bottom: 1rem;
        }
        
        .experience li, .awards li {
            margin-bottom: 2rem;
            list-style: none;
        }
        
        .experience h4, .awards h4 {
            font-size: 1.2rem;
            color: var(--secondary-color);
            margin-bottom: 0.3rem;
        }
        
        .experience p, .awards p {
            color: var(--text-light);
            font-size: 0.95rem;
        }
        
        .skills ul {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
        
        .skills li {
            background: var(--light-color);
            padding: 0.8rem 1rem;
            border-radius: 4px;
            list-style: none;
        }
        
        /* Footer - Consistent with other pages */
        footer {
            background-color: var(--dark-color);
            color: white;
            text-align: center;
            padding: 2rem 5%;
            margin-top: 3rem;
        }
        
        .social-links {
            margin-top: 1rem;
        }
        
        .social-links a {
            color: white;
            margin: 0 10px;
            font-size: 1.2rem;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: var(--accent-color);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            header {
                padding: 1rem 5%;
            }
            
            nav ul {
                position: fixed;
                top: 80px;
                left: -100%;
                background: white;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 2rem 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                transition: left 0.3s ease;
            }
            
            nav ul.active {
                left: 0;
            }
            
            nav ul li {
                margin: 1rem 0;
            }
            
            .menu-toggle {
                display: block;
            }
            
            #experience-skills h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
            
            .skills ul {
                grid-template-columns: 1fr;
            }
            
            #experience-skills {
                padding: 3rem 5%;
            }
        }
        
        @media (max-width: 576px) {
            #experience-skills h2 {
                font-size: 1.8rem;
            }
            
            h3 {
                font-size: 1.3rem;
            }
            
            .experience, .skills, .awards {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header - Consistent with other pages -->
    <header>
        <h1 class="logo">Timeless <span>Memories</span></h1>
        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Portfolio</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="Photographer.php">Photographer</a></li>
                <li><a href="Experience.php">Experience</a></li>
                <li><a href="contactpage.php">Contact Us</a></li>
                <li>
                    <a href="login.php">LOGIN <i class="fas fa-caret-down"></i></a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Experience and Skills Section -->
    <section id="experience-skills">
        <div class="container">
            <h2>Experience & Skills</h2>

            <!-- Experience Section -->
            <div class="experience">
                <h3>Professional Experience</h3>
                <ul>
                    <li>
                        <h4>Lead Photographer</h4>
                        <p>Jan 2019 - Present | ABC Photography</p>
                        <p>Capturing wedding, portrait, and event photography. Leading a team of photographers, ensuring quality and creative direction.</p>
                    </li>
                    <li>
                        <h4>Freelance Photographer</h4>
                        <p>Jun 2016 - Dec 2018 | Self-employed</p>
                        <p>Worked with multiple clients for personal projects, corporate events, and fashion shoots.</p>
                    </li>
                </ul>
            </div>

            <!-- Skills Section -->
            <div class="skills">
                <h3>Key Skills</h3>
                <ul>
                    <li>Portrait Photography</li>
                    <li>Wedding Photography</li>
                    <li>Post-Processing and Editing (Adobe Photoshop, Lightroom)</li>
                    <li>Studio Lighting and Setup</li>
                    <li>Event Photography</li>
                    <li>Creative Direction</li>
                </ul>
            </div>

            <!-- Awards and Accomplishments Section -->
            <div class="awards">
                <h3>Awards & Accomplishments</h3>
                <ul>
                    <li>
                        <h4>Best Wedding Photographer - 2021</h4>
                        <p>Awarded by XYZ Photography Association</p>
                    </li>
                    <li>
                        <h4>Photography of the Year - 2020</h4>
                        <p>Winner at ABC Photography Awards</p>
                    </li>
                    <li>
                        <h4>Top 10 Portrait Photographers</h4>
                        <p>Featured in Portrait Magazine, 2019</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer - Consistent with other pages -->
    <footer>
        <p>&copy; 2025 Timeless Memories. All Rights Reserved.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </footer>

    <script>
        // Mobile menu toggle - Consistent with other pages
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navMenu = document.querySelector('nav ul');
            
            menuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                this.querySelector('i').classList.toggle('fa-times');
                this.querySelector('i').classList.toggle('fa-bars');
            });
            
            // Close menu when clicking on a link
            document.querySelectorAll('nav ul li a').forEach(link => {
                link.addEventListener('click', function() {
                    navMenu.classList.remove('active');
                    menuToggle.querySelector('i').classList.remove('fa-times');
                    menuToggle.querySelector('i').classList.add('fa-bars');
                });
            });
        });
    </script>
</body>
</html>