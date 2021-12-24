<?php

namespace App\Modules\Admin\Lead\Models\Traits;

use App\Modules\Admin\Lead\Models\Lead;
use App\Modules\Admin\LeadComment\Models\LeadComment;

trait UserLeadsTrait
{

    public function leads(){
        return $this->hasMany(Lead::class);
    }

    public function tasks(){
        //
    }

    public function responsibleTasks(){
        //
    }

    public function comments(){
        $this->hasMony(LeadComment::class);
    }

}
