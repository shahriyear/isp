<?php


namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

trait AppTools
{
    /**
     * @param Model::class
     * @return  user_id-ymd-pk-today_id
     */
    public static function getCode($model)
    {
        /*Session User Id*/
        $code = Auth::id();

        $code .= 0;

        /*Get last Row Id (PK)*/
        if ($obj = $model::latest()->first()) {
            $code .= $obj->id + 1;
        } else {
            $code .= 1;
        }
        $code .= 0;

        /*Get Today's total Row Number*/
        $count = $model::withTrashed()->whereDate('created_at', Carbon::today())->orderBy('created_at', 'desc')->get()->count();

        /*Get Today's Date Format 190508 (ymd) */
        $code .= Carbon::now()->format('ymd');
        $code .= 0;

        /*Next New PK*/
        $code .= $count + 1;

        return $code;
    }


    public static function myDate($date)
    {
        return Carbon::createFromFormat('d/m/Y', trim($date))->format('Y-m-d');
    }

    public static function myDateSearchFormat($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    public static function myDateTimeSearchFormatStart($date)
    {
        return Carbon::parse($date)->format('Y-m-d H:i:s');
    }

    public static function myDateTimeSearchFormatEnd($date)
    {
        return Carbon::parse($date)->format('Y-m-d '.'23:59:59');
    }

    public static function convertNumberToWord($num = false)
    {
        $num = str_replace(array(',', ' '), '', trim($num));
        if (!$num) {
            return false;
        }
        $num = (int) $num;
        $words = array();
        $list1 = array(
            '', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
            'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        );
        $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
        $list3 = array(
            '', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
            'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
        );
        $num_length = strlen($num);
        $levels = (int) (($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        for ($i = 0; $i < count($num_levels); $i++) {
            $levels--;
            $hundreds = (int) ($num_levels[$i] / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
            $tens = (int) ($num_levels[$i] % 100);
            $singles = '';
            if ($tens < 20) {
                $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
            } else {
                $tens = (int) ($tens / 10);
                $tens = ' ' . $list2[$tens] . ' ';
                $singles = (int) ($num_levels[$i] % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . (($levels && (int) ($num_levels[$i])) ? ' ' . $list3[$levels] . ' ' : '');
        } //end for loop
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }
        return ucwords(implode(' ', $words) . 'taka only.');
    }



    public static function uploadImage($data, $path)
    {

        $imageName = time() . '.' . $data->photo->getClientOriginalExtension();
        $data->photo->move(public_path($path), $imageName);
        return $path . $imageName;
    }

    public static function getMonths()
    {
        $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
        return $months;
    }

    public static function getMonth($m)
    {
        $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
        return $months[$m];
    }

    public static function getDays()
    {
        $days = array(1 => 'Sunday', 2 => 'Monday', 3 => 'Tuesday', 4 => 'Wednesday', 5 => 'Thursday', 6 => 'Friday', 7 => 'Saturday');
        return $days;
    }

    public static function getDay($d)
    {
        $days = array(1 => 'Sunday', 2 => 'Monday', 3 => 'Tuesday', 4 => 'Wednesday', 5 => 'Thursday', 6 => 'Friday', 7 => 'Saturday');
        return $days[$d];
    }

    public static function getBloodGroups()
    {
        $bloods = array(1 => 'A+', 2 => 'A-', 3 => 'B+', 4 => 'B-', 5 => 'O+', 6 => 'O-', 7 => 'AB+', 8 => 'AB-');
        return $bloods;
    }



    public static function getPolicyTypes()
    {
        $types = array(1 => 'day', 2 => 'week', 4 => 'month');
        return $types;
    }

    public static function getPolicyTypesfull()
    {
        $types = array(1 => 'day', 2 => 'week', 3 => 'half-month', 4 => 'month', 5 => 'quarter', 6 => 'half-year', 7 => 'year');
        return $types;
    }






    public static function intervalByIndex($index = null)
    {
        $intervals = array(1 => 'day', 7 => 'week', 15 => 'half-month', 30 => 'month', 120 => 'quarter', 180 => 'half-year', 365 => 'year');
        if ($index != null)
            return $intervals[$index];
        return $intervals;
    }

    public static function intervalByValue($value = null)
    {
        $intervals = array(1 => 'day', 7 => 'week', 15 => 'half-month', 30 => 'month', 120 => 'quarter', 180 => 'half-year', 365 => 'year');
        if ($value != null)
            return array_search($value, $intervals);
        return $intervals;
    }

    public static function dateToTime($date)
    {
        return strtotime($date);
    }


    public static function nextInterval($date, $interval)
    {
        $index = self::intervalByValue($interval);
        return Carbon::parse($date)->addDays($index)->addHours(23)->addMinute(59)->addSecond(59);
    }

    public static function calculateRecurringDates($account)
    {
        $data['start_date'] = self::dateToTime($account->starting_date);
        $ldate = self::nextInterval($account->starting_date, $account->interval);
        $data['last_date'] = self::dateToTime($ldate);

        return (object) $data;
    }
}
