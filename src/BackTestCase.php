<?php

namespace Spatie\Integration;

use App\Models\User;

abstract class BackTestCase extends TestCase
{
    /**
     * @var \App\Models\User
     */
    protected $currentUser;

    public function setUp()
    {
        parent::setUp();

        $this->currentUser = factory(User::class)->create();
        $this->actingAs($this->currentUser);
    }
}
