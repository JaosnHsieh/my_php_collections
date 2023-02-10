## Symfony cookie_life time settings on in memory user test

This is for testing how to set `cookie_lifetime: 86400` on PHP framework symfony v6.

## Start

`symfony server:start`

navigate to `http://localhost:8000/login` and login by `jason` and `mypassword`

navigate to `http://localhost:8000/lucky/number` you would see singed in user name, delete the cookie on browser and check again.

Change the `cookie_lifetime` in `config/packages/framework.yaml` would change the `expires` in `set_cookie` header.

## project create by

`symfony new my_project_directory --version="6.2.*" --webapp`

only these file changes

```
README.md
config/packages/security.yaml
framework.yaml
login.html.twig
routes.yaml
security.yaml
src/Controller/LuckyController.php
src/Controller/SecurityController.php
templates/security/login.html.twig
```

## version

Symfony CLI version 5.4.21
