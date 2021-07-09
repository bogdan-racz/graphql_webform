<?php

namespace Drupal\graphql_webform\GraphQL;

/**
 * A helper class to wrap an error with its corresponding input key when using submitForm mutation.
 */
class WebformSubmissionErrorWrapper{

  /**
   * @var string
   */
  protected $key;

  /**
   * @var string
   */
  protected $message;

  /**
   * WebformSubmissionError constructor.
   *
   * @param string $key
   *  Form element key.
   * @param string $message
   *  Form element error message.
   */
  public function __construct(string $key, string $message) {
    $this->key = $key;
    $this->message = $message;
  }

  /**
   * @return string
   */
  public function getKey(): string {
    return $this->key;
  }

  /**
   * @param string $key
   */
  public function setKey(string $key): void {
    $this->key = $key;
  }

  /**
   * @return string
   */
  public function getMessage(): string {
    return $this->message;
  }

  /**
   * @param string $message
   */
  public function setMessage(string $message): void {
    $this->message = $message;
  }

}
