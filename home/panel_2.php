<section class="panel" id="panel_2">
    <?php
        $result = mysqli_query($con, "select event_id,username from user_events where username!='$username' order by timestamp desc;");
        while($event_id = mysqli_fetch_array($result)) {
            $result_t = mysqli_query($con, "select user_2 from friends where user_1='$username' and user_2='$event_id[1]';");
            while($user_2 = mysqli_fetch_array($result_t))  {
                if(mysqli_fetch_array(mysqli_query($con, "select count(*) from user_events where username='$user_2[0]' and event_id=$event_id[0]"))[0]) {
                    $event_info = mysqli_fetch_array(mysqli_query($con, "select * from events where event_id='$event_id[0]';"));
                    $account_name = mysqli_fetch_array(mysqli_query($con, "select fname,lname from users where username='$user_2[0]';"));
                    $row_t_4 = mysqli_fetch_array(mysqli_query($con, "select count(*) from user_events where username='$username' and event_id=$event_id[0]"));
                    echo "
                        <article class=\"post\">
                            <div class=\"post_pic\" style=\"display: inline; float: left; margin-top: 1vh;\"><img src=\"/assets/profile-pictures/$user_2[0].jpg?v=".Date("Y.m.d.G.i.s")."\" style=\"height: 4vh; width: 4vh; display: inline; border-radius: 100px;\" /></div>
                            <button class=\"button follow-status follow-status-checked\" onclick=\"toggle_follow('$user_2[0]',this);\">Following</button>
                            <div class=\"post_name\">$account_name[0] $account_name[1]</div>
                            <div class=\"post_username\">@$user_2[0]</div>
                            <div class=\"post_caption\"></div>
                            <div class=\"post_event\">
                                <div class=\"poster\">
                                    <a href=\"/event/?id=$event_info[0]\"><img src=\"/assets/images/event_$event_id[0].jpg\" style=\"height: 40vh;\" /></a>
                                </div>
                                <div class=\"desc\">
                                    <div class=\"event_name event_detail\"><a href=\"/event/?id=$event_info[0]\">$event_info[1]</a></div>
                                    <div class=\"event_date event_detail\">Date: <strong>$event_info[2]</strong></div>
                                    <div class=\"event_venue event_detail\">Venue: <strong>$event_info[4]</strong></div>
                                    <div class=\"event_venue event_detail\">Timings: <strong>$event_info[3]</strong></div>
                                    <div class=\"event_participants event_detail\">Participants:<strong>&nbsp; **feature coming-soon**";
                                    //$event_info[5]
                                    echo "</strong></div>
                                    <button class=\"button event_status";
                    if($row_t_4[0] !=0) {
                        echo " checked";
                        $text = "Participating";
                    }
                    else $text = "Participate";
                    echo " event_detail\" onclick=\"check(this,$event_id[0]);\"><i class=\"fa fa-";
                    if($row_t_4[0] !=0) echo "check-circle";
                    else echo"circle-o";
                    echo "\"></i>&nbsp;$text</button>
                                </div>
                            </div>
                        </article>
                    ";
                }
            }
        }
    ?>
</section>
