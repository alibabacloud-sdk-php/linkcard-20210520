<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class GetCardRealStatusShrinkRequest extends Model
{
    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @example 144******1111
     *
     * @var string
     */
    public $msisdn;

    /**
     * @var string
     */
    public $serialNoShrink;
    protected $_name = [
        'iccid'          => 'Iccid',
        'msisdn'         => 'Msisdn',
        'serialNoShrink' => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->serialNoShrink) {
            $res['SerialNo'] = $this->serialNoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCardRealStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Msisdn'])) {
            $model->msisdn = $map['Msisdn'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNoShrink = $map['SerialNo'];
        }

        return $model;
    }
}
