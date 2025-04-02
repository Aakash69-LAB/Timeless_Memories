<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Timeless Memories</title>
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
            overflow-x: hidden;
        }
        
        /* Navigation */
        .menu_bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            width: 100%;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            white-space: nowrap;
        }
        
        .logo span {
            color: var(--secondary-color);
        }
        
        .menu_bar ul {
            display: flex;
            list-style: none;
        }
        
        .menu_bar ul li {
            margin-left: 2rem;
            position: relative;
        }
        
        .menu_bar ul li a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            transition: color 0.3s;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }
        
        .menu_bar ul li a:hover {
            color: var(--secondary-color);
        }
        
        .menu_bar ul li a i {
            margin-left: 0.3rem;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 5%;
            width: 100%;
        }
        
        .hero h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            margin-bottom: 1rem;
            animation: fadeIn 1.5s ease-in-out;
        }
        
        .hero p {
            font-size: clamp(1rem, 2vw, 1.2rem);
            max-width: 700px;
            animation: fadeIn 2s ease-in-out;
        }
        
        /* Gallery Section */
        .gallery-intro {
            padding: 4rem 5%;
            text-align: center;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .gallery-intro h2 {
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            margin-bottom: 3rem;
            color: var(--primary-color);
            position: relative;
            display: inline-block;
        }
        
        .gallery-intro h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: var(--secondary-color);
            bottom: -10px;
            left: 25%;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
            width: 100%;
        }
        
        .gallery-item {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            width: 100%;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }
        
        .gallery-details {
            padding: 1.5rem;
        }
        
        .gallery-details h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        .gallery-details p {
            color: var(--text-light);
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
            margin-top: 0.5rem;
            font-size: 0.9rem;
        }
        
        .btn:hover {
            background-color: #c0392b;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            text-align: center;
            padding: 2rem 5%;
            margin-top: 3rem;
            width: 100%;
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
        
        /* Mobile Menu */
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .menu_bar {
                padding: 1rem 5%;
            }
            
            .menu_bar ul {
                position: fixed;
                top: 70px;
                left: -100%;
                background: white;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 2rem 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                transition: left 0.3s ease;
            }
            
            .menu_bar ul.active {
                left: 0;
            }
            
            .menu_bar ul li {
                margin: 1rem 0;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .hero {
                height: 50vh;
            }
        }
        
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2.2rem;
            }
            
            .gallery-item img {
                height: 200px;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                height: 40vh;
                padding: 0 2rem;
            }
            
            .hero h2 {
                font-size: 1.8rem;
            }
            
            .gallery-intro {
                padding: 3rem 2rem;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="main">
        <nav class="menu_bar">
            <h1 class="logo">Timeless <span>Memories</span></h1>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li><a href="index.php">Portfolio</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="photographer.php">Photographer</a></li>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="contactpage.php">Contact Us</a></li>
                <li>
                    <a href="login.php">LOGIN <i class="fas fa-caret-down"></i></a>
                </li>
            </ul>
        </nav>

        <main>
            <div class="hero">
                <h2>Our Gallery</h2>
                <p>Explore our collection of stunning moments captured by our talented photographers.</p>
            </div>

            <section class="gallery-intro">
                <h2>Photo Collections</h2>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Wedding Photography">
                        <div class="gallery-details">
                            <h3>Wedding Moments</h3>
                            <p>Beautiful candid shots from wedding ceremonies</p>
                            <a href="#" class="btn">View Album</a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1554080353-a576cf803bda?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Portrait Photography">
                        <div class="gallery-details">
                            <h3>Portrait Series</h3>
                            <p>Stunning portrait photography collection</p>
                            <a href="#" class="btn">View Album</a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Nature Photography">
                        <div class="gallery-details">
                            <h3>Nature's Beauty</h3>
                            <p>Breathtaking landscapes and wildlife</p>
                            <a href="#" class="btn">View Album</a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Fashion Photography">
                        <div class="gallery-details">
                            <h3>Fashion Editorial</h3>
                            <p>High-end fashion and style photography</p>
                            <a href="#" class="btn">View Album</a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Street Photography">
                        <div class="gallery-details">
                            <h3>Street Stories</h3>
                            <p>Urban life captured through the lens</p>
                            <a href="#" class="btn">View Album</a>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Event Photography">
                        <div class="gallery-details">
                            <h3>Event Coverage</h3>
                            <p>Moments from concerts and festivals</p>
                            <a href="#" class="btn">View Album</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2025 Timeless Memories. All Rights Reserved.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
        </footer>
    </div>
    
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const navMenu = document.querySelector('.menu_bar ul');
            
            menuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                this.querySelector('i').classList.toggle('fa-times');
                this.querySelector('i').classList.toggle('fa-bars');
            });
            
            // Close menu when clicking on a link
            document.querySelectorAll('.menu_bar ul li a').forEach(link => {
                link.addEventListener('click', function() {
                    navMenu.classList.remove('active');
                    menuToggle.querySelector('i').classList.remove('fa-times');
                    menuToggle.querySelector('i').classList.add('fa-bars');
                });
            });
            
            // Animation for gallery items
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            galleryItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'all 0.5s ease';
                observer.observe(item);
            });
        });
    </script>
</body>
</html>