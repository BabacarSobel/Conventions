<?php

namespace Proxies\__CG__\PC\FicheBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SousType extends \PC\FicheBundle\Entity\SousType implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'id', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'nom', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'route', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'db', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'description', 'type', 'chartePartenariats', 'madEvenementGratuits', 'madSalles', 'pifeClassiques', 'pifeLaboratoires', 'psCatis', 'autres', 'templates'];
        }

        return ['__isInitialized__', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'id', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'nom', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'route', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'db', '' . "\0" . 'PC\\FicheBundle\\Entity\\SousType' . "\0" . 'description', 'type', 'chartePartenariats', 'madEvenementGratuits', 'madSalles', 'pifeClassiques', 'pifeLaboratoires', 'psCatis', 'autres', 'templates'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SousType $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoute($route)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoute', [$route]);

        return parent::setRoute($route);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoute', []);

        return parent::getRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function setDb($db)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDb', [$db]);

        return parent::setDb($db);
    }

    /**
     * {@inheritDoc}
     */
    public function getDb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDb', []);

        return parent::getDb();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(\PC\FicheBundle\Entity\Type $type = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function addChartePartenariat(\PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChartePartenariat', [$chartePartenariat]);

        return parent::addChartePartenariat($chartePartenariat);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChartePartenariat(\PC\FicheBundle\Entity\ChartePartenariat $chartePartenariat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChartePartenariat', [$chartePartenariat]);

        return parent::removeChartePartenariat($chartePartenariat);
    }

    /**
     * {@inheritDoc}
     */
    public function getChartePartenariats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChartePartenariats', []);

        return parent::getChartePartenariats();
    }

    /**
     * {@inheritDoc}
     */
    public function addMadEvenementGratuit(\PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMadEvenementGratuit', [$madEvenementGratuit]);

        return parent::addMadEvenementGratuit($madEvenementGratuit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMadEvenementGratuit(\PC\FicheBundle\Entity\MADEvenementGratuit $madEvenementGratuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMadEvenementGratuit', [$madEvenementGratuit]);

        return parent::removeMadEvenementGratuit($madEvenementGratuit);
    }

    /**
     * {@inheritDoc}
     */
    public function getMadEvenementGratuits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMadEvenementGratuits', []);

        return parent::getMadEvenementGratuits();
    }

    /**
     * {@inheritDoc}
     */
    public function addMadSalle(\PC\FicheBundle\Entity\MADSalles $madSalle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMadSalle', [$madSalle]);

        return parent::addMadSalle($madSalle);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMadSalle(\PC\FicheBundle\Entity\MADSalles $madSalle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMadSalle', [$madSalle]);

        return parent::removeMadSalle($madSalle);
    }

    /**
     * {@inheritDoc}
     */
    public function getMadSalles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMadSalles', []);

        return parent::getMadSalles();
    }

    /**
     * {@inheritDoc}
     */
    public function addPifeClassique(\PC\FicheBundle\Entity\PIFEClassique $pifeClassique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPifeClassique', [$pifeClassique]);

        return parent::addPifeClassique($pifeClassique);
    }

    /**
     * {@inheritDoc}
     */
    public function removePifeClassique(\PC\FicheBundle\Entity\PIFEClassique $pifeClassique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePifeClassique', [$pifeClassique]);

        return parent::removePifeClassique($pifeClassique);
    }

    /**
     * {@inheritDoc}
     */
    public function getPifeClassiques()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPifeClassiques', []);

        return parent::getPifeClassiques();
    }

    /**
     * {@inheritDoc}
     */
    public function addPifeLaboratoire(\PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPifeLaboratoire', [$pifeLaboratoire]);

        return parent::addPifeLaboratoire($pifeLaboratoire);
    }

    /**
     * {@inheritDoc}
     */
    public function removePifeLaboratoire(\PC\FicheBundle\Entity\PIFELaboratoire $pifeLaboratoire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePifeLaboratoire', [$pifeLaboratoire]);

        return parent::removePifeLaboratoire($pifeLaboratoire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPifeLaboratoires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPifeLaboratoires', []);

        return parent::getPifeLaboratoires();
    }

    /**
     * {@inheritDoc}
     */
    public function addPsCati(\PC\FicheBundle\Entity\PSCati $psCati)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPsCati', [$psCati]);

        return parent::addPsCati($psCati);
    }

    /**
     * {@inheritDoc}
     */
    public function removePsCati(\PC\FicheBundle\Entity\PSCati $psCati)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePsCati', [$psCati]);

        return parent::removePsCati($psCati);
    }

    /**
     * {@inheritDoc}
     */
    public function getPsCatis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPsCatis', []);

        return parent::getPsCatis();
    }

    /**
     * {@inheritDoc}
     */
    public function addAutre(\PC\FicheBundle\Entity\Autre $autre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAutre', [$autre]);

        return parent::addAutre($autre);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAutre(\PC\FicheBundle\Entity\Autre $autre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAutre', [$autre]);

        return parent::removeAutre($autre);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutres', []);

        return parent::getAutres();
    }

    /**
     * {@inheritDoc}
     */
    public function addTemplate(\PC\FicheBundle\Entity\Template $template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTemplate', [$template]);

        return parent::addTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTemplate(\PC\FicheBundle\Entity\Template $template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTemplate', [$template]);

        return parent::removeTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplates', []);

        return parent::getTemplates();
    }

}
