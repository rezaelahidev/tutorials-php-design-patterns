<?php

namespace Learning\DesignPatterns\Behavioral\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}
