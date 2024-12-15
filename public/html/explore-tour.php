<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Cungkou Tours</title>
    <link rel="icon" href="../asset/favicon.png"/>
    <link rel="stylesheet" href="../css/explore-tour.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    <?php include "../php/explore-tour.php"?>
</head>
</head>
<body>
    <div class="explore-tour">
        <div class="frame-parent">
            <div class="frame-group">
                <div class="frame-container">
                    <div class="material-symbolscall-outline-parent">
                        <img class="material-symbolscall-outline-icon" alt=""
                            src="../asset/material-symbols_call-outline.png">

                        <div class="div">+1 3756 29391234</div>
                    </div>
                    <div class="material-symbolscall-outline-parent">
                        <img class="material-symbolscall-outline-icon" alt=""
                            src="../asset/material-symbols_call-outline.png">

                        <div class="div">+1 3756 29391234</div>
                        <div class="div">/</div>
                        <div class="div">+1 3756 29391234</div>
                    </div>
                </div>
                <div class="tailor-my-trip-parent">
                    <div class="tailor-my-trip">Tailor My Trip</div>
                    <img class="weuiarrow-filled-icon" alt="" src="../asset/weui_arrow-filled.png">

                </div>
            </div>
            <div class="frame-div">
                <div class="material-symbolstravel-parent">
                    <img class="material-symbolstravel-icon" alt="" src="../asset/material-symbols_travel.png">

                    <div class="cungkuo-tour">Cungkuo Tour</div>
                </div>
                <div class="frame-parent1">
                    <div class="frame-parent2">
                        <div class="china-tours-parent">
                            <div class="div">China Tours</div>
							<img class="icsharp-expand-more-icon" alt="" src="../asset/ic_sharp-expand-more.png">
							<div class="dropdown_menu">
								<div class="dropdown-columns">
									<div class="dropdown-column">
										<a href="../html/home.php">Best China Tours</a>
										<a href="../html/tours-main.php">Senior Friendly Tours</a>
										<a href="../html/top-10.php">Top 4 Best China Tours</a>
										<a href="../html/1-week.php">1 Week Tours</a>
									</div>
									<div class="dropdown-column">
										<a href="../html/tour-package.php">China Tour Package</a>
										<a href="../html/student-tour.php">China Tour for Students</a>
										<a href="../html/home.php">1st Time Travel China</a>
										<a href="../html/theme-tour.php">China Theme</a>
									</div>
								</div>
								<div class="dropdown-button">
									<a href="#" class="all-theme-tours-button">All Theme Tours</a>
								</div>
							</div>
						</div>
                        <div class="china-tours-parent">
                            <div class="div">About Us</div>
                            <img class="icsharp-expand-more-icon" alt="" src="../asset/ic_sharp-expand-more.png">

                        </div>
                        <div class="contact-us-wrapper">
                            <div class="div">Contact Us</div>
                        </div>
                    </div>
                    <div class="icbaseline-search-parent">
                        <img class="icsharp-expand-more-icon" alt="" src="../asset/ic_baseline-search.png">

                        <div class="div">Search Tours</div>
                    </div>
                </div>
            </div>
        </div>

        <?php
			include("../php/koneksi.php");

			$id = $_GET["id"];

			$stmt1 = $koneksi->prepare("SELECT * FROM tours WHERE id = ?");
			$stmt1->bind_param("i", $id);
			$stmt1->execute();
			$result1 = $stmt1->get_result();

			if ($result1->num_rows > 0) {
				$row1 = $result1->fetch_assoc(); 

				$stmt2 = $koneksi->prepare("SELECT * FROM comments WHERE tour_id = ?");
				$stmt2->bind_param("i", $id);
				$stmt2->execute();
				$result2 = $stmt2->get_result();
				
				if($result2->num_rows > 0){
					$rating = $row1['jumlah_rating'] / $result2->num_rows;
				} else {
					$rating = 0;
				}
				
				echo '
				
					<img class="image-7-icon" src="data:image/jpeg;base64,' . base64_encode($row1['gambar_tempat']) . '" />
				
					<div class="rectangle-parent">
						<div class="frame-child"></div>
						<div class="frame-wrapper">
							<div class="beijing-xian-shanghai-best-parent">
								<div class="beijing-xian">' . $row1["nama_tempat"] . '</div>
								<div class="frame-parent3">
									<div class="line-mdstar-filled-parent">
										<img class="line-mdstar-filled-icon" alt="" src="../asset/star-filled.png">
										<img class="line-mdstar-filled-icon" alt="" src="../asset/star-filled.png">
										<img class="line-mdstar-filled-icon" alt="" src="../asset/star-filled.png">
										<img class="line-mdstar-filled-icon" alt="" src="../asset/star-filled.png">
										<img class="line-mdstar-filled-icon" alt="" src="../asset/star-filled.png">
									</div>
									<p>'.$rating.'</p>
								</div>
								<div class="div">Tour Code: '.$row1["id"].'</div>
								<div class="div">Destination: '.$row1["nama_tempat"].'</div>
							</div>
						</div>
					</div>
					<div class="home-china">Home &gt; China Tour Packages &gt; Beijing, Xi’an, Shanghai Best Tour</div>
					<div class="explore-tour-inner">
						<div class="frame-parent4">
							<div class="duration-parent">
								<div class="duration">Duration</div>
								<div class="days">'.$row1['jumlah_hari'].' Days</div>
							</div>
							<img class="frame-item" alt="" src="../asset/line.png">

							<div class="tour-type-parent">
								<div class="tour-type">Tour Type</div>
								<div class="private-bespoke">Private & Bespoke</div>
							</div>
							<img class="frame-item" alt="" src="../asset/line.png">

							<div class="duration-parent">
								<div class="tour-style">Tour Style</div>
								<div class="days">Classic</div>
							</div>
						</div>
					</div>
				';
			} else {
				echo "Image not found.";
			}

			$stmt1->close();
			$stmt2->close();
			?>


        <div class="frame-parent5">
            <div class="frame-parent6">
                <div class="overview-wrapper">
                    <div class="div">OVERVIEW</div>
                </div>
                <div class="overview-wrapper">
                    <div class="div">ITINERARY SUMMARY</div>
                </div>
                <div class="overview-wrapper">
                    <div class="div">DETAILED ITENERARY</div>
                </div>
                <div class="gallery-parent">
                    <div class="div">GALLERY</div>
                    <div class="div">REVIEWS</div>
                </div>
            </div>
            <div class="get-a-quote-wrapper">
                <?php
					echo '
						<a href="get-quote.php?id='.$tour_id.'">
							<div class="cungkuo-tour">Get a Quote</div>
						</a>
					';                	
				?>

            </div>
        </div>
        <div class="frame-parent7">
            <div class="about-this-trip-parent">
                <div class="days">About This Trip</div>
                <div class="this-well-packed-golden">This well-packed Golden China Tour is perfect for those looking for
                    a snapshot of vast China with a limited schedule. Beginning in Beijing, you will marvel at the
                    Forbidden City and the Great Wall. Then, take a bullet train to Xi'an to see the famous Terracotta
                    Warriors before heading to Shanghai to explore the Bund waterfront, the peaceful Yu Garden, and the
                    former French Concession.</div>
            </div>
            <div class="about-this-trip-parent">
                <div class="days">Itinerary Summary</div>
                <div class="frame-parent8">
                    <div class="frame-parent9">
                        <div class="day-wrapper">
                            <div class="cungkuo-tour">DAY</div>
                        </div>
                        <div class="place-wrapper">
                            <div class="cungkuo-tour">PLACE</div>
                        </div>
                        <div class="highlights-wrapper">
                            <div class="cungkuo-tour">HIGHLIGHTS</div>
                        </div>
                    </div>
                    <div class="image-13-parent">
                        <div class="wrapper">
                            <div class="div">1 - 4 </div>
                        </div>
                        <div class="beijing-wrapper">
                            <div class="div">Beijing</div>
                        </div>
                        <div class="forbidden-city-temple-of-heav-wrapper">
                            <div class="forbidden-city-temple">Forbidden City, Temple of Heaven, Great Wall, Hutong,
                                Having Lunch at a Local's Home</div>
                        </div>
                    </div>
                    <div class="image-13-parent">
                        <div class="wrapper">
                            <div class="div">1 - 4 </div>
                        </div>
                        <div class="beijing-wrapper">
                            <div class="div">Beijing</div>
                        </div>
                        <div class="forbidden-city-temple-of-heav-wrapper">
                            <div class="forbidden-city-temple">Forbidden City, Temple of Heaven, Great Wall, Hutong,
                                Having Lunch at a Local's Home</div>
                        </div>
                    </div>
                    <div class="image-13-parent">
                        <div class="wrapper">
                            <div class="div">1 - 4 </div>
                        </div>
                        <div class="beijing-wrapper">
                            <div class="div">Beijing</div>
                        </div>
                        <div class="forbidden-city-temple-of-heav-wrapper">
                            <div class="forbidden-city-temple">Forbidden City, Temple of Heaven, Great Wall, Hutong,
                                Having Lunch at a Local's Home</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rectangle-group">
            <div class="rectangle-div">
            </div>
            <div class="frame-parent13">
                <div class="quick-question-parent">
                    <div class="quick-question">Quick Question</div>
                    <div class="frame-parent14">
                        <div class="frame-parent15">
                            <div class="your-trip-ideas-parent">
                                <div class="your-trip-ideas">Your Trip Ideas:</div>
                                <div class="eg-desired-destinations-must-wrapper">
                                    <div class="days">Eg. Desired destinations, must see attractions, honeymoon or
                                        anniversary, travel with children...</div>
                                </div>
                            </div>
                            <div class="your-trip-ideas-parent">
                                <div class="your-trip-ideas">Your Name:</div>
                                <div class="frame-child1">
                                </div>
                            </div>
                            <div class="your-trip-ideas-parent">
                                <div class="your-trip-ideas">Email Address:</div>
                                <div class="emailexamplecomrequired-wrapper">
                                    <div class="days">email@example.com(required)</div>
                                </div>
                            </div>
                        </div>
                        <div class="send-inquiry-wrapper">
                            <div class="cungkuo-tour">Send Inquiry</div>
                        </div>
                    </div>
                </div>
                <div class="we-take-your">We take your privacy very seriously.</div>
            </div>
        </div>
        <div class="frame-parent16">
            <div class="frame-parent17">
                <div class="frame-parent18">
                    <div class="itinerary-parent">
                        <div class="itinerary">Itinerary</div>
                        <div class="weuiarrow-filled-parent">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                            <div class="div">Collapse All</div>
                        </div>
                    </div>
                    <div class="line-div">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="day-1-beijing-arrival-parent">
                            <div class="day-1-beijing">Day 1: Beijing, Arrival</div>
                            <div class="welcome-to-china-container">
                                <p class="welcome-to-china">Welcome to China! Touch down in Beijing and meet your guide
                                    for a one-hour private transfer to your downtown hotel.</p>
                                <p class="welcome-to-china">If you are landing at Daxing International airport, after
                                    meeting the guide and checking your luggage, you may spend some time sightseeing at
                                    the new airport of Beijing to discover its marvelously laid Chinese elements.</p>
                            </div>
                        </div>
                        <div class="overview-wrapper">
                            <img class="weuiarrow-filled-icon1" alt="" src="../asset/weui_arrow-up-filled.png">

                        </div>
                    </div>
                    <div class="material-symbolsbed-parent">
                        <img class="material-symbolsbed-icon" alt="" src="../asset/material-symbols_bed.png">

                        <div class="cungkuo-tour">Beijing</div>
                    </div>
                    <div class="frame-child2">
                    </div>
                </div>
            </div>
            <div class="inquire-now-wrapper">
                <div class="cungkuo-tour">Inquire Now</div>
            </div>
        </div>
        <div class="gallery-group">
            <div class="quick-question">Gallery</div>
            <div class="image-13-parent">
                <img class="image-13-icon" alt="" src="../asset/Renata Christine.jpg">

                <div class="weuiarrow-filled-group">
                    <img class="weuiarrow-filled-icon10" alt="" src="../asset/weui_arrow-up-filled.png">

                    <div class="image-14-parent">
                        <img class="image-14-icon" alt="" src="../asset/JayPark NingYizhuo.jpg">

                        <img class="image-15-icon" alt="" src="../asset/Lenadra Mark lee.jpg">

                        <img class="image-14-icon" alt="" src="../asset/Renata Christine.jpg">

                    </div>
                    <img class="weuiarrow-filled-icon10" alt="" src="../asset/weui_arrow-down-filled.png">

                </div>
            </div>
        </div>
        <div class="frame-parent35">
            <div class="what-our-clients-say-parent">
                <div class="days">What Our Clients Say</div>
                <div class="great-customized-service">"Great Customized Service", "Trip of A Lifetime", "Exceed All
                    Expectations"</div>
            </div>
            <div class="weuiarrow-filled-parent1">
                <div class="weuiarrow-filled">
                    <img class="vector-icon" alt="" src="../asset/Vector_left.png">

                </div>
                <div class="frame-parent36">

                    <?php
						include("../php/koneksi.php");

						$tourId = $_GET["id"];

						$stmt = $koneksi->prepare("SELECT * FROM comments WHERE tour_id = ?");
						$stmt->bind_param("i", $tourId);
						$stmt->execute();
						$result = $stmt->get_result();

						if ($row = $result->fetch_assoc()) {
							$nama = $row['nama'];
							$rating = (int)$row['rating']; // Retrieve and cast rating to integer

							// Generate star icons dynamically based on rating
							$filledStars = $rating;      // Number of filled stars
							$emptyStars = 5 - $rating;   // Number of empty stars

							echo '
								<div class="frame-wrapper1">
									<div class="about-this-trip-parent">
										<div class="frame-parent38">
											<div class="image-10-parent">
												<img class="image-10-icon" alt="" src="../asset/profile.jpg">

												<div class="renato-cristine-faro-parent">
													<div class="duration">' . htmlspecialchars($nama) . '</div>
												</div>
											</div>
											<div class="line-mdstar-filled-group">
							';

							// Loop to display filled stars
							for ($i = 0; $i < $filledStars; $i++) {
								echo '<img class="material-symbolsbed-icon" alt="" src="../asset/star_filled.png">';
							}

							// Loop to display empty stars
							for ($i = 0; $i < $emptyStars; $i++) {
								echo '<img class="material-symbolsbed-icon" alt="" src="../asset/star.png">';
							}

							echo '
											</div>
										</div>
										<div class="i-recently-concluded">
											' . htmlspecialchars($row['messages']) . '
										</div>
									</div>
								</div>
							';
						} else {
							echo "error: Comments not found.";
							exit();
						}

						$result->close();
						$stmt->close();
					?>

                </div>
                <div class="weuiarrow-filled1">
                    <img class="vector-icon1" alt="" src="../asset/Vector_right.png">

                </div>
            </div>
        </div>

        <div class="explore-tour-child">
            <div class="frame-parent43">
                <div class="you-may-also-like-wrapper">
                    <div class="days">You May Also Like</div>
                </div>
                <div class="frame-wrapper4">
                    <div class="frame-wrapper5">
                        <div class="frame-parent44">
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent45">
                                    <div class="beijing-xian-shanghai-best-group">
                                        <div class="beijing-xian1">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="days">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent45">
                                    <div class="beijing-xian-shanghai-best-group">
                                        <div class="beijing-xian1">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="days">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent45">
                                    <div class="beijing-xian-shanghai-best-group">
                                        <div class="beijing-xian1">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="days">8 Days</div>
                                        <div class="beijing-xian-shanghai">Beijing, Xi`an, Shanghai</div>
                                    </div>
                                    <div class="explore-this-tour-wrapper">
                                        <div class="tailor-my-trip">Explore This Tour</div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-6-parent">
                                <img class="image-6-icon" alt="" src="image 6.png">

                                <div class="frame-parent45">
                                    <div class="beijing-xian-shanghai-best-group">
                                        <div class="beijing-xian1">Beijing, Xi'an & Shanghai Best Tour</div>
                                        <div class="days">8 Days</div>
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
                <div class="you-may-also-like-wrapper">
                    <div class="days">How It Works</div>
                </div>
            </div>
        </div>
        <div class="frame-parent49">
            <div class="image-6-wrapper">
                <img class="image-6-icon4" alt="" src="image 6.png">

            </div>
            <div>
                <div>Commennt</div>
                <form id="comment-form" method="post">
                    <textarea name="" id="comment-message"></textarea>
                    <div id="star-rating">
                        <img src="../asset/star.png" alt="">
                        <img src="../asset/star.png" alt="">
                        <img src="../asset/star.png" alt="">
                        <img src="../asset/star.png" alt="">
                        <img src="../asset/star.png" alt="">
                    </div>
                    <input type="hidden" id="star-value" value="0">
                    <input type="submit">
                </form>

            </div>
        </div>
        <div class="frame-parent52">
            <div class="frame-parent53">
                <div class="material-symbolscomputer-outl-parent">
                    <img class="material-symbolscomputer-outl-icon" alt=""
                        src="../asset/material-symbols_computer-outline.png">

                    <div class="div">Step 1</div>
                </div>
                <div class="tell-us-your-tour-ideas-parent">
                    <div class="tell-us-your">Tell us your tour ideas</div>
                    <div class="complete-our-inquiry">Complete our inquiry form</div>
                </div>
            </div>
            <div class="frame-parent53">
                <div class="material-symbolscomputer-outl-parent">
                    <img class="gridiconschat" alt="" src="../asset/gridicons_chat.png">

                    <div class="div">Step 1</div>
                </div>
                <div class="tell-us-your-tour-ideas-parent">
                    <div class="discuss-with-a">Discuss with a travel specialist</div>
                    <div class="complete-our-inquiry">Complete our inquiry form</div>
                </div>
            </div>
            <div class="frame-parent53">
                <div class="material-symbolscomputer-outl-parent">
                    <img class="gridiconschat" alt="" src="../asset/ion_card.png">

                    <div class="div">Step 1</div>
                </div>
                <div class="tell-us-your-tour-ideas-parent">
                    <div class="duration">Securely book your tour</div>
                    <div class="complete-our-inquiry">Complete our inquiry form</div>
                </div>
            </div>
        </div>
        <div class="explore-tour-inner1">
            <div class="frame-wrapper6">
                <div class="frame-parent56">
                    <div class="frame-parent57">
                        <div class="frame-parent58">
                            <div class="hot-destinations-parent">
                                <b class="days">HOT DESTINATIONS</b>
                                <div class="frame-parent59">
                                    <div class="beijing-parent">
                                        <div class="shanghai">Beijing</div>
                                        <div class="shanghai">Shanghai</div>
                                        <div class="shanghai">Chengdu</div>
                                        <div class="shanghai">Hangzou</div>
                                        <div class="shanghai">Xi’an</div>
                                    </div>
                                    <div class="beijing-parent">
                                        <div class="shanghai">Beijing</div>
                                        <div class="shanghai">Shanghai</div>
                                        <div class="shanghai">Chengdu</div>
                                        <div class="shanghai">Hangzou</div>
                                        <div class="shanghai">Xi’an</div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-parent">
                                <b class="days">COMPANY</b>
                                <div class="frame-wrapper7">
                                    <div class="beijing-parent">
                                        <div class="shanghai">About Us</div>
                                        <div class="review-by-clients">Review by Clients</div>
                                        <div class="review-by-clients">Our Awards</div>
                                        <div class="review-by-clients">Service Overview</div>
                                        <div class="review-by-clients">Contact Us</div>
                                    </div>
                                </div>
                            </div>
                            <div class="resource-parent">
                                <b class="days">RESOURCE</b>
                                <div class="frame-wrapper7">
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
                            <img class="tablerclock-filled-icon" alt="" src="../asset/tabler_clock-filled.png">

                            <div class="were-at-your-service-parent">
                                <b class="days">We’re at your service</b>
                                <div class="parent">
                                    <div class="days">+1 273 83492332</div>
                                    <div class="days">+61 2 934840234</div>
                                    <div class="days">+61 234 842 921</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo-parent">
                        <div class="logo">
                            <img class="vector-icon2" alt="" src="../asset/youtube.png">

                        </div>
                        <div class="logo">
                            <img class="icbaseline-facebook-icon" alt="" src="../asset/facebook.png">

                        </div>
                        <div class="logo">
                            <img class="icbaseline-facebook-icon" alt="" src="../asset/twitter.png">

                        </div>
                        <div class="logo">
                            <img class="icbaseline-facebook-icon" alt="" src="../asset/instagram.png">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/explore-tour.js"></script>
</body>

</html>
