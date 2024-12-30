<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand;

use AlibabaCloud\Tea\Model;

class customScheduleConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 10:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $interval;

    /**
     * @description This parameter is required.
     *
     * @example HOUR
     *
     * @var string
     */
    public $intervalUnit;

    /**
     * @description This parameter is required.
     *
     * @example DAILY
     *
     * @var string
     */
    public $schedulePeriod;

    /**
     * @description This parameter is required.
     *
     * @example 10:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'interval'       => 'Interval',
        'intervalUnit'   => 'IntervalUnit',
        'schedulePeriod' => 'SchedulePeriod',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->intervalUnit) {
            $res['IntervalUnit'] = $this->intervalUnit;
        }
        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customScheduleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IntervalUnit'])) {
            $model->intervalUnit = $map['IntervalUnit'];
        }
        if (isset($map['SchedulePeriod'])) {
            $model->schedulePeriod = $map['SchedulePeriod'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}