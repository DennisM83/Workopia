<?php

namespace App\Controllers;

use Exception;
use Framework\Database;

class ListingController {
    protected $db;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    // Show all listings

    public function index() {
        $listings = $this->db->query('SELECT * FROM listings')->fetchAll();

        loadview('listings/index', [
            'listings' => $listings,
        ]);
    }

    // Create a listing

    public function create() {
        loadView('listings/create');
    }

    // View a single listing

    public function show($params) {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id,
        ];

        $listing = $this->db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

        if(!$listing) {
            ErrorController::notFound('Listing not found');
            return;
        }

        loadView('listings/show', [
            'listing' => $listing,
        ]);
    }
}