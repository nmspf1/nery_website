<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/app.css">

</head>
<body>

<div class="section landing shown">
  <a href="https://soundcloud.com/djnery" class="sc-player"></a>

  <div class="top-gradient"></div>
  <div class="content-social-links">
    <ul>
      <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-mixcloud" aria-hidden="true"></i></a></li>
    </ul>
  </div>

  <div class="bottom-bar">
    <div class="player">
      <div class="content-controls">
        <div class="backward"><i class="fa fa-backward" aria-hidden="true"></i></div>
        <div class="play_pause"><i class="fa fa-play" aria-hidden="true"></i></div>
        <div class="forward"><i class="fa fa-forward" aria-hidden="true"></i></div>
      </div>

      <div class="content-time">
        0:00
      </div>
      <div class="content-details">
        <a href="#" class="cover">
          <i class="fa fa-soundcloud" aria-hidden="true"></i>
          <img src="https://i1.sndcdn.com/artworks-000193123417-ve1qq6-t300x300.jpg" alt="">
        </a>
        <h1>01. Could You see Me ft. Holly & Maria do Rosário</h1>

      </div>

      <div class="content-progress-bar">
        <div class="progress-bar"></div>
      </div>
    </div>
  </div>
  <div id="carousel" style="display: none;" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <?php $i = 0; if(!empty($files)): foreach($files as $key => $file): ?>


        <div class="item <?php if($i == 0){  ?>active<?php } ?>" style="background-image: url(<?php echo base_url('uploads/'.$file['file_name']); ?>);"></div>

      <?php $i++; endforeach; else: ?>
        <script>
          alert('Theres no images in the slideshow');
        </script>
      <?php endif; ?>
    </div>
  </div>

</div>

<div class="section new-album-section ">
  <h1 class="text-center album-name">33</h1>
  <iframe id="youtube-iframe" width="640" height="360" src="http://www.youtube.com/embed/7iFBh5hRNBA?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>

  <div class="logo-links">
    <a href="https://www.facebook.com/madluvrecords/"><img src="<?php echo base_url(); ?>assets/landing/images/madluv.png" alt=""></a>
    <a href="https://www.intomusicagency.com/"><img src="<?php echo base_url(); ?>assets/landing/images/intomusic.png" alt=""></a>
  </div>

  <div class="where-to-buy">
    <h1>Album available from</h1>
    <ul>
      <li><a href="https://madluvrecords.bandcamp.com/">bandcamp</a></li>
      <li><a href="https://www.kudosrecords.co.uk/release/mluv001/nery-33.html">kudosrecords</a></li>
      <li><a href="https://itunes.apple.com/us/album/33/id1154290987">itunes</a></li>
      <li><a href="https://open.spotify.com/album/6JMJOGiryHHDdFtRAyo0lY">spotify</a></li>
      <li><a href="https://play.google.com/store/music/album?id=Busrydant7o5kr4ulvu7o7f4hwa">google music</a></li>
      <li><a href="https://www.youtube.com/channel/UC-BLCb1OoQJ9jVvJlkfijYw">youtube</a></li>
      <li><a href="https://www.amazon.com/dp/B01LWVF76U?_encoding=UTF8&SubscriptionId=AKIAJ6Y4MKUB76XH66XQ&camp=2025&creative=386001&creativeASIN=B01LWVF76U&linkCode=xm2&showDetailTechData=1&tag=ton08-20#technical-data">amazon</a></li>
    </ul>
  </div>

  <a class="booking-link" href="mailto:intomusicagency@gmail.com">Booking:<br>intomusicagency@gmail.com</a>



</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/soundcloud/soundcloud-custom-player/master/js/soundcloud.player.api.js"></script>
<script src="https://cdn.rawgit.com/soundcloud/soundcloud-custom-player/master/js/sc-player.js"></script>
<script src="<?php echo base_url(); ?>assets/landing/js/app.js"></script>

</body>
</html>



