<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio responsive complete</title>
        <link rel="stylesheet" href="{{asset('/css/skills.css')}}"/>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Kuzembay Aidyn</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>HE</span><br>LLO.</h1>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                    </div>

                    <img src="https://sun9-24.userapi.com/impg/i5MFz1UBlEx1dVsyP5nfLllKoFKaA_NEj49ztA/qMbat7QFD2c.jpg?size=1536x1920&quality=96&proxy=1&sign=5d39371e778b929810b0f1ea453e17a3&type=album" alt="" class="home__img">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="https://sun9-46.userapi.com/impg/X1532t8WxbrCWHWYusSOswBWUEJkdWMz_-v8sQ/_v7PwOtuSbQ.jpg?size=1920x1920&quality=96&proxy=1&sign=b06f9ecf715bb39dcc6fd59447d5baaf&type=album" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">I'am Kuzembay Aidyn</h2>
                        <span class="about__profession">Student SDU</span>
                        <p class="about__text">I resolutely undertake any projects and always bring things to the end, I am distinguished by diligence and resistant to stressful work. I can work in a team, resolve conflicts and find compromises. I am creative and generate ideas quickly.</p>

                        <div class="about__social">
                            <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="#" class="about__social-icon"><i class='bx bxl-dribbble' ></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Portfolio</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="https://previews.123rf.com/images/tommisch/tommisch1704/tommisch170400071/75757942-black-objects-from-the-office-on-a-yellow-background-work-and-creativity-top-view-.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="https://image.freepik.com/free-photo/flat-lay-office-desk-table-of-modern-workplace-with-laptop-on-blue-table-top-view-laptop-background-and-copy-space-on-black-background-blue-desk-office-with-laptop_11358-1647.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="https://st3.depositphotos.com/4601361/32674/i/450/depositphotos_326745924-stock-photo-office-desktop-background-with-a.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="https://image.freepik.com/free-photo/top-view-wood-office-desk-table-flat-lay-workspace_35380-2822.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="https://image.freepik.com/free-photo/top-view-working-space-for-business-background-blank-notebook-and-office-supplies-on-wood-background_64749-2744.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="https://thumbs.dreamstime.com/b/%D1%84%D0%BE%D0%BD-%D1%80%D0%B0%D0%B1%D0%BE%D1%87%D0%B5%D0%B3%D0%BE-%D0%BC%D0%B5%D1%81%D1%82%D0%B0-%D0%B7%D0%B5%D0%BB%D0%B5%D0%BD%D0%BE%D0%B3%D0%BE-%D1%86%D0%B2%D0%B5%D1%82%D0%B0-%D0%BC%D0%BE%D1%80%D1%8F-%D0%BE%D1%84%D0%B8%D1%81%D0%B0-%D1%81-%D0%BA%D0%BE%D1%84%D0%B5%D0%B9%D0%BD%D0%BE%D0%B9-%D1%87%D0%B0%D1%88%D0%BA%D0%BE%D0%B9-166359181.jpg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                </div>
            </section>

        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">KUZEMBAY AIDYN</h2>
                    <p class="footer__text">I'm Kuzembay Aidyn and this is my personal website</p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#skills" class="footer__link">Skills</a></li>
                        <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                        <li><a href="#Contact" class="footer__link">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter' ></i></a>
                </div>


            </div>
        </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="mainn.js"></script>
    </body>
</html>