<header class="header" id="navbar">
    <div style ="height: 0.75vh; background : var(--primary-color);"></div>
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo-3.png" alt="logo"></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler--icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav mainmenu">
                            <ul>
                                <li
                                @if (isset($active)  && $active=="home" || $active=="/" )
                                class="active"
                                @endif>
                                    <a href="/">Home</a>
                                </li>
                                <li
                                @if (isset($active)  && $active=="blog" )
                                class="active"
                                @endif
                                 >
                                    <a href="/blog">Dating Blog</a>
                                </li>
                                <li>
                                    <a href="#0">Events</a>
                                </li>
                                <li>
                                    <a href="#faq">FAQ</a>
                                </li>
                                <li>
                                    <a href="#joinWaitListModal" data-toggle="modal">Join Our Waitlist</a>
                                </li>
                                <li>
                                    <a href="#plansModal" data-toggle="modal">Our Plans
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</header>