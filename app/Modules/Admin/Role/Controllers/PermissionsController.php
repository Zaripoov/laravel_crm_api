<?php

namespace App\Modules\Admin\Role\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', Role::class);

        $roles = Role::all();

        $this->title = "Title Role Index";

        $this->content = view('Admin::Role.index')
            ->with(
                [
                    'roles' => $roles,
                    'title' => $this->title,
                ]
            )
            ->render();

        return $this->renderOutput();
    }
}
