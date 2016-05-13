<?php
namespace vipnytt\RobotsTxtParser\Parser\Directives;

use vipnytt\RobotsTxtParser\Parser\RobotsTxtInterface;
use vipnytt\RobotsTxtParser\Parser\Toolbox;

/**
 * Class VisitTime
 *
 * @package vipnytt\RobotsTxtParser\Parser\Directives
 */
class VisitTime implements DirectiveInterface, RobotsTxtInterface
{
    use Toolbox;

    /**
     * Directive
     */
    const DIRECTIVE = self::DIRECTIVE_VISIT_TIME;

    /**
     * VisitTime array
     * @var array
     */
    protected $array = [];

    /**
     * VisitTime constructor.
     */
    public function __construct()
    {
    }

    /**
     * Add
     *
     * @param string $line
     * @return bool
     */
    public function add($line)
    {
        $array = $this->draftParseTime($line);
        if ($array !== false) {
            $this->array[] = $array;
            return true;
        }
        return false;
    }

    /**
     * Export
     *
     * @return array
     */
    public function export()
    {
        return empty($this->array) ? [] : [self::DIRECTIVE => $this->array];
    }
}
