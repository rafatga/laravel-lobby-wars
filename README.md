# Lobby Wars - TODO list
- The user can create many trials
- Both parties can choose many roles to sign (signatures) their contract and each time a role is clicked, it will be included in the contract input.
- At the bottom of each contract we must show how many points they have (sum of signatures). There is only one rule that must be applied when calculating the total points and is that when the contract has a KING signature the Validators signature does not count.
- After both parties defines their contract signatures the trial can start and the party with more points will win the trial
- At the bottom of the page the user will be able to see a list of trials



## Installation
- Copy .env.example and name it .env

- Add database configuration

- Migrate 
```bash
php artisan migrate:fresh --seed
```