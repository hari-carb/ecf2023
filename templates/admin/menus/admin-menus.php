<?php $title = "Restaurant Le Quai Antique - Administration - Menus"; ?>

<?php require __DIR__ .'/../../../src/controllers/admin/menus/display-menus.php';?>

<?php ob_start(); ?>

<h1>Gestion des menus</h1>

<table>
    <caption><h3>Listes des plats</h3></caption>
    <thead>
        <tr>
            <th>Menu</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
    <?php adminDisplayMenusByName('Déjeuner'); ?>

    <tr>
        <td>
        <?php adminDisplayMenu('Déjeuner'); ?>
        </td>
    </tr>
    <?php adminDisplayMenusByName('Duo'); ?>

    <tr>
        <td>
        <?php adminDisplayMenu('Duo'); ?>
        </td>
    </tr>
    <?php adminDisplayMenusByName('Végétarien'); ?>
 
    <tr>
        <td>
        <?php adminDisplayMenu('Végétarien'); ?>
        </td>
    </tr>
    <?php adminDisplayMenusByName('Dégustation'); ?>

    <tr>
        <td>
        <?php adminDisplayMenu('Dégustation'); ?>
        </td>
    </tr>
 </tbody>
 </table>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>