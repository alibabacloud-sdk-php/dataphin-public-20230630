<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand;

class CreateNodeSupplementRequest extends Model
{
    /**
     * @var createCommand
     */
    public $createCommand;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createCommand' => 'CreateCommand',
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->createCommand) {
            $this->createCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createCommand) {
            $res['CreateCommand'] = null !== $this->createCommand ? $this->createCommand->toArray($noStream) : $this->createCommand;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateCommand'])) {
            $model->createCommand = createCommand::fromMap($map['CreateCommand']);
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
