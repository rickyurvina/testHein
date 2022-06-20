<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreheinsohnRequest;
use App\Http\Requests\UpdateheinsohnRequest;
use App\Models\Bonus;
use App\Models\heinsohn;
use App\Models\Title;
use App\Models\Worker;

class HeinsohnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arregloA = [1, 4, 3, 0];
        $arregloB = [1, 2, [5, 8], 4];
        $arregloC = [0, [6, 2], null, 7, 1];

        $sumArreglo1 = $this->sumArreglo($arregloA);
        $sumArreglo2 = $this->sumArreglo($arregloB);
        $sumArreglo3 = $this->sumArreglo($arregloC);
        $sql1 = $this->question21();
        $sql2 = $this->question22();
        $sql3 = $this->question23();
        $sql4 = $this->question24();
        $sql5 = $this->question31();

        return view('welcome', compact('sumArreglo1', 'sumArreglo2', 'sumArreglo3', 'sql1', 'sql2', 'sql3', 'sql4', 'sql5'));
    }

    public function sumArreglo($arreglo)
    {
        $sum = 0;
        foreach ($arreglo as $item) {
            if (is_array($item)) {
                $item = self::sumArreglo($item);
            }
            $sum = $sum + $item;
        }
        return $sum;
    }

    public static function questionWhile()
    {
        $i = 0;
        while ($i == 1) {
            echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
        }
        return $i;
    }

    public function question21()
    {
        return $sql = "SELECT first_name, last_name, salary FROM workers;";
    }

    public function question31()
    {
        $sql5 = Worker::get(['first_name', 'last_name', 'salary']);
        $insert=[
            'worker_id'=>3,
            'bonus_date'=>'2020-01-01 01:01:01',
            'bonus_amount'=>'100000'
        ];
        Bonus::create($insert);
        $sql6 = Worker::with('bonuses')->get();
        $sql7 = Title::get()->groupBy('worker_title');

        $arrySqls = [$sql5, $sql6,$sql7];
        return $arrySqls;
    }

    public function question22()
    {
        return $sql = "INSERT INTO bonuses  (worker_id, bonus_date, bonus_amount) values(3,'2020-01-01 01:01:01', '10000');";
    }

    public function question23()
    {
        return $sql = "select sum(bonus_amount), w.worker_id from bonuses as b
                join workers w on b.worker_id = w.worker_id
                group by b.worker_id;";
    }

    public function question24()
    {
        return $sql = "select count(t.worker_title), worker_title from titles as t
join workers w on t.worker_id = w.worker_id
group by t.worker_title;";
    }

    public static function deleteSpaces()
    {
        $string = '  Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new
                            package releases and tutorials.';
        $searchString = " ";
        $replaceString = "";
        return str_replace($searchString, $replaceString, $string);
    }

}
