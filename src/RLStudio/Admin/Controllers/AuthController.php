<?php
/**
 * Created by PhpStorm.
 * User: leosjoberg
 * Date: 17/06/15
 * Time: 13:58
 */

namespace RLStudio\Admin\Controllers;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    use AuthenticatesUsers;


    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->redirectPath = route('admin.dashboard');
        $this->loginPath = '/admin/login';
    }
}