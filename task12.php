<?php

function getVoteEligibilityMessage(string $name, int $age): string
{
    if (empty($name) || $age <= 0 || $age > 120) {
        return "Enter correct name and age";
    }

    if ($age >= 18) {
        return "{$name} you are eligibile to vote";
    }

    return "{$name} you are not eligibile to vote";
}

echo getVoteEligibilityMessage('John', 22);
echo getVoteEligibilityMessage('Valentin', 122);
echo getVoteEligibilityMessage('Michael', -1);
echo getVoteEligibilityMessage('Lena', 18);