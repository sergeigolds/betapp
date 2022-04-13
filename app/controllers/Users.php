<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->validator = new Validator;
    }

    public function index()
    {
        $data = [
            'users' => $this->userModel->getUsers(),
            'contacts' => $this->userModel->getContacts(),
        ];

        $this->view('users/index', $data);
    }

    public function update()
    {
        $user = $this->userModel->getUser($_POST['user_id']);

        // Pass user balance to validator to prevent bet more than available balance
        $this->validator->validateForm($user->balance);

        $data = [
            'bet' => $_POST['bet'],
            'odds' => $_POST['odds'],
            'result' => $_POST['result'],
        ];

        $result = $this->userModel->calculateWinnings($data);
        $newBalance = $user->balance + $result;

        $this->userModel->updateBalance($user->id, $newBalance);

        session_start();

        $_SESSION['result'] = $data + [
                'player' => $user->name,
                'currency' => $user->currency,
                'winnings' => $result,
                'balance' => $user->balance,
                'new_balance' => $newBalance,
            ];

        header("Location: " . URLROOT . '/result');
        exit();
    }
}
