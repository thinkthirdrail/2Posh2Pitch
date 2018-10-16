<?php get_header(); ?>

<section class="banner">
    <div class="venue">
        <div class="venue-content">
            <div class="venue-desc">
                <p class="close">X</p>
                <h2>Burnham Breck</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra, dolor et lacinia ornare, nibh ante mollis enim, ac convallis libero sem id massa. Maecenas ligula purus, vulputate at massa quis, consequat pharetra urna. Duis eget orci euismod, molestie lorem vel, venenatis magna.</p>
                <div class="buttons">
                    <div class="button-blue"><p>Book & Info</p><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="venue-image">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/image.jpg" />
            </div>
        </div>
    </div>
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/eWdj5_v5YAQ?rel=0&amp;controls=0&amp;loop=1&playlist=eWdj5_v5YAQ;showinfo=0;autoplay=1;start=29;end=31;" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
    <div class="cta">
        <i class="fas fa-times"></i>
        <div class="head-text">
            <h1>Welcome</h1>
            <h2><span>Select a pitch</span></h2>
        </div>
        <div class="buttons">
            <div class="button-blue"><p>Burnham Breck</p><i class="fas fa-arrow-right"></i></div>
            <div class="button-white"><p>Whitehall Farm</p><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="social">
            <a href="#" id="fb"><p>Facebook</p></a> <span class="seperate">•</span>
            <a href="#" id="twitter"><p>Twitter</p></a> <span class="seperate">•</span>
            <a href="#" id="instagram"><p>Instagram</p></a> <span class="seperate">•</span>
            <a href="#" id="youtube"><p>Youtube</p></a>
        </div>
    </div>
    <div class="overlay"></div>
    <p class="tag">A BEAUTUFUL<br> ESCAPE</p>
</section>
<section class="pre-blog">

        <div class="blue-block"></div>
        <div class="grey-block"></div>

        <div class="left-block">
            <main class="wrapper">
                <div class="head-text">
                    <h1>Luxury</h1>
                    <h2><span>Bell tent hire</span></h2>
                    <i class="fas fa-times"></i>
                </div>
                <div class="divider"></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra, dolor et lacinia ornare, nibh ante mollis enim, ac convallis libero sem id massa. Maecenas ligula purus, vulputate at massa quis, consequat pharetra urna. Duis eget orci euismod, molestie lorem vel, venenatis magna.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra, dolor et lacinia ornare, nibh ante mollis enim, ac convallis libero sem id massa. Maecenas ligula purus, vulputate at massa quis, consequat pharetra urna. Duis eget orci euismod, molestie lorem vel, venenatis magna.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra, dolor et lacinia ornare, nibh ante mollis enim, ac convallis libero sem id massa. Maecenas ligula purus, vulputate at massa quis, consequat pharetra urna. Duis eget orci euismod, molestie lorem vel, venenatis magna.
                </p>
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/sig.svg" />
            </main>
        </div>

        <div class="right-block">
            <main class="wrapper">
                <div class="offset-box">
                    <p class="italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet euismod purus.
                    </p>
                </div>
            </main>
        </div>

</section>
<section class="home-blog">
    <div class="blue-block"></div>
    <div class="clear-block"></div>
    <div class="blog-box">
        <div class="blog-image">
            <div class="buttons">
                <div class="button-white"><p>Read More on this post</p><i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="overlay"></div>
        </div>
        <div class="blog-content">
            <i class="fas fa-times"></i>
            <div class="head-text">
                <h2>12th January 2018</h2>
                <div class="divider"></div>
                <h3>Lorem ipsum dolor sit amet.</h3>
            </div>
        </div>
    </div>
</section>
<section class="gallery">
    <div class="image-block">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/image.jpg" />
    </div>
    <div class="description-block">
        <div class="slide-nav">
            <i class="fas fa-arrow-circle-left"></i><i class="fas fa-arrow-circle-right"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</section>
<section class="post-blog">
    <div class="left-block">
        <div class="head-text">
            <h1>Booked?</h1>
            <h2><span>Select your pitch</span></h2>
        </div>
        <div class="buttons">
            <div class="button-white"><p>Whitehall Farm</p><i class="fas fa-arrow-right"></i></div>
            <div class="button-white"><p>Burnham Breck</p><i class="fas fa-arrow-right"></i></div>
            <div class="button-blue"><p>Private Hire</p><i class="fas fa-arrow-right"></i></div>
        </div>
    </div>
    <div class="right-block">
        <div class="head-text">
            <h1>Sign up</h1>
            <h2><span>and receive latest offers</span></h2>
        </div>
        <div class="input-fields">
            <input type="text" name="name" placeholder="Your Name" id="newsletter-name" />
            <input type="email" name="email" placeholder="Your Email" id="newsletter-email" />
            <div class="buttons">
                <div class="button-blue"><p>Submit</p><i class="fas fa-arrow-right"></i></div>
            </div>
        </div>
    </div>
</section>
<section class="credit">
    <img src="http://www.thinkthirdrail.co.uk/img/symbol.svg" alt="Design and development by Thirdrail Creative" width="30" id="credit">
</section>


<?php get_footer(); ?>
