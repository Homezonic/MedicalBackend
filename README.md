<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

a Laravel-based backend that will provide endpoints for the loading and submission of the above form. Your backend should have at least 2 endpoints - one GET endpoint to provide the laboratory tests (e.g. chest, cervical vertebrae, thoracic vertebrae) which will be displayed and one POST endpoint to handle the submitted data.

The submitted data should be sent in a structured email to email, subject should be “{username} medical data”. Include name at the footer of the submission email.
Endpoints have authentication. Only authenticated users have access to the endpoints. Implemented using the “Authorization: Bearer {token}” header.

You can create account to get bearer token, it is then stored to db bearer token field in users table

## System Requirement base on my Use case
MacOS
Mamp Pro (Apache and MySql w/ MailHog)
Postman Desktop
Sql sample located at the root folder "medical.sql"

## Code Repo: https://github.com/Homezonic/MedicalBackend
## Bearer Token:
can be obtained by Registering a new account as i have added bearer-token field to users table for retrieval.
but here is one for testing [ Homezonic ( 3|HkinvdbPnX0VN85xD25uVJhAPGAfdgeKyhi1kqEA ) ]
## Database:
My database port is 8889 because I used MampPro (please check your port and make changes in the .env file at the root to avoid unseen errors.) I have also created some pre data for this case, i two categories, (X-ray and Ultrasound, based on the interface given), on running migrations, you will have datas in the database already expect for user account, 
## Testing:
Run php artisan serve and also open new terminal and run npm run build to start vite.

## Mail:
I used MailHog which allows me to send mail locally. if you are to send the mail out, you have to change the mail settings in the .env file located at the root folder.

## To get lists of Test,
i did two implementations,
1. (GET) To get all the tests, which will also let you see the category it falls under.http://127.0.0.1:8000/api/labtests
2. (GET) To Get tests by category http://127.0.0.1:8000/api/labtests/x-ray  (where x-ray is a category, another available category is ultrasound)
3. (POST) To Post Data to Emailin my case, let's paint a scenario where the user wants to select more than one test in each category.
http://localhost:8000/api/medical-tests?tests[xray][]=Chest&tests[xray][]=Shoulder%20Joint&tests[ultrasound][]=Obstetric&tests[ultrasound][]=Pelvis&other_tests=CT%20Scan,%20MRI&patient_name=Joshua

It takes an input of an array then processes it and sends it as a mail to a predefined email. Below is a preview of the mail


## I also tried to implement Lighthouse-php GraphQL,
I have never worked on GraphQL but i did follow their documentation to some extent and i was able to implement their function on retrieving of the data using the below query

http://localhost:8000/graphql?query={labtests{id,testname,categoryname}}