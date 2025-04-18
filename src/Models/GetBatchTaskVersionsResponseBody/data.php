<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskVersionsResponseBody\data\batchTaskVersionList;

class data extends Model
{
    /**
     * @var batchTaskVersionList[]
     */
    public $batchTaskVersionList;
    protected $_name = [
        'batchTaskVersionList' => 'BatchTaskVersionList',
    ];

    public function validate()
    {
        if (\is_array($this->batchTaskVersionList)) {
            Model::validateArray($this->batchTaskVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchTaskVersionList) {
            if (\is_array($this->batchTaskVersionList)) {
                $res['BatchTaskVersionList'] = [];
                $n1 = 0;
                foreach ($this->batchTaskVersionList as $item1) {
                    $res['BatchTaskVersionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BatchTaskVersionList'])) {
            if (!empty($map['BatchTaskVersionList'])) {
                $model->batchTaskVersionList = [];
                $n1 = 0;
                foreach ($map['BatchTaskVersionList'] as $item1) {
                    $model->batchTaskVersionList[$n1++] = batchTaskVersionList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
