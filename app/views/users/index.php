<!--Link Header-->
<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="row ms-auto me-auto mt-5" style="max-width: 1100px;">
        <div class="accordion" id="usersTable">
            <?php foreach ($data['users'] as $user) : ?>
                <div class="accordion-item">
                    <h2 id="<?php echo 'heading' . $user->id; ?>" class="accordion-header">
                        <button class="accordion-button <?php echo $user->id == '1' ? '' : 'collapsed'; ?>"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#<?php echo 'user' . $user->id; ?>"
                                aria-controls="<?php echo 'user' . $user->id; ?>">
                            <?php echo $user->name; ?>
                        </button>
                    </h2>
                    <div id="<?php echo 'user' . $user->id; ?>"
                         class="accordion-collapse collapse <?php echo $user->id == '1' ? 'show' : ''; ?>"
                         data-bs-parent="#usersTable">
                        <div class="accordion-body">
                            <p class="mb-1">Id: <b><?php echo $user->id; ?></b></p>
                            <p class="mb-1">Login: <b><?php echo $user->login; ?></b></p>
                            <p class="mb-1">Password: <b><?php echo $user->password; ?></b></p>
                            <p class="mb-1">Name: <b><?php echo $user->name; ?></b></p>
                            <p class="mb-1">Gender: <b><?php echo $user->sex; ?></b></p>
                            <p class="mb-1">Date of birth: <b><?php echo $user->dob; ?></b></p>
                            <p class="mb-1">Balance: <b><?php echo $user->balance . ' ' . $user->currency; ?></b></p>
                            <p class="mb-1">Status: <b><?php echo $user->status; ?></b></p>
                            <div class="mb-1">Contacts:
                                <div>
                                    <span>Address:</span>
                                    <span><b><?php echo $user->address; ?></b></span>
                                </div>
                                <?php foreach ($data['contacts'] as $contact) : ?>
                                    <?php if ($contact->user_id == $user->id): ?>
                                        <div>
                                            <span><?php echo ucfirst($contact->type) . ':'; ?></span>
                                            <span><b><?php echo $contact->contact; ?></b></span>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!--Link Footer-->
<?php require APPROOT . '/views/includes/footer.php'; ?>
