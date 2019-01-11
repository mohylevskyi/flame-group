<footer id="footer">
	<?php render_footer();?>
</footer>
	<?php wp_footer();?>
<script>
$('.responsive').slick({
  arrows:false,
  dots: false,
  infinite: false,
  speed: 300,
  centerMode: true,
  centerPadding: '470px',
  autoplay:true,
  speedAutoplay:3000,
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  responsive: [
     {
      breakpoint: 1850,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '395px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	  {
      breakpoint: 1700,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '305px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	{
      breakpoint: 1520,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '215px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	{
      breakpoint: 1360,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '165px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	{
      breakpoint: 1250,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '125px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	{
      breakpoint: 1150,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '65px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '265px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	 {
      breakpoint: 930,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '235px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	 {
      breakpoint:867,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '195px',
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
	{
      breakpoint: 768,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '190px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	{
      breakpoint: 701,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '170px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	{
      breakpoint: 651,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '150px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	 {
      breakpoint: 601,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '120px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 551,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '97px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 481,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '70px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	 {
      breakpoint: 433,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '50px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	 {
      breakpoint: 396,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '35px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	{
      breakpoint: 366,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '20px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
	{
      breakpoint: 331,
      settings: {
		arrows:false,
		dots: false,
		centerPadding: '11px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
 $('.responsive-two').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  autoplay:true,
  speedAutoplay:3000,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
}); 



</script>	
<script src="jquery.cookie.js"></script>
</body>
</html>