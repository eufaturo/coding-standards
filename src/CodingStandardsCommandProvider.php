<?php

declare(strict_types = 1);

namespace Werxe\CodingStandards;

use Composer\Plugin\Capability\CommandProvider;
use Werxe\CodingStandards\Commands\GenerateCommand;

final class CodingStandardsCommandProvider implements CommandProvider
{
    public function getCommands(): array
    {
        return [
            new GenerateCommand(),
        ];
    }
}
