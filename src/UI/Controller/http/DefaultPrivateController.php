<?php


namespace App\UI\Controller\http;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultPrivateController extends QueryController
{
    /**
     * @Route("/{_locale}/private",name="main_private")
     *
     * @return Response
     */
    public function showMyTravels()
    {
        $user = $this->guard();

        return $this->render('private/index.html.twig');
    }
}
