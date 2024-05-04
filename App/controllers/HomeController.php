<?php

namespace App\Controllers;

use Exception;
use Framework\Database;

class HomeController {
    protected $db;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    // Home View
    
    public function index() {
        $listings = $this->db->query('SELECT * FROM listings LIMIT 6')->fetchAll();

        loadview('home', [
            'listings' => $listings,
        ]);
    }
}