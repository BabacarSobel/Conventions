<?php

namespace PC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PCUserBundle extends Bundle
{
        /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}
