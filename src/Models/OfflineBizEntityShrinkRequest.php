<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class OfflineBizEntityShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $offlineCommandShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'offlineCommandShrink' => 'OfflineCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offlineCommandShrink) {
            $res['OfflineCommand'] = $this->offlineCommandShrink;
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
        if (isset($map['OfflineCommand'])) {
            $model->offlineCommandShrink = $map['OfflineCommand'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
