<?php

namespace App\Http\Controllers;

use App\Http\DataTables\ApManagementDataTable;
use App\Models\ApManagement;

class ApManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(ApManagementDataTable $apManagementDataTable)
    {
        return $apManagementDataTable->render('ap-managements.index');
    }

    public function getCreate()
    {
        return view('ap-managements.create');
    }

    public function postCreate()
    {
        request()->validate(ApManagement::rules());

        ApManagement::query()->create(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function getShow(ApManagement $apManagement)
    {
        return view('ap-managements.show', compact('apManagement'));
    }

    public function getEdit(ApManagement $apManagement)
    {
        return view('ap-managements.edit', compact('apManagement'));
    }

    public function patchEdit(ApManagement $apManagement)
    {
        request()->validate(ApManagement::rules($apManagement));

        $apManagement->update(request()->all());

        return response()->json([
            'dismiss_modal' => true,
            'reload_table' => true,
        ]);
    }

    public function deleteDestroy(ApManagement $apManagement)
    {
        $apManagement->forceDelete();

        return response()->json([
            'reload_table' => true,
        ]);
    }
}
