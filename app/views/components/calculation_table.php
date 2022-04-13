<!--Validations-->
<?php
if (isset($_SESSION['errors'])) : ?>
    <div class="alert alert-danger d-flex align-items-center mt-3 mb-0 alert-dismissible fade show rounded-0"
         role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
             class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
             aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
            <?php foreach ($_SESSION['errors'] as $error): ?>
                <p class="ms-3 mb-1"><?php echo $error; ?></p>
            <?php endforeach;; ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif;
session_destroy();
?>

<form class="ps-0 pe-0 mt-5" action="<?php echo URLROOT; ?>/users/update" method='post'>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col" class="p-3">Player</th>
            <th scope="col" class="p-3">Bet</th>
            <th scope="col" class="p-3 pe-2">Match
                <span class="float-end" style="letter-spacing: 6px">( 1x | X | 2x )</span>
            </th>
            <th scope="col" class="text-center pt-3 pb-3">Result</th>
            <th scope="col" class="text-center pt-3 pb-3">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="align-middle pe-3" style="width: 180px">
                <select name="user_id" class="form-select" required>
                    <option selected value="">Select Player</option>
                    <?php foreach ($data['users'] as $user): ?>
                        <option value="<?php echo $user->id; ?>;"><?php echo $user->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td class="align-middle p-3" style="width: 125px">
                <input type="number" name="bet" class="form-control" min="1" max="500" step="0.01" required>
            </td>
            <td id="matches_row" class="p-3">
                <?php foreach ($data['betting_data'] as $key => $value): ?>
                    <div class="d-flex justify-content-between pb-2 pt-2">
                        <div class="d-flex align-items-center">
                            <span><?php echo $value['favorite']['name']; ?></span>
                            <img src="<?php echo URLROOT . '/public/img/' . $value['favorite']['icon']; ?>"
                                 class="me-2 ms-2" width="36" height="36">
                            <span class="align-middle">vs</span>
                            <img src="<?php echo URLROOT . '/public/img/' . $value['underdog']['icon']; ?>"
                                 class="me-2 ms-2" width="36" height="36">
                            <span><?php echo $value['underdog']['name']; ?></span>
                        </div>
                        <div>
                            <label class="btn btn-outline-primary">
                                <?php echo $value['odds']['win']; ?>
                                <input required type="radio" name="odds" class="btn-check"
                                       value="<?php echo $value['odds']['win']; ?>">
                            </label>
                            <label class="btn btn-outline-primary">
                                <?php echo $value['odds']['draft']; ?>
                                <input type="radio" name="odds" class="btn-check"
                                       value="<?php echo $value['odds']['draft']; ?>">
                            </label>
                            <label class="btn btn-outline-primary">
                                <?php echo $value['odds']['lost']; ?>
                                <input type="radio" name="odds" class="btn-check"
                                       value="<?php echo $value['odds']['lost']; ?>">
                            </label>
                        </div>
                    </div>
                <?php endforeach; ?>
            </td>
            <td class="align-middle p-3 text-center" style="width: 160px">
                <input name="result" type="radio" class="btn-check" id="win" value="win" required>
                <label class="btn btn-outline-success" for="win">Win</label>
                <input name="result" type="radio" class="btn-check" id="lost" value="lost">
                <label class="btn btn-outline-danger" for="lost">Lost</label>
            </td>
            <td class="align-middle p-3 text-center" style="width: 125px">
                <button type="submit" class="btn btn-primary">Calculate</button>
            </td>
        </tr>
        </tbody>
    </table>
</form>