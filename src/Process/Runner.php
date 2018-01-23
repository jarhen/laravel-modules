<?php

namespace jaimeramos\Modules\Process;

use jaimeramos\Modules\Contracts\RunableInterface;
use jaimeramos\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \jaimeramos\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \jaimeramos\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
