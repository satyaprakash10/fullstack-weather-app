# Fullstack Challenge

## Project Summary 
- A fullstack weather forecasting site is built using Vuejs & Laravel framework
- For UI framework Tailwind CSS has beend installed.
- Externam API for weather forecasting information has been used to track and show the information about weather updated data.
- Pinia is configured to manage the state manipulation in terms of api integration
- all the weather information are updated in each 15 minutes of interval
- Pure CSS carousel slider is designed under home page section.
- All the Users lsit with the Available information about weather and forecasting are present in the `/users` route.


## UI Responsive Version:
- Mobile Version
- Ipad Version
- Desktop (Large Screen) Version



## To run the local dev environment:

### API
- Navigate to `/api` folder
- Ensure version docker installed is active on host
- Copy .env.example: `cp .env.example .env`
- Start docker containers `docker compose up` (add `-d` to run detached)
- Connect to container to run commands: `docker exec -it fullstack-challenge-app-1 bash`
  - Make sure you are in the `/var/www/html` path
  - Install php dependencies: `composer install`
  - Setup app key: `php artisan key:generate`
  - Migrate database: `php artisan migrate` 
  - php artisan schedule:work ("Only if requires to update the latest weather info in every 15 minutes. run this job command")
  - Seed database: `php artisan db:seed`
  - Run tests: `php artisan test`
- Visit api: `http://localhost`

### Frontend
- Navigate to `/frontend` folder
- Ensure nodejs v18 is active on host
- Install javascript dependencies: `npm install`
- Run frontend: `npm run dev`
- Visit frontend: `http://localhost:5173`
