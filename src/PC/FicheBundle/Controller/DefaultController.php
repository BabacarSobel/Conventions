<?php

/* 
 * Copyright (C) 2016 TDZF6091
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
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// reprendre le routage


/**
 * Default controller.
 * Controller par défaut duquel hérite tous les autres controllers
 *
 */
class DefaultController extends Controller{
    
    
    /**
    * Récupere toutes les notifications (messages, alertes)
    *@return array()
    */

    public function getNotifications(){
        
        $em = $this->getDoctrine()->getManager();
        $alertes = $em->getRepository('PCFicheBundle:Alerte')->findBy(
                array(),
                array('dateAlerte' => 'ASC'));
        
        // on definit le chemin vers l'élémenent concerné par l'alerte
        foreach ($alertes as $alerte){
            if ($alerte->getChartePartenariat() != NULL){
                $alerte->setOwnerId($alerte->getChartePartenariat()->getId());
            }elseif ($alerte->getMadEvenementGratuit() != NULL){
                $alerte->setOwnerId($alerte->getMadEvenementGratuit()->getId());
            }elseif ($alerte->getMadSalles() != NULL){
                $alerte->setOwnerId($alerte->getMadSalles()->getId());
            }elseif ($alerte->getPifeClassique() != NULL){
                $alerte->setOwnerId($alerte->getPifeClassique()->getId());
            }elseif ($alerte->getPifeLaboratoire() != NULL){
                $alerte->setOwnerId($alerte->getPifeLaboratoire()->getId());
            }elseif ($alerte->getPsCati() != NULL){
                $alerte->setOwnerId($alerte->getPsCati()->getId());
            }elseif ($alerte->getAutre() != NULL){
                $alerte->setOwnerId($alerte->getAutre()->getId());
            }else {
                $alerte->setOwnerId('1');
            }
            
            // on s'assure qu'il ait un chemin de l'alerte
            if ($alerte->getRoute() === null){
                $alerte->setRoute('error_404');
            }            
        }

        
        $messages = $em->getRepository('PCFicheBundle:Alerte')->findByType('message');
        // on definit le chemin vers l'élémenent concerné par l'alerte de type message
        foreach ($messages as $alerte){
            if ($alerte->getChartePartenariat() != NULL){
                $alerte->setOwnerId($alerte->getChartePartenariat()->getId());
            }elseif ($alerte->getMadEvenementGratuit() != NULL){
                $alerte->setOwnerId($alerte->getMadEvenementGratuit()->getId());
            }elseif ($alerte->getMadSalles() != NULL){
                $alerte->setOwnerId($alerte->getMadSalles()->getId());
            }elseif ($alerte->getPifeClassique() != NULL){
                $alerte->setOwnerId($alerte->getPifeClassique()->getId());
            }elseif ($alerte->getPifeLaboratoire() != NULL){
                $alerte->setOwnerId($alerte->getPifeLaboratoire()->getId());
            }elseif ($alerte->getPsCati() != NULL){
                $alerte->setOwnerId($alerte->getPsCati()->getId());
            }elseif ($alerte->getAutre() != NULL){
                $alerte->setOwnerId($alerte->getAutre()->getId());
            }else {
                $alerte->setOwnerId('1');
            }
        }
        
        usort($alertes, array($this,'alerteDateSortDescending'));
        usort($messages, array($this,'alerteDateSortDescending'));
        
        // on renvoie un array avec les alertes.
        return array($alertes,$messages);
    }
    
    /*
     * permet de récupérer le role de l'utilisateur
     */
    protected function getIdentity(){
        $utilisateur = $this->getUser();
        $roles = $utilisateur->getRoles();
        if (in_array('ROLE_ADMIN',$roles )){ 
            $role = 'ROLE_ADMIN';
        }elseif (in_array('ROLE_DIRECTION',$roles)){ 
            $role = 'ROLE_DIRECTION';
        }elseif (in_array('ROLE_USER',$roles)){ 
            $role = 'ROLE_USER';
        }
        return $role;   
    }


    /**
    * permet de trier un tableau en fonction de la date de création des éléments
    *
    */
    static function dateSortDescending( $a, $b)
    {
        if ( $a->getDateCreation() == $b->getDateCreation() ){
            return 0;}
        else{
            return ( $a->getDateCreation() < $b->getDateCreation() ) ? +1 : -1;
        }
    }

    /**
    * permet de trier un tableau d'alertes en fonction de la date de l'alerte
    *
    */
    static function alerteDateSortDescending( $a, $b)
    {
        if ( $a->getDateAlerte() == $b->getDateAlerte() ){
            return 0;}
        else{
            return ( $a->getDateAlerte() < $b->getDateAlerte() ) ? +1 : -1;
        }
    }
  
}