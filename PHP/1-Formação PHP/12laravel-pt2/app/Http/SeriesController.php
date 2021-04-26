<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarseries() {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of Shield'
        ];
        $html = "<ul>";
            foreach ($series as $serie) {
                $html .= "<li>$serie</li>";
            }
        $html .= "</ul>";
        echo $html;
    }
}
