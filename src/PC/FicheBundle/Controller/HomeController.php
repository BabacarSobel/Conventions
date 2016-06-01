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

namespace PC\FicheBundle\Controller;


/**
 * Home controller.
 *
 */
class HomeController extends DefaultController
{   
    public function homeAction()
    {
        $notifications = $this->getNotifications();
        $alertes = $notifications[0];
        $messages = $notifications[1];
        return $this->render('PCFicheBundle:Home:home.html.twig',array(
            'alertesA' => $alertes,
            'messagesA' => $messages
        ));
    }
    
    public function backwardAction()
    {
        $this->redirect($this->getRequest()->headers->get('referer'));
    }
}
