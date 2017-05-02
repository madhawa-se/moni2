<?php foreach ($user_profiles as $profile) {
    ?>
    <div class="col-lg-4 col-sm-6">
        <div class="card hovercard">
            <div class="cardheader">

            </div>
            <div class="avatar">
                <img alt="" src="<?php echo base_url().'uploads/'.(($profile->user_id!==NULL) ? $profile->user_id : 'defaults/default').'.jpg' ;?>">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://scripteden.com/"><?php echo $profile->name?></a>
                </div>
                <div class="desc"><?php echo $profile->country?></div>
                <div class="desc">test</div>
            </div>
            <div class="color-overlay">

                <a href="<?php echo base_url()."profile/user/".$profile->id?>" target="_blank">Full Profile</a>

            </div>
        </div>
    </div>
<?php } ?>