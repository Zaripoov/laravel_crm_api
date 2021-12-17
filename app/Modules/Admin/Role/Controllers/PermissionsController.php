<?php

namespace App\Modules\Admin\Role\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Admin\Dashboard\Classes\Base;
use App\Modules\Admin\Role\Models\Permissions;
use App\Modules\Admin\Role\Models\Role;
use App\Modules\Admin\Role\Services\PermService;
use App\Modules\Admin\Role\Services\RoleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PermissionsController extends Base
{

    public function __construct(PermService $permService)
    {
        parent::__construct();
        $this->service = $permService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', Role::class);

        $perms = Permissions::all();
        $roles = Role::all();

        $this->title = "Title Perm Index";

        $this->content = view('Admin::Permission.index')
            ->with(
                [
                    'perms' => $perms,
                    'roles' => $roles,
                    'title' => $this->title,
                ]
            )
            ->render();

        return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Role::class);

        $this->service->save($request);

        return back()->with([
            'message' => __('Success')
        ]);


    }
}
