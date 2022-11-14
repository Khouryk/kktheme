<?php
    if(have_comments()){
        echo "<h3> Comments:</h3>";

        foreach($comments as $comment){
            echo "<div class='row individual-comment'>";

            echo "<div class='col-md-2'>";

                //retrieve avatar of commenter
                echo "<div class='comment-avatar'>" . get_avatar($comment, 80) . "</div>";

                //retrieve commenter's name
                echo "<div class='comment-author'>" . "<h5>" . get_comment_author() ."</h5>" . "</div>";

                //retrieve comment date
                echo "<div class='comment-date'>" . get_comment_date(). "</div>";

            echo "</div>";


            echo "<div class='col-md-10'>";

             //retrieve comment text
             echo "<div class='comment-text'>" . get_comment_text(). "</div>";

            echo "</div>";

            echo "</div>";


        }
    }