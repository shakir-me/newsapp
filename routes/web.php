<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\SingleComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminTagComponent;
use App\Http\Livewire\Admin\AdminAddTagComponent;
use App\Http\Livewire\Admin\AdminEditTagComponent;
use App\Http\Livewire\Admin\AdminPostsComponent;
use App\Http\Livewire\Admin\AdminAddPostComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/',HomeComponent::class)->name('index');
Route::get('/category',CategoryComponent::class)->name('category');
Route::get('/conatct',ContactComponent::class)->name('conatct');
Route::get('/single',SingleComponent::class)->name('single');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//category route
   Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
//tags route
    Route::get('/admin/tags',AdminTagComponent::class)->name('admin.tags');
    Route::get('/admin/tag/add',AdminAddTagComponent::class)->name('admin.tags');
    Route::get('/admin/tag/edit/{tag_id}',AdminEditTagComponent::class)->name('admin.tag.edit');

    //posts route
    Route::get('/admin/posts',AdminPostsComponent::class)->name('admin.posts');
    Route::get('/admin/post/add',AdminAddPostComponent::class)->name('admin.post.add');


});

require __DIR__.'/auth.php';
