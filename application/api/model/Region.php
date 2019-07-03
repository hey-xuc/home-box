<?php


namespace app\api\model;


class Region extends BaseModel
{
    protected $table = 'sys_region';
    protected $hidden = ['update_time', 'create_time', 'delete_time', 'region_parent_id', 'region_level', 'region_code'];
    /**
     * 获取所有省份
     */
    public function getProvinces(){
        return $this->where('region_parent_id', '-1')->select();
    }
    public function getRegions(){
        return $this->belongsTo('region', 'region_parent_id', 'region_id');
    }
}