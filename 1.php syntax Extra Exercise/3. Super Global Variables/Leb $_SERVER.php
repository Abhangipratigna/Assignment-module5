<?php

echo "<h1>Server Environment Details</h1>";

echo "<p><strong>PHP_SELF:</strong> " . $_SERVER['PHP_SELF'] . "</p>";

echo "<p><strong>SERVER_NAME:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";

echo "<p><strong>HTTP_USER_AGENT:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</p>";

echo "<p><strong>SERVER_ADDR:</strong> " . $_SERVER['SERVER_ADDR'] . "</p>";

echo "<p><strong>REQUEST_METHOD:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";

echo "<p><strong>SCRIPT_NAME:</strong> " . $_SERVER['SCRIPT_NAME'] . "</p>";

echo "<p><strong>QUERY_STRING:</strong> " . $_SERVER['QUERY_STRING'] . "</p>";

echo "<p><strong>DOCUMENT_ROOT:</strong> " . $_SERVER['DOCUMENT_ROOT'] . "</p>";

echo "<p><strong>REMOTE_ADDR:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>";

echo "<p><strong>SERVER_PORT:</strong> " . $_SERVER['SERVER_PORT'] . "</p>";

echo "<p><strong>REQUEST_URI:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";

?>
