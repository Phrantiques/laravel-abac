<?php

declare(strict_types=1);

use Tests\TestCase;

class RolesControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $this->be(\App\Models\User::whereUserRole(App\Models\User::ROLE_ADMIN)->first());

        $response = $this->get(route('security.roles.index'));
        $this->assertEquals(200, $response->getStatusCode());
    }
}
