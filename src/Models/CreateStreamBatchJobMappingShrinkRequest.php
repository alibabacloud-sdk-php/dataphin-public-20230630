<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class CreateStreamBatchJobMappingShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $streamBatchJobMappingCreateCommandShrink;
    protected $_name = [
        'opTenantId'                               => 'OpTenantId',
        'streamBatchJobMappingCreateCommandShrink' => 'StreamBatchJobMappingCreateCommand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->streamBatchJobMappingCreateCommandShrink) {
            $res['StreamBatchJobMappingCreateCommand'] = $this->streamBatchJobMappingCreateCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStreamBatchJobMappingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['StreamBatchJobMappingCreateCommand'])) {
            $model->streamBatchJobMappingCreateCommandShrink = $map['StreamBatchJobMappingCreateCommand'];
        }

        return $model;
    }
}
