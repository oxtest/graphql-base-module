<?php

namespace OxidEsales\GraphQL\Service;

use OxidEsales\GraphQL\Exception\InvalidLoginException;

interface LegacyServiceInterface
{
    const GROUP_ADMIN = 'admin';
    const GROUP_CUSTOMERS = 'customer';

    /**
     * @throws InvalidLoginException
     */
    public function checkCredentials(string $username, string $password);

    /**
     * @throws InvalidLoginException
     */
    public function getUserGroup(string $username): string;

    public function getConfigParam(string $param);

    public function getShopUrl(): string;

    public function getShopId(): int;
}
