# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Lumen REST API with PASSPORT authentication(https://github.com/dusterio/lumen-passport)  and Guzzle(https://docs.guzzlephp.org/en/stable/quickstart.html) 
Databes is SQlLite
migrations are exists
run migrations

How to Use App:
CLI commands:

App\Models\Post::factory()->count(15)->create()</br>
App\Models\User::factory()->count(5)->create()

REST:

User login https://4pksg.ciroue.com/api/login</br>
GET/ posts: https://4pksg.ciroue.com/api/posts</br>
PUT/ posts: https://4pksg.ciroue.com/api/posts/10</br>
POST/ Post: https://4pksg.ciroue.com/api/posts</br>
DELETE/ Post: https://4pksg.ciroue.com/api/posts/10</br>
Oauth login: https://4pksg.ciroue.com/v1/oauth/token</br>
Register: https://4pksg.ciroue.com/api/register</br>
Logout: https://4pksg.ciroue.com/api/logout</br>
