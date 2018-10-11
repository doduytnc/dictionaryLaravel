<?php

namespace App\Http\Controllers;

class DictionaryController extends Controller
{
    public function search()
    {
        $dictionary = [
            'computer' => 'Máy tính',
            'laptop' => 'máy tính xách tay',
            'student' => 'sinh viên',
            'manager' => 'người quản lý',
            'mobile' => 'điện thoại di động',
            'car' => 'Xe ô tô',
            'book' => "quyển sách"
        ];

        $word = $_POST["search"];
        $flag = 0;
        foreach ($dictionary as $key => $item) {
            if ($key == $word) {
                $result = $item;
                $flag = 1;
            }
        }
        return view('index', compact('flag','result','word') );
    }

}
