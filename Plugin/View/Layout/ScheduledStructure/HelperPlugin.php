<?php
/**
 * Diglin GmbH - Switzerland
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    Diglin
 * @package     Diglin_MissingBlockName
 * @copyright   Copyright (c) 2011-2017 Diglin (http://www.diglin.com)
 */

namespace Diglin\MissingBlockName\Plugin\View\Layout\ScheduledStructure;

/**
 * Class HelperPlugin
 * @package Diglin\MissingBlockName\Plugin\View\Layout\ScheduledStructure
 */
class HelperPlugin
{
    /**
     * @param \Magento\Framework\View\Layout\ScheduledStructure\Helper $subject
     * @param \Magento\Framework\View\Layout\ScheduledStructure $scheduledStructure
     * @param \Magento\Framework\View\Layout\Element $currentNode
     * @param \Magento\Framework\View\Layout\Element $parentNode
     * @return array
     */
    public function beforeScheduleStructure(
        \Magento\Framework\View\Layout\ScheduledStructure\Helper $subject,
        \Magento\Framework\View\Layout\ScheduledStructure $scheduledStructure,
        \Magento\Framework\View\Layout\Element $currentNode,
        \Magento\Framework\View\Layout\Element $parentNode
    ) {
        if (!$currentNode->getAttribute('name') && $currentNode->getAttribute('as')) {
            $currentNode->setAttribute('name', $currentNode->getAttribute('as'));
        }

        return [$scheduledStructure, $currentNode, $parentNode];
    }
}