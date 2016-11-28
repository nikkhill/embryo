<?php

    // configuration
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        // if (empty($_POST["username"]))
        // {
        //     apologize("You must provide your username.");
        // }
        //confirmation_status draft_URL proposed_expenditure
        $expenditure = null;
        $room = null;
        $video_status = null;
        $article_status = null;
        $poster_status = null;
        $feedback_status = null;
        if (empty($_POST["event_date"]))
        {
            apologize("You must provide the event date.");
        }
        if (empty($_POST["topic"]))
        {
            apologize("You must provide the topic.");
        }
        if (empty($_POST["type"]) || $_POST["type"]==="0")
        {
            apologize("You must provide the Event type.");
        }
        if (!empty($_POST["proposed_expenditure"]))
        {
            $expenditure = $_POST["expenditure"];
        }
        if (!empty($_POST["room"]))
        {
            $room = $_POST["room"];
        }
        if (!empty($_POST["video_status"]))
        {
            $video_status = $_POST["video_status"];
        }
        if (!empty($_POST["article_status"]))
        {
            $article_status = $_POST["article_status"];
        }
        if (!empty($_POST["poster_status"]))
        {
            $poster_status = $_POST["poster_status"];
        }
        if(query("UPDATE proposed_event set confirmation_status='Confirmed' where peid = ".$_POST["peid"])===false)
            {
                apologize("Error");
            }
        if(query("INSERT INTO event(peid,topic,event_date,type,room,video_status,article_status,poster_status,feedback_status,team_id,expenditure) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $_POST["peid"], $_POST["topic"], $_POST["event_date"], $_POST["type"], $room, $video_status, $article_status, $poster_status, $feedback_status,null,$expenditure) === false)
        {
            apologize("Event already exists.");
        }
        else
        {
            
            successmessage("Event successfully added", "home.php");
        }
    }
    else
    {
        // else render form
        
        $peid = $_GET["peid"];
        render("confirm_event_form.php", ["title" => "Event Details", "peid" => $peid]);
    }

?>
