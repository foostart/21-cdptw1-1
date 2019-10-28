<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1931">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--TITLE TABS AND PILL-->
                <ul class="tabs"> 
                    <li class="active" rel="tab1">Book a Table</li>
                    <li class="tab2" rel="tab2">Event</li>
                </ul>
                <div class="tab_container col-xs-12">
                    <!--TAB 1-->
                    <div id="tab1" class="tab_content"> 
                        <div class="text-main">
                            Whether you are planning an intimate dinner for friends, a corporate luncheon,
                            <br>or an extravagant soirée, you will find the perfect setting at Délicious.
                        </div>
                        <div class="text-mainn">
                            <h2 class="title" >Make a Reservation</h2>
                            <p class="subtitle">For further questions, please call</p>
                            <div class="datetime">
                                <p class="date">
                                    <span>DATE</span>
                                    <input data-provide="datepicker" readonly="" placeholder="Select Date">
                                </p>
                                <p class="time" data-type=""><span>Time</span>
                                    <select name="time" class="fpres_time_range resinput req fp_res_short_input fp_res_input_icon_clock" id="fp_res_time"><option value="1:00am">1:00am</option>
                                        <option value="2:00am">2:00am</option>
                                        <option value="3:00am">3:00am</option>
                                        <option value="4:00am">4:00am</option>
                                        <option value="5:00am">5:00am</option>
                                        <option value="6:00am">6:00am</option>
                                        <option value="7:00am">7:00am</option>
                                        <option value="8:00am">8:00am</option>
                                        <option value="9:00am">9:00am</option>
                                        <option value="10:00am">10:00am</option>
                                        <option value="11:00am">11:00am</option>
                                        <option value="12:00pm">12:00pm</option>
                                        <option value="1:00pm">1:00pm</option>
                                        <option value="2:00pm">2:00pm</option>
                                        <option value="3:00pm">3:00pm</option>
                                        <option value="4:00pm">4:00pm</option>
                                        <option value="5:00pm">5:00pm</option>
                                        <option value="6:00pm">6:00pm</option>
                                        <option value="7:00pm">7:00pm</option>
                                        <option value="8:00pm">8:00pm</option>
                                        <option value="9:00pm">9:00pm</option>
                                        <option value="10:00pm">10:00pm</option>
                                        <option value="11:00pm">11:00pm</option>
                                        <option value="12:00am">12:00am</option>
                                    </select>
                                </p>
                                <p class="size"><span>Party Size</span>
                                    <input class="resinput req fp_res_short_input" type="text" name="party" placeholder="Qty" value="1" id="fp_res_people" autocomplete="off"> </p>
                            </div>
                            <div class="form_section_2">
                                <p>
                                    <label>Your Name</label>
                                    <input type="text" name="name" class="resinput req" placeholder="Your Name.....">
                                </p>
                                <p>
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="resinput req" placeholder="Email Address.....">
                                </p>
                                <a id="fp_reservation_submit" class="reserve-submit fp_reservation_submit">Reserve Now</a>
                            </div>
                        </div>
                    </div>
                    <!--TAB 2-->
                    <div id="tab2" class="tab_content"> 
                        <div class="image">
                            <img alt="" src="./images/open-table-logo.svg">
                        </div>
                        <div class="opentable">
                            <div class="row ">
                                <div class="opentable-text">Whether you are a couple wishing to dine in privacy, business colleagues holding a meeting to impress clients, celebrating a birthday or an intimate wedding party, we can help you.<br><br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p class="textcenter">
                                    <span class="btext" data-text="Book now">Book now</span>
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="textcenter1"></div>
                    </div>
                </div>
            </div>
            <!--END TABS AND PILL-->
        </div>
    </div>
</div>

