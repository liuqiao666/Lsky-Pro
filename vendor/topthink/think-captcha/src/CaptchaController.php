<?php
// +----------------------------------------------------------------------
// | 更多资源请关注：三岁半资源网:sansuib.com
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\captcha;

use think\facade\Config;

class CaptchaController
{
    public function index($id = "")
    {
        $captcha = new Captcha((array) Config::pull('captcha'));
        return $captcha->entry($id);
    }
}
