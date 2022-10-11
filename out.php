function out($var, $var_name = '') {
    echo '<pre style="outline:1px dashed red; padding: 5px; margin: 10px; color: white; background: black">';
    if (!empty($var_name)) {
        echo 'h3' . $var_name . '</h3>';
    }
    if (is_string($var)) {
        $var = htmlspecialchars($var);
    }
    print_r($var);
    echo '</pre>';
}
