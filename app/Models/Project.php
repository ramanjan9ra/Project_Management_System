<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model

// In Project model

{
    use HasFactory;
    
    protected $fillable = [
        // 'project_id',
        'project_name',
        'assigned_to',
        'client_name',
        'status',
        'start_date',
        'end_date',

    ];


public static function getStatusNames()
{
    return [
        '1' => 'Pending',
        '2' => 'In Progress',
        '3' => 'Completed',
        '4' => 'On Hold',
        // Add more statuses as needed
    ];
}

}