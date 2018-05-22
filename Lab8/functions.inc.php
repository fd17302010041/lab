<?php

function generateLink($url, $label, $class) {
   $link = '<a href="' . $url . '" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function outputPostRow($number)  {
    include("travel-data.inc.php");
    switch ($number){
        case 1:{
            $img = '<img src = "images/8710320515.jpg" class="ratings" style="float: left;margin-right: 2em"/>';
            echo $img;
            $div1 = '<div>
                        <h2 class="postlist">Ekklisia Agii Isidori Church</h2>
                        <p style="float: right">2/8/2017</p>
                        <p>PHOTOED BY <a>Leonie Kohler</a></p>
                    </div>';
            echo $div1;
            echo constructRating(3);
            echo '15REVIEWS';
            $div2 = '<div>
                         <p>At the end of the hot climb up to the top Lycabettus Hill you are greeted with the oasis that is the Ekklisia Agii Isidori church.</p>                   
                         <button type="submit" class="btn btn-primary">Read more</button>
                         <br><br>
                         <hr/>
                     </div>';
            echo $div2;
        }break;
        case 2:{
            $img = '<img src = "images/8710247776.jpg" class="ratings" style="float: left;margin-right: 2em"/>';
            echo $img;
            $div1 = '<div>
                        <h2 class="postlist">Santorini Sunset</h2>
                        <p style="float: right">9/9/2017</p>
                        <p>PHOTOED BY <a>Frantisek  Wichterlovav</a></p>
                    </div>';
            echo $div1;
            echo constructRating(5);
            echo '38REVIEWS';
            $div2 = '<div>
                         <p>Every evening as the sun sets in Fira, it seems that everyone who is not drinking or eating is rushing with their camera to the most picturesque locations in order to capture that famous Aegean sunset.</p>                   
                         <button type="submit" class="btn btn-primary">Read more</button>
                         <br><br>
                         <hr/>
                     </div>';
            echo $div2;
        }break;
        case 3:{
            $img = '<img src = "images/8710289254.jpg" class="ratings" style="float: left;margin-right: 2em"/>';
            echo $img;
            $div1 = '<div>
                        <h2 class="postlist">Looking towards Fira</h2>
                        <p style="float: right">10/19/2017</p>
                        <p>PHOTOED BY <a>Edward Francis</a></p>
                    </div>';
            echo $div1;
            echo constructRating(2);
            echo '3REVIEWS';
            $div2 = '<div>
                         <p>The steamer Mongolia, belonging to the Peninsular and Oriental Company, built of iron, of two thousand eight hundred tons burden, and five hundred horse-power, was due at eleven o\'clock a.m. on Wednesday, the 9th of October, at Suez.</p>                   
                         <button type="submit" class="btn btn-primary">Read more</button>
                         <br><br>
                         <hr/>
                     </div>';
            echo $div2;
        }break;
    }
}

/*
  Function constructs a string containing the <img> tags necessary to display
  star images that reflect a rating out of 5
*/
function constructRating($rating) {
    $imgTags = "";
    
    // first output the gold stars
    for ($i=0; $i < $rating; $i++) {
        $imgTags .= '<img src="images/star-gold.svg" width="16" />';
    }
    
    // then fill remainder with white stars
    for ($i=$rating; $i < 5; $i++) {
        $imgTags .= '<img src="images/star-white.svg" width="16" />';
    }    
    
    return $imgTags;    
}

?>