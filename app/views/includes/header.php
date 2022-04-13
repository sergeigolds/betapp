<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo URLROOT ?>/favicon.ico" type="image/x-icon">
    <link href="<?php echo URLROOT ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <title>Sports Betting App</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark pt-3 pb-3">
    <div class="container ms-auto me-auto ps-0 pe-0" style="max-width: 1100px;">
        <a class="navbar-brand me-4" href="<?php echo URLROOT; ?>">Sports App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>">Calculate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . '/users' ?>">Users</a>
                </li>
            </ul>
        </div>
    </div>
</nav>