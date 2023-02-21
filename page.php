<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress rs_pet_blogt of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RS Pet Blog
 */
get_header();
?>
<div id="primary" class="content-area">
    <div class="heroPage">

        <div class="entry-content">
            <h6 class="entry-title">
                Saskatoon Waterpaws
            </h6>
            <h1>
                What’s a Little Water Between Best Friends?
            </h1>
            <h5>
                Saskatoon’s only heated indoor dog pool offering recreation, swims, and hydrotherapy
            </h5>
        </div><!-- .entry-content -->
        <div class="heroImage">

        </div>
    </div>
    <div class="cardSection1">
        <div class="card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Hydrotherapy and Rehabilitation
                </h3>
                <p id="pText" class="text">

                    <?php $content = " We believe that a healthy dog is a happy dog. With hydrotherapy sessions at our heated
                    indoor pool,
                    the recovery of your injured best friend can take place at a faster pace. Get in touch with us for
                    more in-depth information about canine hydrotherapy.";
                    $short_content = substr($content, 0, 150) . '...';

                    // How to get PHP variable in Javascript????

                    echo $short_content . '<span class="seeMore" onclick="expand(\'echo $content\')">See
                    more</span></p>';

                    echo '<script>
                function expand(content) {
                    const text = document.querySelector(\'.text\');
                            if (text !== null) {
                                text.style.height = \'auto\';
                                text.style.overflow = \'visible\';
                                const seeMore = text.querySelector(\'.seeMore\');
                                    if (seeMore !== null) {
                                        seeMore.style.display = \'none\';
                                        console.log(content);
                                        text.innerHTML = content;
                                    }
                                }
                            }
                </script>';
                    ?>
            </div>
        </div>
        <div class="card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Recreational Swimming for Pets
                </h3>
                <p>
                    No matter the season, dogs need their exercise, and indoor swimming is a great alternative to
                    exercising outdoors in our cold Saskatchewan winters. Swim your winter blues away! Doggie blow
                    dryers available on site to avoid the sniffles.
                </p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
        <div class="card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Pet Grooming Service
                </h3>
                <p>
                    Dogs are big on instinct and they bounce off the happy energy we have when we’re around them. Bubbly
                    and cuddly go together well. Bring your fine furry friends over for some serious pampered dog
                    grooming at our salon.
                </p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
    <div class="midSection1">

        <div class="midSection1Content">
            <h6 class="entry-title">
                Saskatoon Waterpaws
            </h6>
            <h1>
                What’s a Little Water Between Best Friends?
            </h1>
            <h5>
                Saskatoon’s only heated indoor dog pool offering recreation, swims, and hydrotherapy
            </h5>
        </div><!-- .entry-content -->
        <div class="midsection1Image">

        </div>
    </div>
    <div class="cardSection2">
        <div class="card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Hydrotherapy and Rehabilitation
                </h3>
                <p>
                    We believe that a healthy dog is a happy dog. With hydrotherapy sessions at our heated indoor pool,
                    the recovery of your injured best friend can take place at a faster pace. Get in touch with us for
                    more in-depth information about canine hydrotherapy.
                </p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
        <div class="card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Recreational Swimming for Pets
                </h3>
                <p>
                    No matter the season, dogs need their exercise, and indoor swimming is a great alternative to
                    exercising outdoors in our cold Saskatchewan winters. Swim your winter blues away! Doggie blow
                    dryers available on site to avoid the sniffles.
                </p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
        <div class="card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Pet Grooming Service
                </h3>
                <p>
                    Dogs are big on instinct and they bounce off the happy energy we have when we’re around them. Bubbly
                    and cuddly go together well. Bring your fine furry friends over for some serious pampered dog
                    grooming at our salon.
                </p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</div><!-- #primary -->
<?php
get_footer(); ?>