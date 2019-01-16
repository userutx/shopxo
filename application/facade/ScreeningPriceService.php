<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2018 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------
namespace app\facade;

use think\Facade;

/**
 * 服务层静态代理绑定 - 筛选价格
 * @author   Devil
 * @blog     http://gong.gg/
 * @version  0.0.1
 * @datetime 2016-12-01T21:51:08+0800
 */
class ScreeningPriceService extends Facade
{
    /**
     * 指定服务层类库地址
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2019-01-16
     * @desc    description
     * @return  [type]          [description]
     */
    protected static function getFacadeClass()
    {
        return 'app\service\ScreeningPriceService';
    }
}
?>