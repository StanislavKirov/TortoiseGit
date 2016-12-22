<?php

namespace SoftUniBlogBundle\Controller\Admin;


use SoftUniBlogBundle\Entity\Category;
use SoftUniBlogBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/categories")
 * Class CategoryController
 * @package SoftUniBlogBundle\Controller\Admin
 */

class CategoryController extends Controller
{

    /**
     * @Route("/", name = "admin_categories")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function listCategories()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('admin/category/list.html.twig',
            ['categories' => $categories]);

    }

    /**
     * @Route("/create", name="admin_categories_create")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function createCategory(Request $request)
    {

        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        return $this->render('admin/category/create.html.twig',
            ['form' => $form-> createView()]);


    }



}
