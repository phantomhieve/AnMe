<?php
    function cardDeck($cardImage,$cardHeading,$cardData,$cardRate){
        echo" 
        <div class=\"col-md-4\">
            <div class=\"card mb-4 box-shadow border-light text-white bg-dark\">
            <img class=\"card-img-top\" height=\"300\" width =\"300\"src=\"data:image;base64,".$cardImage."\"  alt=\"".$cardHeading."\">
                <div class=\"card-body\">
                    <h4 class = \"card-title text-center\">".$cardHeading."</h4><hr style=\"background-color: white;\">
                    <p class=\"card-text\">".$cardData."</p>
                    <hr style=\"background-color: white;\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-light\">View</button>
                            <button type=\"button\" class=\"btn btn-sm btn-outline-light\">Edit</button>
                        </div>
                        <small>".$cardRate."/10</small>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
?>
