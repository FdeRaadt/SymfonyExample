<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number($max)
    {
        $number = random_int(0,$max);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}