<?php

namespace App\Http\Requests\ValidationRules;

interface RuleContainer
{
    /**
     * @return array
     */
    public function all();
}