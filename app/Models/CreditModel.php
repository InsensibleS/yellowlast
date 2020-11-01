<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditModel extends Model
{
    use HasFactory;

    protected $table = 'credit';

    public $timestamps = false;

    protected $fillable = [
      'id',
      'applicationStatusCode',
      'applicationStatusName',
      'surname',
      'name',
      'patronymic',
      'birthDate',
      'birthPlace',
      'sex',
      'resident',
      'snils',
      'education',
      'SumCredit',
      'CreditTerm',
      'telephoneNumber',
      'httpCode',
      'httpMessage',
      'moreInformation',
    ];
}
