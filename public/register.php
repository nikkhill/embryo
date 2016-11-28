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
        if (empty($_POST["id"]))
        {
            apologize("You must provide your ID.");
        }
        if (empty($_POST["name"]))
        {
            apologize("You must provide your name.");
        }
        else if (empty($_POST["phone"]))
        {
            apologize("You must provide your phone for contacting others.");
        }
        if( !preg_match("/^([1]-)?[0-9]{10}$/i", $_POST["phone"]) ) 
        { 
            apologize("Please enter a valid phone number.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["confirmation"] != $_POST["password"])
        {
            apologize("Passwords do not match.");
        }
        if(query("INSERT INTO embryo_members (member_id, name, hash, phone_no) VALUES(?, ?, ?, ?)", $_POST["id"],  $_POST["name"], crypt($_POST["password"]), $_POST["phone"]) === false)
        {
            apologize("ID already exists.");
        }
        else
        {
            // $rows = query("SELECT LAST_INSERT_ID() AS id");
            // $id = $rows[0]["id"];
            // $_SESSION["id"] = $id;
            // redirect("index.php");
            successmessage("Registered. Approval still pending!", "login.php");
        }
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
