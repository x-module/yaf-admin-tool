<?php
/**
 * +----------------------------------------------------------------------
 * | 璧合科技
 * +----------------------------------------------------------------------
 * | Copyright (c) 2014-2015  All rights reserved.
 * +----------------------------------------------------------------------
 * | Author: 李锦 <lijin@behe.com>
 * +----------------------------------------------------------------------
 * | Desc: Analyse.php
 * +----------------------------------------------------------------------
 * | Create Date: 2018/05/19 10:31:14
 * +----------------------------------------------------------------------
 */
 
namespace Svc;
 
class Analyse extends Common {
 
    /**
     * @var \Model\Analyse
     */
    protected $model;
        
    protected function setModel() {
        return \Model\Analyse::getInstance();
    }
}
    