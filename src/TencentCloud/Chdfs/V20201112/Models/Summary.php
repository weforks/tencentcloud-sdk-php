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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期规则当前路径具体存储量信息
 *
 * @method integer getCapacityUsed() 获取总存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapacityUsed(integer $CapacityUsed) 设置总存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStandardCapacityUsed() 获取标准存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardCapacityUsed(integer $StandardCapacityUsed) 设置标准存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDegradeCapacityUsed() 获取低频存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDegradeCapacityUsed(integer $DegradeCapacityUsed) 设置低频存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getArchiveCapacityUsed() 获取归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchiveCapacityUsed(integer $ArchiveCapacityUsed) 设置归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeepArchiveCapacityUsed() 获取深度归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeepArchiveCapacityUsed(integer $DeepArchiveCapacityUsed) 设置深度归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntelligentCapacityUsed() 获取智能分层存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntelligentCapacityUsed(integer $IntelligentCapacityUsed) 设置智能分层存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
 */
class Summary extends AbstractModel
{
    /**
     * @var integer 总存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CapacityUsed;

    /**
     * @var integer 标准存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardCapacityUsed;

    /**
     * @var integer 低频存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DegradeCapacityUsed;

    /**
     * @var integer 归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArchiveCapacityUsed;

    /**
     * @var integer 深度归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeepArchiveCapacityUsed;

    /**
     * @var integer 智能分层存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntelligentCapacityUsed;

    /**
     * @param integer $CapacityUsed 总存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StandardCapacityUsed 标准存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DegradeCapacityUsed 低频存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ArchiveCapacityUsed 归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeepArchiveCapacityUsed 深度归档存储量（单位byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntelligentCapacityUsed 智能分层存储量（单位byte）
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
        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("StandardCapacityUsed",$param) and $param["StandardCapacityUsed"] !== null) {
            $this->StandardCapacityUsed = $param["StandardCapacityUsed"];
        }

        if (array_key_exists("DegradeCapacityUsed",$param) and $param["DegradeCapacityUsed"] !== null) {
            $this->DegradeCapacityUsed = $param["DegradeCapacityUsed"];
        }

        if (array_key_exists("ArchiveCapacityUsed",$param) and $param["ArchiveCapacityUsed"] !== null) {
            $this->ArchiveCapacityUsed = $param["ArchiveCapacityUsed"];
        }

        if (array_key_exists("DeepArchiveCapacityUsed",$param) and $param["DeepArchiveCapacityUsed"] !== null) {
            $this->DeepArchiveCapacityUsed = $param["DeepArchiveCapacityUsed"];
        }

        if (array_key_exists("IntelligentCapacityUsed",$param) and $param["IntelligentCapacityUsed"] !== null) {
            $this->IntelligentCapacityUsed = $param["IntelligentCapacityUsed"];
        }
    }
}
