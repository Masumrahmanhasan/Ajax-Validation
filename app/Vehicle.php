<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kdion4891\Lac\Components\LacField;
use Kdion4891\Lac\Traits\LacModel;

class Vehicle extends Model
{
    use LacModel;

    public function fields()
    {
        return [
        LacField::make('ID')
            ->tableColumn()->tableSearchable()->tableOrder('desc'),
    
        LacField::make('Brand')
            ->tableColumn()->tableSearchable()->tableSortable()
            ->input()->inputCreate()->inputEdit()
            ->rules(['required']),
    
        LacField::make('Color')
            ->tableColumn()->tableSearchable()->tableSortable()
            ->inputSelect(['Red', 'Green', 'Blue'])->inputCreate()->inputEdit(),
    
        LacField::make('Created At')
            ->tableColumn()->tableSearchable()->tableHidden(),
    
        LacField::make('Updated At')
            ->detailsHidden(),
    ];
    }
}
