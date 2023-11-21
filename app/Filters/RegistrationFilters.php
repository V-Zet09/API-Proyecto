<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class RegistrationFilters extends ApiFilters{

    protected $safeParams =[
        'period_id' =>['eq'],
        'activity_id' =>['eq'],
        'instructor_id' =>['eq'],
        'group_id' =>['eq'],
        'area_id' =>['eq'],
        'student_id' =>['eq'],
        'grade' =>['eq','gt','lt'],
        'career_id' =>['eq'],
    ];
    protected $columMap =[

    ];
    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='

    ];


}
