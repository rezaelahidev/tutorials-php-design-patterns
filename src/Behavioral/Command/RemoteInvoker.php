<?php

namespace Learning\DesignPatterns\Behavioral\Command;


// Invoker
class RemoteInvoker
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}
