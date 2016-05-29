<?php
namespace vipnytt\RobotsTxtParser\Client\Directives;

/**
 * Class RobotVersionClient
 *
 * @package vipnytt\RobotsTxtParser\Client\Directives
 */
class RobotVersionClient
{
    /**
     * Robot-version
     * @var string|null
     */
    private $robotVersion;

    /**
     * RobotVersionClient constructor.
     *
     * @param string|null $robotVersion
     */
    public function __construct($robotVersion)
    {
        $this->robotVersion = $robotVersion;
    }

    /**
     * Export
     *
     * @return string|null
     */
    public function export()
    {
        return $this->robotVersion;
    }
}
