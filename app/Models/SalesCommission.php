<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesCommission extends Model
{
    protected $table = "sales_commission_view";
    public $incrementing = false;
    public $timestamp = false;

    public static function getColumns(){
        return [
            'company',
            'seller',
            'client',
            'city',
            'state',
            'sold',
            'sold_at',
            'status',
            'total_amount',
            'commission'
        ];
    }
}
