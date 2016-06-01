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

        while (true)
        {      
            $id = date('Ym').$entity->getSousType()->getId().$entity->getType()->getId().mt_rand(100000, 999999);
            $item = $em->find($entity_name, $id);

            if (!$item)
            {
                return $id;
            }
        }

        throw new \Exception('Impossible de créer un id. Revoir le générateur d\'id. ');
    }
}