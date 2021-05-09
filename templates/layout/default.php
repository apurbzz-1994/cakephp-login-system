<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Bob\'s Construction';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?> - 
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--font declarations for ALL templates -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Antonio&display=swap" rel="stylesheet">

    <!--The CSS stuff for ALL templates-->
    <?= $this->Html->css(['bootstrap-grid', 'bootstrap-reboot', 'bootstrap', 'style']) ?>

    <?= $this->fetch('meta') ?>
    <!--This would fetch the CSS for individual templates given that you're using
    block=true-->
    <?= $this->fetch('css') ?>
</head>
<body>
    <!--Loading the navbar-->
    <?= $this->element('nav')  ?>
    
    <!--rendering page content-->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    
    <footer>
    </footer>
     <!--JQuery for bootstrap-->
     <!--Note: JQuery needs to be loaded before other JS files since some of them 
     might be dependent on JQuery--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!--Note: this would fetch script declarations for individual views given
    that you're using block=true while setting them up-->
    <?= $this->fetch('script') ?>
   
    

</body>
</html>
