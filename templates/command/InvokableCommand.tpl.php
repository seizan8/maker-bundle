<?= "<?php\n"; ?>

namespace <?= $namespace; ?>;

<?= $use_statements; ?>

#[AsCommand(
    name: '<?= $command_name; ?>',
    description: 'Add a short description for your command',
)]
class <?= $class_name; ?>
{
    public function __invoke(
        SymfonyStyle                                                  $symfonyStyle,
        #[Argument('Required argument description')] string           $requiredArg,
        #[Argument('Optional nullable argument description')] ?string $optionalNullableArg,
        #[Argument('Optional non-nullable argument description')] int              $optionalNonNullableArg = 1,
        #[Option('Option description')] string                        $option = "defaultOptionValue",
        #[Option('Nullable option description')] ?string              $nullableOption = null,
    ): int
    {
        $symfonyStyle->note(sprintf('The value of $requiredArg is: %s', $requiredArg));
        $symfonyStyle->note(sprintf('The value of $optionalNullableArg is: %s', $optionalNullableArg));
        $symfonyStyle->note(sprintf('The value of $optionalNonNullableArg is: %s', $optionalNonNullableArg));
        $symfonyStyle->note(sprintf('The value of $option is: %s', $option));
        $symfonyStyle->note(sprintf('The value of $nullableOption is: %s', $nullableOption));

        $symfonyStyle->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
