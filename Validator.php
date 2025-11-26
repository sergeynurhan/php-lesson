<?php

class Validator
{
    public array $fields;
    public array $errors = [];

    public function __construct(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * @param string $field
     * @return self
     */
    public function required(string $value, string $field): self
    {
        if (empty($this->fields[$field])) {
            $this->errors[$field][] = "The {$field} field is required!";
        }

        return $this;
    }

    /**
     * @param string $field
     * @return self
     */
    public function email(string $field): self
    {
        if (! filter_var($field, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = "The {$field} field is not a valid email address!";
        }

        return $this;
    }

    /**
     * @param string $field
     * @param integer $min
     * @return self
     */
    public function minimal(string $field, int $min): self
    {
        if (strlen($field) < $min) {
            $this->errors[$field][] = "The {$field} must contain at least {$min} characters";
        }

        return $this;
    }

    /**
     * @return boolean
     */
    public function failed(): bool
    {
        return ! empty($this->errors);
    }

    /**
     * @return boolean
     */
    public function passed(): bool
    {
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function errors(): array
    {
        return $this->errors;
    }
}