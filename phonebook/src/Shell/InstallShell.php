<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Core\Plugin;

/**
 * Install shell command.
 */
class InstallShell extends Shell
{

    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int|null Success or error code.
     */
    public function main()
    {
        $this->migrateInitial();
        $this->migratePlugins();
    }

    /**
     * start initial migration and seed
     */
    private function migrateInitial() {
        $this->dispatchShell('migrations', 'migrate');
        $this->dispatchShell('migrations', 'seed');
    }

    /**
     * install plugins
     *
     * @return void
     */
    private function migratePlugins() {
        $plugins = Plugin::loaded();

        foreach ($plugins as $plugin) {
            if (!in_array($plugin, ['Bake', 'DebugKit', 'Migrations', 'FontAwesome']))

            $this->dispatchShell(
                'migrations',
                'migrate',
                '-p',
                $plugin
            );
        }
    }
}
