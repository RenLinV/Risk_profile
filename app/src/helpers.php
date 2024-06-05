<?php

session_start();

require_once  __DIR__ . '/config.php';

function redirect(string $path){
    header("Location: $path");
    die();
}

function setValidationError(string $fieldName, string $message): void {
    $_SESSION['validation'][$fieldName] = $message;
}
function hasValidationError(string $fieldName): bool {
    return isset($_SESSION['validation'][$fieldName]);
}
function validationErrorAttr(string $fieldName): string {
    return isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}
function setOldValue(string $name, string $value): void {
    $_SESSION['old'][$name] = $value;
}
function old(string $key) {
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function getPDO(): PDO
{
    try {
        return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}


function setMessage(string $key, string $message): void {
    $_SESSION['message'][$key] = $message;
}
function hasMessage(string $key): bool {
    return isset($_SESSION['message'][$key]);
}
function getMessage(string $key): string {
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}
