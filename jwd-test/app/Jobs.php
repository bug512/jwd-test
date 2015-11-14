<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['company_name', 'company_href', 'company_email', 'company_description', 'job_name', 'job_salary', 'job_region', 'job_experience', 'job_description', 'job_minimal_req', 'job_desirable_req', 'job_duties', 'job_add_description', 'job_type_employment'];
}
