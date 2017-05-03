<?php foreach ($user_profiles as $profile) {
    ?>
    <div class="col-lg-4 col-sm-6">
        <div class="card hovercard">
            <div class="cardheader">
                <span class="flag-icon flag-icon-c<?php echo $profile->country ?>" style="text-align: left"></span>
            </div>
            <div class="avatar">
                <img alt="" src="<?php echo base_url() . 'uploads/' . (($profile->user_id !== NULL) ? $profile->user_id : 'defaults/def' . $profile->gender) . '.jpg'; ?>">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://scripteden.com/"><?php echo $profile->name ?></a>
                </div>

                <ul class="list-group">
                    <li class="list-group-item" ><?php echo $profile->age . " Yrs |  5ft 5in" ?></li>
                    <li class="list-group-item" ><?php echo $profile->religion ?></li> 
                </ul>
            </div>
            <div class="color-overlay">

                <a href="<?php echo base_url() . "profile/user/" . $profile->id ?>" target="_blank">Full Profile</a>

                <div class="icon-bar">
                    <a class="active" href="#"><i class="fa fa-home"></i></a> 
                    <a href="#"><i class="fa fa-envelope"></i></a> 
                    <a href="#"><i class="fa fa fa-star"></i></a>
                </div>

            </div>
        </div>
    </div>
<?php } ?>