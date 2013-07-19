<?php

namespace Oro\Bundle\WorkflowBundle\Model\Condition;

use Oro\Bundle\WorkflowBundle\Exception\ConditionInitializationException;

interface ConditionInterface
{
    /**
     * Check if context meets condition requirements.
     *
     * @param mixed $context
     * @return boolean
     */
    public function isAllowed($context);

    /**
     * Initialize condition based on passed options.
     *
     * @param array $options
     * @return ConditionInterface
     * @throws ConditionInitializationException
     */
    public function initialize(array $options);
}
