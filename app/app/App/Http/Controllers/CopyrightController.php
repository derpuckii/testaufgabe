<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = " _             _   _ _ _        _____ _                         
    | |           | \ | (_) |      / ____(_)                        
    | |__  _   _  |  \| |_| |___  | (___  _  _____   _____ _ __ ___ 
    | '_ \| | | | | . ` | | / __|  \___ \| |/ _ \ \ / / _ \ '__/ __|
    | |_) | |_| | | |\  | | \__ \  ____) | |  __/\ V /  __/ |  \__ \
    |_.__/ \__, | |_| \_|_|_|___/ |_____/|_|\___| \_/ \___|_|  |___/
            __/ |                                                   
           |___/ 
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
