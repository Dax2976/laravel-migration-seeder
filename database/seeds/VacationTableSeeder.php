
<?php

use Illuminate\Database\Seeder;
use App\Model\Place;

class VacationTableSeeders extends Seeders{
    public function run(){
        $vacations = [
            [
                'city'=>'Roma',
                'hotel'=>'Hotel piazza di spagna',
                'price'=>'343€',
                'vote'=>7.5, 
            ],
            [
                'city'=>'Ibiza',
                'hotel'=>'Hotel Disco Hotel LA PLAYA',
                'price'=>'743€',
                'vote'=>9.5,
            ],
            [
                'city'=>'Dubai',
                'hotel'=>'GranHotel Sherman',
                'price'=>'1293€',
                'vote'=>9.9,
            ],
        ];

        foreach ($vacations as $vacation){
            $newVacation = new Place();
            $newVacation->city = $vacation['city'];
            $newVacation->hotel =$vacation['hotel'];
            $newVacation->price = $vacation['price'];
            $newVacation->vote = $vacation['vote'];
            $newVacation->save();
        }
    }
}