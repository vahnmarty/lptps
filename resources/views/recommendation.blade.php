<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laptop Recommendation </title>

    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css?')}}{{ mt_rand() }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/multi.css') }}">

</head>
    <body>
        <div class="main-container">
            <!-- Multi step form -->
            <section class="multi_step_form">
                <form id="msform" method="POST" action="{{ url('recommendation') }}">
                	@csrf
                    <!-- Tittle -->
                    <div class="tittle">
                        <h2>Laptop Recommendation</h2>
                    </div>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">
                        	<i class="fa fa-phone"></i>
                        	<span>Contact Information</span>
                        </li>
                        <li>
                        	<i class="fa fa-phone"></i>
                        	<span>Specification</span>
                        </li>
                        <li>
                        	<i class="fa fa-phone"></i>
                        	<span>Budget</span>
                        </li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset class="text-left">
                        <div class="form-group">
                            <label class="col-form-label">Your Name</label>
                            <input type="text" name="" class="form-control" placeholder="Enter your Name here" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email Addresss</label>
                            <input type="email" name="" class="form-control" placeholder="Enter your Email Address here" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Your Country</label>
                            <select class="form-control" required name="country" id="select-country">
                                <option value>-- Select Country --</option>
                            </select>
                        </div>
                        
                        <div class="text-center mt-5">
                        	<button type="button" class="action-button previous previous_button" style="display: none">Back</button>
                        	<button type="button" class="next action-button">Continue</button>
                        </div>
                    </fieldset>
                    <fieldset class="text-left">
                        <div class="form-group">
                            <h4 class="col-form-label"><b>Main Usage:</b></h4>
                            <div class="row">
                                @for($i = 0; $i < 7; $i++)
                                <div class="col-lg-4">
                                    <div class="form-check pl-4">
                                        <input type="checkbox" class="form-check-input" >
                                        <label class="form-check-label" >{{ \Str::random(8) }}</label>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="col-form-label"><b>What's the more important feature(s)?:</b></h4>
                            <div class="row">
                                @for($i = 0; $i < 7; $i++)
                                <div class="col-lg-4">
                                    <div class="form-check pl-4">
                                        <input type="checkbox" class="form-check-input" >
                                        <label class="form-check-label pl-2" >{{ \Str::random(8) }}</label>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="col-form-label"><b>Preferred Screen Size?</b></h4>
                            <div class="row">
                                @for($i = 0; $i < 7; $i++)
                                <div class="col-lg-4">
                                    <div class="form-check pl-4">
                                        <input type="checkbox" class="form-check-input" >
                                        <label class="form-check-label" >{{ \Str::random(8) }}</label>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="text-center mt-5">
                        	<button type="button" class="action-button previous previous_button">Back</button>
                        	<button type="button" class="next action-button">Continue</button>
                        </div>
                    </fieldset>
                    <fieldset class="text-left">
                        <div class="form-group">
                            <h4 class="col-form-label"><b>Approximate Budget? (USD)</b></h4>
                            <div class="row">
                                @for($i = 0; $i < 7; $i++)
                                <div class="col-lg-4">
                                    <div class="form-check pl-4">
                                        <input type="checkbox" class="form-check-input" >
                                        <label class="form-check-label" >{{ \Str::random(8) }}</label>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="col-form-label"><b>When are you planning to purchase it?</b></h4>
                            <div class="row">
                                @for($i = 0; $i < 4; $i++)
                                <div class="col-lg-12">
                                    <div class="form-check pl-4">
                                        <input type="checkbox" class="form-check-input" >
                                        <label class="form-check-label" >{{ \Str::random(8) }}</label>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="text-center">
                        	<button type="button" class="action-button previous previous_button">Back</button>
                        	<button type="submit" class="action-button">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </section>
            <!-- End Multi step form -->
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
        <script type="text/javascript">
            ;(function($) {
                "use strict";  
                
                //* Form js
                function verificationForm(){
                    //jQuery time
                    var current_fs, next_fs, previous_fs; //fieldsets
                    var left, opacity, scale; //fieldset properties which we will animate
                    var animating; //flag to prevent quick multi-click glitches

                    $(".next").click(function () {
                        if (animating) return false;
                        animating = true;

                        current_fs = $(this).closest('fieldset');
                        next_fs = $(this).closest('fieldset').next();

                        //activate next step on progressbar using the index of next_fs
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({
                            opacity: 0
                        }, {
                            step: function (now, mx) {
                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                //1. scale current_fs down to 80%
                                scale = 1 - (1 - now) * 0.2;
                                //2. bring next_fs from the right(50%)
                                left = (now * 50) + "%";
                                //3. increase opacity of next_fs to 1 as it moves in
                                opacity = 1 - now;
                                current_fs.css({
                                    'transform': 'scale(' + scale + ')',
                                    'position': 'absolute'
                                });
                                next_fs.css({
                                    'left': left,
                                    'opacity': opacity
                                });
                            },
                            duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            //this comes from the custom easing plugin
                            easing: 'easeInOutBack'
                        });
                    });

                    $(".previous").click(function () {
                        if (animating) return false;
                        animating = true;

                        current_fs = $(this).closest('fieldset');
                        previous_fs = $(this).closest('fieldset').prev();

                        //de-activate current step on progressbar
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                        //show the previous fieldset
                        previous_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({
                            opacity: 0
                        }, {
                            step: function (now, mx) {
                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                //1. scale previous_fs from 80% to 100%
                                scale = 0.8 + (1 - now) * 0.2;
                                //2. take current_fs to the right(50%) - from 0%
                                left = ((1 - now) * 50) + "%";
                                //3. increase opacity of previous_fs to 1 as it moves in
                                opacity = 1 - now;
                                current_fs.css({
                                    'left': left
                                });
                                previous_fs.css({
                                    'transform': 'scale(' + scale + ')',
                                    'opacity': opacity
                                });
                            },
                            duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            //this comes from the custom easing plugin
                            easing: 'easeInOutBack'
                        });
                    });

                    $(".submit").click(function () {
                        return false;
                    })
                }; 
                
                //* Add Phone no select
                function phoneNoselect(){
                    if ( $('#msform').length ){   
                        $("#phone").intlTelInput(); 
                        $("#phone").intlTelInput("setNumber", "+880"); 
                    };
                }; 
                //* Select js
                function nice_Select(){
                    if ( $('.product_select').length ){ 
                        $('select').niceSelect();
                    };
                }; 
                /*Function Calls*/  
                verificationForm ();
                phoneNoselect ();
                nice_Select ();
            })(jQuery); 
        </script>

        <script type="text/javascript">
        	$(document).ready(function(){
        		var el = $('#select-country');
        		$.getJSON('https://restcountries.eu/rest/v2/all', function(data){
        			$.each(data, function(i, item){
        				el.append('<option>'+item['name']+'</option>');
        			});
        		});
        	})
        </script>

    </body>
</html>
