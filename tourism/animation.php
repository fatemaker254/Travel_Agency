<style>
    header.masthead {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    header.masthead .slider {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0;
    }

    header.masthead .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        animation: slideShow 21s infinite;
        will-change: opacity;
        transition: opacity 1s ease-in-out;
        
    }

    /* Target each slide using nth-child instead of custom class */
    header.masthead .slide:nth-child(1) {
        background-image: url('./assets/images/a1.jpg');
        animation-delay: 0s;
    }

    header.masthead .slide:nth-child(2) {
        background-image: url('./assets/images/a2.png');
        animation-delay: 3s;
    }

    header.masthead .slide:nth-child(3) {
        background-image: url('./assets/images/a3.jpg');
        animation-delay: 6s;
    }

    header.masthead .slide:nth-child(4) {
        background-image: url('./assets/images/a4.jpg');
        animation-delay: 9s;
    }

    header.masthead .slide:nth-child(5) {
        background-image: url('./assets/images/a5.jpg');
        animation-delay: 12s;
    }

    header.masthead .slide:nth-child(6) {
        background-image: url('./assets/images/a6.jpg');
        animation-delay: 15s;
    }

    header.masthead .slide:nth-child(7) {
        background-image: url('./assets/images/a7.jpg');
        animation-delay: 18s;
    }

    @keyframes slideShow {
        0% {
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        25% {
            opacity: 1;
        }

        35% {
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
    }

    /* Foreground content */
    header.masthead .container {
        position: relative;
        z-index: 1;
        text-align: center;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding: 20px;
        background: rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        
        /* backdrop-filter: blur(2px); */
    }

    .masthead-subheading {
        font-size: 1.5rem;
        font-weight: 300;
        margin-bottom: 1rem;
    }

    .masthead-heading {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }

    @media (max-width: 768px) {
        .masthead-heading {
            font-size: 2rem;
        }

        .masthead-subheading {
            font-size: 1.2rem;
        }
    }
</style>

<header class="masthead">
    <div class="slider">
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
    </div>

    <div class="container">
        <div class="masthead-subheading">Welcome To Photine Travels</div>
        <div class="masthead-heading text-uppercase">Explore our Tour Packages</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#home" style="text-shadow: 1px 1px rgba(0,0,0,0.5)">View Tours</a>
    </div>
</header>