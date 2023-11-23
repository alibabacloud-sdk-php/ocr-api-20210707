<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\DataSubImagesKvInfoKvDetailsValue;

use AlibabaCloud\Tea\Model;

class valuePoints extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $x;

    /**
     * @example 200
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valuePoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
