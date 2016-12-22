<?php

namespace SoftUniBlogBundle\Controller\Admin;

use SoftUniBlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/users")
 *
 * Class UserController
 * @package SoftUniBlogBundle\Controller\Admin
 */

class UserController extends Controller
{

    /**
     * @Route ("/", name="admin_users")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function listUser()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('admin/user/list.html.twig', ['users'=> $users]);
    }

}
