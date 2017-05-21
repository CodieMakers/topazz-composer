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

class Plugin implements PluginInterface {

    /**
     * Apply plugin modifications to Composer
     *
     * @param Composer    $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io) {
        // TODO: Implement activate() method.
    }
}