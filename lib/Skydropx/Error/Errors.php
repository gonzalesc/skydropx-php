<?php
namespace Skydropx\Error;

/**
 * Skydropx Exceptions
 */

/**
 * Base Skydropx Exception
 */
class SkydropxException extends \Exception {
    protected $message = "Base Skydropx Exception";
}
/**
 * Input validation error
 */
namespace Skydropx\Error;

class InputValidationError extends SkydropxException {
    protected $message = "Fields validation error";
}
/**
 * Authentication error
 */
namespace Skydropx\Error;

class AuthenticationError extends SkydropxException {
    protected $message = "Authentication error";
}
/**
 * Resource not found
 */
namespace Skydropx\Error;

class NotFound extends SkydropxException {
    protected $message = "Resource not found";
}
/**
 * Method not allowed
 */
namespace Skydropx\Error;

class MethodNotAllowed extends SkydropxException {
    protected $message = "Method not allowed";
}
/**
 * Unhandled error
 */
namespace Skydropx\Error;

class UnhandledError extends SkydropxException {
    protected $message = "Unhandled error";
}
/**
 * Invalid Options
 */
namespace Skydropx\Error;

class InvalidOptions extends SkydropxException {
    protected $message = "Invalid Options";
}
/**
 * Invalid Token
 */
namespace Skydropx\Error;

class InvalidToken extends SkydropxException {
    protected $message = "Invalid token";
}
/**
 * Unable to connect to Skydropx API
 */
namespace Skydropx\Error;

class UnableToConnect extends SkydropxException {
    protected $message = "Can not connect to Skydropx API";
}
