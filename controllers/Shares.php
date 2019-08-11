<?php
class Shares extends Controller
{
    protected function index()
    {
        $viewModel = new ShareModel();
        $this->returnView($viewModel->index(), true);
    }
}
