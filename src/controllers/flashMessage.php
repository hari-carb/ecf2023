<?php
function flashMessage()
{
    if (isset($_SESSION['flash']))
    {
        foreach ($_SESSION['flash'] as $type => $message)
        {
            print '<div class="alert alert-' .$type. '">' .$message.'</div>';
        }
    // Rechargement de la page
    unset($_SESSION['flash']);
    }
}
