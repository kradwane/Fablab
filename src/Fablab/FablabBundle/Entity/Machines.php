<?php

namespace Fablab\FablabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machines
 *
 * @ORM\Table("machines")
 * @ORM\Entity(repositoryClass="Fablab\FablabBundle\Entity\MachinesRepository")
 */
class Machines
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *@ORM\OneToOne(targetEntity="Fablab\FablabBundle\Entity\Image",cascade={"persist","remove"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nomM", type="string", length=125)
     */
    private $nomM;

    /**
     * @var string
     *
     * @ORM\Column(name="infogenerale", type="text")
     */
    private $infogenerale;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=125)
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=125)
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="precisionm", type="string", length=125)
     */
    private $precisionm;

    /**
     * @var string
     *
     * @ORM\Column(name="logicielu", type="string", length=125)
     */
    private $logicielu;

    /**
     * @var string
     *
     * @ORM\Column(name="formatfich", type="string", length=125)
     */
    private $formatfich;

    /**
     * @var string
     *
     * @ORM\Column(name="materiauxu", type="string", length=255)
     */
    private $materiauxu;

    /**
     * @var string
     *
     * @ORM\Column(name="puissance", type="string", length=125)
     */
    private $puissance;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomM
     *
     * @param string $nomM
     *
     * @return Machines
     */
    public function setNomM($nomM)
    {
        $this->nomM = $nomM;

        return $this;
    }

    /**
     * Get nomM
     *
     * @return string
     */
    public function getNomM()
    {
        return $this->nomM;
    }

    /**
     * Set infogenerale
     *
     * @param string $infogenerale
     *
     * @return Machines
     */
    public function setInfogenerale($infogenerale)
    {
        $this->infogenerale = $infogenerale;

        return $this;
    }

    /**
     * Get infogenerale
     *
     * @return string
     */
    public function getInfogenerale()
    {
        return $this->infogenerale;
    }

    /**
     * Set surface
     *
     * @param string $surface
     *
     * @return Machines
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set resolution
     *
     * @param string $resolution
     *
     * @return Machines
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set precisionm
     *
     * @param string $precisionm
     *
     * @return Machines
     */
    public function setPrecisionm($precisionm)
    {
        $this->precisionm = $precisionm;

        return $this;
    }

    /**
     * Get precisionm
     *
     * @return string
     */
    public function getPrecisionm()
    {
        return $this->precisionm;
    }

    /**
     * Set logicielu
     *
     * @param string $logicielu
     *
     * @return Machines
     */
    public function setLogicielu($logicielu)
    {
        $this->logicielu = $logicielu;

        return $this;
    }

    /**
     * Get logicielu
     *
     * @return string
     */
    public function getLogicielu()
    {
        return $this->logicielu;
    }

    /**
     * Set formatfich
     *
     * @param string $formatfich
     *
     * @return Machines
     */
    public function setFormatfich($formatfich)
    {
        $this->formatfich = $formatfich;

        return $this;
    }

    /**
     * Get formatfich
     *
     * @return string
     */
    public function getFormatfich()
    {
        return $this->formatfich;
    }

    /**
     * Set materiauxu
     *
     * @param string $materiauxu
     *
     * @return Machines
     */
    public function setMateriauxu($materiauxu)
    {
        $this->materiauxu = $materiauxu;

        return $this;
    }

    /**
     * Get materiauxu
     *
     * @return string
     */
    public function getMateriauxu()
    {
        return $this->materiauxu;
    }

    /**
     * Set puissance
     *
     * @param string $puissance
     *
     * @return Machines
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return string
     */
    public function getPuissance()
    {
        return $this->puissance;
    }
}

