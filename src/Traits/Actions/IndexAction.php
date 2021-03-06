<?php
namespace Attract\LaravelRest\Traits\Actions;

use Illuminate\Http\Request;

/**
 * Index action
 *
 * Class IndexAction
 * @package Attract\LaravelRest\Traits\Actions
 *
 * @version 1.0.0
 * @author Bondarenko Kirill <bondarenko.kirill@gmail.com>
 */
trait IndexAction
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->respond($this->getItems($request));
    }
}