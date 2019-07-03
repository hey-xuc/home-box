<?php
namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\model\Region as RegionModel;
use app\api\validate\BaseValidate;
use app\lib\exception\MissException;
use think\Exception;

class Region extends BaseController{
    /**
     * 获取所有省份
     */
    public function getProvinces(){
        $validate = new BaseValidate();
        $validate->goCheck();
        $regionModel = new RegionModel();
        $provinces = $regionModel->getProvinces();
        if (!$provinces){
            throw new MissException([
                'msg' => '省份请求失败',
                'code' => 4000
            ]);
        }

        return $provinces;
    }
//    public function getRegions(){
//        $regions = RegionModel::get(1000792, 'getRegions');
//        return json($regions);
//    }
}
