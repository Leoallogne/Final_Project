<?php

class DashboardController extends Controller {

    public function index() {
        AuthMiddleware::check();
        return $this->view("dashboard/index");
    }
}
