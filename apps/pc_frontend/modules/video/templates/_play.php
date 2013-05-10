<?php $response->addStylesheet('/opVideoJsPlugin/css/video-js.css') ?>
<?php $response->addJavascript('/opVideoJsPlugin/js/video.js') ?>

<video id="home_video" class="video-js vjs-default-skin" controls preload="auto" width="640" height="360">
<source src="<?php echo $filePath ?>" type='video/mp4' />
</video>
<script>var homePlayer=_V_("home_video");</script>
