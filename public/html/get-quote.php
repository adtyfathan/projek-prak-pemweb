<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Cungkuo Tour</title>
    <link rel="stylesheet" href="../css/get-quote.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
</head>

<body>
    <div class="get-quote">
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
        <div class="home-china">Home &gt; China Tour Packages &gt; Student Holiday</div>
        <div class="youre-interested-in-container">
            <p class="youre-interested-in">You're interested in the itinerary:</p>
            <?php
				include("../php/koneksi.php");

				$tourId = $_GET["id"];

				$stmt = $koneksi->prepare("SELECT * FROM tours WHERE id = ?");
				$stmt->bind_param("i", $tourId);
				$stmt->execute();
				$result = $stmt->get_result();

				if ($row = $result->fetch_assoc()) {
					echo'
						<p class="beijing-xian">'.$row['nama_tempat'].' Tour, '.$row['jumlah_hari'].' Days</p>
						<input type="hidden" value="'.$row['nama_tempat'].'" id="destination-name"/>
						<input type="hidden" value="'.$row['harga'].'" id="destination-price" />
					';
				}
			?>

            <p class="beijing-xian">&nbsp;</p>
            <p class="youre-interested-in">One of our travel specialists will customize an itinerary for you within 24
                hours. Tailor-made service is free of charge and we will work together with you until every detail is
                satisfied by you.</p>
        </div>
        <div class="frame-parent3">
            <form id="reservation-form">
                <div class="frame-parent4">
                    <div class="your-trip-plan-wrapper">
                        <div class="div">Your Trip Plan</div>
                    </div>
                    <div class="frame-parent5">
                        <div class="arrival-date-parent">
                            <div class="arrival-date">
                                <label>Arrival Date:</label>
                                <input type="date" id="reservation-date" />
                            </div>
                        </div>
                        <div class="number-of-travelers-parent">
                            <div class="arrival-date">Number of Travelers: </div>

                            <input type="number" id="reservation-ticketqty" />
                        </div>
                        <div class="frame-parent9">
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Budget Per Person</div>
                                <input type="number" id="reservation-budget" />
                            </div>
                            <div class="does-this-budget-include-inter-parent">
                                <div class="div">Does this budget include international airfare?</div>
                                <div class="frame-parent10">
                                    <div class="rectangle-parent">
                                        <div class="frame-child">
                                        </div>
                                        <div class="div">Yes</div>
                                    </div>
                                    <div class="rectangle-parent">
                                        <div class="frame-child">
                                        </div>
                                        <div class="div">No</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="number-of-travelers-parent">
                            <div class="arrival-date">Hotel Preference (Choose an Option): </div>
                            <div class="frame-parent11">
                                <div class="deluxe-5-starts-usd240-wrapper">
                                    <div class="deluxe-5-starts">Deluxe 5 Starts USD240+</div>
                                </div>
                                <div class="deluxe-5-starts-usd240-wrapper">
                                    <div class="deluxe-5-starts">5 Starts USD160-240</div>
                                </div>
                                <div class="deluxe-5-starts-usd240-wrapper">
                                    <div class="deluxe-5-starts">4 Stars USD90-160</div>
                                </div>
                                <div class="deluxe-5-starts-usd240-wrapper">
                                    <div class="deluxe-5-starts">3 Stars USD70-90</div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-wrapper4">
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Trip Ideas:</div>
                                <textarea id="reservation-ideas"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="your-detail-wrapper">
                        <div class="div">Your Detail</div>
                    </div>
                    <div class="frame-parent12">
                        <div class="frame-parent13">
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Your Name:</div>
                                <input type="text" id="reservation-name">
                            </div>
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Email Address:</div>
                                <input type="email" id="reservation-email">
                            </div>
                        </div>
                        <div class="frame-parent13">
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Nationality:</div>
                                <input type="text" id="reservation-nationality">
                            </div>
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Your Age:</div>
                                <input type="number" id="reservation-age">
                            </div>
                        </div>
                        <div class="frame-parent13">
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Phone Number:</div>
                                <input type="text" id="reservation-phone">
                            </div>
                            <div class="arrival-date-parent">
                                <div class="arrival-date">Subscribe to our Newsletter:</div>
                                <div class="frame-parent16">
                                    <div class="yes-wrapper">
                                        <div class="yes1">YES</div>
                                    </div>
                                    <div class="no-wrapper">
                                        <div class="no1">NO</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-parent17">
                    <div class="send-inquiry-wrapper">
                        <div class="cungkuo-tour"><input type="submit" value="Send Inquiry"></div>
                    </div>
                </div>
                <div class="all-details-provided-container">All details provided are kept securely in accordance
                    with
                    our
                    <a class="privacy-policy" href="https://www.chinaodysseytours.com/privacy_security.htm"
                        target="_blank">
                        <span class="privacy-policy1">privacy policy</span>
                    </a>.
                </div>
        </div>
        </form>
    </div>
    <div class="get-quote-inner">
        <div class="frame-wrapper10">
            <div class="frame-parent18">
                <div class="frame-parent19">
                    <div class="frame-parent20">
                        <div class="hot-destinations-parent">
                            <b class="arrival-date">HOT DESTINATIONS</b>
                            <div class="frame-parent21">
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
                            <b class="arrival-date">COMPANY</b>
                            <div class="frame-wrapper11">
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
                            <b class="arrival-date">RESOURCE</b>
                            <div class="frame-wrapper11">
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
                            <b class="arrival-date">We’re at your service</b>
                            <div class="parent">
                                <div class="arrival-date">+1 273 83492332</div>
                                <div class="arrival-date">+61 2 934840234</div>
                                <div class="arrival-date">+61 234 842 921</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-parent">
                    <div class="logo">
                        <img class="vector-icon" alt="" src="../asset/youtube.png">

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
    <script src="../js/get-quote.js"></script>
</body>

</html>