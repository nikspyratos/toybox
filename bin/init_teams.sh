#!/bin/sh
set -e

# Config
sed -i.bak "s/#team_placeholder/Features::teams(['invitations' => true]),/g" config/jetstream.php
# Fortify
cp vendor/laravel/jetstream/stubs/app/Actions/Fortify/CreateNewUserWithTeams.php ./app/Actions/Fortify/CreateNewUser.php
# Jetstream
cp vendor/laravel/jetstream/stubs/app/Actions/Jeststream/AddTeamMember.php ./app/Actions/Jeststream/AddTeamMember.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jeststream/CreateTeam.php ./app/Actions/Jeststream/CreateTeam.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jeststream/DeleteTeam.php ./app/Actions/Jeststream/DeleteTeam.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jeststream/DeleteUserWithTeams.php ./app/Actions/Jeststream/DeleteUser.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jeststream/InviteTeamMember.php ./app/Actions/Jeststream/InviteTeamMember.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jeststream/RemoveTeamMember.php ./app/Actions/Jeststream/RemoveTeamMember.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jeststream/UpdateTeamName.php ./app/Actions/Jeststream/UpdateTeamName.php
# Models
cp vendor/laravel/jetstream/stubs/app/Models/Membership.php ./app/Models/Membership.php
cp vendor/laravel/jetstream/stubs/app/Models/Team.php ./app/Models/Team.php
cp vendor/laravel/jetstream/stubs/app/Models/TeamInvitation.php ./app/Models/TeamInvitation.php
sed -i.bak "s=#teams_use_placeholder=use Laravel\\\Jetstream\\\HasTeams;=g" app/Models/User.php
sed -i.bak "s/#teams_trait_placeholder/use HasTeams;/g" app/Models/User.php
# Policies
cp vendor/laravel/jetstream/stubs/app/Policies/TeamPolicy.php ./app/Policies/TeamPolicy.php
# Provider
cp vendor/laravel/jetstream/stubs/app/Providers/JetstreamWithTeamsServiceProvider.php ./app/Providers/JetstreamServiceProvider.php
# Views
cp vendor/laravel/jetstream/stubs/livewire/resources/views/teams resources/views/teams
cp vendor/laravel/jetstream/stubs/livewire/resources/views/teams resources/views/teams
cp vendor/laravel/jetstream/stubs/resources/views/emails resources/views/emails
# Tests
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/CreateTeamTest.php tests/Feature/CreateTeamTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/DeleteTeamTest.php tests/Feature/DeleteTeamTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/InviteTeamMemberTest.php tests/Feature/InviteTeamMemberTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/LeaveTeamTest.php tests/Feature/LeaveTeamTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/RemoveTeamMemberTest.php tests/Feature/RemoveTeamMemberTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/UpdateTeamMemberRoleTest.php tests/Feature/UpdateTeamMemberRoleTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/UpdateTeamName.php tests/Feature/UpdateTeamName.php
# Cleanup
./bin/cleanup.sh
echo "Teams installed!"
