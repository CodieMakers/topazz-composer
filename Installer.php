<?php
/**
 * @author  Lukáš
 * @version 1.0.0
 * @package topazz-composer
 */

namespace Topazz\Composer;


use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Installer extends LibraryInstaller {

    public function getInstallPath(PackageInterface $package) {
        $prefix = "modules/";
        if ($package->getType() === "topazz-theme") {
            $prefix = "themes/";
        }
        return $prefix . explode("/", $package->getPrettyName())[1];
    }

    public function supports($packageType) {
        return preg_match('/topazz-(module|theme)/', $packageType);
    }
}