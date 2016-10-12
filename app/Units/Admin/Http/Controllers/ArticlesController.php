<?php

namespace App\Units\Admin\Http\Controllers;

use App\Domains\Articles\Repositories\ArticlesRepository;
use App\Support\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    use SEOTools;
    /**
     * @var ArticlesRepository
     */
    private $repository;

    /**
     * UsersController constructor.
     * @param ArticlesRepository $repository
     */
    public function __construct(ArticlesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->seo()->setTitle('Artigos')->setDescription('listing');
        return $this->view('admin::articles.index', ['articles' => $this->repository->all()]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return $this->view('admin::articles.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('admin.articles.index');
    }

    public function edit($id)
    {
        $this->seo()->setTitle('Artigos')->setDescription('edit');
        return $this->view('admin::articles.edit', ['articles' => $this->repository->find($id)]);
    }


}