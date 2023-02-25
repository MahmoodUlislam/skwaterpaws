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
                <?php
                function expandable_text($id, $short_text, $long_text, $max_length = 150)
                {
                    $class = 'shortText';
                    if (strlen($long_text) <= $max_length) {
                        $short_text = $long_text;
                        $class = 'longText';
                    } else {
                        $short_text = substr($long_text, 0, $max_length) . '...<span class="seeMore" onclick="expand_' . $id . '()">See more</span>';
                    }
                    echo '<p id="pText' . $id . '" class="' . $class . '">' . $short_text . '</p>';
                    echo '<script>
                      function expand_' . $id . '() {
                        const text = document.querySelector(\'#pText' . $id . '\');
                        if (text !== null) {
                          text.classList.remove(\'shortText\');
                          text.classList.add(\'longText\');
                          let seeMore = text.querySelector(\'.seeMore\');
                          if (seeMore !== null) {
                            seeMore.style.display = \'none\';
                            text.innerHTML = \'' . $long_text . '\';
                          }
                        }
                      }
                    </script>';
                }

                ?>
                <p id="<?php "'#pText' . $id . '" ?>" class=" <?php echo "' . $class . '" ?>">
                    <?php
                    $longContent11 = "We believe that a healthy dog is a happy dog. With hydrotherapy sessions at our heated indoor pool, the recovery of your injured best friend can take place at a faster pace. Get in touch with us for more in-depth information about canine hydrotherapy.";
                    $shortContent11 = substr($longContent11, 0, 150) . '...';
                    expandable_text(11, $shortContent11, $longContent11);
                    ?>
                </p>
            </div>
        </div>
        <div class=" card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Recreational Swimming for Pets
                </h3>


                <p id="<?php "'#pText' . $id . '" ?>" class=" <?php echo "' . $class . '" ?>">
                    <?php
                    $longContent12 = "No matter the season, dogs need their exercise, and indoor swimming is a great alternative to
                    exercising outdoors in our cold Saskatchewan winters. Swim your winter blues away! Doggie blow
                    dryers available on site to avoid the sniffles.";
                    $shortContent12 = substr($longContent12, 0, 150) . '...';
                    expandable_text(12, $shortContent12, $longContent12);
                    ?>
                </p>
            </div>
        </div>


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
            Dogs are big on instinct and they bounce off the happy energy we have when we’re around them.
            Bubbly
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
                We believe that a healthy dog is a happy dog. With hydrotherapy sessions at our heated indoor
                pool,
                the recovery of your injured best friend can take place at a faster pace. Get in touch with us
                for
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
            <!-- wp:shortcode -->
            [xyz-ips snippet="shortLongTEXT13"]
            <!-- /wp:shortcode -->
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</div>
</div>
<?php
get_footer(); ?>

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

                <!-- wp:shortcode -->
                [xyz-ips snippet="shortLongTEXT11"]
                <!-- /wp:shortcode -->

            </div>
        </div>
        <div class=" card">
            <div class="cardImageSection">

                <div class="cardImage">

                </div>
            </div>
            <div class="cardContent">
                <h3>
                    Recreational Swimming for Pets
                </h3>


                <!-- wp:shortcode -->
                [xyz-ips snippet="shortLongTEXT12"]
                <!-- /wp:shortcode -->

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
                <!-- wp:shortcode -->
                [xyz-ips snippet="shortLongTEXT13"]
                <!-- /wp:shortcode -->
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
                    We believe that a healthy dog is a happy dog. With hydrotherapy sessions at our heated indoor
                    pool,
                    the recovery of your injured best friend can take place at a faster pace. Get in touch with us
                    for
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
                    Dogs are big on instinct and they bounce off the happy energy we have when we’re around them.
                    Bubbly
                    and cuddly go together well. Bring your fine furry friends over for some serious pampered dog
                    grooming at our salon.
                </p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>