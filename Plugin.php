<?php
/**
 * @author  Lukáš
 * @version 1.0.0
 * @package topazz-composer
 */

namespace Topazz\Composer;


use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Topazz\Composer\Installer as TopazzInstaller;

class Plugin implements PluginInterface {

    /**
     * Apply plugin modifications to Composer
     *
     * @param Composer    $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io) {
        $installer = new TopazzInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}