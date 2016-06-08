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

namespace PC\FicheBundle\Doctrine;
use Doctrine\ORM\Id\AbstractIdGenerator;

class PCIdGenerator extends AbstractIdGenerator
{
    
    
    public function generate(\Doctrine\ORM\EntityManager $em, $entity)
    {
        $entity_name = $em->getClassMetadata(get_class($entity))->getName();
        $entity_type = $em->getClassMetadata(get_class($entity))->getFieldValue($entity,'type');

        while (true)
        {
            // on récupère l'année et le mois
            $id = date('Ym');
            
            // on récupère le type et le sous-type
            $type = intval($entity->getType()->getId());
            if($type <10 ){
                $id .= '0'.strval($type);
            }else{
                $id .= strval($type);
            }
            $sousType = intval($entity->getSousType()->getId());
            if($sousType <10 ){
                $id .= '0'.strval($sousType);
            }else{
                $id .= strval($sousType);
            }
            // on récupère tous les elements du meme type afin de determiner l ordre
            $all = $em->getRepository($entity_name)->findBy(array(
                'type' => $entity_type->getId()
            ));
            $max = 0;
            // on récupère la valeur maximale de l id
            foreach ($all as $ent){
                $val = intval(substr($ent->getId(), 10));
                if ($val > $max){
                    $max = $val;
                }
                echo $ent->getType()->getNom()." est ".$ent->getId().'<br>';
                
            }
            // on incremente le max
            $max += 1;
            $id .= strval($max);
            $item = $em->find($entity_name, $id);

            if (!$item)
            {
                return $id;
            }
        }

        throw new \Exception('Impossible de créer un id. Revoir le générateur d\'id. ');
    }
}