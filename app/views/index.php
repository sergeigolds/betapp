<?php session_start(); ?>
<!--Link Header-->
<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row ms-auto me-auto" style="max-width: 1100px;">
        <div class="alert alert-primary mt-5 mb-0 alert-dismissible fade show rounded-0" role="alert">
            <h4 class="alert-heading">How to use calculation form:</h4>
            <ol class="list-group list-group-numbered ps-3">
                <li class="list-group-item list-group-item-primary border-0 p-0">Choose <b>Player</b> from players list
                </li>
                <li class="list-group-item list-group-item-primary border-0 p-0">Choose <b>Bet</b> amount from 1 to 500
                </li>
                <li class="list-group-item list-group-item-primary border-0 p-0">Choose <b>Money Line Bet</b> of one
                    match ( First team win | Draft | Second team win )
                </li>
                <li class="list-group-item list-group-item-primary border-0 p-0">Choose <b>Result</b> of match ( Player
                    win | Player lost )
                </li>
                <li class="list-group-item list-group-item-primary border-0 p-0">Click <b>Calculate</b> to see result
                </li>
            </ol>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!--Link Calculation form-->
        <?php require APPROOT . '/views/components/calculation_table.php'; ?>
    </div>
</div>

<!--Link Footer-->
<?php require APPROOT . '/views/includes/footer.php'; ?>
