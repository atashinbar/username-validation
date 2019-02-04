<?php
class Username
{
    public static function validate($username)
    {
        if ( strlen($username) >= 6 &&  strlen($username) <= 16)
        {
            if ( ctype_alpha( substr( $username , 0 , 1 ) ) &&  substr( $username , 0 , -1 ) != '-' )
            {
                if ( preg_match( '/^[a-zA-Z\d-]+$/', $username ) )
                {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
}
echo Username::validate('Mike-Stasd213') ? 'Valid' : 'Invalid'; #Valid username
echo "\n";
echo Username::validate('Mike Standish') ? 'Valid' : 'Invalid'; #Invalid username
echo "\n";