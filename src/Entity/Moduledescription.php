<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moduledescription
 *
 * @ORM\Table(name="moduledescription")
 * @ORM\Entity
 */
class Moduledescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="idModuleDesc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $idmoduledesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="petitTitreModuleDesc", type="string", length=50, nullable=true)
     */
    private ?string $petittitremoduledesc;

    /**
     * @var string
     *
     * @ORM\Column(name="grandTitreModuleDesc", type="string", length=50, nullable=false)
     */
    private string $grandtitremoduledesc;

    /**
     * @var string
     *
     * @ORM\Column(name="nomModuleDesc", type="string", length=150, nullable=false)
     */
    private string $nommoduledesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aliasModuleDesc", type="string", length=5, nullable=true)
     */
    private ?string $aliasmoduledesc;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeModuleDesc", type="string", length=30, nullable=false)
     */
    private string $dureemoduledesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pourQuiModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $pourquimoduledesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectifsModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $objectifsmoduledesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orgaPedagoModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $orgapedagomoduledesc;

    /**
     * @var float
     *
     * @ORM\Column(name="prixModuleDesc", type="float", precision=10, scale=0, nullable=false)
     */
    private float $prixmoduledesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieuModuleDesc", type="text", length=65535, nullable=true)
     */
    private ?string $lieumoduledesc;

    /**
     * @var int
     *
     * @ORM\Column(name="idRubriqueFormation", type="integer", nullable=false)
     */
    private int $idrubriqueformation;

    /**
     * @return int
     */
    public function getIdmoduledesc(): int
    {
        return $this->idmoduledesc;
    }

    /**
     * @param int $idmoduledesc
     */
    public function setIdmoduledesc(int $idmoduledesc): void
    {
        $this->idmoduledesc = $idmoduledesc;
    }

    /**
     * @return string|null
     */
    public function getPetittitremoduledesc(): ?string
    {
        return $this->petittitremoduledesc;
    }

    /**
     * @param string|null $petittitremoduledesc
     */
    public function setPetittitremoduledesc(?string $petittitremoduledesc): void
    {
        $this->petittitremoduledesc = $petittitremoduledesc;
    }

    /**
     * @return string
     */
    public function getGrandtitremoduledesc(): string
    {
        return $this->grandtitremoduledesc;
    }

    /**
     * @param string $grandtitremoduledesc
     */
    public function setGrandtitremoduledesc(string $grandtitremoduledesc): void
    {
        $this->grandtitremoduledesc = $grandtitremoduledesc;
    }

    /**
     * @return string
     */
    public function getNommoduledesc(): string
    {
        return $this->nommoduledesc;
    }

    /**
     * @param string $nommoduledesc
     */
    public function setNommoduledesc(string $nommoduledesc): void
    {
        $this->nommoduledesc = $nommoduledesc;
    }

    /**
     * @return string|null
     */
    public function getAliasmoduledesc(): ?string
    {
        return $this->aliasmoduledesc;
    }

    /**
     * @param string|null $aliasmoduledesc
     */
    public function setAliasmoduledesc(?string $aliasmoduledesc): void
    {
        $this->aliasmoduledesc = $aliasmoduledesc;
    }

    /**
     * @return string
     */
    public function getDureemoduledesc(): string
    {
        return $this->dureemoduledesc;
    }

    /**
     * @param string $dureemoduledesc
     */
    public function setDureemoduledesc(string $dureemoduledesc): void
    {
        $this->dureemoduledesc = $dureemoduledesc;
    }

    /**
     * @return string|null
     */
    public function getPourquimoduledesc(): ?string
    {
        return $this->pourquimoduledesc;
    }

    /**
     * @param string|null $pourquimoduledesc
     */
    public function setPourquimoduledesc(?string $pourquimoduledesc): void
    {
        $this->pourquimoduledesc = $pourquimoduledesc;
    }

    /**
     * @return string|null
     */
    public function getObjectifsmoduledesc(): ?string
    {
        return $this->objectifsmoduledesc;
    }

    /**
     * @param string|null $objectifsmoduledesc
     */
    public function setObjectifsmoduledesc(?string $objectifsmoduledesc): void
    {
        $this->objectifsmoduledesc = $objectifsmoduledesc;
    }

    /**
     * @return string|null
     */
    public function getOrgapedagomoduledesc(): ?string
    {
        return $this->orgapedagomoduledesc;
    }

    /**
     * @param string|null $orgapedagomoduledesc
     */
    public function setOrgapedagomoduledesc(?string $orgapedagomoduledesc): void
    {
        $this->orgapedagomoduledesc = $orgapedagomoduledesc;
    }

    /**
     * @return float
     */
    public function getPrixmoduledesc(): float
    {
        return $this->prixmoduledesc;
    }

    /**
     * @param float $prixmoduledesc
     */
    public function setPrixmoduledesc(float $prixmoduledesc): void
    {
        $this->prixmoduledesc = $prixmoduledesc;
    }

    /**
     * @return string|null
     */
    public function getLieumoduledesc(): ?string
    {
        return $this->lieumoduledesc;
    }

    /**
     * @param string|null $lieumoduledesc
     */
    public function setLieumoduledesc(?string $lieumoduledesc): void
    {
        $this->lieumoduledesc = $lieumoduledesc;
    }

    /**
     * @return int
     */
    public function getIdrubriqueformation(): int
    {
        return $this->idrubriqueformation;
    }

    /**
     * @param int $idrubriqueformation
     */
    public function setIdrubriqueformation(int $idrubriqueformation): void
    {
        $this->idrubriqueformation = $idrubriqueformation;
    }



}
