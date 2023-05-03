 <!-- Header-->
 <!-- <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5">About Us</h1>
        </div>
    </div>
</header> -->
<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
            <div class="row">
            <div class="card-body">
                <h4>Contact Form</h4>
            </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-gradient-purple ')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
    <p>
    <b>
       <h2>Group-3</h2> 
    </b>
    <h3>
        <p><b>Team:</b></p>
    1.cse210001017@iiti.ac.in<br>
    2.cse210001046@iiti.ac.in<br>
    3.cse210001049@iiti.ac.in<br>
    4.cse210001058@iiti.ac.in<br>
    5.cse210001081@iiti.ac.in<br>
    </h3>
    
</p>
</script>
