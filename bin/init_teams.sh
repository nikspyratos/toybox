#!/bin/sh
set -e

# Config
sed -i.bak "s/#team_placeholder/Features::teams(['invitations' => true]),/g" config/jetstream.php
# Fortify
cp vendor/laravel/jetstream/stubs/app/Actions/Fortify/CreateNewUserWithTeams.php ./app/Actions/Fortify/CreateNewUser.php
# Jetstream
cp vendor/laravel/jetstream/stubs/app/Actions/Jetstream/AddTeamMember.php ./app/Actions/Jetstream/AddTeamMember.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jetstream/CreateTeam.php ./app/Actions/Jetstream/CreateTeam.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jetstream/DeleteTeam.php ./app/Actions/Jetstream/DeleteTeam.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jetstream/DeleteUserWithTeams.php ./app/Actions/Jetstream/DeleteUser.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jetstream/InviteTeamMember.php ./app/Actions/Jetstream/InviteTeamMember.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jetstream/RemoveTeamMember.php ./app/Actions/Jetstream/RemoveTeamMember.php
cp vendor/laravel/jetstream/stubs/app/Actions/Jetstream/UpdateTeamName.php ./app/Actions/Jetstream/UpdateTeamName.php
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
cp -r vendor/laravel/jetstream/stubs/livewire/resources/views/teams resources/views/teams
cp -r vendor/laravel/jetstream/stubs/resources/views/emails resources/views/emails
# Tests
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/CreateTeamTest.php tests/Feature/CreateTeamTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/DeleteTeamTest.php tests/Feature/DeleteTeamTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/InviteTeamMemberTest.php tests/Feature/InviteTeamMemberTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/LeaveTeamTest.php tests/Feature/LeaveTeamTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/RemoveTeamMemberTest.php tests/Feature/RemoveTeamMemberTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/UpdateTeamMemberRoleTest.php tests/Feature/UpdateTeamMemberRoleTest.php
cp vendor/laravel/jetstream/stubs/pest-tests/livewire/UpdateTeamNameTest.php tests/Feature/UpdateTeamNameTest.php
echo "Teams installed!"
