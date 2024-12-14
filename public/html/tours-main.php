<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Cungkou Tours</title>
    <link rel="stylesheet" href="../css/tours-main.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    <?php include "../php/tours-main.php"?>
</head>

<body>

    <div class="china-tours-main">
        <div class="frame-parent">
            <div class="frame-group">
                <div class="frame-container">
                    <div class="material-symbolscall-outline-parent">
                        <img class="material-symbolscall-outline-icon" alt="" src="material-symbols:call-outline.svg">

                        <div class="div">+1 3756 29391234</div>
                    </div>
                    <div class="material-symbolscall-outline-parent">
                        <img class="material-symbolscall-outline-icon" alt="" src="material-symbols:call-outline.svg">

                        <div class="div">+1 3756 29391234</div>
                        <div class="div">/</div>
                        <div class="div">+1 3756 29391234</div>
                    </div>
                </div>
                <div class="tailor-my-trip-parent">
                    <div class="tailor-my-trip">Tailor My Trip</div>
                    <img class="weuiarrow-filled-icon" alt="" src="weui:arrow-filled.svg">

                </div>
            </div>
            <div class="frame-div">
                <div class="material-symbolstravel-parent">
                    <img class="material-symbolstravel-icon" alt="" src="material-symbols:travel.svg">

                    <div class="cungkuo-tour">Cungkuo Tour</div>
                </div>
                <div class="frame-parent1">
                    <div class="frame-parent2">
                        <div class="china-tours-parent">
                            <div class="div">China Tours</div>
                            <img class="icsharp-expand-more-icon" alt="" src="ic:sharp-expand-more.svg">

                        </div>
                        <div class="china-tours-parent">
                            <div class="div">About Us</div>
                            <img class="icsharp-expand-more-icon" alt="" src="ic:sharp-expand-more.svg">

                        </div>
                        <div class="contact-us-wrapper">
                            <a href="../php/logout.php">
                                <div class="div">Logout</div>
                            </a>
                        </div>
                    </div>
                    <div class="icbaseline-search-parent">
                        <img class="icsharp-expand-more-icon" alt="" src="ic:baseline-search.svg">

                        <div class="div">Search Tours</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-parent">
            <img class="image-icon" alt="" src="image.png">

            <div class="image-3">
            </div>
        </div>
        <div class="china-tours-main-inner">
            <div class="best-china-tours-for-seniors-parent">
                <div class="best-china-tours">Best China Tours for Seniors</div>
                <div class="custom-senior-vacations">Custom Senior Vacations to Popular Destinations</div>
            </div>
        </div>
        <div class="home-china">Home &gt; China Tour Packages</div>
        <div class="china-is-a-country-filled-with-wrapper">
            <div class="china-is-a">China is a country filled with historical heritage and stunning landscapes.
                Experience the best of China with our private China tours, which can be customized to fit your budget,
                schedule, and preferences without any shopping stops in the itinerary. And our private tour
                guides and 24/7 customer service ensure you enjoy the real China in a comfortable and carefree way. 
            </div>
        </div>
        <div class="china-tours-main-child">
            <div class="frame-parent3">
                <div class="best-china-small-group-tours-2-parent">
                    <div class="best-china-small">Best China Small Group Tours 2024/2025</div>
                    <div class="experience-a-trip">Experience a trip of a lifetime with our top-rated small-group China
                        tours! Journey through iconic destinations such as Beijing, Xi'an, Shanghai, Lhasa, and Chengdu.
                        These tour packages include meals, domestic transport from flights to vehicles, cozy
                        accommodations, must-see attractions, expert guides, and essential entry fees. Ensuring you a
                        hassle-free travel experience with the best value and unforgettable memories!</div>
                </div>
                <div class="frame-wrapper">
                    <div class="frame-wrapper1">
                        <div class="group-parent">

                            <?php
								include("../php/koneksi.php");

								// urut berdasar jumlah rating
								$result = mysqli_query($koneksi, "SELECT * FROM tours WHERE jumlah_hari <= 8 ORDER BY jumlah_rating DESC LIMIT 4");

								if (mysqli_num_rows($result) > 0) {
									while ($data = mysqli_fetch_assoc($result)) {
										echo '
                                            <div class="image-6-parent">
                                                <img class="image-6-icon" src="data:image/jpeg;base64,' . base64_encode($data['gambar_tempat']) . '" alt="' . $data['nama_tempat'] . '"/>

                                                <div class="frame-parent11">
                                                    <div class="beijing-xian-shanghai-best-parent">
                                                        <div class="beijing-xian">'.$data['nama_tempat'].'</div>
                                                        <div class="china-odyssey-tours">'.$data['jumlah_hari'].'</div>
                                                        <div class="beijing-xian-shanghai">'.$data['nama_tempat'].'</div>
                                                    </div>
                                                    <div class="explore-this-tour-wrapper">
                                                        <div class="tailor-my-trip">Explore This Tour</div>
                                                    </div>
                                                </div>
                                            </div>
										';
									}   
								}
							?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="china-tours-main-inner1">
            <div class="frame-parent3">
                <div class="china-tours-by-interests-parent">
                    <div class="best-china-small">China Tours by Interests</div>
                    <div class="experience-a-trip">Discover our specialized China tours tailored to different interests.
                        Whether you're fascinated by the ancient silk road, enchanted by cute pandas, passionate about
                        Chinese Kungfu, or seeking an in-depth China tour, we have something for everyone.
                        <a class="customize" href="https://www.chinaodysseytours.com/contact-us.htm" target="_blank">
                            <span class="customize1">Customize</span>
                        </a> your perfect China tour with us today.
                    </div>
                </div>
                <div class="best-china-tours-for-seniors-parent">
                    <div class="frame-wrapper1">
                        <div class="group-parent">
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="best-china-tours-for-seniors-parent">
                    <div class="frame-wrapper1">
                        <div class="group-parent">
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent5">
                                    <div class="beijing-xian-shanghai-best-parent">
                                        <div class="beijing-xian">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="best-china-small">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="frame-parent20">
            <div class="insight-china-travel-guides-parent">
                <div class="insight-china-travel">Insight China Travel Guides</div>
                <div class="experience-a-trip">Feeling lost on how to plan your China trip? Our
                    <a class="customize" href="https://www.chinaodysseytours.com/inspiration/" target="_blank">
                        <span class="customize1">travel guides</span>
                    </a> are designed to provide you with complete tips and suggestions about China travel, from visa
                    information to the best times to visit, top attractions, and authentic experiences.
                </div>
            </div>
            <div class="best-china-tours-for-seniors-parent">
                <div class="frame-wrapper1">
                    <div class="frame-parent21">
                        <?php
                            include("../php/koneksi.php");

                            // urut berdasar jumlah like
                            $result = mysqli_query($koneksi, "SELECT * FROM guides LIMIT 3");

                            if (mysqli_num_rows($result) > 0) {
                                while ($data = mysqli_fetch_assoc($result)) {
                                    echo '
                                        <div class="image-6-parent10">
                                            <img class="image-6-icon12" src="data:image/jpeg;base64,' . base64_encode($data['gambar_guide']) . '" alt="' . $data['nama_guide'] . '">

                                            <div class="china-in-winter-top-places-w-wrapper">
                                                <div class="china-in-winter">'.$data['nama_guide'].'</div>
                                            </div>
                                        </div>
                                    ';
                                }   
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="frame-parent23">
            <div class="what-our-clients-say-parent">
                <div class="best-china-small">What Our Clients Say</div>
                <div class="great-customized-service">"Great Customized Service", "Trip of A Lifetime", "Exceed All
                    Expectations"</div>
            </div>
            <div class="weuiarrow-filled-parent">
                <div class="weuiarrow-filled">
                    <img class="vector-icon" alt="" src="Vector.svg">

                </div>
                <div class="frame-parent24">
                    <div class="frame-wrapper10">
                        <div class="frame-parent25">
                            <div class="frame-parent26">
                                <div class="image-10-parent">
                                    <img class="image-10-icon" alt="" src="image 10.png">

                                    <div class="renato-cristine-faro-parent">
                                        <div class="renato-cristine">Renato & Cristine Faro</div>
                                        <div class="november-2024">11 November 2024</div>
                                    </div>
                                </div>
                                <div class="line-mdstar-filled-parent">
                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                </div>
                            </div>
                            <div class="i-recently-concluded">I recently concluded a 12-day tour of four cities in China
                                with Odynovo as a solo female traveler. Odynovo was truly the best from start to finish:
                                a superbly organized trip with hotels in excellent locations and</div>
                        </div>
                    </div>
                    <div class="frame-wrapper10">
                        <div class="frame-parent25">
                            <div class="frame-parent26">
                                <div class="image-10-parent">
                                    <img class="image-10-icon" alt="" src="image 10.png">

                                    <div class="renato-cristine-faro-parent">
                                        <div class="renato-cristine">Renato & Cristine Faro</div>
                                        <div class="november-2024">11 November 2024</div>
                                    </div>
                                </div>
                                <div class="line-mdstar-filled-parent">
                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                </div>
                            </div>
                            <div class="i-recently-concluded">I recently concluded a 12-day tour of four cities in China
                                with Odynovo as a solo female traveler. Odynovo was truly the best from start to finish:
                                a superbly organized trip with hotels in excellent locations and</div>
                        </div>
                    </div>
                    <div class="frame-wrapper10">
                        <div class="frame-parent25">
                            <div class="frame-parent26">
                                <div class="image-10-parent">
                                    <img class="image-10-icon" alt="" src="image 10.png">

                                    <div class="renato-cristine-faro-parent">
                                        <div class="renato-cristine">Renato & Cristine Faro</div>
                                        <div class="november-2024">11 November 2024</div>
                                    </div>
                                </div>
                                <div class="line-mdstar-filled-parent">
                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                    <img class="line-mdstar-filled-icon" alt="" src="line-md:star-filled.svg">

                                </div>
                            </div>
                            <div class="i-recently-concluded">I recently concluded a 12-day tour of four cities in China
                                with Odynovo as a solo female traveler. Odynovo was truly the best from start to finish:
                                a superbly organized trip with hotels in excellent locations and</div>
                        </div>
                    </div>
                </div>
                <div class="weuiarrow-filled1">
                    <img class="vector-icon1" alt="" src="Vector.svg">

                </div>
            </div>
        </div>
        <div class="frame-parent31">
            <div class="frame-parent32">
                <div class="frame-parent33">
                    <div class="frame-parent34">
                        <div class="contact-a-travel-expert-parent">
                            <b class="insight-china-travel">CONTACT A TRAVEL EXPERT</b>
                            <div class="insight-china-travel">TO CUSTOMIZE YOUR CHINA TRIP</div>
                        </div>
                        <b class="to-1-service">1-to-1 Service | Reply within 24hrs | Expert's Advice</b>
                    </div>
                    <div class="start-planning-wrapper">
                        <div class="tailor-my-trip">Start Planning</div>
                    </div>
                </div>
                <div class="frame-wrapper13">
                    <div class="frame-parent35">
                        <div class="dashiconsadmin-users-parent">
                            <img class="image-6-icon18" alt="" src="image 6.png">

                            <div class="kevin-yang-wrapper">
                                <div class="frame-parent36">
                                    <div class="kevin-yang-wrapper">
                                        <div class="kevin-yang">Kevin Yang</div>
                                    </div>
                                    <div class="senior-travel-expert">Senior Travel Expert</div>
                                </div>
                            </div>
                        </div>
                        <div class="dashiconsadmin-users-parent">
                            <img class="image-6-icon18" alt="" src="image 6.png">

                            <div class="kevin-yang-wrapper">
                                <div class="frame-parent36">
                                    <div class="kevin-yang-wrapper">
                                        <div class="kevin-yang">Kevin Yang</div>
                                    </div>
                                    <div class="senior-travel-expert">Senior Travel Expert</div>
                                </div>
                            </div>
                        </div>
                        <div class="dashiconsadmin-users-parent">
                            <img class="image-6-icon18" alt="" src="image 6.png">

                            <div class="kevin-yang-wrapper">
                                <div class="frame-parent36">
                                    <div class="kevin-yang-wrapper">
                                        <div class="kevin-yang">Kevin Yang</div>
                                    </div>
                                    <div class="senior-travel-expert">Senior Travel Expert</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame-parent39">
                <div class="frame-wrapper17">
                    <div class="contact-a-travel-expert-parent">
                        <div class="insight-china-travel">What You’ll Receive</div>
                    </div>
                </div>
                <div class="frame-wrapper18">
                    <div class="frame-parent40">
                        <div class="dashiconsadmin-users-parent">
                            <div class="dashiconsadmin-users">
                                <img class="vector-icon2" alt="" src="Vector.svg">

                            </div>
                            <div class="kevin-yang-wrapper">
                                <div class="travel-expert-know-places-ins-wrapper">
                                    <div class="travel-expert-know">1:1 Travel Expert, Know Places Inside Out</div>
                                </div>
                            </div>
                        </div>
                        <div class="dashiconsadmin-users-parent">
                            <div class="dashiconsadmin-users">
                                <img class="mingcutetask-2-fill-icon" alt="" src="mingcute:task-2-fill.svg">

                            </div>
                            <div class="kevin-yang-wrapper">
                                <div class="travel-expert-know-places-ins-wrapper">
                                    <div class="travel-expert-know">1:1 Travel Expert, Know Places Inside Out</div>
                                </div>
                            </div>
                        </div>
                        <div class="dashiconsadmin-users-parent">
                            <div class="dashiconsadmin-users">
                                <img class="mingcutetask-2-fill-icon" alt="" src="material-symbols-light:reviews.svg">

                            </div>
                            <div class="kevin-yang-wrapper">
                                <div class="travel-expert-know-places-ins-wrapper">
                                    <div class="travel-expert-know">1:1 Travel Expert, Know Places Inside Out</div>
                                </div>
                            </div>
                        </div>
                        <div class="dashiconsadmin-users-parent">
                            <div class="dashiconsadmin-users">
                                <img class="mingcutetask-2-fill-icon" alt="" src="tabler:beach.svg">

                            </div>
                            <div class="kevin-yang-wrapper">
                                <div class="travel-expert-know-places-ins-wrapper">
                                    <div class="travel-expert-know">1:1 Travel Expert, Know Places Inside Out</div>
                                </div>
                            </div>
                        </div>
                        <div class="dashiconsadmin-users-parent">
                            <div class="dashiconsadmin-users">
                                <img class="mingcutetask-2-fill-icon" alt="" src="mdi:heart.svg">

                            </div>
                            <div class="kevin-yang-wrapper">
                                <div class="travel-expert-know-places-ins-wrapper">
                                    <div class="travel-expert-know">1:1 Travel Expert, Know Places Inside Out</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame-parent41">
                <div class="subscribe-to-win-a-free-tour-parent">
                    <div class="best-china-small">SUBSCRIBE TO WIN A FREE TOUR</div>
                    <div class="subscribe-to-our">Subscribe to our newsletter for a chance to win a free 7-day Vietnam
                        tour! And more insider travel news, exclusive offers, and inspiration will be sent straight to
                        your inbox.</div>
                </div>
                <div class="material-symbolsmail-outline">
                    <img class="vector-icon3" alt="" src="Vector.svg">

                </div>
                <div class="frame-parent42">
                    <div class="frame-parent43">
                        <div class="your-email-address-wrapper">
                            <div class="div">Your email address</div>
                        </div>
                        <div class="subscribe-wrapper">
                            <div class="div">Subscribe</div>
                        </div>
                    </div>
                    <div class="we-respect-your">We respect your privacy. You could unsubscribe at any time.</div>
                </div>
            </div>
            <div class="frame-wrapper24">
                <div class="frame-wrapper25">
                    <div class="frame-parent44">
                        <div class="frame-parent45">
                            <div class="frame-parent46">
                                <div class="hot-destinations-parent">
                                    <b class="best-china-small">HOT DESTINATIONS</b>
                                    <div class="frame-parent47">
                                        <div class="beijing-parent">
                                            <div class="beijing">Beijing</div>
                                            <div class="beijing">Shanghai</div>
                                            <div class="beijing">Chengdu</div>
                                            <div class="beijing">Hangzou</div>
                                            <div class="beijing">Xi’an</div>
                                        </div>
                                        <div class="beijing-parent">
                                            <div class="beijing">Beijing</div>
                                            <div class="beijing">Shanghai</div>
                                            <div class="beijing">Chengdu</div>
                                            <div class="beijing">Hangzou</div>
                                            <div class="beijing">Xi’an</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-parent">
                                    <b class="best-china-small">COMPANY</b>
                                    <div class="frame-wrapper26">
                                        <div class="beijing-parent">
                                            <div class="beijing">About Us</div>
                                            <div class="review-by-clients">Review by Clients</div>
                                            <div class="review-by-clients">Our Awards</div>
                                            <div class="review-by-clients">Service Overview</div>
                                            <div class="review-by-clients">Contact Us</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resource-parent">
                                    <b class="best-china-small">RESOURCE</b>
                                    <div class="frame-wrapper26">
                                        <div class="beijing-parent">
                                            <div class="customer-center">Customer Center</div>
                                            <div class="review-by-clients">Payment Guide</div>
                                            <div class="review-by-clients">Terms & Conditions</div>
                                            <div class="review-by-clients">Cancellation & Refund</div>
                                            <div class="review-by-clients">Feedback & Complaints</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tablerclock-filled-parent">
                                <img class="tablerclock-filled-icon" alt="" src="tabler:clock-filled.svg">

                                <div class="were-at-your-service-parent">
                                    <b class="best-china-small">We’re at your service</b>
                                    <div class="parent">
                                        <div class="best-china-small">+1 273 83492332</div>
                                        <div class="best-china-small">+61 2 934840234</div>
                                        <div class="best-china-small">+61 234 842 921</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mdiyoutube-parent">
                            <div class="mdiyoutube">
                                <img class="vector-icon4" alt="" src="Vector.svg">

                            </div>
                            <div class="mdiyoutube">
                                <img class="icbaseline-facebook-icon" alt="" src="ic:baseline-facebook.svg">

                            </div>
                            <div class="mdiyoutube">
                                <img class="icbaseline-facebook-icon" alt="" src="mdi:twitter.svg">

                            </div>
                            <div class="mdiyoutube">
                                <img class="icbaseline-facebook-icon" alt="" src="ri:instagram-fill.svg">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="frame-parent48">
            <div class="frame-parent49">
                <div class="best-china-tours-wrapper">
                    <div class="div">Best China Tours</div>
                </div>
                <div class="best-china-tours-wrapper">
                    <div class="div">Tours By Interest</div>
                </div>
                <div class="best-china-tours-wrapper">
                    <div class="div">Review</div>
                </div>
                <div class="best-china-tours-wrapper">
                    <div class="div">FAQs</div>
                </div>
                <div class="best-china-tours-wrapper">
                    <div class="div">Travel Articles</div>
                </div>
            </div>
            <div class="start-planning-container">
                <div class="cungkuo-tour">Start Planning</div>
            </div>
        </div>
        <div class="top-faqs-parent">
            <div class="best-china-small">Top FAQs</div>
            <div class="frame-parent50">
                <div class="where-should-i-go-for-a-first-parent">
                    <div class="div">Where should I go for a first trip to China?</div>
                    <img class="icsharp-expand-more-icon" alt="" src="gridicons:add.svg">

                </div>
                <div class="what-are-the-toilets-like-in-c-parent">
                    <div class="what-are-the">What are the toilets like in China?</div>
                    <img class="icsharp-expand-more-icon" alt="" src="gridicons:add.svg">

                </div>
                <div class="what-are-the-toilets-like-in-c-parent">
                    <div class="what-are-the">Should I tip for food/service or local people in China?</div>
                    <img class="icsharp-expand-more-icon" alt="" src="gridicons:add.svg">

                </div>
                <div class="what-are-the-toilets-like-in-c-parent">
                    <div class="what-are-the">What is the best time to visit China?</div>
                    <img class="icsharp-expand-more-icon" alt="" src="gridicons:add.svg">

                </div>
                <div class="what-are-the-toilets-like-in-c-parent">
                    <div class="what-are-the">Do I need a visa to travel to China?</div>
                    <img class="icsharp-expand-more-icon" alt="" src="gridicons:add.svg">

                </div>
            </div>
            <div class="view-more-wrapper">
                <div class="tailor-my-trip">View More</div>
            </div>
        </div>
        <div class="frame-parent51">
            <div class="china-tour-by-themes-parent">
                <div class="best-china-small">China Tour by Themes</div>
                <div class="experience-a-trip">Whether you are planning a family vacation or a senior tour, our travel
                    specialists will customize the trip to perfectly match your interests and budget. Reach out to us,
                    and let China Odyssey Tours bring your dream trip to life!</div>
            </div>

            <div class="group-parent">
                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">Nature</b>
                    </div>
                </div>

                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">Modern</b>
                    </div>
                </div>

                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">Culture</b>
                    </div>
                </div>

                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">Art</b>
                    </div>
                </div>

                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">History</b>
                    </div>
                </div>

                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">Festival</b>
                    </div>
                </div>

                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">Winter</b>
                    </div>
                </div>

                <div class="group-wrapper">

                    <div class="image-7-parent">
                        <img class="image-7-icon" alt="" src="image 7.png">

                        <div class="image-8">
                        </div>
                        <b class="top-10-china">Wildlife</b>
                    </div>
                </div>
            </div>
        </div>




</body>

</html>