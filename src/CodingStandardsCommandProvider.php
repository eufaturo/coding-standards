<?php

declare(strict_types = 1);

namespace Eufaturo\CodingStandards;

use Composer\Plugin\Capability\CommandProvider;
use Eufaturo\CodingStandards\Commands\GenerateCommand;

final class CodingStandardsCommandProvider implements CommandProvider
{
    public function getCommands(): array
    {
        return [
            new GenerateCommand(),
        ];
    }
}
