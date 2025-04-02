<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch photographers from the database
$sql = "SELECT * FROM photographers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Photographers - Timeless Memories</title>
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
        
        /* Mobile Menu */
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        /* Photographer Cards */
        .photographer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .photographer-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .photographer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .photographer-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }
        
        .photographer-details {
            padding: 1.5rem;
            text-align: center;
        }
        
        .photographer-details h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        .photographer-details p {
            color: var(--text-light);
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
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
        }
        
        @media (max-width: 768px) {
            .photographer-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
        
        @media (max-width: 576px) {
            .photographer-grid {
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
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="login.php">Login <i class="fas fa-caret-down"></i></a></li>
            </ul>
        </nav>

        <main>
            <section class="photographer-intro" style="padding: 4rem 5%; text-align: center;">
                <h2 style="font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 3rem; color: var(--primary-color); position: relative; display: inline-block;">
                    Our Professional Photographers
                    <span style="content: ''; position: absolute; width: 50%; height: 3px; background-color: var(--secondary-color); bottom: -10px; left: 25%;"></span>
                </h2>
            </section>

            <div class="photographer-grid">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="photographer-card">';
                        echo '<img src="uploads/' . $row["photo"] . '" alt="' . $row["name"] . '">';
                        echo '<div class="photographer-details">';
                        echo '<h3>' . $row["name"] . '</h3>';
                        echo '<p><i class="fas fa-envelope"></i> ' . $row["email"] . '</p>';
                        echo '<p><i class="fas fa-camera"></i> ' . $row["speciality"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p style="grid-column: 1/-1; text-align: center; color: var(--text-light);">No photographers found.</p>';
                }
                $conn->close();
                ?>
            </div>
        </main>

        <footer>
            <p>© 2025 Timeless Memories. All Rights Reserved.</p>
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
            
            // Animation for photographer cards
            const photographerCards = document.querySelectorAll('.photographer-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            photographerCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>