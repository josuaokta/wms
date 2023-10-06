<?php

namespace App\Http\Livewire;

use App\Models\User;
use LaravelViews\Views\TableView;

class UsersTableView extends TableView
{
    protected $model = User::class;

    protected $paginate = 10;

    protected function repository()
    {
        return User::query();
    }

    public function headers(): array
    {
        return [
            'Name',
            'Email',
            'Created',
            'Updated'
        ];
    }

    public function row($model)
    {
        return [
            $model->name,
            $model->email,
            $model->created_at,
            $model->updated_at
        ];
    }
}
