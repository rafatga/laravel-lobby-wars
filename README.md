# Lobby Wars - TODO list
- The user can create many trials
- Both parties can choose many roles to sign (signatures) their contract and each time a role is clicked, it will be included in the contract input.
- At the bottom of each contract we must show how many points they have (sum of signatures). There is only one rule that must be applied when calculating the total points and is that when the contract has a KING signature the Validators signature does not count.
- After both parties defines their contract signatures the trial can start and the party with more points will win the trial
- At the bottom of the page the user will be able to see a list of trials



## Installation
- composer install

- Copy .env.example and name it .env

- Add database configuration

- Migrate 
```bash
php artisan migrate:fresh --seed
```


## Test
```bash
php vendor/bin/phpunit
```


## API Endpoints

Application has several enpoints

### Trial

<b>Trial endpoints.</b>

<i>Base URL:</i> ```/api/v1/trials```

<table border="1" width="100%">
    <thead>
        <tr>
            <th>METHOD</td>
            <th>ENDPOINT</td>
            <th>PARAMETERS GET</td>
            <th>RETURNS</td>
            <th>SUCCESS CODE</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>GET</td>
            <td><a href="#">/api/v1/trials</a></td>
            <td></td>
            <td><i>array of Trials</i></td>
            <td>200</td>
        </tr>
    </tbody>
</table>

Response example

```json
{
    "trials": [
        {
            "id": 1,
            "title": "Team A (7 points) has won to Team B (3 points)",
            "teams": [
              {
                "id": 3,
                "name": "Team A",
                "contracts": "VVVVVVV",
                "points": 7,
                "is_winner": true,
                "trial_id": 2,
                "created_at": "2020-03-17T15:45:06.000000Z",
                "updated_at": "2020-03-17T15:45:06.000000Z"
              },
              {
                "id": 4,
                "name": "Team B",
                "contracts": "K",
                "points": 5,
                "is_winner": null,
                "trial_id": 2,
                "created_at": "2020-03-17T15:45:06.000000Z",
                "updated_at": "2020-03-17T15:45:06.000000Z"
              }
            ]
        }
    ]
}
```

