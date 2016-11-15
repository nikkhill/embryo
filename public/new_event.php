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
        $confirmation_status = 'Pending';
        $draft_URL = null;
        $proposed_expenditure = null;
        if (empty($_POST["sid"]) || $_POST["sid"]==="0")
        {
            apologize("You must provide the ID of the Speaker.");
        }
        if (empty($_POST["proposed_topic"]))
        {
            apologize("You must provide a tentative topic.");
        }
        if (empty($_POST["date_of_contact"]))
        {
            apologize("You must provide the date of contact.");
        }
        if (!empty($_POST["proposed_expenditure"]))
        {
            $proposed_expenditure = $_POST["proposed_expenditure"];
        }
        if (!empty($_POST["confirmation_status"]))
        {
            $confirmation_status = $_POST["confirmation_status"];
        }
        if(!empty($_POST["draft_URL"]))
        {
            $draft_URL = $_POST["draft_URL"];
        }
        
        if(query("INSERT INTO proposed_event (confirmation_status,proposed_topic,date_of_contact,sid,draft_URL,proposed_expenditure) VALUES(?, ?, ?, ?, ?, ?)", $confirmation_status, $_POST["proposed_topic"],  $_POST["date_of_contact"], $_POST["sid"], $draft_URL, $_POST["proposed_expenditure"]) === false)
        {
            apologize("Event already exists.");
        }
        else
        {
            successmessage("Event successfully added", "new_event.php");
        }
    }
    else
    {
        // else render form
        render("new_event_form.php", ["title" => "Add new event"]);
    }

?>
