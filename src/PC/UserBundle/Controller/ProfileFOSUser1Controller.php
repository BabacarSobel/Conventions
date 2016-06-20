<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PC\UserBundle\Controller;

use Sonata\UserBundle\Controller\ProfileFOSUser1Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;

/**
 * This class is inspired from the FOS Profile Controller, except :
 *   - only twig is supported
 *   - separation of the user authentication form with the profile form
 */
class ProfileFOSUser1Controller extends ProfileFOSUser1Controller
{

    /**
     * @return Response
     *
     * @throws AccessDeniedException
     */
    public function editProfileAction()
    {
        echo "ttroroo"; 
    }

}
