<?php

namespace App\Http\Livewire;

use App\Models\Product;
use LaravelViews\Views\TableView;

class ProductTableView extends TableView
{
    protected $model = Product::class;

    protected $paginate = 10;

    protected function repository()
    {
        return Product::query();
    }

    public function headers(): array
    {
        return [
            'Name',
            'Code',
            'Barcode',
            'Created',
            'Updated'
        ];
    }

    public function row($model)
    {
        return [
            $model->name,
            $model->code,
            $model->barcode,
            $model->created_at,
            $model->updated_at
        ];
    }
}
