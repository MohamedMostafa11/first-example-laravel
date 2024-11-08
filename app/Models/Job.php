<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
public static function all(){
    return [
                [
                    'id' => 1,
                    'title' => 'Actor',
                    'salary' => '$50.000'
                 ],
                 [
                    'id' => 2,
                    'title' => 'Programmer',
                    'salary' => '$40.000'
                 ],
                 [
                    'id' => 1,
                    'title' => 'Teacher',
                    'salary' => '$20.000'
                 ]
    ];
}
public static function find($id):array
{
    $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);
    if (!$job) {
        abort(404, 'Job not found');
    }
    return $job;
}
}
