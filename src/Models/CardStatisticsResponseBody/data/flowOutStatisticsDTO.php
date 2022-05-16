<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class flowOutStatisticsDTO extends Model
{
    /**
     * @var int
     */
    public $poolCount;

    /**
     * @var int
     */
    public $sameFlowCardCount;

    /**
     * @var int
     */
    public $singleCardCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'poolCount'         => 'PoolCount',
        'sameFlowCardCount' => 'SameFlowCardCount',
        'singleCardCount'   => 'SingleCardCount',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolCount) {
            $res['PoolCount'] = $this->poolCount;
        }
        if (null !== $this->sameFlowCardCount) {
            $res['SameFlowCardCount'] = $this->sameFlowCardCount;
        }
        if (null !== $this->singleCardCount) {
            $res['SingleCardCount'] = $this->singleCardCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowOutStatisticsDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolCount'])) {
            $model->poolCount = $map['PoolCount'];
        }
        if (isset($map['SameFlowCardCount'])) {
            $model->sameFlowCardCount = $map['SameFlowCardCount'];
        }
        if (isset($map['SingleCardCount'])) {
            $model->singleCardCount = $map['SingleCardCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
