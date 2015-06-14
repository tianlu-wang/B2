<?php

class classroomModel extends Model{
    /**
     * ID of the classroom
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
     * @var string
     */
    protected $campus;

    /**
     * building of the classroom e.g.教七
     * @string
     */
    protected $building;
    /**
     * position e.g.306
     * @int
     */
    protected $position;
    /**
     * if the classroom has equipment for lab 是=1；否=0
     * @var string;
     */
    protected $lab;
    /**
     * opentime
     * @var string
     */
    protected $opentime;
    /**
     * close time
     * @var string
     */
    protected $closetime;

    /**
     * capacity
     * 0:<50,1:50~100,2:100~200
     * @var int
     */
    protected $capacity;

    /**
     * store the information about Monday to Friday
     * @array
     */
    protected  $timeArray1=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);//40
    /**
     ** store the information about Sat.and Sun.
     */
    protected  $timeArray2=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);//16
    /**
     * @var int
     * @return string name
     */
//    public function getName($id){
//        $condition['id'] = $id;
//        return $this->field('name')->where($condition)->find();
//    }
//    /**
//     * @var int
//     * @return int campus
//     */
//    public function getCampus($id){
//        $condition ['id'] = $id;
//        $campus = $this->field('campus') ->where($condition)->find();
//        if($campus == '紫金港')
//            return 0;
//        elseif($campus == '玉泉')
//            return 1;
//        elseif($campus == '西溪')
//            return 2;
//        elseif($campus == '华家池')
//            return 3;
//        else
//            return 4;
//    }
//    /**
//     * @var int
//     * @return int
//     */
//    public  function getEquip($id){
//        $condition['id'] = $id;
//        $equip = $this->field('equip') ->where($condition)->find();
//        if($equip == '是')
//            return 1;
//        else
//            return 0;
//    }
//
    /**
     * @var int
     * @return int
     */
    public  function  getCapacity($id){
        //$condition['id'] = $id;
        //$capacity = $this->field('capacity')->where($condition)->find();
        return $this->field('capacity')->select();
    }
//    /**
//     * @var int
//     * @return int
//     */
//    public function getSequenceNumber($id){
//        $condition['id'] = $id;
//        return $this->field('sequence_number')->where($condition)->find();
//    }
    /**
     * @var $int
     * @return array
     */
//    public  function getTimetArray1($id){
//        $condition['id'] = $id;
//        return $this->field('timeArray1')->where($condition)->find();
//    }
    /**
     * syncronize
     * @return null
     */
    public  function  syncronize(){
        foreach( $this->select() as $i)
            $capacity[$i['id']]=$i['$capacity'];
    }
    /**
     * update the timeArray1
     * @return int
     */
    public function updateArray1($id, $newArray){
        $condition['id'] = $id;
        $this->where($condition)->setField('timeArray1',$newArray);
        return 0;
    }
    /**
     * update the timeArray2
     * @return int
     */
    public function updateArray2($id, $newArray){
        $condition['id'] = $id;
        $this->where($condition)->setField('timeArray2',$newArray);
        return 0;
    }

}