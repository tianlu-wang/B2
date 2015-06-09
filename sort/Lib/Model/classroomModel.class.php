<?php

class classroomModel extends Model{
    /**
     * ID of the classroom
     * 紫金港西一-101: campus/equip/capacity/sequence_number
     * @var int
     */
    protected $id;

    /**
     * name of the classroom,e.g 教七304
     * @var string
     */
    protected $name;

    /**
     * campus of the classroom
     * 0=zjg,1=yq,2=xx,3=hjc,4=zj
     * @var string
     */
    protected $campus;

    /**
     * if the classroom has equipment for lab 是=1；否=0
     * @var string;
     */
    protected $equip;

    /**
     * capacity
     * @var int
     */
    protected $capacity;

    /**
     * sequence number of this kind of classroom
     * @var int
     */
    protected $sequence_number;


    /**
     * @var int
     * @return string name
     */
    public function getName($id){
        $condition['id'] = $id;
        return $this->field('name')->where($condition)->find();
    }
    /**
     * @var int
     * @return int campus
     */
    public function getCampus($id){
        $condition ['id'] = $id;
        $campus = $this->field('campus') ->where($condition)->find();
        if($campus == '紫金港')
            return 0;
        elseif($campus == '玉泉')
            return 1;
        elseif($campus == '西溪')
            return 2;
        elseif($campus == '华家池')
            return 3;
        elseif($campus == '之江')
            return 4;
    }
    /**
     * @var int
     * @return int
     */
    public  function getEquip($id){
        $condition['id'] = $id;
        $equip = $this->field('equip') ->where($condition)->find();
        if($equip == '是')
            return 1;
        else
            return 0;
    }

    /**
     * @var int
     * @return int
     */
    public  function  getCapacity($id){
        $condition['id'] = $id;
        return $this->field('capacity')->where($condition)->find();
    }
    /**
     * @var int
     * @return int
     */
    public function getSequenceNumber($id){
        $condition['id'] = $id;
        return $this->field('sequence_number')->where($condition)->find();
    }
}