# Request Tracker

Browser application that helps to create tickets with different categories, status and prioraty levels.

## Installation

Clone the repository 
```bash
git clone https://github.com/amanbolsyn/request-tracker.git
```

Go to the cloned directory
```bash
cd request-tracker/
```

Install all the dependencies 
```bash
composer install
npm install
```

Create local env file
```bash
copy .env.example .env
```

Run the composer
```bash
composer run dev
```

Create application key and migrate and seed db
```bash
php artisan key:generate
php artisan migrate:fresh --seed
```


## Application Endpoints 

### Ticket endpoints 
| Method | Endpoint | Description | Auth Required |
|:------:|------|------|:------:|
| GET | `/tickets` | view all tickets| Yes
| GET | `/ticket/create`| load create ticket view | Yes
| POST | `/ticket` | create new ticket | Yes
| GET | `/ticket/{id}/edit` | load ticket edit view | Yes
| PATCH | `/ticket/{id}` | edit a ticket | Yes
| DELETE | `/ticket/{id}` | delete a ticket | Yes
| GET | `/ticket/{id}` | view one ticket | Yes

### Regisration endpoints 
| Method | Endpoint | Description | Auth Required |
|:------:|------|------|:------:|
| GET | `/register` | load register view | No
| POST | `/register`| create new user | No

### Session endpoints 
| Method | Endpoint | Description | Auth Required |
|:------:|------|------|:------:|
| GET | `/login` | load login view| No
| POST | `/login`| create new session | No
| DELETE | `/logout` | delete a session | No

## Roles

| Permissions | User | Admin|
|------|:------:|:------:|
| View own tickets| Yes| No | 
| View all tickets| No | Yes | 
| Create new tickets| Yes | No | 
| Delete tickets| Yes | No | 
| Edit tickets| Yes | Yes(only status) | 
| Can register| Yes | No(only by factoring) | 

## Possible improvements 

+ adding good responsive design 
+ dark and light mode(super optional)
+ rate limiter
+ sorting tickets by date and title 
+ searching tickets by title, user, description
+ drag & drop tickets 
+ multiple ticket selection 
+ testing
+ checking for lint via github actions 
+ user profiles(statistics, editing user info, changing email and password)

## Bugs 

+ Ticket Factory generates ticket description that exceeds 100 char limit

## Resources 

+ [Laravel Docs](https://laravel.com/docs/12.x/installation)
+ [Laracast Tutorial](https://laracasts.com/series/30-days-to-learn-laravel-11)

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

## License

Cannot be used for commercial purposes.