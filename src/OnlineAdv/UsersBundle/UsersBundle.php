<?php

namespace OnlineAdv\UsersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UsersBundle extends Bundle
{
    /**
     * inherits FOS User Bundle
     * @return FOS User Bundle
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
