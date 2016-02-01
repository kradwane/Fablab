<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machine
 *
 * @ORM\Table(name="machine")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\MachineRepository")
 */
class Machine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomM", type="string", length=255)
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
     * @ORM\Column(name="surface", type="string", length=255, nullable=true)
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=255, nullable=true)
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="presicionm", type="string", length=255, nullable=true)
     */
    private $presicionm;

    /**
     * @var string
     *
     * @ORM\Column(name="logicielu", type="string", length=255)
     */
    private $logicielu;

    /**
     * @var string
     *
     * @ORM\Column(name="formatfich", type="string", length=255, nullable=true)
     */
    private $formatfich;

    /**
     * @var string
     *
     * @ORM\Column(name="materiauxu", type="string", length=255, nullable=true)
     */
    private $materiauxu;

    /**
     * @var string
     *
     * @ORM\Column(name="puissance", type="string", length=255, nullable=true)
     */
    private $puissance;


    /**
     * Get id
     *
     * @return int
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
     * @return Machine
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
     * @return Machine
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
     * @return Machine
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
     * @return Machine
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
     * Set presicionm
     *
     * @param string $presicionm
     *
     * @return Machine
     */
    public function setPresicionm($presicionm)
    {
        $this->presicionm = $presicionm;

        return $this;
    }

    /**
     * Get presicionm
     *
     * @return string
     */
    public function getPresicionm()
    {
        return $this->presicionm;
    }

    /**
     * Set logicielu
     *
     * @param string $logicielu
     *
     * @return Machine
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
     * @return Machine
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
     * @return Machine
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
     * @return Machine
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
