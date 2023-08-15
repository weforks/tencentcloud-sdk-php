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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 移除孤立文件治理项
 *
 * @method string getRemoveOrphanFilesEnable() 获取是否启用移除孤立文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveOrphanFilesEnable(string $RemoveOrphanFilesEnable) 设置是否启用移除孤立文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取用于运行移除孤立文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置用于运行移除孤立文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBeforeDays() 获取移除指定天前的孤立文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeforeDays(integer $BeforeDays) 设置移除指定天前的孤立文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrentDeletes() 获取移除孤立文件的并行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConcurrentDeletes(integer $MaxConcurrentDeletes) 设置移除孤立文件的并行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalMin() 获取移除孤立文件治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalMin(integer $IntervalMin) 设置移除孤立文件治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
 */
class DlcRemoveOrphanFilesInfo extends AbstractModel
{
    /**
     * @var string 是否启用移除孤立文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveOrphanFilesEnable;

    /**
     * @var string 用于运行移除孤立文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

    /**
     * @var integer 移除指定天前的孤立文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeforeDays;

    /**
     * @var integer 移除孤立文件的并行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConcurrentDeletes;

    /**
     * @var integer 移除孤立文件治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalMin;

    /**
     * @param string $RemoveOrphanFilesEnable 是否启用移除孤立文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine 用于运行移除孤立文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BeforeDays 移除指定天前的孤立文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrentDeletes 移除孤立文件的并行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalMin 移除孤立文件治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RemoveOrphanFilesEnable",$param) and $param["RemoveOrphanFilesEnable"] !== null) {
            $this->RemoveOrphanFilesEnable = $param["RemoveOrphanFilesEnable"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("BeforeDays",$param) and $param["BeforeDays"] !== null) {
            $this->BeforeDays = $param["BeforeDays"];
        }

        if (array_key_exists("MaxConcurrentDeletes",$param) and $param["MaxConcurrentDeletes"] !== null) {
            $this->MaxConcurrentDeletes = $param["MaxConcurrentDeletes"];
        }

        if (array_key_exists("IntervalMin",$param) and $param["IntervalMin"] !== null) {
            $this->IntervalMin = $param["IntervalMin"];
        }
    }
}
