<?php

class Validator
{

    public function validateForm($balance)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();

            if (empty($_POST['user_id'])) {
                $_SESSION["errors"][] = '<b>Player</b> is a required field';
            }
            if (empty($_POST['bet'])) {
                $_SESSION["errors"][] = '<b>Bet</b> is a required field';
            }
            if ($_POST['bet'] < 1 || $_POST['bet'] > 500) {
                $_SESSION["errors"][] = '<b>Bet</b> must be between 1 and 500';
            }
            if (isset($balance) && $_POST['bet'] > $balance) {
                $_SESSION["errors"][] = '<b>Bet</b> cannot exceed the balance';
            }
            if (empty($_POST['odds'])) {
                $_SESSION["errors"][] = '<b>Odds</b> is a required field';
            }
            if (empty($_POST['result'])) {
                $_SESSION["errors"][] = '<b>Result</b> is a required field';
            }

            if (isset($_SESSION['errors'])) {
                header("Location: " . URLROOT);
                exit();
            }
        }
    }

}