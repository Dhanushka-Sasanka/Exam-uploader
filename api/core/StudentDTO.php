<?php


class StudentDTO
{
    private $sName;
    private $sNIC;

    /**
     * StudentDTO constructor.
     * @param $sName
     * @param $sNIC
     */
    public function __construct($sName, $sNIC)
    {
        $this->sName = $sName;
        $this->sNIC = $sNIC;
    }

    /**
     * @return mixed
     */
    public function getSName()
    {
        return $this->sName;
    }

    /**
     * @param mixed $sName
     */
    public function setSName($sName): void
    {
        $this->sName = $sName;
    }

    /**
     * @return mixed
     */
    public function getSNIC()
    {
        return $this->sNIC;
    }

    /**
     * @param mixed $sNIC
     */
    public function setSNIC($sNIC): void
    {
        $this->sNIC = $sNIC;
    }

}