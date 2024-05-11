<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness & Gym</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
    <!-- link ng font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navigation bar ng system-->
    <nav>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
        <div class="menu-items">
            <!-- Menu Links ng navbar-->
            <a href="#about">About</a>
            <a href="#membership">Membership</a>
            <a href="#trainer">Trainer</a>
            <a href="#contact">Contact</a>
            <a href="log.php">Join us</a>
            <a href = "Admin.php">Admin</a>
        </div>
    </nav>

    <!-- Main Content Sections -->
    <div id="home" class="home">
        <!-- Home page-->
        <h1>FITNESS<BR>& GYM</h1><br>
        <button class="jj"><a href="log.php">JOIN US</a></button><br>
        <h2 class="stj">START YOUR JOURNEY NOW!<br>
            LASTG GYM SERVICE</h2>
    </div>

    <div id="about">
        <!-- About page ng gym-->
        <h2 class="h2">ABOUT US</h2>
        <div class="abouts">
            <img src="img/women.jpg">

            <h3>"WELCOME TO LASTG GYM SERVICE, WHERE FITNESS MEETS COMMUNITY. OUR MISSION IS TO EMPOWER INDIVIDUALS OF
                ALL AGES AND
                FITNESS LEVELS TO ACHIEVE THEIR HEALTH AND WELLNESS GOALS IN A SUPPORTIVE AND MOTIVATING ENVIRONMENT.
                WITH
                STATE-OF-THE-ART EQUIPMENT, EXPERT TRAINERS, AND A VARIETY OF CLASSES, WE'RE COMMITTED TO HELPING YOU
                TRANSFORM YOUR
                LIFESTYLE. WHETHER YOU'RE A SEASONED ATHLETE OR JUST STARTING YOUR FITNESS JOURNEY, WE'RE HERE TO
                SUPPORT YOU EVERY STEP
                OF THE WAY. JOIN US AND BECOME THE BEST VERSION OF YOURSELF!"</h3>
        </div>
        <!-- gallery page ng gym-->
        <h2>GALLERY</h2>

        <section class="layout">
            <div class="grow1">
                <img src="img/lift.png" alt="lift">
                <h4>Weight Lifting</h4><br>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>4
                    5-60 Minutes
                </h4>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    8-12 REPS
                </h4>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                    </svg>
                    3-5 CALORIES PER MIN
                </h4><br>

                <h4>WEIGHTLIFTING INVOLVES LIFTING WEIGHTS, SUCH AS DUMBBELLS, BARBELLS, OR WEIGHT MACHINES, TO BUILD
                    STRENGTH AND MUSCLE
                    MASS.</h4>
            </div>

            <div class="grow1">
                <img src="img/tread.png" alt="lift">
                <h4>TREADMILL</h4><br>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    30-60 MINUTES
                </h4>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    DEPENDS MILES
                </h4>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                    </svg>
                    100-200 CALORIES PER MILE
                </h4><br>
                <h4>RUNNING AT A FASTER PACE FOR A LONGER DURATION WILL GENERALLY BURN MORE CALORIES THAN WALKING AT A
                    SLOWER PACE.</h4>
            </div>



            <div class="grow1">
                <img src="img/cyc.png" alt="lift">
                <h4>INDOOR CYCLING</h4><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    45-60 MINUTES
                </h4>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    MEASURED BY RESISTANCE AND SPEED
                </h4>
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                    </svg>
                    400-600 CALORIES PER HOUR
                </h4><br>
                <h4>DURING A GYM CYCLING SESSION, YOU'LL TYPICALLY FOLLOW A GUIDED WORKOUT LED BY AN INSTRUCTOR WHO SETS
                    THE PACE AND
                    INTENSITY LEVELS, OFTEN ACCOMPANIED BY ENERGIZING MUSIC</h4>
            </div>
        </section>
    </div>

    <div id="membership">
        <!-- Membership Content -->
        <h2 class="membertitle">MEMBERSHIP</h2>
        <div class="carousel-container">
            <div class="carousel">
                <div class="item">
                    <img src="img/silver.png" alt="Silver" class="item-image">
                    <h2>Silver</h2>
                    <p>₱300 <br><strong>2 Months Voucher</strong><br> <br>Access to cardio and weight areas<br> Group classes twice a week<br> One personal training session per month</p>
                </div>
                <div class="item">
                    <img src="img/gold.png" alt="Gold" class="item-image">
                    <h2>Gold</h2>
                    <p>₱1000 <br><strong>6 Months Voucher</strong><br><br> Full gym access<br>Unlimited group classes<br>Two personal training sessions per month<br>Access to sauna and steam room</p>
                </div>
                <div class="item">
                    <img src="img/platinum.png" alt="Platinum" class="item-image">
                    <h2>Platinum</h2>
                    <p>₱2000 <br><strong>1 year Voucher</strong><br><br> All facilities access 24/7<br>Unlimited group classes and personal training sessions<br>Nutritional consultation<br>Complimentary massage sessions twice a month</p>
                </div>
            </div>
            <button class="prev-btn">&lt;</button>
            <button class="next-btn">&gt;</button>
        </div>
    </div>

    <div id="trainer">
        <!-- Trainer page -->
        <h2>Featured Trainer</h2>
        <section class="tr">
            <div>
                <img src="img/ava.jpg" alt="pictr">
                <h3>Ava Agile</h3>
                <h5>The Functional Fitness Coach</h5>
                <p><strong>Personal Information:</strong> Ava is a certified functional fitness trainer with a background in physical therapy. She is empathetic and focuses on helping clients improve their everyday movements and functionality.</p>
                <p><strong>Specialization:</strong> Functional fitness exercises, injury prevention, mobility training, and rehabilitation programs.</p>

            </div>
            <div>
                <img src="img/max.jpg" alt="pictr">
                <h3>Max Muscle</h3>
                <h5>The Strength and Conditioning <br>Expert</h5>
                <p><strong>Personal Information:</strong> Max is a former competitive bodybuilder turned coach. He has a vibrant personality and is passionate about helping clients achieve their strength and muscle-building goals.</p>
                <p><strong>Specialization:</strong>Strength training, muscle building, powerlifting techniques, and personalized nutrition plans.</p>

            </div>
            <div>
                <img src="img/zoe.jpg" alt="pictr">
                <h3>Zenith Zoe</h3>
                <h5>The Mindful Trainer</h5>
                <p><strong>Personal Information:</strong> Zoe is a certified yoga instructor and meditation practitioner with a calm and composed demeanor. She believes in the power of mindfulness and mental well-being alongside physical fitness.</p>
                <p><strong>Specialization:</strong> Yoga, meditation, stress relief techniques, and holistic wellness programs.</p>
            </div>
            <div>
                <img src="img/leo.jpg" alt="pictr">
                <h3>Leo Lean</h3> 
                <h5>The HIIT Specialist</h5>
                <p><strong>Personal Information:</strong> Leo is an energetic and enthusiastic coach with a background in athletics. He loves high-intensity workouts and believes in pushing clients to their limits for maximum results.</p>
                <p><strong>Specialization:</strong> High-intensity interval training (HIIT), circuit workouts, cardio endurance, and metabolic conditioning.</p>

            </div>
        </section>
    </div>

    <div id="contact">
        <!-- Contact page -->
        <section class="contact-section">
            <h2>Contact Us</h2>
            <p>Feel free to reach out to us if you have any questions or inquiries. We're here to help you on your
                fitness
                journey!</p>
            <ul>
                <li><strong>Phone:</strong> [Your gym's phone number]</li>
                <li><strong>Email:</strong> [Your gym's email address]</li>
                <li><strong>Address:</strong> [Your gym's physical address]</li>
            </ul>
            <p>You can also connect with us on social media:</p>
            <ul class="social-links">
                <li><a href="[Your gym's Facebook page link]">Facebook</a></li>
                <li><a href="[Your gym's Instagram link]">Instagram</a></li>
                <li><a href="[Your gym's Twitter link]">Twitter</a></li>
            </ul>
        </section>
    </div>

    <!-- Back to Top Button -->
    <a href="#home" class="back-button">
        <i class="fas fa-arrow-left"></i> Back
    </a>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4>Operating Hours</h4>
                    <p>Monday - Friday: 6:00 AM - 10:00 PM</p>
                    <p>Saturday: 8:00 AM - 8:00 PM</p>
                    <p>Sunday: 9:00 AM - 6:00 PM</p>
                </div>
                <div class="col-md-4">
                    <h4>Stay Updated</h4>
                    <p>Subscribe to our newsletter for exclusive offers and fitness tips.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Privacy Policy | Terms of Service</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>