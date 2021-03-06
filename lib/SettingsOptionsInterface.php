<?php namespace SIKessEm\ArrayConfig;

interface SettingsOptionsInterface {

  /**
   * Set options list
   *
   * @param  array $options Options list
   * @return self
   */
  function setOptions(array $options, string $delimiter = '.'): self;

  /**
   * Set an option
   * @param string|int $key   The option key
   * @param mixed      $value The option value
   */
  function setOption(string|int $key, mixed $value): self;

  /**
   * Set a group of options
   * @param  string $key   The group key
   * @param  mixed  $value The option value
   * @return self
   */
  function setGroup(string $key, mixed $value, string $delimiter): self;

  /**
   * Get an option

   * @param  string|int $key The option key
   * @return mixed                  The option value
   */
  function getOption(string|int $key): mixed;

  /**
   * Check if an option exists
   *
   * @param  string|int $key The option key
   * @return bool                   The option exists
   */
  function issetOption(string|int $key): bool;

  /**
   * Unset an option
   *
   * @param string|int $key The option key
   */
  function unsetOption(string|int $key): void;

  /**
   * Get options list
   *
   * @return array Options list
   */
  function getOptions(): array;
}
