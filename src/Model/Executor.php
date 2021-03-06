<?php

namespace RulerZ\Model;

use Hoa\Ruler\Model as HoaModel;

class Executor
{
    /**
     * List of the traits to use in the executor's code.
     *
     * @var array
     */
    private $traits = [];

    /**
     * Compiled code of the rule.
     *
     * @var string
     */
    private $compiledRule = '';

    /**
     * Data generated by the compiler and stored to be used by the executors.
     *
     * @var array
     */
    private $compiledData = [];

    public function __construct(array $traits, $compiledRule, array $compilationData = [])
    {
        $this->traits       = $traits;
        $this->compiledRule = $compiledRule;
        $this->compiledData = $compilationData;
    }

    /**
     * @return array
     */
    public function getTraits()
    {
        return $this->traits;
    }

    /**
     * @return string
     */
    public function getCompiledRule()
    {
        return $this->compiledRule;
    }

    /**
     * @return array
     */
    public function getCompiledData()
    {
        return $this->compiledData;
    }
}