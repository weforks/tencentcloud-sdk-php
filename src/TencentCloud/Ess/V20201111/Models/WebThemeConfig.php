<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 页面主题配置
 *
 * @method boolean getDisplaySignBrandLogo() 获取是否页面底部显示电子签logo
<br/>true：允许在页面底部隐藏电子签logo
<br/>false：不允许允许在页面底部隐藏电子签logo
<br/>默认false，不隐藏logo
 * @method void setDisplaySignBrandLogo(boolean $DisplaySignBrandLogo) 设置是否页面底部显示电子签logo
<br/>true：允许在页面底部隐藏电子签logo
<br/>false：不允许允许在页面底部隐藏电子签logo
<br/>默认false，不隐藏logo
 * @method string getWebEmbedThemeColor() 获取主题颜色
<br/>支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
 * @method void setWebEmbedThemeColor(string $WebEmbedThemeColor) 设置主题颜色
<br/>支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
 */
class WebThemeConfig extends AbstractModel
{
    /**
     * @var boolean 是否页面底部显示电子签logo
<br/>true：允许在页面底部隐藏电子签logo
<br/>false：不允许允许在页面底部隐藏电子签logo
<br/>默认false，不隐藏logo
     */
    public $DisplaySignBrandLogo;

    /**
     * @var string 主题颜色
<br/>支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
     */
    public $WebEmbedThemeColor;

    /**
     * @param boolean $DisplaySignBrandLogo 是否页面底部显示电子签logo
<br/>true：允许在页面底部隐藏电子签logo
<br/>false：不允许允许在页面底部隐藏电子签logo
<br/>默认false，不隐藏logo
     * @param string $WebEmbedThemeColor 主题颜色
<br/>支持十六进制颜色值以及RGB格式颜色值，例如：#D54941，rgb(213, 73, 65)
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DisplaySignBrandLogo",$param) and $param["DisplaySignBrandLogo"] !== null) {
            $this->DisplaySignBrandLogo = $param["DisplaySignBrandLogo"];
        }

        if (array_key_exists("WebEmbedThemeColor",$param) and $param["WebEmbedThemeColor"] !== null) {
            $this->WebEmbedThemeColor = $param["WebEmbedThemeColor"];
        }
    }
}
