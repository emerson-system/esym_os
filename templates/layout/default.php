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
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->element('Layout/head') ?>
    </head>
    <body>
        
        <nav class="top-nav">
            <div class="top-nav-title">
                <a href="<?= $this->Url->build('/') ?>"><span>Esym</span>Web</a>
            </div>
            <div class="top-nav-links">
                <a target="_blank" rel="noopener" href="#">Fale com nosco:</a>
                <a target="_blank" rel="noopener" href="#">(79)9 9999-9999</a>
            </div>
        </nav>
        <main class="main">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
        <footer>
        </footer>
        <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/bootstrap/js/popper.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/bootstrap/js/jquery-3.6.4.min.js"></script>
    </body>
</html>
