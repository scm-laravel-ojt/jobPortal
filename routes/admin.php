<?php

use Illuminate\Support\Facades\Route;

    Route::get('admin/dashboard', [App\Http\Controllers\Admin\ProfileController::class, 'dashboard']);
    Route::get('admin/{id}/edit', [App\Http\Controllers\Admin\ProfileController::class, 'edit']);
    Route::put('admin/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'update']);

    //user
    Route::get('admin/users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('admin/users/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::delete('admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);
    Route::post('admin/users/active', [\App\Http\Controllers\Admin\UserController::class, 'active']);

    //companies
    Route::get('admin/companies', [App\Http\Controllers\Admin\CompanyController::class, 'index']);
    Route::delete('admin/companies/{id}', [App\Http\Controllers\Admin\CompanyController::class, 'destroy']);
    Route::post('admin/companies/{id}/active', [App\Http\Controllers\Admin\CompanyController::class, 'active']);

    //categories
    Route::resource('admin/categories', App\Http\Controllers\Admin\CategoryController::class);

    //jobs
    Route::get('admin/jobs', [App\Http\Controllers\Admin\JobController::class, 'index']);
    Route::delete('admin/jobs/{id}', [App\Http\Controllers\Admin\JobController::class, 'destroy']);
    Route::post('admin/jobs/approve', [App\Http\Controllers\Admin\JobController::class, 'approve']);

    //roles
    Route::get('admin/roles', [App\Http\Controllers\Admin\RoleController::class, 'index']);

    //contact-us
    Route::get('admin/contacts', [App\Http\Controllers\Admin\ContactController::class, 'index']);
    Route::delete('admin/contacts/{id}', [App\Http\Controllers\Admin\ContactController::class, 'destroy']);