<?php
class Users extends Controller
{
    public function register()
    {
        $viewModel = new UserModel();
        $this->returnView($viewModel->register(), true);
    }
}
