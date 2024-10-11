<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList;
use AlibabaCloud\Tea\Model;

class GetDevObjectDependencyResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var devObjectDependencyList[]
     */
    public $devObjectDependencyList;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example 75DD06F8-1661-5A6E-B0A6-7E23133BDC60
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                    => 'Code',
        'devObjectDependencyList' => 'DevObjectDependencyList',
        'httpStatusCode'          => 'HttpStatusCode',
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->devObjectDependencyList) {
            $res['DevObjectDependencyList'] = [];
            if (null !== $this->devObjectDependencyList && \is_array($this->devObjectDependencyList)) {
                $n = 0;
                foreach ($this->devObjectDependencyList as $item) {
                    $res['DevObjectDependencyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDevObjectDependencyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DevObjectDependencyList'])) {
            if (!empty($map['DevObjectDependencyList'])) {
                $model->devObjectDependencyList = [];
                $n                              = 0;
                foreach ($map['DevObjectDependencyList'] as $item) {
                    $model->devObjectDependencyList[$n++] = null !== $item ? devObjectDependencyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
