<?php

namespace BrodSolutions\Edi;


/**
 * Interface SegmentInterface
 * @package BrodSolutions\Edi\Segments
 */
interface SegmentInterface
{
    /**
     * @param $segment
     * @return mixed
     */
    public function parse($segment);


    /**
     * @param $array
     * @return mixed
     */
    public function generate($array);
}
