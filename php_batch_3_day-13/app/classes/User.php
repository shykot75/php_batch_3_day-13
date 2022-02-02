<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser(){
        $this->user = [
            0=> [
                'name' => 'Shykot',
                'mobile'=> '1234',
                'location'=> 'N.ganj'
            ],
            1=> [
                'name' => 'Tarok',
                'mobile'=> '4567',
                'location'=>'Dhaka'
            ]
        ];
        return $this->user;
    }
}