<?php    
    //task7
    function isValidUrl(string $input)
    {
        $url_validation_regex = "/^(?:https?:\\/\\/)?(?:www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b(?:[-a-zA-Z0-9()@:%_\\+.~#?&\\/=]*)$/";
        if (preg_match($url_validation_regex, $input))
            return "OK";
        else
            return "Not a valid URL";
    }
    echo ("innowise.com")." \n";          echo (isValidUrl("innowise.com"))."\n";
    echo ("htps://innowise,com/")." \n";  echo (isValidUrl("htps://innowise,com/"))."\n";
    echo ("https://innowise.com/")." \n"; echo (isValidUrl("https://innowise.com/"))."\n";
    echo ("ftp.google.com")." \n";        echo (isValidUrl("ftp.google.com"))."\n";

?>