<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $unused = "I am never used it"; // Unused variable (code smell)

        for ($i = 0; $i < 5; $i++) {
            if ($i === 3) {
                if (true) {
                    if (true) {
                        if (true) {
                            return "Too deeply nested"; // Code smell: high cognitive complexity
                        }
                    }
                }
            }
        }

        return "Done";
    }
}
