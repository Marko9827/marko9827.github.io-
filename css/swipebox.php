/*! Swipebox v1.3.0 | Constantin Saguin csag.co | MIT License | github.com/brutaldesign/swipebox */
html.swipebox-html.swipebox-touch {
    overflow: hidden !important;
}

#swipebox-overlay img {
    border: none !important;
}

#swipebox-overlay {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99999 !important;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

#swipebox-container {
    position: relative;
    width: 100%;
    height: 100%;
}

#swipebox-slider {
    -webkit-transition: -webkit-transform 0.4s ease;
    transition: transform 0.4s ease;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
    white-space: nowrap;
    position: absolute;
    display: none;
    cursor: pointer;
}

#swipebox-slider .slide {
    height: 100%;
    width: 100%;
    line-height: 1px;
    text-align: center;
    display: inline-block;
}

#swipebox-slider .slide:before {
    content: "";
    display: inline-block;
    height: 50%;
    width: 1px;
    margin-right: -1px;
}

#swipebox-slider .slide img,
#swipebox-slider .slide .swipebox-video-container,
#swipebox-slider .slide .swipebox-inline-container {
    display: inline-block;
    max-height: 100%;
    max-width: 100%;
    margin: 0;
    padding: 0;
    width: auto;
    height: auto;
    vertical-align: middle;
}

#swipebox-slider .slide .swipebox-video-container {
    background: none;
    max-width: 1140px;
    max-height: 100%;
    width: 100%;
    padding: 5%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

#swipebox-slider .slide .swipebox-video-container .swipebox-video {
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
    overflow: hidden;
    position: relative;
}

#swipebox-slider .slide .swipebox-video-container .swipebox-video iframe {
    width: 100% !important;
    height: 100% !important;
    position: absolute;
    top: 0;
    left: 0;
}

#swipebox-slider .slide-loading {
    background: url(../img/loader.html) no-repeat center center;
}

#swipebox-bottom-bar,
#swipebox-top-bar {
    -webkit-transition: 0.5s;
    transition: 0.5s;
    position: absolute;
    left: 0;
    z-index: 999;
    height: 50px;
    width: 100%;
}

#swipebox-bottom-bar {
    bottom: -50px;
}

#swipebox-bottom-bar.visible-bars {
    -webkit-transform: translate3d(0, -50px, 0);
    transform: translate3d(0, -50px, 0);
}

#swipebox-top-bar {
    top: -50px;
}

#swipebox-top-bar.visible-bars {
    -webkit-transform: translate3d(0, 50px, 0);
    transform: translate3d(0, 50px, 0);
}

#swipebox-title {
    display: block;
    width: 100%;
    text-align: center;
}

#swipebox-prev,
#swipebox-next,
#swipebox-close {
    /*background-image: url(../img/icons.png);*/
    background-repeat: no-repeat;
    border: none !important;
    text-decoration: none !important;
    cursor: pointer;
    width: 50px;
    height: 50px;
    top: 0;
}

#swipebox-arrows {
    display: block;
    margin: 0 auto;
    width: 100%;
    height: 50px;
}

#swipebox-prev {
    background-position: -32px 13px;
    float: left;
    line-height: 50px;
    text-align: center;
    font-size: 2rem;
}

#swipebox-next {
    background-position: -78px 13px;
    float: right;
    line-height: 50px;
    text-align: center;
    font-size: 2rem;
}

#swipebox-close {
    top: 0;
    right: 0;
    position: absolute;
    z-index: 9999;
    background-position: 15px 12px;
    line-height: 50px;
    text-align: center;
    font-size: 1.6rem;
}

.swipebox-no-close-button #swipebox-close {
    display: none;
}

#swipebox-prev.disabled,
#swipebox-next.disabled {
    opacity: 0.15;
}

.swipebox-no-touch #swipebox-overlay.rightSpring #swipebox-slider {
    -webkit-animation: rightSpring 0.3s;
    animation: rightSpring 0.3s;
}

.swipebox-no-touch #swipebox-overlay.leftSpring #swipebox-slider {
    -webkit-animation: leftSpring 0.3s;
    animation: leftSpring 0.3s;
}

.swipebox-touch #swipebox-container:before, .swipebox-touch #swipebox-container:after {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    content: ' ';
    position: absolute;
    z-index: 999;
    top: 0;
    height: 100%;
    width: 20px;
    opacity: 0;
}

.swipebox-touch #swipebox-container:before {
    left: 0;
    -webkit-box-shadow: inset 10px 0px 10px -8px #656565;
    box-shadow: inset 10px 0px 10px -8px #656565;
}

.swipebox-touch #swipebox-container:after {
    right: 0;
    -webkit-box-shadow: inset -10px 0px 10px -8px #656565;
    box-shadow: inset -10px 0px 10px -8px #656565;
}

.swipebox-touch #swipebox-overlay.leftSpringTouch #swipebox-container:before {
    opacity: 1;
}

.swipebox-touch #swipebox-overlay.rightSpringTouch #swipebox-container:after {
    opacity: 1;
}

@-webkit-keyframes rightSpring {
    0% {
        left: 0;
    }

    50% {
        left: -30px;
    }

    100% {
        left: 0;
    }
}

@keyframes rightSpring {
    0% {
        left: 0;
    }

    50% {
        left: -30px;
    }

    100% {
        left: 0;
    }
}

@-webkit-keyframes leftSpring {
    0% {
        left: 0;
    }

    50% {
        left: 30px;
    }

    100% {
        left: 0;
    }
}

@keyframes leftSpring {
    0% {
        left: 0;
    }

    50% {
        left: 30px;
    }

    100% {
        left: 0;
    }
}

@media screen and (min-width: 800px) {
    #swipebox-close {
        right: 10px;
    }

    #swipebox-arrows {
        width: 92%;
        max-width: 800px;
    }
}

/* Skin 
--------------------------*/
#swipebox-overlay {
    background: #0d0d0d;
}

#swipebox-bottom-bar,
#swipebox-top-bar {
    text-shadow: 1px 1px 1px black;
    background: #000;
    opacity: 0.95;
}

#swipebox-top-bar {
    color: white !important;
    font-size: 15px;
    line-height: 43px;
    font-family: Helvetica, Arial, sans-serif;
}