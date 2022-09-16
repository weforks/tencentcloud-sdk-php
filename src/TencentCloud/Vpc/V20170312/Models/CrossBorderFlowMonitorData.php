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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨境带宽监控数据
 *
 * @method array getInBandwidth() 获取入带宽
 * @method void setInBandwidth(array $InBandwidth) 设置入带宽
 * @method array getOutBandwidth() 获取出带宽
 * @method void setOutBandwidth(array $OutBandwidth) 设置出带宽
 * @method array getInPkg() 获取入包
 * @method void setInPkg(array $InPkg) 设置入包
 * @method array getOutPkg() 获取出包
 * @method void setOutPkg(array $OutPkg) 设置出包
 */
class CrossBorderFlowMonitorData extends AbstractModel
{
    /**
     * @var array 入带宽
     */
    public $InBandwidth;

    /**
     * @var array 出带宽
     */
    public $OutBandwidth;

    /**
     * @var array 入包
     */
    public $InPkg;

    /**
     * @var array 出包
     */
    public $OutPkg;

    /**
     * @param array $InBandwidth 入带宽
     * @param array $OutBandwidth 出带宽
     * @param array $InPkg 入包
     * @param array $OutPkg 出包
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
        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = $param["InBandwidth"];
        }

        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = $param["OutBandwidth"];
        }

        if (array_key_exists("InPkg",$param) and $param["InPkg"] !== null) {
            $this->InPkg = $param["InPkg"];
        }

        if (array_key_exists("OutPkg",$param) and $param["OutPkg"] !== null) {
            $this->OutPkg = $param["OutPkg"];
        }
    }
}
