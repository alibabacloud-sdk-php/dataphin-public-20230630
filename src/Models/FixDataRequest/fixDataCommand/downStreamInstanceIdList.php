<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\FixDataRequest\fixDataCommand;

use AlibabaCloud\Tea\Model;

class downStreamInstanceIdList extends Model
{
    /**
     * @var string[]
     */
    public $fieldInstanceIdList;

    /**
     * @example t_2323421
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'fieldInstanceIdList' => 'FieldInstanceIdList',
        'id'                  => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldInstanceIdList) {
            $res['FieldInstanceIdList'] = $this->fieldInstanceIdList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downStreamInstanceIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldInstanceIdList'])) {
            if (!empty($map['FieldInstanceIdList'])) {
                $model->fieldInstanceIdList = $map['FieldInstanceIdList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
