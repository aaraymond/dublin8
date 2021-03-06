<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shoes</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    


    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/override.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


<!-- Creating a fixed navbar with hamburger menu -->
  <nav class="navbar-fixed">
    <div class="nav-container nav-wrapper" id="top-nav">
      <a href="#" data-activates="mobile-demo" class="left button-collapse"><i class="material-icons">menu</i></a>

      
       

      <ul class="side-nav" id="mobile-demo">
      <li class="active"><a href="#Shoes">Shoes</a></li>
        <li><a href="#Overview">Overview</a></li>
        <li><a href="#Brands">Brands</a></li>
        <li><a href="#Styles">Styles</a></li>
        <li><a href="#Survey">Survey</a></li>
      </ul>

      <ul class="left hide-on-med-and-down" id="nav-mobile">
        <li class="active"><a href="#Shoes">Shoes</a></li>
        <li><a href="#Overview">Overview</a></li>
        <li><a href="#Brands">Brands</a></li>
        <li><a href="#Styles">Styles</a></li>
        
      </ul>

      <ul class="right">
      <li><a href="#Survey">Survey</a></li>
    </ul>

     

    </div>
  </nav>

    <div class="container">
        

        <section id="Shoes">
            <h1>Do you <span class="highlight">shoe</span>?</h1>
            <!-- This section will include a banner or graphic with two buttons, take survey or read more displayed in the terminal area. -->
            <div class="action-btns">
                <a href="#Overview" class="waves-effect waves-custom btn-flat">Read More</a>
                <a href="#Survey" class="waves-effect waves-custom btn-flat">Take Survey</a>
            </div>
        </section>

        <section id="Overview">
            <h2 class="first"><span class="highlight">About</span> The Site</h2>
            <p>Welcome to our site! If you would like to read a brief history of shoes, learn the top current brands or most common styles please continue reading. Otherwise, feel free to head down to the <a href="#Survey">Survey</a>.</p>

            <h2>Definition</h2>
            <p>shoe | SHo͞o | - noun</p>
            <p>a covering for the foot, typically made of leather, having a sturdy sole and not reaching above the ankle.</p>
            <p>Source: New Oxford American Dictionary (Second Edition).</p>

            <h2>History</h2>
            <p>There is a great deal of evidence to suggest that shoes have been worn by humans for tens of thousands of years but the oldest recovered example found is 10,000 years old (Source: University of Oregon - The Museum of Natural and Cultural History). The world’s oldest leather shoe is a 5,500 year old specimen found in an Armenian cave.</p>

            <p>Up until 1850, shoes were made straight, meaning that there was no differentiation from left and right shoes. As the twentieth century approached, shoemakers improved comfort by making foot-specific shoes.</p>

            <p>During the Great Depression, black and brown shoes dominated the American market. Shortly after, Oxfords became a popular male choice and cork-soled, platform shoes grew popular among women.
            Though men’s shoe styles remained relatively unchanged following World War II, women’s shoes made another dramatic alteration in their appearance. Women’s shoes were now arched, sophisticated and made to highlight the foot. Delicate heels grew narrower as the decade progressed.</p>

            <p>Traditionally, shoes have been made from leather, wood or canvas, but in the 2010s, they are increasingly made from rubber, plastics, and other petrochemical-derived materials. Though the human foot is adapted to varied terrain and climate conditions, it is still vulnerable to environmental hazards such as sharp rocks and hot ground, which shoes protect against. Some shoes are worn as safety equipment, such as steel-soled boots which are required on construction sites.</p>

            <p>These days, there are shoes for every occasion, mood, and preference. There has also been a movement away from styles that focus primarily on comfort and function, as many designers are shifting interest from a matter of practicality to that of aesthetics. Celebrities like Lady Gaga have introduced the world to footwear that’s more art and armadillo than it is clothing. If footwear trends continue in this fashion, we can expect the shoes of the future to be even more out-of-this-world.</p>

            <p>Sources: National Geographic, Wikipedia, All-That-Is-Interesting.com</p>


        </section>

        <section id="Brands">
            <h2>Popular <span class="highlight">Brands</span> Today</h2>
            <!-- Possibly make a horizontal grid layout and use the brand logo images instead of words, then on hover display the brand name. -->
            
            <div class="row">
                <div class="col s3">
                    <img class="responsive-img" src="images/logo_nike.png" alt="Nike Logo">
                    <div class="middle">
                         <div class="text">Nike</div>
                    </div>
                </div>

                <div class="col s3">
                    <img class="responsive-img" src="images/logo_adidas.png" alt="Adidas Logo">
                    <div class="middle">
                         <div class="text">Adidas</div>
                    </div>
                </div> 

                <div class="col s3">
                    <img class="responsive-img" src="images/logo_jordan.png" alt="Jordan Logo">
                    <div class="middle">
                         <div class="text">Jordan</div>
                    </div>
                </div> 

                <div class="col s3">
                    <img class="responsive-img" src="images/logo_converse.png" alt="Converse Logo">
                    <div class="middle">
                         <div class="text">Converse</div>
                    </div>
                </div>
            </div>

            <!--Source: Fortune.com-->
        </section>

        <section id="Styles">
            
                <h2 class="first"><span class="highlight">Men</span>'s</h2>
                <!-- Possibly make a horizontal grid layout and use the style images instead of words, then on hover display the style name. -->
                <div class="row">  
                    <div class="col s4">
                        <img class="responsive-img" src="images/dress_men.png" alt="Dress">
                        <div class="middle">
                            <div class="text">Dress</div>
                        </div>
                    </div>
                    <div class="col s4">
                        <img class="responsive-img" src="images/mens_casual.png" alt="Casual">
                        <div class="middle">
                            <div class="text">Casual</div>
                        </div>
                    </div>
                    <div class="col s4">
                        <img class="responsive-img" src="images/mens_athletic.png" alt="Athletic">
                        <div class="middle">
                            <div class="text">Athletic</div>
                        </div>
                    </div>
                </div>
           
            <section>
                <h2><span class="highlight">Women</span>'s</h2>
                <!-- Possibly make a horizontal grid layout and use the style images instead of words, then on hover display the style name. -->
                <div class="row">  
                    <div class="col s4">
                        <img class="responsive-img" src="images/womens_heels.png" alt="Heels">
                        <div class="middle">
                            <div class="text">Heels</div>
                        </div>
                    </div>
                    <div class="col s4">
                        <img class="responsive-img" src="images/womens_flats.png" alt="Flats">
                        <div class="middle">
                            <div class="text">Flats</div>
                        </div>
                    </div>
                    <div class="col s4">
                        <img class="responsive-img" src="images/womens_athletic.png" alt="Athletic">
                        <div class="middle">
                            <div class="text">Athletic</div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        

        <section id="Survey">
            <h2 class="first">Shoe <span class="highlight">Survey</span></h2>

            <form method="post" action="survey_processor.php">
                <fieldset>
                    <h3>Personal Information</h3>
                    <div class="input-field">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" required><br>
                    </div>
                    
                    <div class="input-field">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" required>
                    </div><br><br>

                    <div class="questionTitle">Please Select Your Gender:</div>

                    <input class="gender" type="radio" name="gender" id="male" value="m">
                    <label for="male"> Male</label><br>

                    <input class=" gender" type="radio" name="gender" id="female" value="f">
                    <label for="female"> Female</label>
                </fieldset>

                <fieldset>
                    <h3>About Your Shoes</h3>

                    <div class="m box" >
                        <div class="questionTitle">Which of the following shoe styles do you own?</div>

                        <input type="checkbox" name="styleType[]" id="dress" value="dress">
                        <label for="dress"> Dress</label><br>

                        <input type="checkbox" name="styleType[]" id="casual" value="casual">
                        <label for="casual"> Casual</label><br>

                        <input type="checkbox" name="styleType[]" id="athletic" value="athletic">
                        <label for="athletic"> Athletic</label><br><br>
                    </div>

                    <div class="f box" >
                        <div class="questionTitle">Which of the following shoe styles do you own?</div>

                        <input type="checkbox" name="styleType[]" id="heels" value="heels">
                        <label for="heels"> Heels</label><br>

                        <input type="checkbox" name="styleType[]" id="flats" value="flats">
                        <label for="flats"> Flats</label><br>

                        <input type="checkbox" name="styleType[]" id="athletic2" value="athletic">
                        <label for="athletic2"> Athletic</label><br><br>
                    </div>

                    <div class="question chooser">
                        <div class="questionTitle">How likely are you to purchase new shoes in the next 3 months?</div>

                        <label for="howLikely">0 Being Least Likely and 10 Most Likely</label><br>


                        <div class = "range-field">
                        <input type="range" name="rangeLikely" id="howLikely" min="0" max="10">
                        </div>

                        <!-- use html5 'range' attribute to make a slider from 0 to 10 -->
                        
                    </div>

                    <div class="question">
                        <div class="questionTitle">When did you last purchase a pair of shoes?</div>
                    
                        <input type="radio" name="shoePurchase" id="lessOne" value="Less than a month ago">
                        <label for="lessOne"> Less than a month ago</label><br>

                        <input type="radio" name="shoePurchase" id="oneToSix" value="1-6 months ago">
                        <label for="oneToSix"> 1-6 months ago</label><br>

                        <input type="radio" name="shoePurchase" id="sixToYear" value="6 months to a year ago">
                        <label for="sixToYear"> 6 months to a year ago</label><br>

                        <input type="radio" name="shoePurchase" id="overYear" value="More than a year ago">
                        <label for="overYear"> More than a year ago</label><br><br>
                    </div>
                    <div class="center-align">
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
                    </div>

                </fieldset>
            </form>
        </section>

        <footer class="end">
            <div class="info">Information Architecture - <span class="highlight">Aaron</span> Raymond | Design - <span class="highlight">Hillary</span> Chun | Front End - <span class="highlight">Ali</span> Hashim | Back End - <span class="highlight">John</span> Denzer</div>
        </footer>
    </div><!--.container-->
  

  <!-- Downloading jQuery and Materialize file for JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/materialize.min.js"></script>  

<!-- Smooth scrolling -->
<script src = "js/scrolling.js"></script>
<script> $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      })
</script>

<!-- Hide/show divs -->
<script>
$(document).ready(function(){
    $('.gender').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>

</body>

</html>