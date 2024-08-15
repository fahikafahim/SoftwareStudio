<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style sheet -->
    <link rel="stylesheet" href="./style.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- FontAwesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gupter:wght@400;500;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title><?php echo "Software Studio"; ?></title>
</head>
<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#banner"><img src="./images/lg1.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <?php
                        $navItems = [
                            "Home" => "#banner",
                            "Services" => "#services",
                            "About us" => "#about-us",
                            "Contact" => "#footer"
                        ];
                        foreach ($navItems as $item => $link) {
                            echo "<li class='nav-item'><a class='nav-link' href='{$link}'>{$item}</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!------------------Banner section ------------------>
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title"><?php echo "Stunning Websites Await"; ?></p>
                    <p><?php echo "Get custom responsive websites that shine on any device. We specialize in engaging UI/UX designs and seamless Bootstrap integrations. Let's build a standout website that meets all your needs!"; ?></p>

                    <div class="video-quote-container">
                        <video width="320" height="240" autoplay loop preload="auto">
                            <source src="./images/intro.mp4" type="video/mp4" />
                        </video>

                        <blockquote class="custom-quote">
                            <p>
                                <?php echo "\"Working with this team was a game-changer for our business. Their design expertise made our website a true standout!\""; ?>
                            </p>
                            <footer><?php echo "John Doe, <cite>CEO of Example Corp</cite>"; ?></footer>
                        </blockquote>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <img src="images/img.png" alt="Banner image" class="img-fluid banner" />
                </div>
            </div>
        </div>
    </section>

    <!-- Services section -->
    <section id="services">
        <div class="container text-center">
            <h1 class="title"><?php echo "Our Web Design Services"; ?></h1>
            <div class="row text-center">
                <?php
                $services = [
                    ["Responsive Web Design", "Responsive.png", "We create responsive websites that adapt seamlessly to any device, ensuring a consistent and engaging user experience. Our designs prioritize functionality and aesthetics, making sure your site looks stunning whether viewed on a desktop, tablet, or smartphone. Contact us to enhance your online presence with adaptive, user-friendly designs."],
                    ["UI/UX Designs", "ui ux.png", "Our UI/UX design services focus on crafting intuitive and visually appealing user experiences. We combine user research and design principles to create interfaces that are both engaging and easy to navigate. Let us transform your ideas into a polished, user-friendly product that captivates your audience and meets their needs."],
                    ["Bootstrap Development", "Bootstrap.png", "Leverage the power of Bootstrap with our expert development services. We specialize in implementing Bootstrap to create modern, responsive websites with clean and efficient code. Our approach ensures your site is not only visually appealing but also performs seamlessly across all devices. Enhance your website's functionality with our Bootstrap solutions."]
                ];
                foreach ($services as $service) {
                    echo "
                    <div class='col-md-4 services'>
                        <img src='./images/{$service[1]}' alt='services' class='services-img' />
                        <h4>{$service[0]}</h4>
                        <p>{$service[2]}</p>
                    </div>";
                }
                ?>
            </div>
            <button class="btn btn-primary"><?php echo "Explore More"; ?></button>
        </div>
    </section>

    <!---------------- About us section ---------------->
    <section id="about-us">
        <div class="container">
            <h1 class="title text-center"><?php echo "About Us"; ?></h1>
        </div>
        <div class="row">
            <div class="col-md-6 about-us">
                <p class="about-title text-center"><?php echo "Who We Are"; ?></p>
                <p class="content">
                    <?php echo "At Softwave Studio, we craft exceptional web designs that blend creativity with functionality. Our team is dedicated to building stunning, responsive websites that elevate your brand online."; ?>
                </p>
                <p class="about-title text-center"><?php echo "Our Mission"; ?></p>
                <p class="content">
                    <?php echo "We aim to deliver customized, user-friendly websites that excel across all devices. Combining expertise in UI/UX design with Bootstrap integration, we create digital experiences that captivate and convert."; ?>
                </p>
            </div>
            <div class="col-md-6 about-us">
                <img src="./images/services.png" alt="About" class="about-img" />
            </div>
        </div>
    </section>

    <!------------Footer Section -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><?php echo "Get in Touch"; ?></h4>
                    <p><?php echo "Leave us a message and we'll get back to you soon!"; ?></p>
                    <form>
                        <div class="form-group">
                            <label for="name"><?php echo "Name"; ?></label>
                            <input type="text" id="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email"><?php echo "Email"; ?></label>
                            <input type="email" id="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="message"><?php echo "Message"; ?></label>
                            <textarea id="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo "Send"; ?></button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4><?php echo "Follow Us"; ?></h4>
                    <ul class="social-links">
                        <?php
                        $socialLinks = [
                            "fab fa-facebook-f" => "#",
                            "fab fa-twitter" => "#",
                            "fab fa-instagram" => "#",
                            "fab fa-linkedin-in" => "#"
                        ];
                        foreach ($socialLinks as $icon => $link) {
                            echo "<li><a href='{$link}' target='_blank'><i class='{$icon}'></i></a></li>";
                        }
                        ?>
                    </ul>
                    <img src="./images/lg1.png" alt="Footer Logo" class="footer-logo">
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
