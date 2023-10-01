<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create(['code'=>'abc123',
                    'type'=>'fixed',
                    'value'=>'300',
                    'status'=>'active']);
        Coupon::create(['code'=>'111111',
                    'type'=>'percent',
                    'value'=>'10',
                    'status'=>'active']);
    }
}
