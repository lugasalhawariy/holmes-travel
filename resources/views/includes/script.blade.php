<script src="{{ url('libraries/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('libraries/owlcarousel/dist/owl.carousel.js') }}"></script>
<script src="{{ url('libraries/bootstrap/js/bootstrap.js') }}"></script>
<script>
    $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                loop:true
            }
        }
    })
    });
</script>