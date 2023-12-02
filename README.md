# EventManagement

## Introduction
`EventManagement` is a reusable PHP package for managing events in WordPress plugins. It provides a structured and object-oriented approach to handling events, making your plugin development more efficient and maintainable.

## Features
- Easy to integrate with WordPress plugins
- Object-oriented approach for clean and maintainable code
- PSR-4 autoloading
- Extendable through interfaces and abstract classes

## Requirements
- PHP 8.0 or higher
- Composer for managing dependencies

## Installation
Install the package via Composer:
```bash
composer require wazfactor/event-manager
```

## Usage
Here's a basic example of how to use the EventManagement package in your WordPress plugin:

```php
use WazFactor\EventManager\EventManager;
use WazFactor\EventManager\EventManagerSubscriber;

// Initialize the Event Manager
$eventManager = new EventManager();

// Create a subscriber
$subscriber = new EventManagerSubscriber($eventManager);

// Add events and listeners
$subscriber->addEvent('event_name', function() {
    // Event handling logic
});

// Dispatch the event
$eventManager->dispatch('event_name');

```

## Advanced Usage
Creating Custom Subscribers:

```php 
// Implement your custom subscriber class

```

Removing Subscribers:

```php 
// Example of removing a subscriber

```

## Contributing
Contributions to the EventManagement package are welcome. Please ensure that your code adheres to the PSR-1/PSR-2 coding standards and includes tests for new features.

## License
Include your licensing information here.

## Authors
Frank Wazeter - Initial work - WazFactor

## Acknowledgments
Special thanks to the WordPress community
Anyone else you'd like to thank

## Support
For support, please open an issue on the GitHub repository or contact frank@wazeter.com.