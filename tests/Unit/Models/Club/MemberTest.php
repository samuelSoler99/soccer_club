<?php

namespace Tests\Unit\Models\Club;

use App\Models\Club;
use App\Models\club\Member;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MemberTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_members_by_club_id()
    {

        $club = new Club();
        $club->id = 99;
        $club->created_at = "2022-09-28 13:31:46";
        $club->updated_at = "2022-09-28 13:31:46";
        $club->name = 99;
        $club->city = 99;
        $club->budget = 99;
        $club->save();

        $member = new Member();
        $member->id = 99999;
        $member->created_at = "2022-09-28 13:31:46";
        $member->updated_at = "2022-09-28 13:31:46";
        $member->name = "Carlos";
        $member->email = "Carlos@gmail.com";
        $member->dni = "21807941p";
        $member->salary = 55.50;
        $member->type_id = 1;
        $member->club_id = 99;
        $member->photo = "aaaa";
        $member->save();

        $object = new Member();

        $result = $object->getMembersByClubId(99);

        $this->assertCount(1,$result,'Expect 1 result');
        $this->assertEquals('Carlos',$result[0]->name,'Expect Carlos as name of first register');
    }
}
