<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFolderRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FileController extends Controller
{
    public function myFiles()
    {
        return Inertia::render('MyFiles');
    }
    public function createFolder(StoreFolderRequest $request)
    {
        $data = $request->validated();
        $parent = $request->parent;
        if (!$parent) {
            $parent = $this->getRoot();
        }

        $file  = new File();
        $file->is_folder = 1;
        $file->name = $data['name'];
        $parent->appendNode($file);

        //return Inertia::render('MyFiles');
    }
    public function getRoot()
    {
        return File::query()->WhereIsRoot()->where('created_by', Auth::id())->firstOrFail();
    }
}
