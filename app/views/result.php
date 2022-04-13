<?php
session_start();
if (!isset($_SESSION['result'])) {
    header("Location: " . URLROOT);
    exit();
}
$name = $_SESSION['result']['player'];
$bet = $_SESSION['result']['bet'];
$odds = $_SESSION['result']['odds'];
$currency = $_SESSION['result']['currency'];
$result = $_SESSION['result']['result'];
$balance = $_SESSION['result']['balance'];
$new_balance = $_SESSION['result']['new_balance'];
$winnings = $_SESSION['result']['winnings'];
?>
    <!--Link Header-->
<?php require APPROOT . '/views/includes/header.php'; ?>
    <div class="container">
        <div class="row ms-auto me-auto" style="max-width: 1100px;">
            <div class="rounded-0 alert d-flex align-items-center mt-3 mb-0 <?php echo $result == 'win' ? 'alert-success' : 'alert-danger'; ?>"
                 role="alert">
                <div>
                    <h2><?php echo $name . ' ' . $result; ?></h2>
                    <p class="mb-1">Bet amount:
                        <b><?php echo number_format((float)$bet, 2, '.', '') . ' ' . $currency; ?></b>
                    </p>
                    <p class="mb-1">Odds: <b><?php echo $odds; ?></b></p>
                    <p class="mb-1">Net winnings:
                        <b><?php echo number_format((float)$winnings, 2, '.', '') . ' ' . $currency; ?></b>
                    </p>
                    <p class="mb-1">Old balance: <b><?php echo $balance . ' ' . $currency; ?></b></p>
                    <p class="mb-1">New balance:
                        <b><?php echo number_format((float)$new_balance, 2, '.', '') . ' ' . $currency; ?></b>
                    </p>
                    <a href="<?php echo URLROOT; ?>" class="btn btn-primary mt-3">Calculate again</a>
                </div>
            </div>

        </div>
    </div>

<?php session_destroy(); ?>
    <!--Link Footer-->
<?php require APPROOT . '/views/includes/footer.php'; ?>