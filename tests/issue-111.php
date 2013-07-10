<?php

/**
 * Github Issue:    https://github.com/ejmr/php-mode/issues/111
 *
 * The code below should be formatted like so if we enable the
 * Symfony2 style and run indent-region on it:
 *
 *
 * switch ($type) {
 * case 'order':
 *     $clients_wants_order = $row['customer_wants_order'];
 *     break;
 * case 'preorder':
 *     $clients_wants_preorder = $row['customer_wants_preorder'];
 *     break;
 * }
 *
 * The primary goal of this test is to ensure the 'case' keyword lines
 * up with 'switch'.
 *
 */

switch ($type) {
case 'order': // ###php-mode-test### ((indent 0))
        $clients_wants_order = $row['customer_wants_order'];
        break;
case 'preorder': // ###php-mode-test### ((indent 0))
        $clients_wants_preorder = $row['customer_wants_preorder'];
        break;
}
