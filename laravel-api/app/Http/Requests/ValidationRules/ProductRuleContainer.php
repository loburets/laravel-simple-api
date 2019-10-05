<?php

namespace App\Http\Requests\ValidationRules;

use App\Product;
use Illuminate\Validation\Rule;

class ProductRuleContainer implements RuleContainer
{
    /**
     * @return array
     */
    public function all()
    {
        return [
            'name' => 'required|min:3|max:255',
            'description' => 'string',
            'status' => [
                Rule::in(Product::STATUSES),
            ],
            'free_shipping' => 'required|boolean',
        ];
    }
}