<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SecurityController
 *
 * @package App\Controller
 */
class SecurityController
{
    /**
     * @Route("/logowanie")
     *
     * @return Response
     *
     * @throws \InvalidArgumentException
     */
    public function logowanie()
    {
        return new Response('<html><body>Logowanie</body></html>');
    }
}