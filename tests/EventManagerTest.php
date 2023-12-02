<?php

use PHPUnit\Framework\TestCase;
use WazFactor\EventManager\EventManager;
use WazFactor\EventManager\EventManagerSubscriber;

class EventManagerTest extends TestCase
{
    private $eventManager;
    private $subscriber;

    protected function setUp(): void
    {
        $this->eventManager = new EventManager();
        $this->subscriber = new EventManagerSubscriber($this->eventManager);
    }

    public function testAddEvent()
    {
        $eventName = 'test.event';
        $listener = function () {
            echo "Test Event Triggered";
        };

        $this->subscriber->addEvent($eventName, $listener);
        // Assert that the event is added (you might need to add a method in your class to check this)
        $this->assertTrue($this->eventManager->hasEvent($eventName));
    }

    public function testDispatchEvent()
    {
        $eventName = 'test.dispatch';
        $listener = function () {
            return "Event Dispatched";
        };

        $this->subscriber->addEvent($eventName, $listener);
        $response = $this->eventManager->dispatch($eventName);

        // Assert that the event dispatches correctly
        $this->assertEquals("Event Dispatched", $response);
    }

    // Add more tests for other methods and functionalities
}


