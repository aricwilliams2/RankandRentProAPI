# Connection Classes Documentation

The `BlueFission\Connections` namespace contains several classes that manage different types of connections such as databases, APIs, and other external systems. This document covers the primary connection classes including `Connection`, `Curl`, `Socket`, and `Stream`.

## Connection (Abstract Class)

The `Connection` class serves as an abstract base for all specific connection implementations, ensuring they conform to a standard structure for managing connections.

### Key Methods

- **open()**: Opens a connection. Specifics depend on the subclass implementation.
- **close()**: Closes the connection.
- **query($query)**: Sends a query or command through the connection.

### Usage Scenario

Use `Connection` as a base when you need a consistent interface for various types of connections. It provides lifecycle methods that can be extended for specific types of connections like databases, REST APIs, or any other system that requires opening and closing connections.

## Curl

Extends `Connection` to handle HTTP requests using cURL. Suitable for interacting with RESTful APIs.

### Key Methods

- **option($option, $value)**: Sets a specific cURL option.
- **query($query)**: Executes a cURL request with the provided query. 

### Usage Scenario

`Curl` is ideal for services needing to communicate with external APIs. It manages the intricacies of cURL within PHP, providing methods to set options and execute GET, POST, and other HTTP methods.

## Socket

Extends `Connection` to manage socket communications. Utilizes PHP's `fsockopen` for managing socket operations.

### Key Methods

- **query($query)**: Sends data over a socket connection.

### Usage Scenario

Use `Socket` for low-level network communications where you need to maintain a persistent connection to a server, such as real-time data feeds or services requiring constant data exchange over plain TCP/IP.

## Stream

Implements `Connection` to handle stream-based communications. Uses PHP's stream context to manage data streams effectively.

### Key Methods

- **query($query)**: Executes a query against the stream.

### Usage Scenario

`Stream` is suitable for handling file streams, network streams, or data streams that require a context, such as HTTP streams with specific headers or configurations.

## Usage and Implementation

To utilize these classes, ensure your application configuration includes parameters suited for each type of connection. For instance, when using `Curl`, configure endpoints and authentication details. For `Socket` or `Stream`, specify the target and parameters like port numbers or stream contexts.

### Example

```php
$config = [
    'target' => 'https://api.example.com/users',
    'method' => 'POST',
    'headers' => ['Authorization: Bearer ' . $token]
];

$curl = (new Curl($config))->open();

$result = $curl->query(['name'=>'John Doe'])->result();

$curl->close();
```

