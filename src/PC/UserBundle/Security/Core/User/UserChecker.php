<?php

/* 
 * Copyright (C) 2016 tdzf6091
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace PC\UserBundle\Security\Core\User;

use Symfony\Component\Security\Core\User\UserChecker as BaseCode;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker extends BaseCode
{
    public function checkPreAuth(UserInterface $user)
    {
        parent::checkPreAuth($user);
    }
}