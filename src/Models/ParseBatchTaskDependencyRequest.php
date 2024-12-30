<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyRequest\parseCommand;
use AlibabaCloud\Tea\Model;

class ParseBatchTaskDependencyRequest extends Model
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
     * @var parseCommand
     */
    public $parseCommand;
    protected $_name = [
        'opTenantId'   => 'OpTenantId',
        'parseCommand' => 'ParseCommand',
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
        if (null !== $this->parseCommand) {
            $res['ParseCommand'] = null !== $this->parseCommand ? $this->parseCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ParseBatchTaskDependencyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ParseCommand'])) {
            $model->parseCommand = parseCommand::fromMap($map['ParseCommand']);
        }

        return $model;
    }
}
