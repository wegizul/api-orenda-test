# api-orenda-test
api for assesment test recruitment web developer at Orenda 2022

Framework : Laravel v8.x
Database  : PostgreSQL 13
Web Server: Apache (use Laragoon)
Text Editor: Visual Studio Code

Installation :
- Download and instal laragoon
- Instal postgreSQL from laragoon
- Move this source code to folder 'laragoon/www'


API :

Register User
[ENDPOINT] /register
[POST] http://localhost:8000/api/register

Input Item
[ENDPOINT] /putin
[POST] http://localhost:8000/api/putin

Remove Item
[ENDPOINT] /takeout/:itemID
[POST] http://localhost:8000/api/takeout/1

List All Item
[ENDPOINT] /koli/common
[GET] http://localhost:8000/api/koli/common
