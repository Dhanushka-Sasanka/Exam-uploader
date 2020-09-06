<?php


class RegisterDTO
{

    private $reg_no;
    private $batchNo;
    private $sid;

    /**
     * RegisterDTO constructor.
     * @param $reg_no
     * @param $batchNo
     * @param $sid
     */
    public function __construct($reg_no, $batchNo, $sid)
    {
        $this->reg_no = $reg_no;
        $this->batchNo = $batchNo;
        $this->sid = $sid;
    }

    /**
     * @return mixed
     */
    public function getRegNo()
    {
        return $this->reg_no;
    }

    /**
     * @param mixed $reg_no
     */
    public function setRegNo($reg_no): void
    {
        $this->reg_no = $reg_no;
    }

    /**
     * @return mixed
     */
    public function getBatchNo()
    {
        return $this->batchNo;
    }

    /**
     * @param mixed $batchNo
     */
    public function setBatchNo($batchNo): void
    {
        $this->batchNo = $batchNo;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param mixed $sid
     */
    public function setSid($sid): void
    {
        $this->sid = $sid;
    }

}