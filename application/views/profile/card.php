<?php foreach ($user_profiles as $profile) {
    ?>
    <div class="col-lg-4 col-sm-6">
        <div class="card hovercard">
            <div class="cardheader">

            </div>
            <div class="avatar">
                <img alt="" src="http://lorempixel.com/100/100/people/9/">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://scripteden.com/"><?php echo $profile->name?></a>
                </div>
                <div class="desc"><?php echo $profile->country?></div>
                <div class="desc">test</div>
            </div>
            <div class="color-overlay">

                <button>Full Profile</button>

            </div>
        </div>
    </div>
<?php } ?>