<?php

function displayErrors($e)
{
    foreach ($e as $error)
    {
        print '<li>' .$error. '</li>';
    }
}