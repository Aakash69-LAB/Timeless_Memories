<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Timeless Memories</title>
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
        
        /* Page Header */
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1519125323398-675f0ddb6308?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            padding: 5rem 5%;
            text-align: center;
            color: white;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeIn 1s ease-out;
        }
        
        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            animation: fadeIn 1.5s ease-out;
        }
        
        /* Contact Section */
        #contact {
            padding: 4rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }
        
        .contact-form, .contact-info {
            background: white;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .contact-form h2, .contact-info h2 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .contact-form h2::after, .contact-info h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
        }
        
        .input-box {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .input-box input, .input-box textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .input-box input:focus, .input-box textarea:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        .input-box textarea {
            resize: vertical;
            min-height: 150px;
        }
        
        button[type="submit"] {
            background: var(--secondary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }
        
        button[type="submit"]:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }
        
        button[type="submit"] i {
            margin-left: 8px;
        }
        
        .contact-info p {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-info p strong {
            min-width: 120px;
            display: inline-block;
        }
        
        .contact-info i {
            margin-right: 10px;
            color: var(--secondary-color);
            width: 20px;
            text-align: center;
        }
        
        .map-container {
            margin-top: 2rem;
            height: 250px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .social-contact {
            display: flex;
            gap: 15px;
            margin-top: 2rem;
        }
        
        .social-contact a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            transition: all 0.3s;
        }
        
        .social-contact a:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
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
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
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
            
            .contact-wrapper {
                grid-template-columns: 1fr;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .page-header p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            .contact-form, .contact-info {
                padding: 2rem;
            }
            
            .contact-form h2, .contact-info h2 {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .page-header {
                padding: 3rem 5%;
            }
            
            #contact {
                padding: 2rem 5%;
            }
            
            .contact-info p {
                flex-direction: column;
            }
            
            .contact-info p strong {
                margin-bottom: 5px;
            }
            
            .contact-info i {
                margin-right: 8px;
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

    <!-- Page Header -->
    <div class="page-header">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Reach out for inquiries, bookings, or collaborations.</p>
    </div>

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact-wrapper">
            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Send a Message</h2>
                <form action="contact_process.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
            
                    <div class="input-box">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" name="submit">
                        Send Message <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Contact Details</h2>
                <p><i class="fas fa-map-marker-alt"></i><strong>Address:</strong> 123 Main Street, Butwal, Nepal</p>
                <p><i class="fas fa-phone"></i><strong>Phone:</strong> +977 123 456 7890</p>
                <p><i class="fas fa-envelope"></i><strong>Email:</strong> contact@timelessmemories.com</p>
                <p><i class="fas fa-clock"></i><strong>Working Hours:</strong> Mon - Fri, 9 AM - 6 PM</p>
                
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.364102555425!2d83.4487883150621!3d27.73094498278036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399686a3e5d14e5f%3A0x2b1a194d2a9e5f1a!2sButwal!5e0!3m2!1sen!2snp!4v1620000000000!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
                </div>
                
                <div class="social-contact">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
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
            
            // Form submission animation
            const form = document.querySelector('.contact-form form');
            const submitBtn = form.querySelector('button[type="submit"]');
            
            form.addEventListener('submit', function() {
                submitBtn.innerHTML = 'Sending <i class="fas fa-spinner fa-spin"></i>';
                submitBtn.disabled = true;
            });
        });
    </script>
</body>
</html>