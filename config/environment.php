<?php

return function()
{
    // Check for the environment variable
    if (getenv('SCALINGO_MYSQL_URL'))
    {
        return 'scalingo';
    }

    return 'netbook';
};
