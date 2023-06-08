<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\Category;
use App\Request;
use App\Tools\Session;
use App\View;

class CategoryController
{
    public function index(): View
    {
        $categories = (new Category())->findAll();

        return View::make('admin/categories/index', ['categories' => $categories]);
    }

    public function create(): View
    {
        return View::make('admin/categories/create');
    }

    public function store(Request $request): void
    {
        (new Category())->create($request->all());

        (new Session())->set('success_message', 'Category created successfully!');
        redirect('admin/categories');
    }

    public function edit(Request $request): View
    {
        $categoryId = explode('id=', $request->getQuery())[1];
        $category = (new Category())->findById((int)$categoryId);

        return View::make('admin/categories/edit', ['category' => $category]);
    }

    public function update(Request $request): void
    {
        (new Category())->update($request->all());

        (new Session())->set('success_message', 'Category updated successfully!');
        redirect('admin/categories');
    }

    public function delete(): void
    {
        $data = $_POST['category_id'];
        (new Category())->delete((int)$data);

        (new Session())->set('success_message', 'Category deleted successfully!');
        redirect('admin/categories');
    }
}